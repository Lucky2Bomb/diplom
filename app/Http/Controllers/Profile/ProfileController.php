<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Position;
use App\Models\Publications\PublicationNotification;
use App\Models\User;
use App\Models\UserSubscriber;
use App\Services\PublicationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected PublicationService $publicationService;

    public function __construct(PublicationService $publicationService)
    {
        $this->publicationService = $publicationService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Auth::user();
        $publications = $profile->publications()->select(
            'id',
            'slug',
            'title',
            'preview_image',
            'preview_text',
            'published_at',
            'user_id',
            'is_published'
        )
            ->where('is_published', true)
            ->orderByDesc('created_at')->paginate(10);

        $notifications = PublicationNotification::where('user_id', '=', $profile->id)->where('is_checked', '=', 0)->orderByDesc('id')->take(50)->get();

        $count_new_notifications = 0;
        foreach ($notifications as $notification) {
            $count_new_notifications += !$notification->is_checked ? 1 : 0;
        }
        $subscriptions = UserSubscriber::where('subscriber_id', '=', $profile->id)->get();

        $count_subscribers = UserSubscriber::where('user_id', '=', $profile->id)->get()->count();
        return view('profile.index', [
            'profile'                   => $profile,
            'another'                   => false,
            'publications'              => $publications,
            'notifications'             => $notifications,
            'count_new_notifications'   => $count_new_notifications,
            'subscriptions'             => $subscriptions,
            'count_subscribers'         => $count_subscribers
        ]);
    }
    /**
     * Check all notifications
     *
     * @return \Illuminate\Http\Response
     */
    public function notifications_check()
    {
        $notifications = PublicationNotification::where('user_id', '=', Auth::user()->id)->get();
        foreach ($notifications as $notification) {
            $notification->is_checked = true;
            $notification->save();
        }

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id == Auth::user()->id) {
            return redirect()->route('profile');
        }


        $profile = User::select(
            'id',
            'name',
            'surname',
            'patronymic',
            'slug',
            'login',
            'email',
            'avatar',
            'header_background_image',
            'group_id',
            'vk',
            'ok',
            'facebook',
            'telegram',
            'phone_number',
            'position_name',
            'created_at'
        )->findOrFail($id);

        $publications = $profile->publications()->select(
            'id',
            'slug',
            'title',
            'preview_image',
            'preview_text',
            'published_at',
            'user_id',
            'is_published'
        )
            ->where('is_published', true)
            ->orderByDesc('created_at')->paginate(10);

        $subscribe = UserSubscriber::where('user_id', '=', $id)->where('subscriber_id', '=', Auth::user()->id)->get()->first();
        $count_subscribers = UserSubscriber::where('user_id', '=', $profile->id)->get()->count();

        return view('profile.index', [
            'profile'           => $profile,
            'another'           => true,
            'publications'      => $publications,
            'subscribe'         => $subscribe,
            'count_subscribers' => $count_subscribers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = null)
    {
        $user = auth()->user();
        $positions = Position::all();
        return view('profile.settings', ['profile' => $user, 'positions' => $positions]);
    }

    /**
     * subscribe to another user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function subscribe($id)
    {
        $subscriber = Auth::user();
        $subscribe = UserSubscriber::where('user_id', '=', $id)->where('subscriber_id', '=', $subscriber->id)->get()->first();
        if (!isset($subscribe)) {
            UserSubscriber::create([
                'user_id'       => $id,
                'subscriber_id' => $subscriber->id,
            ]);
        }
        return redirect()->back();
    }

    /**
     * unsubscribe to another user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unsubscribe($id)
    {
        $subscriber = Auth::user();
        $subscribe = UserSubscriber::where('user_id', '=', $id)->where('subscriber_id', '=', $subscriber->id)->get()->first();
        if (isset($subscribe)) {
            $subscribe->delete();
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $id = null)
    {
        $user = Auth::user();
        $parameters = $request->all();
        foreach ($parameters as $key => $parameter) {
            if ($key == 'avatar') {
                $this->publicationService->uploadImage($user, 'avatar');
                continue;
            }
            if ($key == 'header_background_image') {
                $this->publicationService->uploadImage($user, 'header_background_image');
                continue;
            }
            if ($key && $key != '_method' && $key != "_token") {
                $user[$key] = $parameter;
            }
        }
        $user->save();
        return redirect()->route('profile.edit')->with('status', 'Данные профиля изменены!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

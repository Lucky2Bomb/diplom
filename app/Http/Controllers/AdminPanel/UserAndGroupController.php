<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Group\GroupAndUsersRequest;
use App\Models\Groups\Group;
use App\Models\User;
use Illuminate\Http\Request;

class UserAndGroupController extends Controller
{
    /**
     * Search of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if (!$request->search || strlen($request->search) < 2) {
            return $this->index();
        }
        $search = $request->search;
        $searchArray = explode(' ', $search);
        $users = User::orwhere(function ($query) use ($searchArray) {
            for ($i = 0; $i < count($searchArray); $i++) {
                $query->orWhere('name', 'LIKE', '%' . $searchArray[$i] . '%');
            }
        })
            ->orwhere(function ($query) use ($searchArray) {
                for ($i = 0; $i < count($searchArray); $i++) {
                    $query->orWhere('surname', 'LIKE', '%' . $searchArray[$i] . '%');
                }
            })
            ->orwhere(function ($query) use ($searchArray) {
                for ($i = 0; $i < count($searchArray); $i++) {
                    $query->orWhere('patronymic', 'LIKE', '%' . $searchArray[$i] . '%');
                }
            })
            ->paginate(20);
        $groups = Group::orderBy('id')->get();
        return view('admin-panel.user-and-group', compact('users', 'groups'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id')->paginate(20);
        $groups = Group::orderBy('id')->get();
        return view('admin-panel.user-and-group', compact('users', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(__METHOD__);
    }

    /**
     * Add users[] in group
     *
     * @param  GroupAndUsersRequest $request id(this is group id), users_id[]
     * @return \Illuminate\Http\Response
     */
    public function store(GroupAndUsersRequest $request)
    {
        $users = User::select('id', 'group_id')->whereIn('id', $request->users_id);
        if ($request->id == 0) {
            foreach ($users->get() as $user) {
                $user->group_id = null;
                $user->save();
            }
        } else {
            foreach ($users->get() as $user) {
                $user->group_id = $request->id;
                $user->save();
            }
        }
        return redirect()->back()->with('status', 'Пользователи были добавлены в группу');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd(__METHOD__);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd(__METHOD__);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd(__METHOD__);
    }
}

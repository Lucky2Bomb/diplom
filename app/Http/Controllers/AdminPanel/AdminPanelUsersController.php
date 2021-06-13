<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminPanel\AdminPanelUserEditRequest;
use App\Models\Position;
use App\Models\User;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class AdminPanelUsersController extends Controller
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
            ->orwhere(function ($query) use ($searchArray) {
                for ($i = 0; $i < count($searchArray); $i++) {
                    $query->orWhere('email', 'LIKE', '%' . $searchArray[$i] . '%');
                }
            })
            ->orwhere(function ($query) use ($searchArray) {
                for ($i = 0; $i < count($searchArray); $i++) {
                    $query->orWhere('position_name', 'LIKE', '%' . $searchArray[$i] . '%');
                }
            })
            ->orwhere(function ($query) use ($searchArray) {
                for ($i = 0; $i < count($searchArray); $i++) {
                    $query->orWhere('id', 'LIKE', '%' . $searchArray[$i] . '%');
                }
            })
            ->paginate(50);
        return view('admin-panel.users', compact('users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select()->paginate(50);
        return view('admin-panel.users', compact('users'));
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
        $user = User::find($id);
        $positions = Position::select()->get();
        $roles = Role::select()->get();
        $user_roles = $user->getRoleNames()->toArray();
        return view('admin-panel.user-show', compact('user', 'positions', 'roles', 'user_roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AdminPanelUserEditRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPanelUserEditRequest $request, $id)
    {
        $user = User::find($id);
        $req_input = $request->input();

        if (isset($req_input['name'])) {
            $user->name = $req_input['name'];
            $user->save();

        } elseif (isset($req_input['surname'])) {

            $user->surname = $req_input['surname'];

        } elseif (isset($req_input['patronymic'])) {

            $user->patronymic = $req_input['patronymic'];

        } elseif (isset($req_input['email'])) {

            $user->email = $req_input['email'];

        } elseif (isset($req_input['position_name'])) {

            $user->position_name = $req_input['position_name'];

        } elseif (isset($req_input['password'])) {

            $user->password = Hash::make($req_input['password']);
            $user->remember_token = Str::random(60);

        } elseif (isset($req_input['roles'])) {

            $user->syncRoles($req_input['roles']);

        }
        $user->save();
        return redirect()->back()->with('status', 'данные изменены');
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

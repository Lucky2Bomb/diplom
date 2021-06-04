<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
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
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

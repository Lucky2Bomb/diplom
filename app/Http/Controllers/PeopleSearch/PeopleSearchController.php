<?php

namespace App\Http\Controllers\PeopleSearch;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PeopleSearchController extends Controller
{

    /**
     * Search of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if (!$request->search || strlen($request->search) < 2) {
            return back();
        }
        $search = $request->search;
        $searchArray = explode(' ', $search);
        $users = User::
        orwhere(function($query) use ($searchArray) {
            for ($i = 0; $i < count($searchArray); $i++) {
                $query->orWhere('name', 'LIKE', '%' . $searchArray[$i] . '%');
            }
        })
        ->orwhere(function($query) use ($searchArray) {
            for ($i = 0; $i < count($searchArray); $i++) {
                $query->orWhere('surname', 'LIKE', '%' . $searchArray[$i] . '%');
            }
        })
        ->orwhere(function($query) use ($searchArray) {
            for ($i = 0; $i < count($searchArray); $i++) {
                $query->orWhere('patronymic', 'LIKE', '%' . $searchArray[$i] . '%');
            }
        })
        ->paginate(40);
        return view('people-search.index', compact('users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id')->paginate(40);
        return view('people-search.index', compact('users'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(__METHOD__);
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

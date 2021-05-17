<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Models\Groups\Group;
use DB;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Groups;

class GroupController extends Controller
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
        $groups = Group::where('name', 'LIKE', "%{$search}%")->orderByDesc('id')->paginate(20);
        return view('group.index', ['groups' => $groups]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::orderByDesc('id')->paginate(20);
        return view('group.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group                      = new Group();
        $group_form_of_studyings    = DB::table('group_form_of_studyings')->get();
        $universities               = DB::table('group_universities')->get();
        $faculties                  = DB::table('group_faculties')->get();
        $specialties                = DB::table('group_specialties')->get();
        $isCreate                   = true;
        return view('group.edit', compact('group', 'group_form_of_studyings', 'universities', 'faculties', 'specialties', 'isCreate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupRequest $request)
    {
        $newGroup = Group::create([
            'name'                          => $request->name,
            'start_date'                    => $request->start_date,
            'end_date'                      => $request->end_date,

            'is_closed'                     => $request->is_closed,

            'group_form_of_studying_type'   => $request->group_form_of_studying_type,
            'university_name'               => $request->university_name,
            'faculty_name'                  => $request->faculty_name,
            'specialty_name'                => $request->specialty_name,
        ]);
        return redirect()->route('group.show', ['id' => $newGroup->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::findOrFail($id);
        $groupDate = $group->start_date ? date('Y', strtotime($group->start_date)) . ' - ' . date('Y', strtotime($group->end_date)) : "";
        return view('group.show', ['group' => $group, 'groupDate' => $groupDate]);
    }

    /**
     * join group
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function join($id)
    {
        $user = auth()->user();
        $group = Group::findOrFail($id);
        $user->group_id = $group->id;
        $user->save();
        return redirect()->route('profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group                      = Group::findOrFail($id);
        $group_form_of_studyings    = DB::table('group_form_of_studyings')->get();
        $universities               = DB::table('group_universities')->get();
        $faculties                  = DB::table('group_faculties')->get();
        $specialties                = DB::table('group_specialties')->get();
        $isCreate                   = false;
        return view('group.edit', compact('group', 'group_form_of_studyings', 'universities', 'faculties', 'specialties', 'isCreate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GroupRequest $request, $id)
    {
        $group                      = Group::findOrFail($id);
        $group->update([
            'name'                          => $request->name,
            'start_date'                    => $request->start_date,
            'end_date'                      => $request->end_date,

            'is_closed'                     => $request->is_closed,

            'group_form_of_studying_type'   => $request->group_form_of_studying_type,
            'university_name'               => $request->university_name,
            'faculty_name'                  => $request->faculty_name,
            'specialty_name'                => $request->specialty_name,
        ]);
        return redirect()->route('group.show', ['id' => $group->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::destroy($id);
        return redirect()->route('group');
    }
}

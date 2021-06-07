<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\PublicationComplaintRequest;
use App\Models\Publications\PublicationComplaint;
use Illuminate\Http\Request;

class AdminPanelPublicationComplaintsController extends Controller
{
    /**
     * compaint check
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function check(PublicationComplaintRequest $request)
    {
        // dd(__METHOD__, $request->id);
        $complaint = PublicationComplaint::find($request->id);
        $complaint->is_checked = true;
        $complaint->save();
        return redirect()->back()->with('status', 'жалоба №' . $complaint->id .' рассмотрена.');
    }

    /**
     * Display a not checked complaints
     *
     * @return \Illuminate\Http\Response
     */
    public function index_not_checked() {
        $complaints = PublicationComplaint::where('is_checked', '=', false)->orderByDesc('id')->paginate(50);
        return view('admin-panel.complaints', compact('complaints'));
    }

    /**
     * Display a all complaints
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaints = PublicationComplaint::where('is_checked', '=', true)->orderByDesc('id')->paginate(50);
        return view('admin-panel.complaints', compact('complaints'));
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

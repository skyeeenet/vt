<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Http\Controllers\Controller;
use App\Models\Conference_info;
use Illuminate\Http\Request;

class ConferenceInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Conference_info  $conference_info
     * @return \Illuminate\Http\Response
     */
    public function show(Conference_info $conference_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conference_info  $conference_info
     * @return \Illuminate\Http\Response
     */
    public function edit(Conference_info $conference_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Conference_info $conference
     * @return void
     */
    public function update(Request $request, Conference_info $conference)
    {

        $conference->update([
            'place' => $request->input('place'),
            'time' => $request->input('time'),
            'chairman' => $request->input('chairman'),
            'secretary' => $request->input('secretary'),
            'duration' => $request->input('duration'),
            'show_reg' => $request->input('show')
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conference_info  $conference_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conference_info $conference_info)
    {
        //
    }
}

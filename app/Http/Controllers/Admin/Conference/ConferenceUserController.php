<?php

namespace App\Http\Controllers\Admin\Conference;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Models\Conference_user;
use Illuminate\Http\Request;

class ConferenceUserController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Conference $conference
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Conference $conference)
    {
        $user = new Conference_user([
            'theme' => $request->input('theme'),
            'speaker' => $request->input('speaker'),
            'head' => $request->input('head')
        ]);

        $conference->users()->save($user);

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Conference_user $conference
     * @return void
     */
    public function update(Request $request, Conference_user $conference)
    {
        $conference->update([
            'head' => $request->input('head'),
            'speaker' => $request->input('speaker'),
            'theme' => $request->input('theme')
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Conference_user $conference
     * @return void
     * @throws \Exception
     */
    public function destroy(Conference_user $conference)
    {
        $conference->delete();

        return redirect()->back();
    }
}

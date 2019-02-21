<?php

namespace App\Http\Controllers\Admin\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\OccupationType;
use App\Models\Schedule;
use App\Models\Subject;
use App\Models\Week;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index() {

        $groups = Group::select('id','value')->get();


        return view('admin.schedule.index', compact('groups'));
    }

    public function show(Request $request) {

        $group_id = $request->id;
        //TODO Проверка request

        //$schedule = Schedule::select('id', 'group_id', 'subject_id', 'week_id')->where('group_id', $group_id)->get();

        $schedule = Schedule::with(['group', 'subject', 'week', 'occupation'])->where('group_id', $group_id)->get();

        return $schedule;
    }

    public function edit(Schedule $schedule) {

        $weeks = Week::select('id','value')->get();
        $subjects = Subject::select('id', 'value')->get();
        $groups = Group::select('id', 'value')->get();
        $occupations = OccupationType::select('id', 'value')->get();

        return view('admin.schedule.edit', compact('schedule', 'weeks', 'subjects', 'groups', 'occupations'));
    }

    public function update(Schedule $schedule, Request $request) {

        $schedule->update([

           'week_id' => $request->input('week_id'),
           'group_id' => $request->input('group_id'),
           'subject_id' => $request->input('subject_id'),
            'occupation_type_id' => $request->input('occupation-id'),
           'number' => $request->input('number'),
           'day' => $request->input('day')
        ]);

        return redirect(route('admin.schedule'));
    }

    public function create() {

        $groups = Group::select('id', 'value')->get();
        $subjects = Subject::select('id', 'value')->get();
        $weeks = Week::select('id', 'value')->get();
        $occupations = OccupationType::select('id', 'value')->get();

        return view('admin.schedule.create', compact('groups', 'subjects', 'weeks', 'occupations'));
    }

    public function store(Request $request) {

        Schedule::updateOrCreate([
            'group_id' => $request->input('group-id'),
            'subject_id' => $request->input('subject-id'),
            'week_id' => $request->input('week-id'),
            'number' => $request->input('number'),
            'occupation_type_id' => $request->input('occupation-id'),
            'day' => $request->input('day')],

            ['group_id' => $request->input('group-id'),
            'subject_id' => $request->input('subject-id'),
            'week_id' => $request->input('week-id'),
            'occupation_type_id' => $request->input('occupation-id'),
            'number' => $request->input('number'),
            'day' => $request->input('day')
            ]);

        return redirect()->back();
    }

    public function destroy(Schedule $schedule) {

        $schedule->delete();

        return redirect()->back();
    }
}

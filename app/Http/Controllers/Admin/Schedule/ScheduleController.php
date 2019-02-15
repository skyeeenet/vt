<?php

namespace App\Http\Controllers\Admin\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Schedule;
use App\Models\Subject;
use App\Models\Week;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

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

        $schedule = Schedule::with(['group', 'subject', 'week'])->where('group_id', $group_id)->get();

        return $schedule;
    }

    public function edit(Schedule $schedule) {

        $weeks = Week::select('id','value')->get();
        $subjects = Subject::select('id', 'value')->get();
        $groups = Group::select('id', 'value')->get();
        return view('admin.schedule.edit', compact('schedule', 'weeks', 'subjects', 'groups'));
    }

    public function update(Schedule $schedule, Request $request) {

        $schedule->update([

           'week_id' => $request->input('week_id'),
           'group_id' => $request->input('group_id'),
           'subject_id' => $request->input('subject_id'),
           'number' => $request->input('number')
        ]);

        return redirect(route('admin.schedule'));
    }

    public function create() {

        $groups = Group::select('id', 'value')->get();
        $subjects = Subject::select('id', 'value')->get();
        $weeks = Week::select('id', 'value')->get();

        return view('admin.schedule.create', compact('groups', 'subjects', 'weeks'));
    }

    public function store(Request $request) {

        Schedule::updateOrCreate([
            'group_id' => $request->input('group-id'),
            'subject_id' => $request->input('subject-id'),
            'week_id' => $request->input('week-id'),
            'number' => $request->input('number')],

            ['group_id' => $request->input('group-id'),
            'subject_id' => $request->input('subject-id'),
            'week_id' => $request->input('week-id'),
            'number' => $request->input('number')
            ]);

        return redirect()->back();
    }

    public function destroy(Schedule $schedule) {

        $schedule->delete();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\Lecturer;
use App\Models\Post;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function show(Request $request) {

        $day = $request->input('day');
        $week = $request->input('week');
        $group = $request->input('group');

        $db_select_result = Schedule::where([
            'day' => $day,
            'week_id' => $week,
            'group_id' => $group
        ])->with('occupation', 'subject', 'week', 'group')->orderBy('number')->get();

        foreach ($db_select_result as $item) {

            $lecturer_id = $item['lecturer_id'];

            $lecturer = Lecturer::whereId($lecturer_id)->with('user')->first();

            $lecturer_name = $lecturer['user']['name'];
            $lecturer_degree = $lecturer['position'];

            unset($item['lecturer_id']);

            $item['lecturer_name'] = $lecturer_name;
            $item['lecturer_degree'] = $lecturer_degree;
        }

        return $db_select_result;
    }
}

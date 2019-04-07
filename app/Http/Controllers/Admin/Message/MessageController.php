<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Message;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $users = User::select('id', 'name')->get();
        $messages = Message::where('from', $user->id)->orWhere('to', $user->id)->latest()->get();

        return view('public.messages', compact('messages', 'users'));
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

        $this->validate($request, [
            'user' => 'required',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ]);

        if ($request->input('user') != Auth::id()) {

            $message = new Message([
                'from' => Auth::id(),
                'to' => $request->input('user'),
                'message' => $request->input('message')
            ]);

            $message->save();
        }

        return redirect()->back();
    }

    public function feedback(Request $request) {

        $this->validate($request, [
            'conf' => 'required',
            'text' => 'required',
            'captcha' => 'required|captcha'
        ]);

        $admin_role_id = Role::where('value', 'Admin')->first()['id'];

        $admin_id = User::where('role_id', $admin_role_id)->first()['id'];

        $conf = $request->input('conf');

        $result_text = $conf.'\n'.$request->input('text');

        $message = new Message([
            'from' => Auth::id(),
            'to' => $admin_id,
            'message' => $result_text
        ]);

        $message->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $user_id = Auth::id();

        if($message->userFrom['id'] == $user_id || $message->userTo['id'] == $user_id) {

            $message->delete();

            return redirect()->back();
        } else {

            return response('Запрещено',403);
        }
    }
}

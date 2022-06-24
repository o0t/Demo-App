<?php

namespace App\Http\Controllers;

use App\Models\SenderMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SenderController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('App.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = [
            'Cooking' => __('Cooking'),
            'Programming' => __('Programming'),
            'Football' => __('Football'),
            'news' => __('news'),
            'other' => __('other'),
        ];

        return view('App.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:30',
            'type' => 'string|required',
            'sender' => 'required|string|max:255|min:10',
        ],
        [
            'title.required' => __('Please write the title'),
            'sender.required' => __('Please type the message field'),
            'title.max' => __('The title may not be greater than 30 characters'),
            'sender.max' => __('The sender may not be greater than 255 characters'),
            'sender.min' => __('The sender must be at least 10 characters'),
        ]);

        $user_id = Auth::user()->id;
        $title = $request->input('title');
        $type = $request->input('type');
        $senderMessage = $request->input('sender');

        $sender = new SenderMessage();
        $sender->user_id = $user_id;
        $sender->title = $title;
        $sender->type = $type;
        $sender->sender_message = $senderMessage;
        $sender->save();

        return redirect()->back()->with('status',__('The message has been posted'));

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

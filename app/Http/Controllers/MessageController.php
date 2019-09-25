<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Validation\Rule;
use App\Message;
use Session;
// use App\Http\Controllers\Controller;
use Mail;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin')->except('store');
    }
    
    public function index()
    {
        $messages = Message::orderBy('id', 'desc')->paginate(10);
        return view('admins.messages.index')->withMessages($messages)->withStatus('1');
    }

    public function unread()
    {
        $messages = Message::orderBy('id', 'desc')->where('status',0)->paginate(10);
        return view('admins.messages.index')->withMessages($messages)->withStatus('-1');
    }

    public function view($id){
        $message = Message::find($id);
        $message->status = 1;
        $message->save();
        return view('admins.messages.view')->withMessage($message);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
                'name'         => 'required',
                'phone'       => 'required|max:255',
                'email' => 'required|email',
                'wechat' => 'max:255',
                'area' => 'max:255',
                'topic' => 'required | max:255',
                'message' => 'max:511'
        ));
        // store in the database


        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->wechat = $request->wechat;
        $message->area = $request->area;
        $message->topic = $request->topic  ;
        $message->message = $request->message;
        $message->save();
        Session::flash('success', 'Your message has been successfully sent!');
        self::sendEmail($message);
        return back();    }

    private function sendEmail($message){
        $data = array(
            'name' => $message->name,
            'email' => $message->email,
            'phone' => $message->phone,
            'wechat' => $message->wechat,
            'area' => $message->area,
            'topic' => $message->topic,
            'messages' => $message->message
        );

        Mail::send('admins.messages.email', $data ,function($message) use ($data){
            $message->from($data['email']);
            $message->to('jklsh0371@gmail.com');
            $message->subject('Prosperous Education');
        });
    }

}

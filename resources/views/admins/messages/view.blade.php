@extends('admins.app')
    <!-- Begin Page Content -->
@section('content')
  <div class="container">
    <div class="row">
      <span> Name: </span>
      <span> {{$message->name}}</span>
    </div>

    <div class="row">
      <span> Email: </span>
      <span> {{$message->email}}</span>
    </div>

    <div class="row">
      <span> Phone: </span>
      <span> {{$message->phone}}</span>
    </div>
    <div class="row">
      <span> Wechat: </span>
      <span> {{$message->wechat}}</span>
    </div>
    <div class="row">
      <span> Area: </span>
      <span> {{$message->area}}</span>
    </div>
    <div class="row">
      <span> Topic: </span>
      <span> {{$message->topic}}</span>
    </div>

    <div class="row">
      <span> Message: </span>
      <span> {{$message->message}}</span>
    </div>
   
    <hr>
    <div class="row">
      <a class="btn btn-primary btn-h1-spacing" href="{{url('admin/messages')}}">Go back</a>
    </div>
  </div>

@endsection
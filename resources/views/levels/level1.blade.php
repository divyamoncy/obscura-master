@extends('layouts.app')

@section('content')

<!--<div class="page-header text-center">
    <h1>Welcome {{ $user->name }}</h1>
</div> -->
<link href="{{ asset('css/lev1.css') }}" rel="stylesheet">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2 id="rhyme" class="text-center">
            You take the blue pill, the story ends.<br>
            You wake up in your bed and believe what you want to believe.<br>
            You take the red pill, you stay in Wonderland,<br>
            and I show you how deep the rabbit hole goes.
        </h2>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xs-6">
        <a href="/game/red">
            <img src="{{ asset('img/p1.png') }}" class="img-responsive">
        </a> 
    </div>
    <div class="col-md-6 col-xs-6">
        <a href="/game/blue">
            <img src="{{ asset('img/p2.png') }}" class="img-responsive" >
        </a> 
    </div>

</div>



@endsection

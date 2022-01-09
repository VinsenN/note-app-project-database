@extends('layouts')

@section('content')

<div class="content">
    <div class="slogan unselectable">
        <h1 id="main-slogan">Say goodbye to papers</h1>
        <h3 id="synced-notes">All your notes, synced on all your devices</h3>
    </div>

    <a href = "/dashboard" class="start-button">
        <button type="button" class="btn btn-success" style="font-weight: 700;
            font-size: 1.5vw;
            text-align: center;
            width: 10vw;"
        >Start Now</button>
    </a>

    <div class="sticky-notes unselectable">
        <img src="{{URL::asset('assets/image/sticky_1.png')}}" class="notes"/>
        <img src="{{URL::asset('assets/image/sticky_2.png')}}" class="notes"/>
        <img src="{{URL::asset('assets/image/sticky_3.png')}}" class="notes"/>
    </div>
</div>

@endsection

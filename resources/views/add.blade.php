@extends('layouts')

@section('content')


<div class="container col-8 my-4">

    <div>
        <a href="/dashboard" type="button" class="btn btn-outline-primary" style="padding-top: 3px; padding-bottom: 3px; padding-left: 10px; padding-right: 10px;">
            <i class="icon-arrow-left d-inline-block"style="font-size: 11px" ></i>
            <cst-ft style="font-size: 14px" >Back</cst-ft>
        </a>
    </div>
    <br>

    <form action="/add/process" method="post">
        {{ csrf_field() }}
        <input name="title" type="text" class="form-control mb-2" placeholder="Insert title" style="box-shadow: 0 0 5.3px rgba(142, 147, 157, 0.85);">
        <textarea name="content" rows="18" class="form-control mb-2" style="box-shadow: 0 0 5.3px rgba(142, 147, 157, 0.85);"></textarea>
        <div class="d-flex justify-content-between">
            <div> <b>
                @if ($errors -> any())
                <div class="text-danger">
                    @foreach ($errors -> all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </div>
                @else
                <div class="text-success">
                    {{ session('status') }}
                </div>
                @endif
            </b></div>
            <div>
                <input type="submit" class="btn-lg btn-sm btn-primary ms-4 float-end" value="Add new note">
            </div>
        </div>
    </form>

</div>

@endsection

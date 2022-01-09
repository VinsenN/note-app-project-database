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
    <form method="post">
        {{ csrf_field() }}
        <input name="title" type="text" class="form-control mb-2" placeholder="Insert Title" value="{{ $note -> title }}">
        <textarea name="content" rows="18" class="form-control mb-2">{{ $note -> content }}</textarea>
        <div class="d-flex justify-content-between">
            <div>
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
            </div>
            <div>
                <input type="submit" class="btn-lg btn-sm btn-primary ms-4 float-end" formaction="/update/{{ $note -> id }}/process" value="Update">
                <input type="submit" class="btn-lg btn-sm btn-danger ms-4 float-end" formaction="/delete/{{ $note -> id }}/process" value="Delete">
            </div>
        </div>
    </form>
</div>

@endsection

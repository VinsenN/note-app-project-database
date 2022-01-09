@extends('layouts')

@section('content')

<div class="container col-8 my-4">
    <a type="button" href="/add" class="btn btn-primary mb-4">
        Add Notes
    </a>

    <div class="row mb-4">
        @foreach($notes as $note)
            <div class="col-sm-4">
                <div class="card mb-5 bg-white rounded" style="box-shadow: 0 0 15px rgba(142, 147, 157, 0.85);">
                    <div class="card-body" style="transform: rotate(0);">
                        <div class="card-title fw-bold" style="font-size:14px">
                            {{ Str::of($note -> title) -> limit(60)}}
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted"
                            style="font-size:13px">
                            {{ date('M j, Y, H:i', strtotime($note -> updated_at)) }}
                        </h6>

                        <hr>
                        <div class="card-text">
                            {{ Str::of($note -> content) -> limit(90) }}
                        </div>
                        <a href = "/update/{{ $note -> id }}" class="stretched-link"></a>
                    </div>

                    <br>

                    <a href = "/trash/{{ $note -> id }}/process"> <b>
                        <form method = "post" id = "ic-bt" class = "icon-trash" style = " font-size: 15px; margin-bottom: 10px; position: absolute; bottom: 0px; right: 16px;">
                        </form>
                    </b></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

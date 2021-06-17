@extends('layouts.app')

@section('content')


    <div class="container p-3">
        @if(session('status'))
            <div class="alert alert-success mt-2" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if($notes->count())
            <div class="row">
                @foreach($notes as $note)
                    <div class="col-lg-4 col-md-6">
                        <div class="card my-3">
                            <div class="card-body d-flex justify-content-between">
                                <div style="float: left">
                                    <h6 class="card-title">{{ $note->title }}</h6>
                                    <p class="card-subtitle mb-2 text-muted">
                                        Modified {{ $note->updated_at->diffForHumans() }}</p>
                                </div>
                                <div class="d-flex justify-content-around" style="width: 50px">

                                    <form action="{{ route('notes.editNote', $note) }}" method="post">
                                        @csrf
                                        @method('PUT')

                                        <button type="submit" class="btn btn-primary btn-sm mr-2" ><i
                                                class="fa fa-edit"></i></button>
                                    </form>
                                    <form action="{{ route('notes.deleteNote', $note) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mr-2" ><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                @php
                                    $deadl = \Illuminate\Support\Carbon::parse($note->deadline)->diffForHumans();
                                @endphp

                                @if(!\Illuminate\Support\Str::endsWith($deadl,'ago'))
                                    <li class="list-group-item">
                                        Time remaining: <b class="text-success">{{ $deadl }}</b>
                                    </li>
                                @else
                                    <li class="list-group-item">
                                        Deadline missed: <b class="text-danger">{{ $deadl }} </b>
                                    </li>
                                @endif

                                <li class="list-group-item">

                                    Category: @switch($note->category)
                                        @case(1)
                                        Work
                                        @break
                                        @case(2)
                                        Home
                                        @break
                                        @case(3)
                                        Study
                                        @break
                                        @case(4)
                                        Personal
                                        @break
                                        @default
                                        Uncategorized
                                    @endswitch

                                </li>
                                <li class="list-group-item @switch($note->priority)
                                @case(1)
                                    text-danger @break
                                @case(2)
                                    text-warning @break
                                @case(3)
                                    text-info @break
                                @case(4)
                                    text-primary @break
                                @case(5)
                                    text-success @break
                                @endswitch

                                    ">Priority: {{ $note->priority }}</li>
                                <li class="list-group-item">{{ $note->comment }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $notes->links("pagination::bootstrap-4") }}
        @else

            <h4 class="mx-auto">No notes added. To add new todo goto <b>ToDos > New</b></h4>

        @endif

    </div>

@endsection

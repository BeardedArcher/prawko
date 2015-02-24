@extends('app')

@section('content')
    @foreach ($questions as $question)
        <p>
            {{ $question->question }}
            {{ $question->answer_a }}
            {{ $question->answer_b }}
            {{ $question->answer_c }}
        </p>
    @endforeach
@endsection
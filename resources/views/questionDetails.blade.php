@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-8 margin-center col-md-offset-2">

            <p><img src="images/{{ $question->picture }}"></p>
            
            <div class="panel panel-default">
                <div class="panel-heading question-panel">{{ $question->question }}</div>
                @if ($question instanceof App\QuestionsAbc)
                    <div class="list-group">
                        <!-- w miejsce 12 nalezy wstawic odpowiednie id. W miejsce data-correct nalezy wstawic poprawna odpowiedz -->
                        <a href="#" class="list-group-item q12" data-id='1' data-correct='{{ $question->correct_answer == 1 ? 'true' : 'false' }}'>{{ $question->answer_a }}</a>
                        <a href="#" class="list-group-item q12" data-id='2' data-correct='{{ $question->correct_answer == 2 ? 'true' : 'false' }}'>{{ $question->answer_b }}</a>
                        <a href="#" class="list-group-item q12" data-id='3' data-correct='{{ $question->correct_answer == 3 ? 'true' : 'false' }}'>{{ $question->answer_c }}</a>
                    </div>
                @elseif ($question instanceof App\QuestionsYesNo)
                    <div class="list-group">
                        <a href="#" class="list-group-item q12" data-id='1' data-correct='{{ $question->correct_answer == 1 ? 'true' : 'false' }}'>Tak</a>
                        <a href="#" class="list-group-item q12" data-id='2' data-correct='{{ $question->correct_answer == 2 ? 'true' : 'false' }}'>Nie</a>
                    </div>
                @endif
            </div>

            <!--<div class='points'><span class='points-1'>12</span><span class='points-separator'>/</span><span class='points-2'>100</span></div>-->

            <div class="panel-heading answer-true hidden">Poprawna odpowiedź!</div>
            <div class="panel-heading answer-false hidden">Niepoprawna odpowiedź!</div>
            <div class="panel-heading answer-no-answer hidden">Zaznacz odpowiedź</div>

            <button type='button' class='btn btn-info btn-block' id='check-12'>Sprawdzam</button>

            <div class='buttons-next-prev'>
                <a href="/pytanie" type='button' class='btn btn-primary ' id='next-question'>Losuj kolejne pytanie</a>
            </div>
        </div>
    </div>

@endsection

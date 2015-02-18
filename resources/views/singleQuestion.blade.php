@extends('app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading question-panel">Jak należy zachować się w tej sytuacji?</div>
                <div class="list-group">
                    <!-- w miejsce 12 nalezy wstawic odpowiednie id. W miejsce data-correct nalezy wstawic poprawna odpowiedz -->
                    <a href="#" class="list-group-item q12" data-id='1' data-correct='true'>Stać</a>
                    <a href="#" class="list-group-item q12" data-id='2' data-correct='false'>Uciekać</a>
                    <a href="#" class="list-group-item q12" data-id='3' data-correct='false'>Położyć się</a>
                </div>
            </div>

            <div class="panel-heading answer-true hidden">Poprawna odpowiedź!</div>
            <div class="panel-heading answer-false hidden">Niepoprawna odpowiedź!</div>
            <div class="panel-heading answer-no-answer hidden">Zaznacz odpowiedź</div>

            <button type='button' class='btn btn-info btn-block' id='check-12'>Sprawdzam</button>

            <div class='buttons-next-prev'>
                <button type='button' class='btn btn-primary ' id='prev-question'>Poprzednie</button>
                <button type='button' class='btn btn-primary ' id='next-question'>Kolejne</button>
            </div>
        </div>
    </div>
</div>

@endsection

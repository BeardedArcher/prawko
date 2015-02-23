@extends('app')

@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <p class="bg-primary">Jaki rodzaj pytania chcesz dodać?</p>
        <div class="questions">
        <a href="dodaj-pytanie-abc" class='form-multi'>
            Pytanie Jedno/Wielokrotnego wyboru
        </a>
        <a href="dodaj-pytanie-tak-nie" class="btn btn-primary yesno">
            Pytanie typu Tak/Nie
        </a>
        </div>
        <div>
            <p class="tip"><a href="#">Nie wiesz który rodzaj pytania wybrać?</a></p>
        </div>
    </div>
</div>

@endsection
@extends('app')

@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <p class="bg-primary">Jaki rodzaj pytania chcesz dodać?</p>
        <div class="questions">
        <form action="addMultiQuestion" method="post" class='form-multi'>
            <input type="submit" class="btn btn-primary multi" value="Pytanie Jedno/Wielokrotnego wyboru" name="multi">
        </form>
        <form action="yesno" method="post" class='form-yesno'>
            <input type="submit" class="btn btn-primary yesno" value="Pytanie typu Tak/Nie" name="yesno">
        </form>
        </div>
        <div>
            <p class="tip"><a href="#">Nie wiesz który rodzaj pytania wybrać?</a></p>
        </div>
    </div>
</div>

@endsection
@extends('admin/main')

@section('content')
    <h1>
        Główna admina
    </h1>
   <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
                <li><a href="/admin/logowanie">Logowanie</a></li>
                <li><a href="pytanie">Odpowiedz na pytanie</a></li>
                <li><a href="pytania-abc">Lista pytań abc</a></li>
                <li><a href="pytania-tak-nie">Lista pytań tak/nie</a></li>
                <li><a href="dodaj-pytanie-abc">Dodaj pytanie abc</a></li>
                <li><a href="dodaj-pytanie-tak-nie">Dodaj pytanie tak/nie</a></li>
        </ul>
    </div>
@endsection
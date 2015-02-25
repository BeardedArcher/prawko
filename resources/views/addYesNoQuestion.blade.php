@extends('app')

@section('content')

<div class="container-fluid">
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        
        <form enctype="multipart/form-data" action="dodaj-pytanie-tak-nie" method="POST">



<!-- KATEGORIA -------------------------------------------------------------------------------------->
                   
                    <div class='form-group'>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title main-1"><strong>Wybierz kategorię (opcjonalnie)</strong></h3>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="a" value="a" name="category">
                                    Kategoria A
                                </label>
                                <label>
                                    <input type="radio" id="b" value="b" name="category">
                                    Kategoria B
                                </label>
                                <label>
                                    <input type="radio" id="c" value="c" name="category">
                                    Kategoria C
                                </label>
                                <label>
                                    <input type="radio" id="d" value="d" name="category">
                                    Kategoria D
                                </label>
                                <label>
                                    <input type="radio" id="o" value="o" name="category" checked>
                                    Ogólne
                                </label>
                            </div>
                        </div>
                    </div>        

<!-- PYTANIE -------------------------------------------------------------------------------------->

            <div class='form-group'>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title main-1"><strong><p>Wprowadź treść pytania.</strong><p> Jeśli nie posiadasz grafiki możesz pod pytaniem opisać sytuację, a my dodamy grafikę.</h3>
                    </div>
                <textarea class='form-control' rows='5' id='text' placeholder="Wprowadź treść pytania" name="question"></textarea>
                </div>
            </div>


<!-- DODANIE OBAZU -------------------------------------------------------------------->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Dodaj obraz dotyczący sytuacji</strong> (opcjonalnie)</h3>
                        </div>
                        <div class="panel-body">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <input type="hidden" name="MAX_FILE_SIZE" value="500000">
                            <input class="btn btn-primary btn-file" name="picture" type="file" value="Wybierz grafikę">
                            <br>
                            <ul>
                                <li>Maksymalny rozmiar pliku wynosi <strong>5 MB</strong></li>
                                <li>Dopuszczalne formaty lików: <strong>JPG, GIF, PNG</strong> </li>
                                <!--<li>Dopuszczalne jest wrzucenie pliku poprzez przeciągnięcie.</li>-->
                            </ul>
                        </div>
                    </div>


<!-- ODPOWIEDZI -------------------------------------------------------------------->
            <div class='form-group'>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title main-1"><strong>Poprawna odpowiedź to:</strong></h3>
                    </div>

                    <div class="input-group">

                        <div class="input-group-btn">
                            <button type="button" class="btn button-1" data-toggle='dropdown' aria-expanded='false'>
                                <span id='yn-1' class='glyphicon glyphicon-ok' aria-hidden='true'> Tak</span>
                            </button>
                        </div>
                        <div class="input-group-btn">
                            <button type="button" class="btn button-2" data-toggle='dropdown' aria-expanded='false'>
                                <span id='yn-2' class='glyphicon glyphicon-remove' aria-hidden='true'> Nie</span>
                            </button>
                        </div>
                    </div>

                  </div>
            </div>
            <div class='form-group float-right'>
                <input class='btn btn-info' type='submit' value='Dalej' id='next'>
                <input type="hidden" class="correct_answer" name="correct_answer">
            </div>
            <div class='input-group hidden'>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title h-1"><strong>Musisz zaznaczyć jedną poprawną odpowiedź!</strong></h3>
                    </div>
                </div>
            </div>
<!-- END OF ODPOWIEDZI -->
        </form>
    </div><!-- /.col-md-4 -->
</div><!-- /.row -->
</div><!-- container -->
        
@endsection
@extends('app')

@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
            <form enctype="multipart/form-data" action="dodaj-pytanie-abc" method="POST">

<!-- KATEGORIA -------------------------------------------------------------------------------------->
                   
                    <div class='form-group'>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title main-1"><strong>Wybierz kategorię</strong> (opcjonalnie)</h3>
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
                            <input class="btn btn-primary btn-file" name="uploaded_picture" type="file" value="Wybierz grafikę">
                            <br>
                            <ul>
                                <li>Maksymalny rozmiar pliku wynosi <strong>5 MB</strong></li>
                                <li>Dopuszczalne formaty lików: <strong>JPG, GIF, PNG</strong> </li>
                                <!--<li>Dopuszczalne jest wrzucenie pliku poprzez przeciągnięcie.</li>-->
                            </ul>
                        </div>
                    </div>

<!-- ODPOWIEDZI  -------------------------------------------------------------------->
                    <div class='form-group'>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title main-1"><strong><p>Odpowiedzi.</strong><p>Wpisz odpowiedź i zaznacz po prawej poprawną.</h3>
                            </div>
                            
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Odpowiedź nr 1" name="answer-1">

                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default button-1" aria-expanded='false'>
                                        <span id='a-1' class='glyphicon glyphicon-question-sign' aria-hidden='true' ></span>
                                    </button>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Odpowiedź nr 2" name="answer-2">

                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default button-2" aria-expanded='false'>
                                        <span id='a-2' class='glyphicon glyphicon-question-sign' aria-hidden='true'></span>
                                    </button>
                                    
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Odpowiedź nr 3"  name="answer-3">

                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default button-3" aria-expanded='false'>
                                        <span id='a-3' class='glyphicon glyphicon-question-sign' aria-hidden='true'></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                

                <div class='form-group float-right'>
                    <input class='btn btn-info' type='submit' value='Dalej' id="next1">
                    <input class="correct_answer" type="hidden" name="correct_answer">
                </div>
                </form>
                <div class='input-group error-2 hidden'>
                    <div class="alert alert-danger"><strong>Musisz wypełnić wszystkie odpowiedzi!</strong></div>
                </div>
                <div class='input-group error-1 hidden'>
                    <div class="alert alert-danger"><strong>Musisz zaznaczyć jedną poprawną odpowiedź!</strong></div>
                </div>
                

<!-- end of ODPOWIEDZI -->
                    

                </form>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
        </div><!-- container -->

@endsection

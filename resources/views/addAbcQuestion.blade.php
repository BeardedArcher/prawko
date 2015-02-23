@extends('app')

@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                
<!-- DODANIE OBAZU -------------------------------------------------------------------->

                <!-- The fileinput-button span is used to style the file input field as button -->
                <div class='form-group'>
                    <span class="btn btn-info fileinput-button add-pic">
                        <i class="glyphicon glyphicon-picture"></i>
                        <span>Dodaj grafikę dotycząca pytania (opcjonalnie) </span>
                    </span>
                </div>

                <form enctype="multipart/form-data" action="dodaj-pytanie-abc" method="POST">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <input type="hidden" name="MAX_FILE_SIZE" value="500000">
                    Wybierz plik <input name="uploadedfile" type="file">
                    <input type="submit" value="Dodaj">
                </form>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                            <h3 class="panel-title">Uwagi dotyczące wgrywanych plików</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>Maksymalny rozmiar pliku wynosi <strong>5 MB</strong></li>
                                <li>Dopuszczalne formaty lików: <strong>JPG, GIF, PNG</strong> </li>
                                <!--<li>Dopuszczalne jest wrzucenie pliku poprzez przeciągnięcie.</li>-->
                            </ul>
                        </div>
                    </div>
                      
<!-- PYTANIE -------------------------------------------------------------------------------------->
                    
                    <div class='form-group'>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title main-1"><strong><p>Wprowadź treść pytania.</strong><p> Jeśli nie posiadasz grafiki możesz pod pytaniem opisać sytuację, a my dorobimy grafikę.</h3>
                            </div>
                        <textarea class='form-control' rows='5' id='text' placeholder="Wprowadź treść pytania"></textarea>
                        </div>
                    </div>
                    
                    <!-- endof DODANIE OBAZU -->

                    

<!-- ODPOWIEDZI  -------------------------------------------------------------------->
                    <div class='form-group'>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title main-1"><strong><p>Odpowiedzi.</strong><p>Wpisz odpowiedź i zaznacz po prawej poprawną.</h3>
                            </div>
                            
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Odpowiedź nr 1">

                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default button-1" aria-expanded='false'>
                                        <span id='a-1' class='glyphicon glyphicon-question-sign' aria-hidden='true' ></span>
                                    </button>
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Odpowiedź nr 2">

                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default button-2" aria-expanded='false'>
                                        <span id='a-2' class='glyphicon glyphicon-question-sign' aria-hidden='true'></span>
                                    </button>
                                    
                                </div>
                            </div>
                            
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Odpowiedź nr 3">

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
                    </div>
                    <div class='input-group hidden'>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title h-1"><strong>Musisz zaznaczyć jedną poprawną odpowiedź!</strong></h3>
                            </div>
                        </div>
                    </div>

<!-- end of ODPOWIEDZI -->
                    

                </form>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
        </div><!-- container -->

@endsection

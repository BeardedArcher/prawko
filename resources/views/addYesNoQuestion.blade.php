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
                    <span>Dodaj grafikę dotycząca pytania</span>
                </span>
            </div>        

        <div class="panel panel-default add-foto">
            <div class="panel-heading">
                <h3 class="panel-title main-1"><strong>Dodaj grafikę dotycząca pytania</strong></h3>
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
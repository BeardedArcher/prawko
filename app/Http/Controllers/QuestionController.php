<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/**
 * Opis pliku
 *
 * @author: Janusz Smoła
 */

class QuestionController extends Controller {

    public function abc()
    {
        $itemsPerPage = \Input::get('ilosc');
        $questions = \App\QuestionsAbc::All();

        return view('questions', array(
            'questions' => $questions
        ));
    }

    public function yesno()
    {
        $itemsPerPage = \Input::get('ilosc');
    }

}

<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/**
 * Opis pliku
 *
 * @author: Janusz Smoła
 */

class QuestionController extends Controller {

    public function showQuestions()
    {
        $itemsPerPage = \Input::get('ilosc');
        $questions = \App\QuestionsAbc::All();

        
        
        return view('singleQuestion', array(
            'questions' => $questions
        ));
    }

    public function yesno()
    {
        $itemsPerPage = \Input::get('ilosc');
        
        return view('addYesNoQuestion');
    }
    
    public function addQuestion()
    {
        return view('addQuestionPanel');
    }
    

}

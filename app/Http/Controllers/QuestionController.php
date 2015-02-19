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
    
    public function multi()
    {
        $upa = mkdate();
        echo $upa;
        return view('addMultiQuestion');
    }
    
    public function addQuestion()
    {
        return view('addQuestionPanel');
    }
    
    public function uploadFile()
    {
        var_dump(__DIR__);
        $target = __DIR__ . '/../../../public_html/images/';
        var_dump($target);
        $target_final = $target . basename($_FILES['uploadedfile']['name']);
        
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_final)){
            echo 'wrzucono';
        } else {
            echo 'cos nie dziala';
        }
        
        return view('addMultiQuestion');
    }

    
    
}

<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/**
 * Question controller
 *
 * @author: Janusz Smoła
 */

class QuestionController extends Controller {

    /**
     * Abc question list
     */
    public function abc()
    {
        $itemsPerPage = \Input::get('ilosc');
        $questions = \App\QuestionsAbc::All();

        return view('abc', array(
            'questions' => $questions
        ));
    }

    /**
     * Yesno question list
     */
    public function yesno()
    {
        $itemsPerPage = \Input::get('ilosc');
    }

    /**
     * Add question select type
     */
    public function addQuestionSelectType()
    {
        return view('addQuestionSelectType');
    }

    /**
     * Yesno question add
     */
    public function addYesno()
    {
        return view('addYesNoQuestion');
    }
    
    /**
     * Abc question add
     */
    public function addAbc()
    {
        return view('addAbcQuestion');
    }

    /**
     * Display question with details
     */
    public function questionDetails()
    {
        return view('questionDetails');
    }
    
    public function uploadFile()
    {
        var_dump(__DIR__);
        $target = __DIR__ . '/../../../public_html/images/';
        var_dump($target);
        $target_final = $target . basename($_FILES['uploadedfile']['name']);
        
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_final)) {
            echo 'wrzucono';
        } else {
            echo 'cos nie dziala';
        }
        
        return view('addMultiQuestion');
    }

    
    
}

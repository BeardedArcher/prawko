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
     * Add question type Yes/No
     */
    public function addYesno()
    {
        return view('addYesNoQuestion');
    }
    
    /**
     * Abc question show form
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
    
    /**
     * Add ABC question with image
     */
    public function uploadQuestion()
    {
//        var_dump($_POST);
        $randomCode = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 1).substr(md5(time()),1,8);

        $count = \App\QuestionsAbc::where('picture', '=', $randomCode)->count();
        var_dump($count);
        
        $target = __DIR__ . '/../../../public_html/images/';
        $target_final = $target . basename($_FILES['uploadedfile']['name']);
        $_FILES['uploadedfile']['name'] = $randomCode;
        
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_final)) {
            echo 'wrzucono';
        } else {
            echo 'cos nie dziala';
        }
        
        return view('addAbcQuestion');
    }

    
    
}

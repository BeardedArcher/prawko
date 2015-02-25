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
        $question = $_POST['question'];
        $answer_a = $_POST['answer-1'];
        $answer_b = $_POST['answer-2'];
        $answer_c = $_POST['answer-3'];
        $correct_answer = $_POST['correct_answer'];
        $category = $_POST['category'];
        
        $query = new \App\QuestionsAbc();
        
        if($_FILES['uploadedfile']['size'] > 0)
        {
            $extension = substr($_FILES['uploadedfile']['name'], strrpos($_FILES['uploadedfile']['name'], '.') +1);

            do {
                $randomCode = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 1).substr(md5(time()),1,8);
                $count = \App\QuestionsAbc::where('picture', '=', $randomCode)->count();
            }
            while($count > 1);
            
            $final_name = $randomCode . '.' . $extension;
            
            
            $target = __DIR__ . '/../../../public_html/images/';
            $target_final = $target . basename($final_name);

            if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_final)) {
                
                $query->question = $question;
                $query->answer_a = $answer_a;
                $query->answer_b = $answer_b;
                $query->answer_c = $answer_c;
                $query->accepted = '0';
                $query->correct_answer = $correct_answer;
                $query->picture = $final_name;
                $query->category = $category;
            
                if($query->save()) {
    //                echo json_encode();
                } else {
    //                echo json_encode();
                }
            }
        }
        else {
            
            $query->question = $question;
            $query->answer_a = $answer_a;
            $query->answer_b = $answer_b;
            $query->answer_c = $answer_c;
            $query->accepted = '0';
            $query->correct_answer = $correct_answer;
            $query->picture = '';
            $query->category = $category;
            if($query->save()) {
//                echo json_encode();
            }
            else {
//                echo json_encode();
            }
        }

        return view('addAbcQuestion');
    }

    
    
}

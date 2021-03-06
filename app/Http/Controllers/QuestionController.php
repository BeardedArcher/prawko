<?php namespace App\Http\Controllers;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use \Request;
use \Input;
use \Validator;
use \Cache;
use \App\QuestionsAbc;
use \App\QuestionsYesNo;
use Intervention\Image\ImageManager;

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
        $itemsPerPage = Input::get('ilosc');
        $questions = QuestionsAbc::All();

        return view('abc', array(
            'questions' => $questions
        ));
    }

    /**
     * Yesno question list
     */
    public function yesno()
    {
        $itemsPerPage = Input::get('ilosc');
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
        if (!Cache::has('questionsYesNoCount')) {
            Cache::add('questionsYesNoCount', QuestionsYesNo::count(), 5);
        }
        if (!Cache::has('questionsAbcCount')) {
            Cache::add('questionsAbcCount', QuestionsAbc::count(), 5);
        }

        $yesnoCount = Cache::get('questionsYesNoCount');
        $abcCount = Cache::get('questionsAbcCount');
        $rand = rand(0, $yesnoCount + $abcCount);
        if(rand(0, $yesnoCount + $abcCount) < $yesnoCount) {
            $question = QuestionsYesNo::orderByRaw("RAND()")->first();
        } else {
            $question = QuestionsAbc::orderByRaw("RAND()")->first();
        }

        return view('questionDetails', [
            'question' => $question
        ]);
    }
    
    /*
     * Add Yes/No question with or without image
     */
    public function addYesNo()
    {
        if(Request::isMethod('post')) {

            $data = [
                'question' => Input::get('question'),
                'accepted' => false,
                'correct_answer' => Input::get('correct_answer'),
                'category' => Input::get('category')
            ];

            if(Request::file('uploaded_picture')) {
                $data['picture'] = Request::file('uploaded_picture');
            }

            $validator = Validator::make($data, QuestionsYesNo::getValidationAddRules());
            $errorMessages = $validator->messages();

            if(Request::hasFile('uploaded_picture') && $validator->passes())
            {
                $extension = Request::file('uploaded_picture')->getClientOriginalExtension();

                $picture = null;

                while(!$picture) {
                    $randomName = str_random(10) . '.' . $extension;
                    if(!QuestionsYesNo::where('picture', '=', $randomName)->first()) {
                        $picture = $randomName;
                    }
                }

                $data['picture'] = $picture;

                try {
                    \Image::make(Request::file('uploaded_picture'))->resize(500, 333, function($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize(); })
                    ->save(QuestionsAbc::getImagePath().$picture);
                } catch (Exception $e) {
                    $errorMessages->add('picture', 'An error message.');
                }

            }

            if($errorMessages->isEmpty()) {
                $questionRow = new QuestionsYesNo();

                if(!$questionRow->fill($data)->save()) {
                    $errorMessages->add('form', 'An error message.');
                }
            }

            return view('addYesNoQuestion', [
                'messages' => $errorMessages
            ]);
        }

        return view('addYesNoQuestion');
    }
    
    
    /**
     * Add ABC question with or without image
     */
    public function uploadQuestion()
    {
        if(Request::isMethod('post')) {
            
            $data = [
                'question' => Input::get('question'),
                'answer_a' => Input::get('answer-1'),
                'answer_b' => Input::get('answer-2'),
                'answer_c' => Input::get('answer-3'),
                'correct_answer' => Input::get('correct_answer'),
                'accepted' => false,
                'category' => Input::get('category')
            ];

            if(Request::file('uploaded_picture')) {
                $data['picture'] = Request::file('uploaded_picture');
            }

            $validator = Validator::make($data, QuestionsAbc::getValidationAddRules());
            $errorMessages = $validator->messages();

            if(Request::hasFile('uploaded_picture') && $validator->passes()) {
                $extension = Request::file('uploaded_picture')->getClientOriginalExtension();

                $picture = null;

                while(!$picture) {
                    $randomName = str_random(10) . '.' . $extension;
                    if(!QuestionsAbc::where('picture', '=', $randomName)->first()) {
                        $picture = $randomName;
                    }
                }

                $data['picture'] = $picture;

                try {
                    \Image::make(Request::file('uploaded_picture'))->fit(300,200)->save(QuestionsAbc::getImagePath() . $picture);
                } catch (Exception $e) {
                    $errorMessages->add('picture', 'An error message.');
                }
            }

            if($errorMessages->isEmpty()) {
                $questionRow = new QuestionsAbc();

                if(!$questionRow->fill($data)->save()) {
                    $errorMessages->add('form', 'An error message.');
                }
            }

            return view('addAbcQuestion', [
                'messages' => $errorMessages
            ]);
        }
        
    }

    
    
}

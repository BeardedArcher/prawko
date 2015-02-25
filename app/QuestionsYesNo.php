<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class QuestionsYesNo extends Model {
    
    protected $table = 'questions_yn';
    
    protected $fillable = ['question', 'correct_answer', 'picture', 'category', 'updated_at', 'created_at'];
    
    protected $hidden = ['id', 'accepted',];

    public static function getValidationAddRules()
    {
        return [
            'picture' => 'sometimes|required|image|max:5120',
            'question' => 'required',
            'correct_answer' => 'required|digits_between:1,3',
            'category' => 'required'
        ];
    }

    public static function getImagePath()
    {
        return public_path() . '/images/';
    }
}


<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class QuestionsYesNo extends Model {
    
    protected $table = 'questions_yn';
    
    protected $fillable = ['question', 'correct_answer', 'picture', 'category', 'updated_at', 'created_at'];
    
    protected $hidden = ['id', 'accepted',];
}


<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Opis pliku
 *
 * @author: Janusz Smoła
 */

class QuestionsAbc extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questions_abc';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['question', 'answer_a', 'answer_b', 'answer_c', 'correct_answer', 'picture', 'category'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id', 'accepted'];
   
}
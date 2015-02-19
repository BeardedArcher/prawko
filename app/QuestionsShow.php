<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * File description
 *
 * @author: Mateusz Wojcik
 */

class QuestionsShow extends Model {
    
    /**
     * The database tables used by the model.
     *
     * @var string
     */
    protected $table_abc = 'questions_abc';
    protected $table_yn = 'questions_yn';
    
}
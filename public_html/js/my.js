$(function()
{
    /* PYTANIA MULTI */
    
    var a=0;
    
    $('.button-1').on('click', function(){
        $('.button-1').attr('class', 'btn btn-success button-1');
        $('.button-2').attr('class', 'btn btn-danger button-2');
        $('.button-3').attr('class', 'btn btn-danger button-3');
        $('#a-1').attr('class', 'glyphicon glyphicon-ok');
        $('#a-2').attr('class', 'glyphicon glyphicon-remove');
        $('#a-3').attr('class', 'glyphicon glyphicon-remove');
        
        $('.visible').addClass('hidden').removeClass('visible');

        return a=1;
    });
    
    $('.button-2').on('click', function(){
        $('.button-2').attr('class', 'btn btn-success button-2');
        $('.button-1').attr('class', 'btn btn-danger button-1');
        $('.button-3').attr('class', 'btn btn-danger button-3');
        $('#a-1').attr('class', 'glyphicon glyphicon-remove');
        $('#a-2').attr('class', 'glyphicon glyphicon-ok');
        $('#a-3').attr('class', 'glyphicon glyphicon-remove');
        
        $('.visible').addClass('hidden').removeClass('visible');

        return a=2;
    });
    
    $('.button-3').on('click', function(){
        $('.button-3').attr('class', 'btn btn-success button-3');
        $('.button-1').attr('class', 'btn btn-danger button-1');
        $('.button-2').attr('class', 'btn btn-danger button-2');
        $('#a-1').attr('class', 'glyphicon glyphicon-remove');
        $('#a-2').attr('class', 'glyphicon glyphicon-remove');
        $('#a-3').attr('class', 'glyphicon glyphicon-ok');      
        
        $('.visible').addClass('hidden').removeClass('visible');

        return a=3;
    });
    
    $('#next1').on('click', function(){

        if(a===0) { $('.hidden').addClass('visible').removeClass('hidden');
            $('.button-1').attr('class', 'btn btn-danger button-1');
            $('.button-2').attr('class', 'btn btn-danger button-2');
            $('.button-3').attr('class', 'btn btn-danger button-3');
            return false; } 
        else {
            $('.visible').addClass('hidden').removeClass('visible');
        return a;
    }
    });
    
    
    /* PYTANIA YES-NO*/
    var i=0;
    var u=0;
    
    $('#yn-1').on('click', function(){
        i++;
        $(this).parent().parent().find('button').toggleClass('btn-success');
    });
    
    $('#yn-2').on('click', function(){
        u++;
        $(this).parent().parent().find('button').toggleClass('btn-danger');
    });
    
    $('#next').on('click', function(){
       var x = i+u;
       if(x % 2 === 0) {
           $('.hidden').removeClass('hidden');
           return false;
       }
    });
    
    $('.add-pic').on('click', function(){
        $('.add-foto').toggle();
    });
    
    
    /* SPRAWDZENIE PYTANIA LOSOWEGO */
    
    var answer;
    var id;
    
    $('.q12').on('click', function(){
        $('.answer-true').addClass('hidden');
        $('.answer-false').addClass('hidden');
        $('.answer-no-answer').addClass('hidden');
        
        answer = $(this).attr('data-correct');
        id = $(this).attr('data-id');
        return answer;
    });
    
    $('#check-12').on('click', function() {
        if(answer === 'true') { 
            console.log(id);
            $('.answer-true').removeClass('hidden');
            $('.answer-true[data-id='+id+']').css('background-color', 'green');
        } 
        else if(answer === 'false') { $('.answer-false').removeClass('hidden');}
        else { $('.answer-no-answer').removeClass('hidden'); }
    });
    
    /* ZAZNACZENIE ODPOWIEDZI W PYTANIU EGZAMINACYJNYM */

    var p = 0;
    $('.left').on('click', function(){
        $('.question-time-panel-no-answer').addClass('hidden');
       $(this).addClass('active');
       $('.right').removeClass('active');
       p=1;
       return p;
    });
    
    $('.right').on('click', function(){
        $('.question-time-panel-no-answer').addClass('hidden');
       $(this).addClass('active');
       $('.left').removeClass('active');
       p=2;
       return p;
    });
    
    $('.next-question').on('click', function(){
        if(p === 0) {
            $('.question-time-panel-no-answer').removeClass('hidden');
            return false;
        }
        else {
            return p;
        }
    });
});

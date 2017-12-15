<?php

namespace App\Http\Controllers\FaqControllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use App\Category;
use App\Answer;
class FaqController extends Controller
{
    public function faq() {
    DB::listen(function($query) {
        var_dump($query->sql, $query->bindings);
    });

    $category = Category::all();
    $question = Question::all()->where('status', 1);
    $answers = Answer::all();
    $header = 'Вопросы-Ответы';
    $themes = Category::select(['id','category'])->get();
    return view('faq/index')->with(['header'=>$header,
                                    'themes'=>$themes,
                                    'categories'=>$category,
                                    'question'=>$question,
                                    'answers'=>$answers]);
    }

}

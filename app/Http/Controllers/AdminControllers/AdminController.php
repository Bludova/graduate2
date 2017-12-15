<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use App\Category;
use App\Answer;

class AdminController extends Controller
{
        public function admin() {


        DB::listen(function($query) {
            var_dump($query->sql, $query->bindings);
        });

        $questionsAll = Question::all()->groupBy('category_id');
        $themes = Category::select(['id','category'])->get();
        $header = 'hi admin!!!';
        return view('admin/index')->with(['header'=>$header,
                                          'themes'=>$themes,
                                           'questionsAll'=>$questionsAll]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quizzes=Question::with(['answers'])->get();
        $user=Auth::user();
        return view('quizz',compact('user','quizzes'));
    }
    public function create_quizz(){
        $answers=Answer::all();
        return view('create_quizz',compact('answers'));
    }
    public function save_quizz(Request $request){
        $request->validate([
            'question'=>'required',
            'answer_1'=>'required',
            'answer_2'=>'required',
            'answer_3'=>'required',
            'answer_4'=>'required',
            'is_correct'=>'required'
        ]);
        $quizz=new Question($request->all());
        $quizz->save();
//        $quizz->answers()->attach($request->correct_answer);
        return redirect()->back();
    }
    public function check_quizz(Request $request){
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

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
        $quizzes=Question::with('answers')->get();
//        dd($quizzes);
        $user=Auth::user();
        return view('quizz',compact('user','quizzes'));
    }
    public function create_quizz(){
        return view('create_quizz');
    }
    public function save_quizz(Request $request){
        $quizz=new Question($request->all());
        $quizz->save();
        return redirect()->back();
    }
}

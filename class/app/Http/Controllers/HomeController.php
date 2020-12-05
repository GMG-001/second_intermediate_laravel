<?php

namespace App\Http\Controllers;


use App\Models\Lecture;
use App\Models\User;
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
        $user=Auth::user();

        return view('index',compact('user'));
    }
    public function students(){
        $students=User::with(['classes'])->where('is_admin')->get();
        return view('students',compact('students'));
    }
    public function student($id){
        $classes=User::with(['classes'])->get();
        $student=User::findOrFail($id);
        return view('student',compact('student','classes'));
    }



    public function classes(){
        $classes=Lecture::with(['students'])->get();
        return view('classes',compact('classes'));
    }
    public function class($id){
        $class=Lecture::findOrFail($id);
        return view('class',compact('class'));
    }

    public function my_classes(){
        $student=Auth::user();
        return view('my_classes',compact('student'));
    }

    public function change_class(Lecture $lecture){
        $students=User::with(['classes'])->get();
        foreach ($students as $class){
            $class1 = $class->classes;
            if ($class1->id == $lecture){
                $class1->id=false;
            }else{
                $class1->id=$lecture;
            }
        }
////        $student=new User($request->all());
////        $student-save();
////        $student->classes()->attach($request->classes);
         $class-save();
        return redirect()->back();
    }

    public function create_class(){
        return view('add_class');
    }

    public function save(Request $request){
        $request->validate([
            'class_name' => 'required',
        ]);
        $leqture=new Lecture($request->all());
        $leqture->save();
        return redirect()->back();
    }

}

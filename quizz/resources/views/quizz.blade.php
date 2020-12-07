@extends('layouts.app')
{{--<script src="/js/quiz.js" defer></script>--}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if($user->is_admin)
                    <div class="card">
                        <a href="{{ url('/create_quizz') }}" class="text-sm text-gray-700 underline">add quizz</a>
                    </div>
                @else
                    <form method="POST" enctype="multipart/form-data" action="{{route('check_quizz')}}">
                        <div>
                            @foreach($quizzes as $quizz)
                                <br><p>{{$quizz->question}}</p>
                                <p><input type="radio" name="q1" value="{{$quizz->answer_1}}">A. {{$quizz->answer_1}}</p>
                                <p><input type="radio" name="q1" value="{{$quizz->answer_2}}">B. {{$quizz->answer_2}}</p>
                                <p><input type="radio" name="q1" value="{{$quizz->answer_3}}">C. {{$quizz->answer_3}}</p>
                                <p><input type="radio" name="q1" value="{{$quizz->answer_4}}">D. {{$quizz->answer_4}}</p>
{{--                                <input type="hidden" name="a1" id="{{$quizz->is_correct}}" value="{{$quizz->is_correct}}"><br><br>--}}
                                    @endforeach

                        </div>
                        <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection

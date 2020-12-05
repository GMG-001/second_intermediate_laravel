@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if($user->is_admin)
                    <div class="card">
                        <a href="{{ url('/create_quizz') }}" class="text-sm text-gray-700 underline">add quizz</a>
                    </div>
                @else

                    <div class="form-group">
                        @foreach($quizzes as $quizz)
                            {{$quizz->question}}
                        @endforeach
                    </div>
                <div>
                        <select name="quizzes[]" id="" multiple>

                            <option value="{{$quizz->id}}">{{$quizz->answer_1}}</option>
                                <option value="{{$quizz->id}}">{{$quizz->answer_2}}</option>
                                <option value="{{$quizz->id}}">{{$quizz->answer_3}}</option>
                                <option value="{{$quizz->id}}">{{$quizz->answer_4}}</option>
                        </select>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

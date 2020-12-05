@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1">
    @foreach($students as $student)
        <div>
            <a href="{{route('student', $student->id)}}" class="underline text-black-50 dark:text-white">
                {{$student->name}}
            </a>
        </div>
        <div class="ml-12">
            @foreach($student->classes as $class)
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <a href="{{route('class', $class->id)}}" class="underline  dark:text-white">
                        {{$class->class_name}}
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2">
        @foreach($classes as $class)
            <div>
                <a href="{{route('class', $class->id)}}" class="underline text-black-50 dark:text-white">
                    {{$class->class_name}}
                </a>
            </div>

        @endforeach
    </div>
@endsection

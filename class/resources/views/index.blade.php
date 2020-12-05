@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if($user->is_admin)
                <div class="card">
                    <a href="{{ url('/classes') }}" class="text-sm text-gray-700 underline">classes</a>
                    <a href="{{ url('/students') }}" class="text-sm text-gray-700 underline">students</a>
                    <a href="{{ url('/create_class') }}" class="text-sm text-gray-700 underline">add class</a>
                </div>
                @else
                <div>
                    <a href="{{url('/my_classes')}}" class="text-sm text-gray-700 underline">my_classes</a>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection

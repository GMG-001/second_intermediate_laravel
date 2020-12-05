@extends('layouts.app')

@section('content')
<div class="bg-gray-800  text-white mx-64">
    <div class="cox-header with-border">
        <h3 class="box-title mx-32">create question</h3>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{route('save_quizz')}}">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="question" name="question">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="answer_1" name="answer_1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="answer_2" name="answer_2">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="answer_3" name="answer_3">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="answer_4" name="answer_4">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="answer_id" name="answer_id">
            </div>
        </div>
        <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
        <div class="box-footer">
            <button type="submit" class="btn btn-primary mx-32">Save</button>
        </div>
    </form>
</div>
@endsection

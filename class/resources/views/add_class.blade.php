@extends('layouts.app')

@section('content')
<form method="post" enctype="multipart/form-data" action="{{route('create_class.save')}}">
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">class title</label>
            <input type="text" class="form-control" placeholder="class_name" name="class_name">
        </div>
    </div>
    <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection

@foreach($student->classes as $lecture)
    <div class="mt-10">
        <a>{{$lecture->class_name}}</a>
    </div>
@endforeach

<div>
    {{$student->name}}

    <div class="ml-12">
        @foreach($student->classes as $class)
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                {{$class->class_name}}
                <div class="ml-4 text-lg leading-7 font-semibold">

                    <form method="post" action="{{route('change_class',$class->id)}}">

                        <button type="submit" class="fa fa-trash">
                            <li>გადარჩევა</li>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
{{--        @foreach($classes as $class)--}}
{{--            <a>{{$class}}</a>--}}
{{--            @endforeach--}}
    </div>
    <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>

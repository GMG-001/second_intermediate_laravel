<div>
    {{$student->name}}

    <div class="ml-12">
        @foreach($student->classes as $class)
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <div class="ml-4 text-lg leading-7 font-semibold">

                            <li>{{$class->class_name}}</li>
                </div>
            </div>
        @endforeach
            <form method="post" action="{{route('change_class',$student->id)}}">
                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <select name="classes[]" id="" multiple>
                @foreach($classes as $class)
                    <a>{{$class->class_name}}</a>
                            <option value="{{$class->id}}">{{$class->class_name}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
    </div>
</div>

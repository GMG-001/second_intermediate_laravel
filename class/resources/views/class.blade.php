<div>
    {{$class->class_name}}
    <div class="ml-12">
        @foreach($class->students as $student)
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                {{$student->name}}
            </div>
        @endforeach
    </div>
</div>

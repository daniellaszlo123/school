@foreach ($tasks as $task)
    <form action="/api/tasks/{{$task->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div>
            <input type="submit" value="{{$task->title}}">
        </div>
    </form>
@endforeach
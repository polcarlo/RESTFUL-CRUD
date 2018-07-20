@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message')}}</div>

            @endif
            <div class="card">
                <div class="card-header">Tasks</div>

                <div class="card-body">
                   

                   <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{ link_to_route('task.show', $task->title, [$task->id]) }}</td>
                                <td>
                                    {!! Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE'))!!}
                                        {{ link_to_route('task.edit','Edit',[$task->id],['class'=>'btn btn-primary'])}}                        
                                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                    {!! Form::close() !!}


                                </td>
                            </tr>
                        @endforeach
                   </table>

                    {{ link_to_route('task.create','Add new task',null,['class'=>'btn btn-success'])}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

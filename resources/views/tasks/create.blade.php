@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tasks</div>

                <div class="card-body">
                   
                    {!! Form::open(array('route' =>'task.store')) !!}
                        <div class="form-group">
                            {!! Form::label('title','Enter Title') !!}
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                     <div class="form-group">
                            {!! Form::label('body','Enter Body') !!}
                            {!! Form::text('body', null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('Create', ['type'=>'submit','class'=> 'btn btn-primary'])!!}

                        </div>

                    {!! Form::close() !!}

                </div>
            </div>

            
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            

 
        </div>
    </div>
</div>
@endsection

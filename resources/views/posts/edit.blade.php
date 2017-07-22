@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create new review</div>

                <div class="panel-body">
                    @include('layouts.alert')
                    {!! Form::model($post,[
                        'route' => ['update',$post->_id],
                        'method' => 'put'
                      ]) 
                    !!}

                    {!! Form::textarea('post', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Write a post', 
                        'required']
                        )
                    !!}

                    {{ Form::text('completion_time', date('d-M-Y'),
                      ['class' => 'form-control']) }}

                    {!! Form::submit('Submit', ['class'=>'form-control btn-success']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

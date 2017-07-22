@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><b>Share Your Review</b></h3></div>

                <div class="panel-body">
                    @include('layouts.alert')
                    {!! Form::open([
                        'route' => 'store',
                        'method' => 'post'
                      ]) 
                    !!}

                    <input type='hidden' name='category' value="{{$currentIndex}}">
  

                    {!! Form::textarea('post', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Write Your Review', 
                        'required']
                        )
                    !!}

                     {{ Form::text('completion_time',date('d-M-Y'),
                      ['class' => 'form-control','placeholder' => 'dd-mon-yyyy']) }}


                    {!! Form::submit('Submit', ['class'=>'form-control btn-success']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')

@section('content')
<?php
 $resId=$currentIndex; 
?>

@include('layouts.alert')

  <a class="btn btn-success pull-right" href="{!! route('create',array('id'=>$resId)) !!}">Add Review</a>

  <a class="btn btn-success pull-right" href="{!! route('notification') !!}">Go To Restaurent List
  </a>

<br>
<div id="wrapper">
<table id="example" class="display">
<thead>

     <tr bgcolor="#00B0B0">
    <th width="50%"><h4><strong>Food Details</strong></h4></th>
   <th><h4><strong>User Name</strong></h4></th>
    <th><h4><strong>Posting time</strong></h4></th>
    <th><h4><strong>Edit Review</strong></h4></th>
    <th><h4><strong>Delete Review</strong></h4></th>
  </tr>
</thead>
<tbody>

<ol>
  @foreach($posts as $post)
    <tr>
      <td max-width="1px"> {!! $post->post !!}</td>
      <td >  @if($post->category == $resId) {{$post->username}} @endif</td></td>
      <td>{!! $post->completion_time!!}</td>
      <td> @if($post->user_id == Auth::user()->_id )
        <a class="btn btn-xs btn-warning" href="{!! route('edit', $post->_id) !!}">Edit</a>
      @endif</td>
      <td> @if($post->user_id == Auth::user()->_id)
        <a class="btn btn-xs btn-danger" href="{!! route('delete', $post->_id) !!}">Delete</a>
      @endif</td>

    </tr>

  @endforeach
</ol>
</tbody>
    
</table>


</div>
@endsection

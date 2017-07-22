
@extends('layouts.app')

@section('content')


@include('layouts.alert')

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 10px;
    position: center;
}
.li1 {
    content: url('img/icon.jpg');

   background:url('img/icon.jpg') 50% 50% no-repeat no-repeat;
   padding-left: 5px;
}
.left_menu{
    width: 30%;
    padding-left: 10px;
}
</style>
<div class="left_menu">
                  

<ul>
  <li><h3><a value="1" href="{{route('filterednotification', 1)}}">Personal</a><h3></li>
  <li><h3><a value="2" href="{{route('filterednotification', 2)}}">Study</a><h3></li>
  <li><h3><a value="3" href="{{route('filterednotification', 3)}}">Shopping</a><h3></li>
  <li><h3><a value="4" href="{{route('filterednotification', 4)}}">Sports</a><h3></li>
  <li><h3><a value="5" href="{{route('filterednotification', 5)}}">Households</a></h3></li>
</ul>
</div>


@endsection
@extends('layout')

@section('title')
     Home Page
@endsection

@section('content')

 <h1> My First {{$foo}} Website </h1>
 
<ul>
 @foreach($tasks as $task)
 <li><?php echo $task; ?></li>
 @endforeach
</ul>

@endsection
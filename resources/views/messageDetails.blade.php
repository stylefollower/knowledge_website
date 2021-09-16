<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('master')

@section('title', 'Message Details')

@section('content')

<h2>{{$message->title}}</h2>
<p>{{$message->content}}</p>

<form action="/messages/{{$message->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Delete</button>
</form>

<br>

@endsection


</body>
</html>
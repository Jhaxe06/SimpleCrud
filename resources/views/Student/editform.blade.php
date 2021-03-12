@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<f, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{asset("/css/laravel.css") }}">  
</head>
<body>
    <form action="/blogs/{{ $students -> id }}" method="POST" > 
        @csrf
        @method('PUT')
        <input type="text" name = "lastname" placeholder="lastname" value = {{ $students -> lastname }} > <br>
        
        <input type="text" name = "firstname" placeholder="firstname" value = {{ $students -> firstname }}> <br>
        
        <input type="text" name = "middlename" placeholder="middlename" value= {{ $students -> middlename }} > <br>
        
        <input type="date" name = "birthdate"   value= {{ $students -> birthdate }}> <br>
        <input type="text" name = "sex" placeholder="sex"  value= {{ $students -> sex }} > <br>




        <textarea name="address"  > {{ $students -> address}} </textarea> <br>
        <input type="number" name = "phone"  placeholder="phone number" value= {{ $students -> phone}} > <br>
        <input type="submit" name = "submit" value = "Submit">
    </form>
    @if($errors -> any())
    <div>
        <ul>
            @foreach ($errors ->all() as $error)
                <li>{{ $error }}</li>
            
            @endforeach
        </ul>
    </div>
    @endif 
</body>
</html>
@endsection
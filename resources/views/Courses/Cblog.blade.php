@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head> <h1> Laravel </h1>
    
    @if(session("message"))
    <strong>{{ session("message") }}</strong> <br>
    @endif
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>

    <link rel="stylesheet" href="{{asset("/css/laravel.css") }}">   
</head>
<body>
   
    <table>
        <tr>
            <th>id</th>
            <th>institute</th>
            <th>Course  </th>
            
    
            <th> Action </th>
        </tr>
        <a href = "/course/create"> add new course </a>
        @foreach($courses as $course)
        <tr> 
            <td>{{ $course -> id }}</td>
            <td>{{ $course -> institute }}</td>
            <td>{{ $course -> course }}</td>
            
            
            <td> <a href = "/course/{{$course -> id}}"> View </a> | 
                <a href = "/course/{{$course -> id}}/edit"> Edit </a> |
                <form action="/course/{{ $course -> id }}" method="POST">  
                    @csrf 
                    @method("DELETE")
                    <input type = "submit" name ="submit" value = "Delete">
                    
                
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>{{ $courses -> links() }} <br>
       
    
</body>
</html>
@endsection
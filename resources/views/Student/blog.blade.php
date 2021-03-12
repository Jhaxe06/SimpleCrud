@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head> <h1> Laravel
     </h1>
     
    <div class="col-lg-3 text-center">
		<div class="panel panel-default">
			<div class="panel-heading">Student Enrolled</div>
			<div class="panel-body">{{ $students->count() }}</div>		
		</div>  
	</div>  

    
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
            <th>Lastname</th>
            <th>Firstname</th>
            <th>middlename</th>
            <th>birthdate</th>
            <th>sex</th>
            <th>address</th>
            <th>phone</th>
    
            <th> Action </th>
        </tr>
        <a href = "/blogs/create"> add new Student </a>
        @foreach($students as $student)
        <tr> 
            <td>{{ $student -> id }}</td>
            <td>{{ $student -> lastname }}</td>
            <td>{{ $student ->  firstname}}</td>
            <td>{{ $student ->  middlename}}</td>           
            <td>{{ $student -> birthdate }}</td>
            <td>{{ $student -> sex }}</td>
            <td>{{ $student ->  address}}</td>
            <td>{{ $student ->  phone}}</td> <br>

            
            <td> <a href = "/blogs/{{$student -> id}}"> View </a> | 
                <a href = "/blogs/{{$student -> id}}/edit"> Edit </a> |
                <form action="/blogs/{{ $student -> id }}" method="POST">  
                    @csrf 
                    @method("DELETE")
                    <input type = "submit" name ="submit" value = "Delete">
                    
                
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
    

  
    
</body>
</html>
@endsection
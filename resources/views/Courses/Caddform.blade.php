<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<f, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add course</title>
</head>
<body>
    <form action="/course" method="POST"> 
        @csrf
        <h2> add course </h2>
        <input type="text" name = "institute" placeholder="Institute" > <br>
        
        <input type="text" name = "course" placeholder="course" > <br>
        
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
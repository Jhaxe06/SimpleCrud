<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<f, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
</head>
<body>
    <form action="/blogs" method="POST"> 
        @csrf
        <h2> add student </h2>
        <input type="text" name = "lastname" placeholder="lastname" > <br>
        
        <input type="text" name = "firstname" placeholder="firstname" > <br>
        
        <input type="text" name = "middlename" placeholder="middlename" > <br>   
        <input type="date" name = "birthdate" > <br>
        <input class="form-check-input" type="radio" name="sex" value="Male">
        <label class="form-check-label" for="Male">Male</label> 
        <input class="form-check-input" type="radio" name="sex" value="Female">
        <label class="form-check-label" for="Female">Female</label><br>









        <textarea name="address" > </textarea> <br>
        <input type="number" name = "phone"  placeholder="phone number" > <br>
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
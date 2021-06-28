<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create food</h2>
    <form action="/abc/{{$food->id}}" method="post">
        @csrf
        <label for="member">
            member:
            <input type="text" name="member" >
        </label><br><br>

        
        <label for="food">
            food:
            <input type="text" name="food" value="{{$food->name}}">
        </label><br><br>




        <label for="price">
            price:
            <input type="text" name="price" value = "{{$food->price}}">
        </label><br><br>



        <label for="number">
            number:
            <input type="text" name="number">
        </label><br><br>
        <button type="submit">tao don ao</button>
    </form>
</body>
</html>
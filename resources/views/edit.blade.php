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
    <form action="/foods/update/{{ $food->id }}" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name" value="{{ $food->name }}">
        </label><br><br>
        <label for="price">
            price:
            <input type="text" name="price" value="{{ $food->price }}">
        </label><br><br>
        <label for="status">
            status:
            <input type="text" name="status" >
        </label><br><br>
        <button type="submit">Edit food</button>
    </form>
    
</body>
</html>
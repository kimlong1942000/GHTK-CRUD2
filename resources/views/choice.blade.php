<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List foods</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Status</td>
            <td>Action</td>
        </tr>
        @foreach($foods as $food)
            <tr>
                <td>{{ $food->id }}</td>
                <td>{{ $food->name }}</td>
                <td>{{ $food->price }}</td>
                <td>{{ $food->status }}</td>
                <td>
                    <a href="/abc/{{$food->id}}">pick</a> <br> 
                <td>
            </tr>
        @endforeach
        
    </table>
    
</body>
</html>
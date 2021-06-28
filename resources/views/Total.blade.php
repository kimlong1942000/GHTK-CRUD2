<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List orders</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>food</td>
            <td>price</td>
            <td>number</td>
            <td>Action</td>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->member }}</td>
                <td>{{ $order->food }}</td>
                <td>{{ $order->number }}</td>
                <td>{{ $order->price }}</td>
                <td>
                    <a href="/delete/{{ $order->id }}">Delete</a>
                <td>
            </tr>
        @endforeach
        
    </table>
    
</body>
</html>
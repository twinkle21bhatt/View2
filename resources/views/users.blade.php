<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>User List</h1>

    <table border="1px">
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Age</td>
            <td>Contact_no</td>
            <td> Address</td>
            <td> Country</td>
           
        </tr>



        @foreach ($users as $dt)
            <tr>
                <td>{{$dt->id}}</td>
                <td>{{$dt->name}}</td>
                <td>{{$dt->age}}</td>
                <td>{{$dt->contact_no}}</td>
                <td>{{$dt->addressl}}</td>
                <td>{{$dt->country}}</td>
            </tr>
        @endforeach
    </table>


</body>
</html>
<html>
<head>
    <title>List of users</title>
</head>
<body>
    <table border="1">
        @foreach($users as $user)
            <tr>
                <td> - </td>
                <td> - </td>
                <td> - </td>
            </tr>
            <tr>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Email</td>
            </tr>
            <tr>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Welcome to your dashboard</h2>
    <table>
        <thead>
            <th>Name</th>
            <th>Matricule</th>
            <th>Action</th>
        </thead>

        <tbody>
            <td>{{ $data->fullname }}</td>
            <td>{{ $data->matricule }}</td>
            <td><a href="logout">Logout</a></td>
        </tbody>
    </table>
    <h2>hello</h2>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Data Table Pengguna</h1>
    </center>
    <table border="1", align="center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>No Telepon</th>
            <th>Nama Pengguna</th>
        </tr>
        @php $No = 1 @endphp
        @foreach ($telepons as $data)
            <tr>
                <td>{{ $No++ }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nomor_telepon }}</td>
                <td>{{ $data->pengguna->nama }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>

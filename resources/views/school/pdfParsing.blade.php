<!DOCTYPE html>
<html>
<head>
    <title>Data Guru | PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>Haii {{ $name }}</h1>
    <p>Email : {{ $email }}</p>
    <p>Tanggal : {{ $date }}</p>
    <p>Data Guru : </p>

    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Umur</th>
        </tr>
        @foreach($data_guru as $user)
        <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->kota }}</td>
            <td>{{ $user->umur }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
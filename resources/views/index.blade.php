<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consume REST API Students</title>
</head>

<body>
    <form action="" method="get">
        @csrf
        <input type="text" name="search" placeholder="Cari nama...">
        <button type="submit">Cari</button>
    </form>
    <br>
    <a href="{{route('add')}}">Tambah Data Baru</a><br>
    <a href="{{route('trash')}}">Sampah</a>
    @if (Session::get('success'))
    <p style="padding: 5px 10px; background: green; color: white; margin: 10px;">{{Session::get('success')}}</p>
    @endif
    @foreach ($eskul as $student)
    <ol>
        <li>Eskul : {{ $student['eskul'] }}</li>
        <li>Jumlah : {{$student['jumlah']}}</li>
        <li>Hari : {{$student['hari']}}</li>
        <li>Tanggal : {{$student['tanggal']}}</li>
        <li>Aksi : <a href="{{route('edit', $student['id'])}}">Edit</a> ||
            <form action="{{route('delete', $student['id'])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    </ol>
    @endforeach
</body>

</html>
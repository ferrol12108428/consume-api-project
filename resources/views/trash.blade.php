<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consume Students REST API || Trash</title>
</head>

<body>
    <a href="/">Kembali</a>
    @if (Session::get('success'))
    <p style="padding: 5px 10px; background: green; color: white; margin: 10px;">{{Session::get('success')}}</p>
    @endif
    @foreach ($eskulTrash as $eskul)
    <ol>
        <li>Eskul : {{$eskul['eskul']}}</li>
        <li>Jumlah : {{$eskul['jumlah']}}</li>
        <li>Hari : {{$eskul['hari']}}</li>
        <li>Tanggal : {{$eskul['tanggal']}}</li>
        <li>Dihapus Tanggal : {{\Carbon\carbon::parse($eskul['deleted_at'])->format('j F, Y')}}</li>
        <li>
            <a href="{{route('restore', $eskul['id'])}}">Kembalikan Data</a>
            <a href="{{route('permanent', $eskul['id'])}}" style="background: orange; color: white;">Hapus Permanen</a>
        </li>
    </ol>
    @endforeach
</body>

</html>
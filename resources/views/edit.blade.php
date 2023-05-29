<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consume REST API Students || Edit</title>
</head>

<body>
    <h2>Edit Data Siswa Baru</h2>
    @if (Session::get('errors'))
    <p style="color: red">{{Session::get('errors')}}</p>
    @endif
    <form action="{{route('update', $eskul['id'])}}" method="POST">
        @csrf
        @method('PATCH')
        <div style="display: flex; margin-bottom: 15px">
            <label for="eskul">Eskul</label>
            <input type="text" name="eskul" value="{{$eskul['eskul']}}" id="eskul" placeholder="Eskul anda...">
        </div>
        <div style="display: flex; margin-bottom: 15px">
            <label for="jumlah">NIS</label>
            <input type="number" name="jumlah" value="{{$eskul['jumlah']}}" id="jumlah" placeholder="Jumlah...">
        </div>
        <div style="display: flex; margin-bottom: 15px">
            <label for="hari">Hari</label>
            <select name="hari" id="rombel">
                <option value="Senin" {{$eskul['hari'] == 'Senin' ? 'selected' : ''}}>Senin</option>
                <option value="Selasa" {{$eskul['hari'] == 'Selasa' ? 'selected' : ''}}>Selasa</option>
                <option value="Rabu" {{$eskul['hari'] == 'Rabu' ? 'selected' : ''}}>Rabu</option>
                <option value="Kamis" {{$eskul['hari'] == 'Kamis' ? 'selected' : ''}}>Kamis</option>
                <option value="Jumat" {{$eskul['hari'] == 'Jumat' ? 'selected' : ''}}>Jumat</option>
                <option value="Sabtu" {{$eskul['hari'] == 'Sabtu' ? 'selected' : ''}}>Sabtu</option>
            </select>
        </div>
        <div style="display: flex; margin-bottom: 15px">
            <label for="tanggal">Tanggal </label>
            <input type="date" name="tanggal" value="{{$eskul['tanggal']}}" id="tanggal">
        </div>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>
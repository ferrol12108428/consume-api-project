<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consume REST API Students || Create</title>
</head>

<body>
    <h2>Tambah Data Siswa Baru</h2>
    @if (Session::get('errors'))
    <p style="color: red">{{Session::get('errors')}}</p>
    @endif
    <form action="{{route('send')}}" method="POST">
        @csrf
        <div style="display: flex; margin-bottom: 15px">
            <label for="eskul">Nama</label>
            <input type="text" name="eskul" id="eskul" placeholder="Nama anda...">
        </div>
        <div style="display: flex; margin-bottom: 15px">
            <label for="jumlah">NIS</label>
            <input type="number" name="jumlah" id="jumlah" placeholder="NIS anda...">
        </div>
        <div style="display: flex; margin-bottom: 15px">
            <label for="Hari">Rombel</label>
            <select name="hari" id="hari">
                <option selected hidden disabled>Select your days</option>
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa </option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
            </select>
        </div>
        <div style="display: flex; margin-bottom: 15px">
            <label for="tanggal">Rayon</label>
            <input type="date" name="tanggal" id="tanggal">
        </div>
        <button type="submit">Kirim</button>
    </form>
</body>

</html>
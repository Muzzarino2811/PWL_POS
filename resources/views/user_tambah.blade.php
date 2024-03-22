<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data User</title>
</head>
<body>
    <h1>Form Tambah Data User</h1>
    <form action="/user/tambah_simpan" method="post">
        {{ csrf_field() }}

        <label for="">Username</label>
        <input type="text" name="username" placeholder="Masukan Username" id="">
        <br>
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="Masukan Nama" id="">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Masukan Password" id="">
        <br>
        <label for="">Level ID</label>
        <input type="number" name="level_id" placeholder="Masukan ID Level" id="">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
</html>
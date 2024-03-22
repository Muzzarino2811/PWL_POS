<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Ubah Data User</title>
</head>
<body>
    <form action="/user/ubah_simpan/{{$data->user_id}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
        <label for="">Username</label>
        <input type="text" name="username" value="{{$data->username}}" id="">
        <br>
        <label for="">Nama</label>
        <input type="text" name="nama" value="{{$data->nama}}" id="">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" value="{{$data->password}}" id="">
        <br>
        <label for="">Level ID</label>
        <input type="number" name="level_id" value="{{$data->level_id}}" id="">
        <br><br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
</html>
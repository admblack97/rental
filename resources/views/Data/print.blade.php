<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>

  body {
    font-family: arial, sans-serif;
  }

  table {
    border: "1px";
    border-collapse: collapse;
    width: 100%;
    align: center;
  }

  td, th {
    border: 1px solid;
    text-align: center;
  }

  tr:nth-child(even)
  {
    background-color: #d6d3d3;
  }

  h1 {
    text-align: center;
  }

</style>
<body>
  <h1>[ DATA RENTAL DVD ]</h1>
  <table>
    <thead>
      <tr bgcolor="#b8b8b8" text-align="center" >
        <th>ID Member</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No. Hp</th>
        <th>Judul DVD</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Biaya</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($rental as $datarental)
      <tr>
        <td>{{$datarental->member_id}}</td>
        <td>{{$datarental->nama}}</td>
        <td>{{$datarental->alamat}}</td>
        <td>{{$datarental->no_hp}}</td>
        <td>{{$datarental->judul_dvd}}</td>
        <td>{{$datarental->tanggal_pinjam}}</td>
        <td>{{$datarental->tanggal_kembali}}</td>
        <td>{{$datarental->biaya}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>

@extends('Data.Layouts.Master')
@section('content')

<h1 style="text-align:center">[ DATA RENTAL DVD ]</h1>
<div style="overflow-x:scroll; overflow-y:scroll;">
	<table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>ID Member</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No. Hp</th>
        <th>Judul DVD</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Biaya</th>
				<th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($rental as $datarental)
        {{-- expr --}}
        <tr>
          <td>{{$datarental->member_id}}</td>
          <td>{{$datarental->nama}}</td>
          <td>{{$datarental->alamat}}</td>
          <td>{{$datarental->no_hp}}</td>
          <td>{{$datarental->judul_dvd}}</td>
          <td>{{$datarental->tanggal_pinjam}}</td>
          <td>{{$datarental->tanggal_kembali}}</td>
          <td>{{$datarental->biaya}}</td>
          <td>
            <a href="{{ Route('delete', ['id' => $datarental->id]) }}" class="btn btn-danger btn-xs" >Hapus</a>
						<a href="{{ Route('edit', ['id' => $datarental->id]) }}" class="btn btn-warning btn-xs">Edit</a>
          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
</div>
@endsection

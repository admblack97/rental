@extends('Data.Layouts.Master')
@section('content')
  <form class="form-horizontal" action="{{ Route('submitedit', ['id' => $rental->id]) }}" method="post">
    <fieldset>
      @csrf
      <div class="form-group">
        <label class="col-md-2 control-label" for="ID Member">ID Member</label>
        <div class="col-md-6">
          <input name="member_id" type="text" placeholder="ID Member" class="form-control" value="{{$rental->member_id}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Nama">Nama</label>
        <div class="col-md-6">
          <input name="nama" type="text" placeholder="nama" class="form-control" value="{{$rental->nama}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Alamat">Alamat</label>
        <div class="col-md-6">
          <input name="alamat" type="text" placeholder="Alamat" class="form-control" value="{{$rental->alamat}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="No Hp">No Hp</label>
        <div class="col-md-6">
          <input name="no_hp" type="text" placeholder="No HP" class="form-control" value="{{$rental->no_hp}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Judul DVD">Judul DVD</label>
        <div class="col-md-6">
          <input name="judul_dvd" type="text" placeholder="Judul DVD" class="form-control" value="{{$rental->judul_dvd}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Tanggal Pinjam">Tanggal Pinjam</label>
        <div class="col-md-6">
          <input name="tanggal_pinjam" type="date" placeholder="Tanggal Pinjam" class="form-control" value="{{$rental->tanggal_pinjam}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Tanggal Kembali">Tanggal Kembali</label>
        <div class="col-md-6">
          <input name="tanggal_kembali" type="date" placeholder="Tanggal Kembali" class="form-control" value="{{$rental->tanggal_kembali}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="Biaya">Biaya</label>
        <div class="col-md-6">
          <input name="biaya" type="text" placeholder="Biaya" class="form-control"  value="{{$rental->biaya}}">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8 text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </fieldset>


  </form>
@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rental;

class RentalController extends Controller
{
    public function index()
    {
      return view ('index');
    }

    public function dashboard(){
  		$rentals = Rental::all();
  		return view('Data.dashboard', ['rental' => $rentals]);
  	}

  	public function create(){
  		return view('Data.create');
  	}

  	public function insert(Request $request){
  		$rental = new Rental;
  		$rental->member_id = $request->member_id;
      $rental->nama = $request->nama;
      $rental->alamat = $request->alamat;
      $rental->no_hp = $request->no_hp;
      $rental->judul_dvd = $request->judul_dvd;
      $rental->tanggal_pinjam = $request->tanggal_pinjam;
  		$rental->tanggal_kembali = $request->tanggal_kembali;
  		$rental->biaya = $request->biaya;
  		$rental->save();

  		return redirect(Route('dashboard'))->with('alert-success','Berhasil Menambahkan Data!');
  	}

  	public function delete($id){
  		$rental = Rental::findOrFail($id);

  		$rental->delete();
  		return redirect(Route('dashboard'))->with('success','Data berhasil dihapus');
  	}

  	public function edit($id){
  		$rental = Rental::findOrFail($id);
  		return view('Data.edit', ['rental' => $rental]);
  	}

  	public function submitedit(Request $request, $id){
  		$rental = Rental::findOrFail($id);

      $rental->member_id = $request->member_id;
      $rental->nama = $request->nama;
      $rental->alamat = $request->alamat;
      $rental->no_hp = $request->no_hp;
      $rental->judul_dvd = $request->judul_dvd;
      $rental->tanggal_pinjam = $request->tanggal_pinjam;
      $rental->tanggal_kembali = $request->tanggal_kembali;
      $rental->biaya = $request->biaya;
      $rental->save();

  		return redirect(Route('dashboard'))->with('alert-success','Berhasil Merubah Data!');
  	}
  }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rental;
use PDF;

class RentalController extends Controller
{
    public function index()
    {
      return view ('index');
    }

    // public function search(Request $request){
    //   if ($request->get('search')) {
    //     $rentals = Rental::where('nama', 'LIKE', '%'.$request->get('search').'%')->get();
    //   }else {
    //     $rentals = Rental::all();
    //   }
  	// 	return view('Data.search', ['rental' => $rentals]);
  	// }

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

    //Pencarian
    public function search(Request $request){
  		$search = $request->get('search');
      $result = Rental::where('member_id', 'LIKE', '%'.$search.'%')
                    ->orwhere('nama', 'LIKE', '%'.$search.'%')
                    ->orwhere('alamat', 'LIKE', '%'.$search.'%')
                    ->orwhere('no_hp', 'LIKE', '%'.$search.'%')
                    ->orwhere('judul_dvd', 'LIKE', '%'.$search.'%')
                    ->orwhere('tanggal_pinjam', 'LIKE', '%'.$search.'%')
                    ->orwhere('tanggal_kembali', 'LIKE', '%'.$search.'%')
                    ->orwhere('biaya', 'LIKE', '%'.$search.'%')
                    ->paginate(10);
  		return view('Data.result', compact('search', 'result'));
  	}

    //Cetak Data
    public function print(){
      $rental = Rental::all();
      $pdf=PDF::loadView('Data.print', ['rental' => $rental]);
      return $pdf->setPaper('a3', 'landscape')->stream();
    }
  }

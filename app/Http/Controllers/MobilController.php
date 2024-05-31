<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMobil;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = DataMobil::all();
        return view('admin.mobil.index', compact('mobils'));
    }
    

    public function create()
    {
        return view('admin.mobil.tambahmobil');
    }

    public function edit($id_mobil)
    {
        $mobil = DataMobil::findOrFail($id_mobil);
        return view('admin.mobil.editmobil', compact('mobil'));
    }

    public function update(Request $request, $id_mobil)
    {
        $validatedData = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'kapasitas_penumpang' => 'required|integer',
        ]);

        $mobil = DataMobil::findOrFail($id_mobil);
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->tipe = $request->tipe;
        $mobil->warna = $request->warna;
        $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
        $mobil->bahan_bakar = $request->bahan_bakar;
        $mobil->kecepatan = $request->kecepatan;
        $mobil->harga_sewa_perhari = $request->harga_sewa_perhari;

// local
        if ($request->hasFile('foto_mobil')) {
            $imageName = time() . '.' . $request->foto_mobil->extension();
            $request->foto_mobil->move(public_path('assets/images/mobil'), $imageName);
            $mobil->foto_mobil = 'assets/images/mobil/' . $imageName;
        }
// hosting
        // if ($request->hasFile('foto_mobil')) {
        //     $imageName = time() . '.' . $request->foto_mobil->extension();
        //     $request->foto_mobil->move(public_path('assets/images/mobil'), $imageName);
        //     $mobil->foto_mobil = 'https://mobilink.my.id/assets/images/mobil/' . $imageName;
        // }
        $mobil->save();

        return redirect()->route('admin.mobil')->with('success', 'Mobil berhasil diperbarui');
    }

    private function generateIdMobil()
    {
        $lastId = DataMobil::orderBy('id_mobil', 'desc')->first();

        if (!$lastId) {
            return 'MB0001';
        }

        $lastNumber = intval(substr($lastId->id_mobil, 2));
        $newNumber = $lastNumber + 1;
        $newIdMobil = 'MB' . sprintf('%04d', $newNumber);

        $existingId = DataMobil::where('id_mobil', $newIdMobil)->exists();
        if ($existingId) {
            return $this->generateIdMobil();
        }

        return $newIdMobil;
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'kapasitas_penumpang' => 'required|integer',
            'warna' => 'required|string|max:255',
            'harga_sewa_perhari' => 'required|numeric',
            'tipe' => 'required|string|max:255',
            'bahan_bakar' => 'required|string|max:255',
            'kecepatan' => 'required|string|max:255',
            'foto_mobil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'username' => 'required|string|max:15',
        ]);
// local
        if ($request->hasFile('foto_mobil')) {
            $imageName = time() . '.' . $request->foto_mobil->extension();
            $request->foto_mobil->move(public_path('assets/images/mobil'), $imageName);
            $validatedData['foto_mobil'] = 'assets/images/mobil/' . $imageName;
        }
// hosting
        // if ($request->hasFile('foto_mobil')) {
        //     $imageName = time() . '.' . $request->foto_mobil->extension();
        //     $request->foto_mobil->move(public_path('assets/images/mobil'), $imageName);
        //     $validatedData['foto_mobil'] = 'https://mobilink.my.id/assets/images/mobil/' . $imageName;
        // }
        $validatedData['id_mobil'] = $this->generateIdMobil();

        DataMobil::create($validatedData);

        return redirect()->route('admin.mobil')->with('success', 'Mobil berhasil ditambahkan');
    }

    public function hapus($id_mobil)
    {
        $mobil = DataMobil::where('id_mobil', $id_mobil)->firstOrFail();

        if (file_exists(public_path($mobil->foto_mobil))) {
            unlink(public_path($mobil->foto_mobil));
        }

        $mobil->delete();

        return redirect()->route('admin.mobil')->with('success', 'Mobil berhasil dihapus');
    }
}

<?php

// ConsultationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    public function konsultasi1()
    {
        return view('konsultasi1');
    }

    public function konsultasi2(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required',
        ]);
    
        // Simpan data di database
        $consultation = new Consultation();
        $consultation->fill($validatedData);
        $consultation->save();
    
        // Kembalikan id consultation untuk digunakan di konsultasi3
        return redirect()->route('konsultasi3', ['id' => $consultation->id]);
    }

    public function konsultasi3($id)
    {
        // Validasi data input
        $validatedData = request()->validate([
            'gejala' => 'required',
            'tanggal' => 'required',
            'keluhan' => 'required',
        ]);
    
        // Simpan data di database
        $consultation = Consultation::find($id);
        $consultation->fill($validatedData);
        $consultation->save();
    
        return redirect()->route('konsultasi4', ['id' => $id]);
    }

    public function konsultasi4($id)
    {
        // Validasi data input
        $validatedData = request()->validate([
            'tanggal' => 'required',
            'penjelasan' => 'required',
        ]);
    
        // Simpan data di database
        $consultation = Consultation::find($id);
        $consultation->fill($validatedData);
        $consultation->save();
    
        return redirect()->route('home-login');
    }
}
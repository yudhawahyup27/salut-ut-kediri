<?php

namespace App\Http\Controllers;

use App\Models\profile_setting;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function global()
    {
        // ambil data pertama, kalau kosong buat default
        $profile = profile_setting::first() ?? profile_setting::create([]);

        return view('pages.dashboard.landing.global.form', compact('profile'));
    }

    public function storeOrUpdateGlobal(Request $request)
    {
        $profile = profile_setting::first() ?? new profile_setting();

        $data = $request->validate([
            'email' => 'nullable|email',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'whatsapp' => 'nullable|string',
            'text_wa' => 'nullable|string',
            'alamat' => 'nullable|string',
            'instagram' => 'nullable|string',
            'jurusan' => 'nullable|integer',
            'mahasiswa' => 'nullable|integer',
            'tahun_berdiri' => 'nullable|integer',
            'link_daftar' => 'nullable|string',
        ]);

        // upload logo
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('profile', 'public');
        }

        $profile->fill($data)->save();

        return redirect()->route('dashboard.landing.global.index')
            ->with('success', 'Data global berhasil disimpan!');
    }
}

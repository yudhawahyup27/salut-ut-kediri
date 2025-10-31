<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Tampilkan daftar partner.
     */
    public function index()
    {
         $partners = Partner::orderBy('created_at', 'desc')->paginate(10);

        return view('pages.dashboard.landing.partner.index', compact('partners'));
    }

    /**
     * Halaman create/edit partner (gabung satu form).
     */
    public function manage($id = null)
    {
        $partner = $id ? Partner::findOrFail($id) : new Partner();
        return view('pages.dashboard.landing.partner.form', compact('partner'));
    }

    /**
     * Simpan partner baru.
     */
 public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'nullable|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $data = $request->only(['name', 'website', 'description', 'status']);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('partners', 'public');
        }

        Partner::create($data);

        return redirect()->route('partners.index')
            ->with('success', 'Partner berhasil ditambahkan.');
    }

    /**
     * Update partner.
     */
    public function updatePartner(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'nullable|url',
            'status' => 'required|in:active,inactive',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'nullable|string',
        ]);

        $data = $request->only(['name', 'website', 'description', 'status']);

        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
                Storage::disk('public')->delete($partner->logo);
            }
            $data['logo'] = $request->file('logo')->store('partners', 'public');
        }

        $partner->update($data);

        return redirect()->route('partners.index')
            ->with('success', 'Partner berhasil diperbarui.');
    }

    /**
     * Hapus partner.
     */
    public function deletePartner($id)
    {
        $partner = Partner::findOrFail($id);

        if ($partner->logo && Storage::disk('public')->exists($partner->logo)) {
            Storage::disk('public')->delete($partner->logo);
        }

        $partner->delete();

        return redirect()->route('partners.index')
            ->with('success', 'Partner berhasil dihapus.');
    }
}

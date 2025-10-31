<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use App\Models\LayananUnggulanSetting;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LayananUnggulanController extends Controller
{
    public function layananUnggulan()
    {
        $data = LayananUnggulanSetting::all();
        return view('pages.dashboard.landing.layanan-unggulan.index', compact('data'));
    }




    public function manage($id = null)
    {
        $data = $id ? LayananUnggulanSetting::findOrFail($id) : new LayananUnggulanSetting();
        return view('pages.dashboard.landing.layanan-unggulan.form', compact('data'));
    }

    public function storeLayananUnggulan(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        LayananUnggulanSetting::create($validated);

        return redirect()->route('LayananUnggulan.index')
            ->with('success', 'Layanan Unggulan created successfully.');
    }

    public function updateLayananUnggulan(Request $request, $id)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $layananUnggulan = LayananUnggulanSetting::findOrFail($id);
        $layananUnggulan->update($validated);

        return redirect()->route('LayananUnggulan.index')
            ->with('success', 'Layanan Unggulan updated successfully.');
    }
    public function deleteLayananUnggulan($id)
    {
        $layananUnggulan = LayananUnggulanSetting::findOrFail($id);
        $layananUnggulan->delete();

        return redirect()->route('LayananUnggulan.index')
            ->with('success', 'Layanan Unggulan deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use App\Models\AboutSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function about()
    {
        $about = AboutSetting::first();
        return view('pages.dashboard.landing.about.index', compact('about'));
    }

    public function storeOrUpdateAbout(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // pisahkan data teks dengan image
        $data = $validated;
        unset($data['image']);

        $about = AboutSetting::first();

        // kalau ada file image
        if ($request->hasFile('image')) {
            // hapus image lama kalau ada
            if ($about && $about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }

            // upload baru
            $data['image'] = $request->file('image')->store('about', 'public');
        }

        if ($about) {
            $about->update($data);
        } else {
            AboutSetting::create($data);
        }

        return redirect()->back()->with('success', 'About settings saved successfully.');
    }
}

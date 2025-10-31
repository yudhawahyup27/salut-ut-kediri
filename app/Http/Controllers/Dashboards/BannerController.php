<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use App\Models\BannerSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{

    public function banner()
    {
        $banners = BannerSetting::first();
        return view('pages.dashboard.landing.banner.index', compact('banners'));
    }

    public function storeOrUpdateBanner(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_chosen1' => 'nullable|string|max:255',
            'desc_chosen1' => 'nullable|string',
            'title_chosen2' => 'nullable|string|max:255',
            'desc_chosen2' => 'nullable|string',
            'title_chosen3' => 'nullable|string|max:255',
            'desc_chosen3' => 'nullable|string',
            'title_chosen4' => 'nullable|string|max:255',
            'desc_chosen4' => 'nullable|string',
        ]);

        // pisahkan data teks dengan image
        $data = $validated;
        unset($data['image']);

        $banner = BannerSetting::first();

        // kalau ada file image
        if ($request->hasFile('image')) {
            // hapus image lama kalau ada
            if ($banner && $banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }

            // upload baru
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        if ($banner) {
            $banner->update($data);
        } else {
            BannerSetting::create($data);
        }

        return redirect()->back()->with('success', 'Banner settings saved successfully.');
    }
}

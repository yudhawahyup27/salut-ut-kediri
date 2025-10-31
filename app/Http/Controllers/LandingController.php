<?php

namespace App\Http\Controllers;

use App\Models\AboutSetting;
use App\Models\BannerSetting;
use App\Models\LayananUnggulanSetting;
use App\Models\NewsAndEvents;
use App\Models\partner;
use App\Models\profile_setting;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $global = profile_setting::first();
        $banner = BannerSetting::first();
        $about = AboutSetting::first();
        $partners = partner::where('status', 'active')->get();
        $layananUnggulan = LayananUnggulanSetting::all();
        $news = NewsAndEvents::where('category', 'news')
            ->where('status', 'published')
            ->latest()
            ->take(5)
            ->get();
        $event = NewsAndEvents::where('category', 'event')
            ->where('status', 'published')
            ->latest()
            ->take(5)
            ->get();
        return view('pages.index', compact('news', 'event', 'banner', 'about', 'layananUnggulan', 'global', 'partners'));
    }

    public function indexnews(Request $request)
    {
        $query = NewsAndEvents::query()
            ->where('category', 'news')
            ->where('status', 'published');

        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $newsEvents = $query->latest()->paginate(9)->withQueryString();

        return view('pages.landing.berita.index', [
            'newsEvents' => $newsEvents,
            'type' => 'news'
        ]);
    }

    public function indexevent(Request $request)
    {
        $query = NewsAndEvents::query()
            ->where('category', 'event')
            ->where('status', 'published');

        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $newsEvents = $query->latest()->paginate(9)->withQueryString();

        return view('pages.landing.berita.index', [
            'newsEvents' => $newsEvents,
            'type' => 'event'
        ]);
    }
    public function showNews($slug)
    {
        $news = NewsAndEvents::where('slug', $slug)
            ->where('category', 'news')
            ->where('status', 'published')
            ->firstOrFail();

        return view('pages.landing.berita.detail', compact('news'));
    }
    public function showevent($slug)
    {
        $news = NewsAndEvents::where('slug', $slug)
            ->where('category', 'event')
            ->where('status', 'published')
            ->firstOrFail();

        return view('pages.landing.events.detail', compact('news'));
    }

    public function about()
    {
        $about = AboutSetting::first();
        $profile = profile_setting::first();
        return view('pages.landing.about.index', compact('about', 'profile'));
    }
}

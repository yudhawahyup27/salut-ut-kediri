<?php

namespace App\Http\Controllers;

use App\Models\BannerSetting;
use App\Models\profile_setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // dd($user);
        $profile = profile_setting::get()->first();
        return view('pages.dashboard.index', compact('user','profile'));
    }

    // Landing

}

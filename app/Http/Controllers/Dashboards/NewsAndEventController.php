<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use App\Models\NewsAndEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsAndEventController extends Controller
{
    public function newsIndex()
    {
        $data = NewsAndEvents::where('category', 'news')
            ->latest()
            ->paginate(10);

        return view('pages.dashboard.landing.news-and-events.news.index', compact('data'));
    }

    // List khusus Event
    public function eventsIndex()
    {
        $data = NewsAndEvents::where('category', 'event')
            ->latest()
            ->paginate(10);

        return view('pages.dashboard.landing.news-and-events.events.index', compact('data'));
    }

    public function manage($id = null)
    {
        $item = $id ? NewsAndEvents::findOrFail($id) : new NewsAndEvents();
        return view('pages.dashboard.landing.news-and-events.form', compact('item'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|in:news,event',
            'status' => 'required|in:published,draft,archived',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = NewsAndEvents::find($request->id);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category,
            'category_event' => $request->category === 'event' ? $request->category_event : null,
            'status' => $request->status,
            'slug' => Str::slug($request->title),
        ];

        if ($request->hasFile('image')) {
            // hapus foto lama jika ada
            if ($item && $item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }

            $filename = time() . '-' . Str::slug($request->title) . '.' . $request->file('image')->extension();
            $path = $request->file('image')->storeAs('uploads/news-events', $filename, 'public');
            $data['image'] = $path;
        }

        NewsAndEvents::updateOrCreate(['id' => $request->id], $data);

        return redirect()->route(
            $request->category === 'news' ? 'news.index' : 'events.index'
        )->with('success', 'Data berhasil disimpan!');
    }


    // Delete
    public function destroy($id)
    {
        $item = NewsAndEvents::findOrFail($id);

        // hapus foto kalau ada
        if ($item->image && \Storage::disk('public')->exists($item->image)) {
            \Storage::disk('public')->delete($item->image);
        }

        $category = $item->category;
        $item->delete();

        return redirect()->route(
            $category === 'news' ? 'news.index' : 'events.index'
        )->with('success', 'Data berhasil dihapus!');
    }


}

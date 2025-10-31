<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
public function upload(Request $request)
{
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $path = $file->store('uploads/editor', 'public');
        return response()->json(['success' => true, 'file' => asset('storage/public_html/storage/' . $path)]);
    }
    return response()->json(['success' => false, 'message' => 'No file uploaded'], 400);
}

}

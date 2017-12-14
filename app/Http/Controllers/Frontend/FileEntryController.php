<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FileEntry;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;


use Illuminate\Http\Request;

class FileEntryController extends Controller
{
    public function get(Request $request, $filename) {
//        dd($request->toArray());
        $entry = FileEntry::where('filename', '=', $filename)->firstOrFail();
		$file = Storage::disk('local')->get($entry->filename);
		return response($file, 200)->header('Content-Type', $entry->mime);
    }
}

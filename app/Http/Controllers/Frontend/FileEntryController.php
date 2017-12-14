<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class FileEntryController extends Controller
{
    public function get(Request $request, $filename) {
//        dd($request->ajax());
        $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
		$file = Storage::disk('local')->get($entry->filename);
		return response($file, 200)->header('Content-Type', $entry->mime);
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\FileEntry;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller {

    public function index() {
        $partners = Partner::with('image')->get();
        return view('backend.partners.index', compact('partners'));
    }

    public function create() {
        return view('backend.partners.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'alt' => 'required'
        ]);
        $partner = new Partner;
        $partner->name = $request->name;
        $partner->alt = $request->alt;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($file->getFileName() . '.' . $extension, File::get($file));
            $entry = new Fileentry();
            $entry->mime = $file->getClientMimeType();
            $entry->original_filename = $file->getClientOriginalName();
            $entry->filename = $file->getFilename() . '.' . $extension;
            $entry->save();
            $entryid = $entry->id;
            $partner->file_entry_id = $entryid;
        }
        $partner->save();
        return redirect()->route('admin.partners.index');
    }

    public function show($id) {
        $partner = Partner::where('id', $id)->with('image')->first();
        return view('backend.partners.show', compact('partner'));
    }

    public function edit($id) {
        $partner = Partner::where('id', $id)->with('image')->first();
        return view('backend.partners.create', compact('partner'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required',
            'alt' => 'required'
        ]);

        $partner = Partner::with('image')->find($id);

        $partner->name = $request->name;
        $partner->alt = $request->alt;

        if ($request->hasFile('file') && $request->has('file_id')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->delete($partner->image->filename);
            Storage::disk('local')->put($file->getFileName() . '.' . $extension, File::get($file));
            $entry = FileEntry::find($request->file_id);
            $entry->mime = $file->getClientMimeType();
            $entry->original_filename = $file->getClientOriginalName();
            $entry->filename = $file->getFilename() . '.' . $extension;
            $entry->save();
        }
        $partner->save();
        return redirect()->route('admin.partners.index');
    }

    public function destroy($id) {
        Partner::where('id', $id)->delete();
        return back();
    }

}

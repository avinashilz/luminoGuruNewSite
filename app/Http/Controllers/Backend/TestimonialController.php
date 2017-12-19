<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\FileEntry;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller {

    public function index() {
        $testimonials = Testimonial::with('image')->get();
        return view('backend.testimonials.index', compact('testimonials'));
    }

    public function create() {
        return view('backend.testimonials.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'description' => 'required',
            'client_name' => 'required',
            'client_company_name' => 'required'
        ]);

        $testimonial = new Testimonial;
        $testimonial->description = $request->description;
        $testimonial->client_name = $request->client_name;
        $testimonial->client_company_name = $request->client_company_name;

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
        }
        $testimonial->file_entry_id = $entryid;
        $testimonial->save();
        return redirect()->route('admin.testimonials.index');
    }

    public function show($id) {
        $testimonial = Testimonial::where('id', $id)->with('image')->first();
        return view('backend.testimonials.show', compact('testimonial'));
    }

    public function edit($id) {
        $testimonial = Testimonial::where('id', $id)->with('image')->first();
        return view('backend.testimonials.create', compact('testimonial'));
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'description' => 'required',
            'client_name' => 'required',
            'client_company_name' => 'required'
        ]);

        $testimonial = Testimonial::with('image')->find($id);
        $testimonial->description = $request->description;
        $testimonial->client_name = $request->client_name;
        $testimonial->client_company_name = $request->client_company_name;

       if ($request->hasFile('file') && $request->has('file_id')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->delete($testimonial->image->filename);
            Storage::disk('local')->put($file->getFileName() . '.' . $extension, File::get($file));
            $entry = FileEntry::find($request->file_id);
            $entry->mime = $file->getClientMimeType();
            $entry->original_filename = $file->getClientOriginalName();
            $entry->filename = $file->getFilename() . '.' . $extension;
            $entry->save();
        }
        $testimonial->save();
        return redirect()->route('admin.testimonials.index');
    }

    public function destroy($id) {
        Testimonial::where('id', $id)->delete();

        return back();
    }

}

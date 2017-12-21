<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SlideImage;
use App\Services\FileUploadService;

class SliderImageController extends Controller
{
    public function index() {
        
        $sliderImages = SlideImage::orderBy('order')->get();
        return view('backend.slider-images.index', compact('sliderImages'));
    
    }
    
    public function create() {
        
        return view('backend.slider-images.create');
    
    }

    public function store(Request $request) {
         $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'link_hrf' => 'required',
            'link_text' => 'required',
            'order' => 'required'
        ]);
         
         $slideImage = new SlideImage;
         $slideImage->title = $request->title;
         $slideImage->description = $request->description;
         $slideImage->link_hrf = $request->link_hrf;
         $slideImage->link_text = $request->link_text;
         $slideImage->order = $request->order;

        if ($request->hasFile('file')) {
            $fileUploadService = new FileUploadService();
            $slideImage->file_entry_id = $fileUploadService->uploadFile($request->file('file'));
        }

        $slideImage->save();
         
        
        
        return redirect()->route('admin.slider-images.index');
    }

    public function show($id) {
        $sliderImage = SlideImage::where('id', $id)->first();
        return view('backend.slider-image.show', compact('sliderImage'));
    }

    public function edit($id) {
        $sliderImage = SlideImage::where('id', $id)->with('image')->first();
        return view('backend.slider-images.create', compact('sliderImage'));
    }

    public function update(Request $request, $id) {
         $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'link_hrf' => 'required',
            'link_text' => 'required',
            'order' => 'required'
        ]);

         $slideImage = SlideImage::with('image')->find($id);
         $slideImage->title = $request->title;
         $slideImage->description = $request->description;
         $slideImage->link_hrf = $request->link_hrf;
         $slideImage->link_text = $request->link_text;
         $slideImage->order = $request->order;

        if ($request->hasFile('file')) {
            $fileUploadService = new FileUploadService();
            $slideImage->file_entry_id = $fileUploadService->replaceFile($request->file('file'), $slideImage->image->filename);
        }

        $slideImage->save();

        return redirect()->route('admin.slider-images.edit', $slideImage->id);
    }

    public function destroy($id) {
        SlideImage::where('id', $id)->delete();

        return back();
    }
}

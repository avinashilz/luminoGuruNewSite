<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SlideImage; 

class SliderImageController extends Controller
{
    public function index() {
        
        $sliderImages = SlideImage::get();
        return view('backend.slider-image.index', compact('$sliderImages'));
    
    }
    
    public function create() {
        
        return view('backend.slider-image.create');
    
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
         
         
        
        
        return redirect()->route('admin.slide_images.index');
    }

    public function show($id) {
        $sliderImage = SlideImage::where('id', $id)->first();
        return view('backend.slider-image.show', compact('sliderImage'));
    }

    public function edit($id) {
        $sliderImage = SlideImage::where('id', $id)->first();
        return view('backend.slider-image.edit', compact('sliderImage'));
    }

    public function update(Request $request, $id) {
        return redirect()->route('admin.slide_images.index');
    }

    public function destroy($id) {
        SlideImage::where('id', $id)->delete();

        return back();
    }
}

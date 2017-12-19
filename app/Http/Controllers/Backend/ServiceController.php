<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('serviceCategory')->get();
        return view('backend.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serviceCategories = ServiceCategory::get()->pluck('category', 'id');
        return view('backend.services.create', compact('serviceCategories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'service_category_id' => 'required',
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->service_category_id = $request->service_category_id;

        $service->save();

        return redirect()->route('admin.services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $serviceCategories = ServiceCategory::get()->pluck('category', 'id');
        return view('backend.services.create', compact('service', 'serviceCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'service_category_id' => 'required',
        ]);

        $service = Service::find($id);
        $service->title = $request->title;
        $service->service_category_id = $request->service_category_id;

        $service->save();

        return redirect()->route('admin.services.edit', $service->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::where('id', $id)->delete();

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.back.sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.back.sliders.create');
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
            'path' => 'required',
            'status' => 'required'
        ]);

        Slider::create($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully added',
        ]);

        return redirect()->route('admin.sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        
        return view('pages.back.sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);

        return view('pages.back.sliders.edit', compact('slider'));
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
        $slider = Slider::findOrfail($id);

        $this->validate($request, [
            'title' => 'required',
            'path' => 'required',
            'status' => 'required'
        ]);

        $slider->update($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully updated',
        ]);

        return redirect()->route('admin.sliders.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Slider::destroy($id)) return redirect()->back();
        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully deleted',
        ]);
        return redirect()->route('admin.sliders.index');
    }

    public function dataTable()
    {
        $sliders = Slider::query();
        return Datatables::of($sliders)
            ->addColumn('status', function ($sliders) {
                return $sliders->status == 1 ? 'Publish' : 'Draft';
            })
            ->addColumn('image', function($sliders) {
                return '<img class="rounded-square" width="100" height="50" src="'. url($sliders->path) .'" alt="">';
            })
            ->addColumn('action', function($sliders){
                return view('layouts.back.partials._action', [
                    'model' => $sliders->id,
                    'form_url' => route('admin.sliders.destroy', $sliders->id),
                    'edit_url' => route('admin.sliders.edit', $sliders->id),
                    'show_url' => route('admin.sliders.show', $sliders->id),
                ]);
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}

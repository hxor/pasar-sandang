<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SponsorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.back.sponsors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Sponsor::sponsorType();
        return view('pages.back.sponsors.create', compact('type'));
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
            'type' => 'required',
            'status' => 'required'
        ]);

        Sponsor::create($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully added',
        ]);

        return redirect()->route('admin.sponsors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        
        return view('pages.back.sponsors.show', compact('sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $type = Sponsor::sponsorType();
        return view('pages.back.sponsors.edit', compact('type', 'sponsor'));
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
        $sponsor = Sponsor::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'path' => 'required',
            'type' => 'required',
            'status' => 'required'
        ]);

        $sponsor->update($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully updated',
        ]);

        return redirect()->route('admin.sponsors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Sponsor::destroy($id)) return redirect()->back();
        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully deleted',
        ]);
        return redirect()->route('admin.sponsors.index');
    }

    public function dataTable()
    {
        $sponsors = Sponsor::query();
        return Datatables::of($sponsors)
            ->addColumn('status', function ($sponsors) {
                return $sponsors->status == 1 ? 'Publish' : 'Draft';
            })
            ->addColumn('image', function($sponsors) {
                return '<img class="rounded-square" width="100" height="50" src="'. url($sponsors->path) .'" alt="">';
            })
            ->addColumn('action', function($sponsors){
                return view('layouts.back.partials._action', [
                    'model' => $sponsors->id,
                    'form_url' => route('admin.sponsors.destroy', $sponsors->id),
                    'edit_url' => route('admin.sponsors.edit', $sponsors->id),
                    'show_url' => route('admin.sponsors.show', $sponsors->id),
                ]);
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }
}

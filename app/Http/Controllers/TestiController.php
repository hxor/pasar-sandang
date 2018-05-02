<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.back.testi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.back.testi.create');
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
            'name' => 'required',
            'title' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);

        Testimony::create($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully added',
        ]);

        return redirect()->route('admin.testi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testi = Testimony::findOrFail($id);
        return view('pages.back.testi.show', compact('testi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testi = Testimony::findOrFail($id);
        return view('pages.back.testi.edit', compact('testi'));
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
        $testi = Testimony::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);

        $testi->update($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully updated',
        ]);

        return redirect()->route('admin.testi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Testimony::destroy($id)) return redirect()->back();
        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully deleted',
        ]);
        return redirect()->route('admin.testi.index');
    }

    public function dataTable()
    {
        $testi = Testimony::query();
        return Datatables::of($testi)
            ->addColumn('status', function ($testi) {
                return $testi->status == 1 ? 'Publish' : 'Draft';
            })
            ->addColumn('action', function($testi){
                return view('layouts.back.partials._action', [
                    'model' => $testi->id,
                    'form_url' => route('admin.testi.destroy', $testi->id),
                    'edit_url' => route('admin.testi.edit', $testi->id),
                    'show_url' => route('admin.testi.show', $testi->id),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}

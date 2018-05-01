<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.back.bank.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.back.bank.create');
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
            'number' => 'required',
            'owner' => 'required',
            'status' => 'required'
        ]);

        Bank::create($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully added',
        ]);

        return redirect()->route('admin.bank.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bank = Bank::findOrFail($id);
        return view('pages.back.bank.show', compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank = Bank::findOrFail($id);
        return view('pages.back.bank.edit', compact('bank'));
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
        $bank = Bank::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'number' => 'required',
            'owner' => 'required',
            'status' => 'required'
        ]);

        $bank->update($request->all());

        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully updated',
        ]);

        return redirect()->route('admin.bank.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Bank::destroy($id)) return redirect()->back();
        notify()->flash('Done!', 'success', [
            'timer' => 1500,
            'text' => 'Data successfully deleted',
        ]);
        return redirect()->route('admin.bank.index');
    }

    public function dataTable()
    {
        $bank = Bank::query();
        return Datatables::of($bank)
            ->addColumn('status', function ($bank) {
                return $bank->status == 1 ? 'Publish' : 'Draft';
            })
            ->addColumn('action', function($bank){
                return view('layouts.back.partials._action', [
                    'model' => $bank->id,
                    'form_url' => route('admin.bank.destroy', $bank->id),
                    'edit_url' => route('admin.bank.edit', $bank->id),
                    'show_url' => route('admin.bank.show', $bank->id),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}

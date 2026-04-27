<?php

namespace App\Http\Controllers;

use App\Models\Mata_Kuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mata_kuliah.index', [
            'mata_kuliah' => Mata_Kuliah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mata_kuliah.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        Mata_Kuliah::create($data);

        return redirect()->action([MataKuliahController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Mata_Kuliah::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('mata_kuliah.edit', [
            'mata_kuliah' => Mata_Kuliah::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', 'id', '_method');

        Mata_Kuliah::find($id)->update($data);

        return redirect()->action([MataKuliahController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Mata_Kuliah::find($id)->delete();

        return redirect()->action([MataKuliahController::class, 'index']);
    }    
}

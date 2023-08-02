<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Karyawan;
 
class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::orderBy('created_at', 'DESC')->get();
  
        return view('karyawans.index', compact('karyawan'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawans.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Karyawan::create($request->all());
 
        return redirect()->route('karyawans')->with('success', 'Karyawan added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);
  
        return view('karyawans.show', compact('karyawan'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);
  
        return view('karyawans.edit', compact('karyawan'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $karyawan = Karyawan::findOrFail($id);
  
        $karyawan->update($request->all());
  
        return redirect()->route('karyawans')->with('success', 'karyawan updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);
  
        $karyawan->delete();
  
        return redirect()->route('karyawans')->with('success', 'karyawan deleted successfully');
    }
}
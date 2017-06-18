<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\barang;
use Illuminate\Http\Request;
use Session;

class barangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $barangs = barang::where('namabarang', 'LIKE', "%$keyword%")
                ->orWhere('id', 'LIKE', "%$keyword%")
                ->orWhere('tipe', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi', 'LIKE', "%$keyword%")
                ->orWhere('dimensi', 'LIKE', "%$keyword%")
                ->orWhere('berat', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $barangs = barang::paginate($perPage);
        }

        return view('barangs.index', compact('barangs'));
    }

     public function userbarang(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $barangs = barang::where('namabarang', 'LIKE', "%$keyword%")
                ->orWhere('id', 'LIKE', "%$keyword%")
                ->orWhere('tipe', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi', 'LIKE', "%$keyword%")
                ->orWhere('dimensi', 'LIKE', "%$keyword%")
                ->orWhere('berat', 'LIKE', "%$keyword%")
                ->orWhere('foto', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $barangs = barang::paginate($perPage);
        }

        return view('barangs.userbarang', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        barang::create($requestData);

        Session::flash('flash_message', 'barang added!');

        return redirect('barangs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $barang = barang::findOrFail($id);

        return view('barangs.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $barang = barang::findOrFail($id);

        return view('barangs.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $barang = barang::findOrFail($id);
        $barang->update($requestData);

        Session::flash('flash_message', 'barang updated!');

        return redirect('barangs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        barang::destroy($id);

        Session::flash('flash_message', 'barang deleted!');

        return redirect('barangs');
    }

    public function showUploadFile(Request $request)
    {
              $file = $request->file('image');
           
              //Display File Name
              echo 'File Name: '.$file->getClientOriginalName();
              echo '<br>';
           
              //Display File Extension
              echo 'File Extension: '.$file->getClientOriginalExtension();
              echo '<br>';
           
              //Display File Real Path
              echo 'File Real Path: '.$file->getRealPath();
              echo '<br>';
           
              //Display File Size
              echo 'File Size: '.$file->getSize();
              echo '<br>';
           
              //Display File Mime Type
              echo 'File Mime Type: '.$file->getMimeType();
           
              //Move Uploaded File
              $destinationPath = 'uploads';
              $file->move($destinationPath,$file->getClientOriginalName());
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Keunggulan;

use Illuminate\Http\Request;

class KeunggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Keunggulan::all();
        return view("admin.unggul.unggulindex",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.unggul.unggulcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        Keunggulan::create($data);
        return redirect()->route('unggul.index');
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
        
        //  $data = Product::findOrFail($id);

        // return view('admin.product.productedit')->with([
        //     'data' =>$data
        // ]);

        $data = Keunggulan::findOrFail($id);
        
        return view('admin.unggul.ungguledit')->with([
            'data' =>$data
        ]);
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
        //
        $data = Keunggulan::where('id',$id);
        $data->update(array(
            'keunggulan' => $request->input('keunggulan')
            // 'foto' => $request->input('foto')
            // 'phone' => $request->input('phone')
            // 'address' => $request->input('address'),
            // 'linkfb' => $request->input('fb'),
            // 'linkyt'  => $request->input('yt'),
            // 'linkig'  => $request->input('ig')
        ));
        return redirect('unggul')->with(['success' => 'Data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Keunggulan::findOrFail($id);
        $item->delete();

        return redirect()->route('unggul.index');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Transfer;

use App\Http\Traits\GeneralTrait;


use Illuminate\Http\Request;

class TransferController extends Controller
{

    use GeneralTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Transfer::all();
        return view("admin.transfer.transferindex",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.transfer.transfercreate');
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
         $gambar = $this->UploadTransfer('images/transfer/',$request,'gambar');

        Transfer::create(array(
                'keterangan' => $request->input('ket'),
                'gambar' => $gambar
                
        ));
        return redirect()->route('transfer.index');
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
         $data = Transfer::findOrFail($id);

        return view('admin.transfer.transferedit')->with([
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
         if($request->file('gambar')){
            $gambar = $this->UploadTransfer('images/transfer/',$request,'gambar');
            Transfer::where('id',$id)->update(array(
                'foto' => $gambar              
            ));
        }

      
        //
        // $foto = $this->UploadFoto('images/produk/',$request,'foto');  //upload foto tidak pakai validasi

        $data = Transfer::where('id',$id);
        $data->update(array(
            'keterangan' => $request->input('keterangan')
            
        ));
        return redirect('transfer')->with(['success' => 'Data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transfer::FindOrFail($id);
        $item->delete();

        return redirect()->route("transfer.index");
        
    }
}

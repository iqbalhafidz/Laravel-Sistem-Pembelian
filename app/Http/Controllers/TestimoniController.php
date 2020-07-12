<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;

use App\Http\Traits\GeneralTrait;
use Illuminate\Http\Request;

class TestimoniController extends Controller
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
        $data = Testimoni::all();
        return view("admin.testim.testiindex",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testim.testicreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gambar = $this->UploadTesti('images/testimoni/',$request,'gambar');

        Testimoni::create(array(
                'keterangan' => $request->input('keterangan'),
                'gambar' => $gambar
                
        ));

        return redirect()->route('testi.index');
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
        //
        $data = Testimoni::findOrFail($id);

        return view('admin.testim.testiedit')->with([
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
            $gambar = $this->UploadTesti('images/testimoni/',$request,'gambar');
            Testimoni::where('id',$id)->update(array(
                'gambar' => $gambar              
            ));
        }


        //
        $data = Testimoni::where('id',$id);
        $data->update(array(
            'keterangan' => $request->input('keterangan')
            // 'foto' => $request->input('foto')
            // 'phone' => $request->input('phone')
            // 'address' => $request->input('address'),
            // 'linkfb' => $request->input('fb'),
            // 'linkyt'  => $request->input('yt'),
            // 'linkig'  => $request->input('ig')
        ));
        return redirect('testi')->with(['success' => 'Data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Testimoni::findOrFail($id);
        $item->delete();

        return redirect()->route('testi.index');
    }
}

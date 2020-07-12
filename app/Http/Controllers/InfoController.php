<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Informasi;
use App\Http\Traits\GeneralTrait;

class InfoController extends Controller
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
        $data = Informasi::all();
        
        return view("admin.info.infoindex",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
         //dari aang
        // $data = Information::findOrFail($id);
        // return view('admin.info.infoedit',compact('data'));

        $data = Informasi::findOrFail($id);

        return view('admin.info.infoedit')->with([
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
        
        //  if($request->file('logo')){
        //     $logo = $this->UploadLogo('images/informasi/',$request,'logo');
        //     Informasi::where('id',$id)->update(array(
        //         'logo' => $logo              
        //     ));
        // }

        // if($request->file('bg')){
        //     $bg = $this->UploadBg('images/informasi/',$request,'bg');
        //     Informasi::where('id',$id)->update(array(
        //         'bg' => $bg              
        //     ));
        // }

        // $logo = $this->UploadLogo('images/informasi/',$request,'logo');
        // $bg = $this->UploadBg('images/informasi/',$request,'bg');

        $data = Informasi::where('id',$id);
        $data->update(array(
            'judul' => $request->input('judul'),
            'tagline' => $request->input('tagline'),
            // 'logo' => $logo,
            // 'bg' => $bg,
            'alamat' => $request->input('alamat'),
            'tlpn' => $request->input('tlpn'),
            'hp' => $request->input('hp'),
            'email' => $request->input('email'),
            'linkfb' => $request->input('linkfb'),
            'linkig' => $request->input('linkig')
            
            ));
        return redirect('info')->with(['success' => 'Data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


use App\Http\Traits\GeneralTrait;
use App\Http\Requests\ProductRequest;

use Illuminate\Http\Request;

class ProductController extends Controller
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
        $data = Product::all();
        return view("admin.product.productindex",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.product.productcreate');
    
        
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
        // $data['slug'] = str::slug($request->name); // str::slug menggubah karakter menjadi huruf kecil dan spasi
        // $data = $request->all();
        

        $foto = $this->UploadFoto('images/produk/',$request,'foto');
 

        Product::create(array(
                'nama' => $request->input('nama'),
                'keterangan' => $request->input('keterangan'),
                'foto' => $foto, 
                'harga' => $request->input('harga'),
                'diskon' => $request->input('diskon')
                
        ));

        
        
        // $data ['foto']= $request->file('foto')->store('assets/product','public');

        // Product::create($data);
        return redirect()->route('product.index');
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
        //  $data = Product::findOrFail($id);

        // return view('admin.product.productedit')->with([
        //     'data' =>$data
        // ]);

        $data = Product::findOrFail($id);

        return view('admin.product.productedit')->with([
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

         if($request->file('foto')){
            $foto = $this->UploadFoto('images/about/',$request,'logo');
            Product::where('id',$id)->update(array(
                'foto' => $foto              
            ));
        }

      
        //
        // $foto = $this->UploadFoto('images/produk/',$request,'foto');  //upload foto tidak pakai validasi

        $data = Product::where('id',$id);
        $data->update(array(
            'nama' => $request->input('nama'),
            'keterangan' => $request->input('keterangan'),
            'harga' => $request->input('harga'),
            'diskon' => $request->input('diskon')
            // 'foto' => $foto  //upload foto tidak pakai validasi
                
            // 'foto' => $request->input('foto')
            // 'phone' => $request->input('phone')
            // 'address' => $request->input('address'),
            // 'linkfb' => $request->input('fb'),
            // 'linkyt'  => $request->input('yt'),
            // 'linkig'  => $request->input('ig')
        ));
        return redirect('product')->with(['success' => 'Data berhasil diubah']);
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
        $item = Product::findOrFail($id);
        $item->delete();

        return redirect()->route('product.index');
    }

    public function upload(Request $request)
    {

    }
}

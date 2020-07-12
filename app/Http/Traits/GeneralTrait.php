<?php
namespace App\Http\Traits;
// use Illuminate\Http\Request;
use App\Models\CommentBerita;
use App\Models\Informasi;

trait GeneralTrait
{
    public function UploadFoto($dest,$request,$namefile)
    {
        $nama = str_replace(' ', '-', $request->nama);
        $ext = $request->file('foto')->getClientOriginalExtension();
        $foto = $namefile."_".$nama.strtolower('.'.$ext);
        $move = $request->file('foto')->move($dest,$foto);
        $data = $dest.$foto;

        return $data;
    }

    public function UploadLogo($dest,$request,$namefile)
    {
        $nama = str_replace(' ', '-', $request->judul);
        $ext = $request->file('logo')->getClientOriginalExtension();
        $logo = $namefile."_".$nama.strtolower('.'.$ext);
        $move = $request->file('logo')->move($dest,$logo);
        $data = $dest.$logo;

        return $data;
    }

    public function UploadBg($dest,$request,$namefile)
    {
        $nama = str_replace(' ', '-', $request->judul);
        $ext = $request->file('bg')->getClientOriginalExtension();
        $bg = $namefile."_".$nama.strtolower('.'.$ext);
        $move = $request->file('bg')->move($dest,$bg);
        $data = $dest.$bg;

        return $data;
    }

    public function UploadTesti($dest,$request,$namefile)
    {
        $nama = str_replace(' ', '-', $request->keterangan);
        $ext = $request->file('gambar')->getClientOriginalExtension();
        $bg = $namefile."_".$nama.strtolower('.'.$ext);
        $move = $request->file('gambar')->move($dest,$bg);
        $data = $dest.$bg;

        return $data;
    }

    // public function UploadTesti($dest,$request,$namefile)
    // {
    //     $nama = str_replace(' ', '-', $request->keterangan);
    //     $ext = $request->file('gambar')->getClientOriginalExtension();
    //     $gambar = $namefile."_".$nama.strtolower('.'.$ext);
    //     $move = $request->file('gambar')->move($dest,$gambar);
    //     $data = $dest.$gambar;

    //     return $data;
    // }

    public function UploadTransfer($dest,$request,$namefile)
    {
        $nama = str_replace(' ', '-', $request->ket);
        $ext = $request->file('gambar')->getClientOriginalExtension();
        $gambar = $namefile."_".$nama.strtolower('.'.$ext);
        $move = $request->file('gambar')->move($dest,$gambar);
        $data = $dest.$gambar;

        return $data;
    }

    public function cekPhone($phone)
    {
        if(substr(trim($phone), 0, 2)=='62'){
            $hp = $phone;
        }elseif(substr(trim($phone), 0, 1)=='0'){
            $hp = '62'.substr(trim($phone), 1);
        }
        return $hp;
    }
}
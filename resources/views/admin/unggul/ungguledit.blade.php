@extends('layouts.app')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Ubah Keunggulan</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ubah Keunggulan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<form action="{{ url('unggul/'.$data->id) }}" method="POST" enctype="multipart/form-data" id="identifier">
 {{-- <form action="{{ route('info.update'.$data->id) }}" method="POST" enctype="multipart/form-data" id="identifier"> --}}
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <input type="hidden" name="_method" value="put">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ubah Keunggulan</h5><hr>

                <div class="form-group">
                    <label for="keunggulan" class="form-control-label">Keunggulan Produk</label>
                    <textarea name="keunggulan"  class ="ckeditor form-control @error('keunggulan') is-invalid @enderror" required="">{{ old('keunggulan') ? old('keunggulan') : $data->keunggulan }}</textarea>
                    {{-- <textarea name="keterangan" class="ckeditor form-control @error('keterangan') is-invalid @enderror">{{old('keterangan')}}</textarea> --}}
                    @error('keunggulan') <div class="text-muted">{{$message}}</div>
                        
                    @enderror
                </div>
                

                        {{-- <div class="form-group row">
                            <label for="fname" class="col-sm-1 control-label col-form-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control"  name="nama" value="{{ $data->nama }}">
                            </div>

                            <label for="fname" class="col-sm-1 control-label col-form-label">Deskripsi Baju</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control"  name="keterangan" value="{{ $data->keterangan }}">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-1 control-label col-form-label">Foto</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  name="foto" value="{{ $data->foto }}">
                        </div> --}}

                        {{-- <label for="fname" class="col-sm-1 control-label col-form-label">Handphone</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  name="hp" value="{{ $data->hp }}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="fname" class="col-sm-1 control-label col-form-label">Link Facebook</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  name="fb" value="{{ $data->linkfb }}">
                        </div>
                        {{-- <label for="fname" class="col-sm-1 control-label col-form-label">Link Youtube</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  name="yt" value="{{ $data->linkyt }}">
                        </div> --}}
                        {{-- <label for="fname" class="col-sm-1 control-label col-form-label">Link Instagram</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  name="ig" value="{{ $data->linkig }}">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-6 control-label col-form-label">Alamat</label>
                    </div>
                        <textarea id="konten" class="form-control" name="address" rows="10" cols="50"> {{ $data->address }} </textarea> --}}
                    <br>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-10 control-label col-form-label"></label>
                        <div class="col-sm-2" >
                            <button type="submit" class="btn btn-primary text-right">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </>
</div>
</form>
@endsection

@section('js')
<script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
<script>
    
    var konten = document.getElementById("konten");
        CKEDITOR.replace(konten,{
        language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;

</script>
@endsection
@extends('layouts.app')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Ubah Produk</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ubah Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<form action="{{ url('product/'.$data->id) }}" method="POST" enctype="multipart/form-data" id="identifier">
 {{-- <form action="{{ route('info.update'.$data->id) }}" method="POST" enctype="multipart/form-data" id="identifier"> --}}
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <input type="hidden" name="_method" value="put">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ubah Produk</h5><hr>

                        <div class="form-group">
                            <label for="nama" class="from-control-label">Nama Barang</label>
                            <input type="text" name="nama" value="{{ old('nama') ? old('nama') :  $data->nama }}" class="form-control @error('nama') is-invalid @enderror" required="" />
                            {{-- <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" /> --}}
                            @error('nama') <div class="text-muted">{{$message}}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="form-control-label">Deskripsi Barang</label>
                            <textarea name="keterangan" class=" form-control @error('keterangan') is-invalid @enderror" required="">{{ old('keterangan') ? old('keterangan') : $data->keterangan }}</textarea>
                            {{-- <textarea name="keterangan" class="ckeditor form-control @error('keterangan') is-invalid @enderror">{{old('keterangan')}}</textarea> --}}
                            @error('keterangan') <div class="text-muted">{{$message}}</div>  @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto" class="form-control-label">Foto</label>
                            {{-- <input type="file" class="form-control"  name="foto" value="{{ $data->foto }}"> --}}
                            <input type="file" name="foto" value="{{ old('foto') }}" accept="image/*" class="form-control @error('foto') is-invalid @enderror "/>
                            {{-- <input type="file" name="foto" value="{{ old('foto')}}"  accept="image/*" class="form-control @error('foto') is-invalid @enderror "/> --}}
                            @error('foto') <div class="text-muted">{{$message}}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="harga" class="from-control-label">Harga</label>
                            <input type="text" name="harga" value="{{ old('harga') ? old('harga') :  $data->harga }}" class="form-control @error('harga') is-invalid @enderror" required="" />
                            {{-- <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" /> --}}
                            @error('nama') <div class="text-muted">{{$message}}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="diskon" class="from-control-label">Harga Diskon</label>
                            <input type="text" name="diskon" value="{{ old('diskon') ? old('diskon') :  $data->diskon }}" class="form-control @error('diskon') is-invalid @enderror" required="" />
                            {{-- <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" /> --}}
                            @error('diskon') <div class="text-muted">{{$message}}</div> @enderror
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
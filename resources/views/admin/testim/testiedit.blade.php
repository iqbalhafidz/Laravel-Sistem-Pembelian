@extends('layouts.app')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Ubah Testimoni</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ubah Testimoni</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<form action="{{ url('testi/'.$data->id) }}" method="POST" enctype="multipart/form-data" id="identifier">
 {{-- <form action="{{ route('info.update'.$data->id) }}" method="POST" enctype="multipart/form-data" id="identifier"> --}}
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <input type="hidden" name="_method" value="put">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ubah Testimoni</h5><hr>

                        
                        <div class="form-group">
                            <label for="gambar" class="form-control-label">Foto</label>
                            <input type="file" name="gambar" value="{{ old('gambar') ? old('gambar') : $data->logo }}" accept="image/*" class="form-control @error('gambar') is-invalid @enderror " />
                            @error('gambar') <div class="text-muted">{{$message}}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="keterangan" class="form-control-label">Keterangan</label>
                            <textarea name="keterangan" class=" form-control @error('keterangan') is-invalid @enderror" required="">{{ old('keterangan') ? old('keterangan') : $data->keterangan }}</textarea>
                            {{-- <input type="textarea" name="keterangan" value="{{ old('keterangan') ? old('keterangan') : $data->keterangan }}" accept="image/*" class="form-control @error('keterangan') is-invalid @enderror "  /> --}}
                            @error('keterangan') <div class="text-muted">{{$message}}</div> @enderror
                        </div>

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
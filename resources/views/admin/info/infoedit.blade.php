@extends('layouts.app')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Ubah Informasi</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ubah Informasi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<form action="{{ url('info/'.$data->id) }}" method="POST" enctype="multipart/form-data" id="identifier">
 {{-- <form action="{{ route('info.update'.$data->id) }}" method="POST" enctype="multipart/form-data" id="identifier"> --}}
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <input type="hidden" name="_method" value="put">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ubah Informasi</h5><hr>

                        <div class="form-group">
                            <label for="nama" class="from-control-label">Judul </label>
                            <input type="text" name="judul" value="{{ old('judul') ? old('judul') :  $data->judul }}" class="form-control @error('judul') is-invalid @enderror" required=""/>
                            @error('judul') <div class="text-muted">{{$message}}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="tagline" class="form-control-label">Tag Line</label>
                            <input type="text" name="tagline" value="{{ old('tagline') ? old('tagline') : $data->tagline  }}" class="form-control @error('tagline') is-invalid @enderror " required=""/>
                            @error('tagline') <div class="text-muted">{{$message}}</div>  @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label for="logo" class="form-control-label">Logo</label>
                            {{-- <input type="file" class="form-control"  name="foto" value="{{ $data->foto }}"> --}}
                            {{-- <input type="file" name="logo" value="{{ old('logo') ? old('logo') : $data->logo }}" accept="image/*" class="form-control @error('logo') is-invalid @enderror "  /> --}}
                            {{-- <input type="file" name="logo" value="{{ old('logo')}}"  accept="image/*" class="form-control @error('foto') is-invalid @enderror "/> --}}
                            {{-- @error('logo') <div class="text-muted">{{$message}}</div> @enderror
                        </div> --}} 

                        {{-- <div class="form-group">
                            <label for="bg" class="from-control-label">Background</label>
                            <input type="file" name="bg" value="{{ old('bg') ? old('bg') :  $data->bg }}" accept="image/*" class="form-control @error('bg') is-invalid @enderror" />
                            {{-- <input type="text" name="bg" value="{{ old('bg') }}" class="form-control @error('bg') is-invalid @enderror" /> --}}
                            {{-- @error('bg') <div class="text-muted">{{$message}}</div> @enderror
                        </div> --}} 

                        <div class="form-group">
                            <label for="alamat" class="form-control-label">Alamat</label>
                            <textarea name="alamat" class=" ckeditor form-control @error('alamat') is-invalid @enderror" required="">{{ old('alamat') ? old('alamat') : $data->alamat }}</textarea>
                            {{-- <textarea name="alamat" class="ckeditor form-control @error('alamat') is-invalid @enderror">{{old('alamat')}}</textarea> --}}
                            @error('alamat') <div class="text-muted">{{$message}}</div>  @enderror
                        </div>

                        <div class="form-group">
                            <label for="tlpn" class="form-control-label">Telepon</label>
                            <input type="text" name="tlpn" value="{{ old('tlpn') ? old('tlpn') : $data->tlpn  }}" class="form-control @error('tlpn') is-invalid @enderror " required=""/>
                            @error('tlpn') <div class="text-muted">{{$message}}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="hp" class="form-control-label">Handphone</label>
                            <input type="text" name="hp" value="{{ old('hp') ? old('hp') : $data->hp  }}" class="form-control @error('hp') is-invalid @enderror "required=""/>
                            @error('hp') <div class="text-muted">{{$message}}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-control-label">Email</label>
                            <input type="text" name="email" value="{{ old('email') ? old('email') : $data->email  }}" class="form-control @error('email') is-invalid @enderror" required=""/>
                            @error('email') <div class="text-muted">{{$message}}</div>  @enderror
                        </div>

                        <div class="form-group">
                            <label for="linkfb" class="form-control-label">Facebook</label>
                            <input type="text" name="linkfb" value="{{ old('linkfb') ? old('linkfb') : $data->linkfb  }}" class="form-control @error('linkfb') is-invalid @enderror " required=""/>
                            @error('linkfb') <div class="text-muted">{{$message}}</div> @enderror
                        </div>

                        <div class="form-group">
                            <label for="linkig" class="form-control-label">Instagram</label>
                            <input type="text" name="linkig" value="{{ old('linkig') ? old('linkig') : $data->linkig  }}" class="form-control @error('linkig') is-invalid @enderror " required=""/>
                            @error('linkig') <div class="text-muted">{{$message}}</div> @enderror
                        </div>



{{--
                        //yang lama

                         <div class="form-group row">
                            <label for="fname" class="col-sm-1 control-label col-form-label">Logo/gambar</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control"  name="logo" value="{{ $data->logo }}">
                            </div>

                            <label for="fname" class="col-sm-1 control-label col-form-label">Alamat</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control"  name="alamat" value="{{ $data->alamat }}">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-1 control-label col-form-label">Telepon</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  name="tlpn" value="{{ $data->tlpn }}">
                        </div>

                        <label for="fname" class="col-sm-1 control-label col-form-label">Handphone</label>
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
                        </div> 
                        
                        <label for="fname" class="col-sm-1 control-label col-form-label">Link Instagram</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  name="ig" value="{{ $data->linkig }}">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-6 control-label col-form-label">Alamat</label>
                    </div>
                    
                    <textarea id="konten" class="form-control" name="address" rows="10" cols="50"> {{ $data->address }} </textarea>
                    <br> --}}


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
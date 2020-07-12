@extends('layouts.app')

@section('content')

<div class="card">
        <div class="card-header">
            <strong>Tambah Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product.store')}}" method="post" enctype="multipart/form-data" id="identifier">
                @csrf
                <div class="form-group">
                    <label for="nama" class="from-control-label">Nama Barang</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" required="" />
                    @error('nama') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan" class="form-control-label">Deskripsi Barang</label>
                    <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" required="">{{old('keterangan')}}</textarea>
                    {{-- <input type="text" name="keterangan" value="{{ old('keterangan')}}" class="form-control @error('keterangan') is-invalid @enderror "/> --}}
                    @error('keterangan') <div class="text-muted">{{$message}}</div>
                        
                    @enderror
                </div>
                <div class="form-group">
                    <label for="foto" class="form-control-label">Foto</label>
                    <input type="file" name="foto" value="{{ old('foto')}}"  accept="image/*" class="form-control @error('foto') is-invalid @enderror " required=""/>
                    {{-- <textarea name="foto" class="ckeditor form-control @error('foto') is-invalid @enderror">{{old('foto')}}</textarea> --}}
                    @error('foto') <div class="text-muted">{{$message}}</div>
                        
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga" class="from-control-label">Harga</label>
                    <input type="text" name="harga" value="{{ old('harga') }}" class="form-control @error('harga') is-invalid @enderror" required="" />
                    @error('harga') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="diskon" class="from-control-label">Diskon Harga</label>
                    <input type="text" name="diskon" value="{{ old('diskon') }}" class="form-control @error('diskon') is-invalid @enderror" required="" />
                    @error('diskon') <div class="text-muted">{{$message}}</div> @enderror
                </div>
                {{-- <div class="form-group">
                    <label for="price" class="form-control-label">Harga Barang</label>
                    <input type="number" name="price" value="{{ old('price') }}" class="form-control @error('type') is-invalid @enderror "/>
                    @error('price') <div class="text-muted">{{$message}}</div>
                    
                    @enderror   
                </div>

                <div class="form-group">
                    <label for="quantity" class="form-control-label" >Kuantitas Barang</label>
                <input type="number" name="quantity" value="{{ old('quantity')}}" class="form-control @error('quantity') is-invalid @enderror"/>
                    @error('quantity') <div class="text-muted">{{$message}}</div> 
                        
                    @enderror
                </div> --}}
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Tambah barang</button>
                </div>

            </form>
        </> 
    </div>

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
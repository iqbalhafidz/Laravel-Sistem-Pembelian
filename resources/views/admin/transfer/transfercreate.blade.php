@extends('layouts.app')

@section('content')

<div class="card">
        <div class="card-header">
            <strong>Tambah Bukti Transfer</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transfer.store')}}" method="post" enctype="multipart/form-data" id="identifier">
                @csrf

                <div class="form-group">
                    <label for="gambar" class="form-control-label">Foto</label>
                    <input type="file" name="gambar" value="{{ old('gambar')}}"  accept="image/*" class="form-control @error('gambar') is-invalid @enderror " required=""/>
                    {{-- <textarea name="foto" class="ckeditor form-control @error('foto') is-invalid @enderror">{{old('foto')}}</textarea> --}}
                    @error('gambar') <div class="text-muted">{{$message}}</div>
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label for="ket" class="form-control-label">Keterangan Bukti Trasnfer</label>
                    <textarea name="ket" class="form-control @error('keterangan') is-invalid @enderror" required>{{old('keterangan')}}</textarea>
                    {{-- <input type="text" name="keterangan" value="{{ old('keterangan')}}" class="form-control @error('keterangan') is-invalid @enderror "/> --}}
                    @error('keterangan') <div class="text-muted">{{$message}}</div>
                        
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <label for="foto" class="form-control-label">Foto</label>
                    <input type="text" name="foto" value="{{ old('foto')}}" class="form-control @error('foto') is-invalid @enderror "/>
                    {{-- <textarea name="foto" class="ckeditor form-control @error('foto') is-invalid @enderror">{{old('foto')}}</textarea> --}}
                    {{-- @error('foto') <div class="text-muted">{{$message}}</div>
                        
                    @enderror
                </div> --}} 
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
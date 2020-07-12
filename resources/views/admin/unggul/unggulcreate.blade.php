@extends('layouts.app')

@section('content')

<div class="card">
        <div class="card-header">
            <strong>Tambah Keunggulan</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('unggul.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                                <div class="form-group">
                    <label for="Keunggulan" class="form-control-label">Deskripsi Keunggulan</label>
                    <textarea name="keunggulan" class="ckeditor form-control @error('keunggulan') is-invalid @enderror">{{old('keunggulan')}}</textarea>
                    {{-- <input type="text" name="keterangan" value="{{ old('keterangan')}}" class="form-control @error('keterangan') is-invalid @enderror "/> --}}
                    @error('Keunggulan') <div class="text-muted">{{$message}}</div>
                        
                    @enderror
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
                    <button type="submit" class="btn btn-primary btn-block">Tambah Keunggulan</button>
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
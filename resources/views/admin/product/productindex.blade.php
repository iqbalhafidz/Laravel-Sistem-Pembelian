@extends('layouts.app')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Product</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <a href="{{url('/')}}">Home</a> </li>
                        <li class="breadcrumb-item active" aria-current="page">Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('product.create')}}" class=" btn-priamry btn-sm">
                        <button class="btn btn-primary btn-sm" >Tambah</button>
                    </a>
                    <br><br>
                    {{-- <h5 class="card-title">product</h5> --}}
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{$message}}</strong>
                    </div>                       
                    @endif

                    <div class="table-responsive">
                        
                        <table id="zero_config" class="table table-striped table-bordered">
                            
                            <thead>
                                <tr>
                                    <td>NO</td>
                                    <td>Nama</td>
                                    <td>Deskripsi Baju</td>
                                    <td>Foto</td>
                                    <td>Harga</td>
                                    <td>Harga Diskon</td>
                                    <td>AKSI</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item =>$value)
                                    <tr>
                                        <Td>{{ $item+1 }}</Td>
                                        <Td>{{ $value->nama}}</Td>
                                        <Td>{{ $value->keterangan}}</Td>
                                        <Td><img src="{{ url ($value->foto)}}" width="80px"></Td>
                                        <Td>{{ $value->harga}}</Td>
                                        <Td>{{ $value->diskon}}</Td>
                                        <Td>
                                            {{-- <a href="{{ url('product/'.$value->id.'/edit')}}" class=" btn-priamry btn-sm" > --}}
                                            <a href="{{route('product.edit', $value->id)}}" class=" btn-priamry btn-sm">
                                                <button class="btn btn-primary btn-sm" >Ubah</button>
                                            </a>|

                                            <form action="{{ route('product.destroy', $value->id) }}"  method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">Hapus</button>

                                            </form> |
                                        </Td>
                                    </tr>
                                @endforeach                                   
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
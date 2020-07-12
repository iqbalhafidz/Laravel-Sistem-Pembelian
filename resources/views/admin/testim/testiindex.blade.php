@extends('layouts.app')

@section('content')

{{-- <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Testimoni</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <a href="{{url('/')}}">Home</a> </li>
                        <li class="breadcrumb-item active" aria-current="page">Informasi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('testi.create')}}" class=" btn-priamry btn-sm">
                        <button class="btn btn-primary btn-sm" >Tambah</button>
                    </a>
                    <br><br>
                    {{-- <h5 class="card-title">Testimoni</h5> --}}
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
                                    <td>Gambar</td>
                                    <td>Keterangan</td>
                                    <td>AKSI</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item =>$value)
                                    <tr>
                                        <Td>{{ $item+1 }}</Td>
                                        <Td><img src="{{ url ($value->gambar)}}" width="80px"></Td>
                                        <Td>{{ $value->keterangan}}</Td>
                                        <Td>
                                            {{-- <a href="{{ url('product/'.$value->id.'/edit')}}" class=" btn-priamry btn-sm" > --}}
                                            <a href="{{route('testi.edit', $value->id)}}" class=" btn-priamry btn-sm">
                                                <button class="btn btn-primary btn-sm" >Ubah</button>
                                            </a>|

                                            <form action="{{ route('testi.destroy', $value->id) }}"  method="POST" class="d-inline">
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




{{-- <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Barang</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <Tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>
                                            
                                            
                                            <a href="#" class="btn-info btn-sm">
                                                <i class="fa fa-picture-o"></i>
                                            </a>
                                            
                                            <a href="{{ route('product.edit', $item->id) }}" class="btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a> 
                                            
                                            <form action="{{ route('product.destroy', $item->id) }}"  method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center p-5">
                                            Data Tidak tersedia
                                        </td>
                                        </tr> 
                                    @endforelse
                                </Tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



@endsection
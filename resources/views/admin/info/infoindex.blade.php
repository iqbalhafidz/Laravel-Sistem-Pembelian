@extends('layouts.app')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Informasi</h4>
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
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi</h5>
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
                                    <td>Judul </td>
                                    <td>Tag Line</td>
                                    {{-- <td>Logo</td>
                                    <td>Background</td> --}}
                                    <td>Alamat</td>
                                    <td>Telepon</td>
                                    <td>Handphone</td>
                                    <td>Email</td>
                                    <td>Facebook</td>
                                    <td>Instagram</td>
                                    <td>AKSI</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item =>$value)
                                    <tr>
                                        <Td>{{ $item+1 }}</Td>
                                        <Td>{{ $value->judul}}</Td>
                                        <Td>{{ $value->tagline}}</Td>
                                        {{-- <Td><img src="{{ url ($value->logo)}}" width="80px"></Td>
                                        <Td><img src="{{ url ($value->bg)}}" width="80px"></Td> --}}
                                        <Td>{!! $value->alamat!!}</Td>
                                        <Td>{{ $value->tlpn}}</Td>
                                        <Td>{{ $value->hp}}</Td>
                                        <Td>{{ $value->email}}</Td>
                                        <Td>{{ $value->linkfb}}</Td>
                                        <Td>{{ $value->linkig}}</Td>
                                        <Td>
                                            <a href="{{route('info.edit', $value->id)}}" class=" btn-priamry btn-sm">
                                                <button class="btn btn-primary btn-sm" >Ubah</button>
                                            </a>
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
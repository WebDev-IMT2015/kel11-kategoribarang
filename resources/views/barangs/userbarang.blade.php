@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Barang</div>

<<<<<<< HEAD
                    <div class="panel-body">
=======
<<<<<<< HEAD
                    <div class="panel-body">
=======
>>>>>>> da67f18e6a667ab590035177838c48931c8fbeae
>>>>>>> 94aa69675c1827965b87377634694aa4e3748821
                        {!! Form::open(['method' => 'GET', 'url' => '/barangs.userbarang', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Mencari...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"><img src="../search-icon.png" width="15px" height="15px">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}
<<<<<<< HEAD
                    </div>

                    <div class="panel-body">
=======
<<<<<<< HEAD
                    </div>

                    <div class="panel-body">
=======

                    <div class="panel-body">
                        <br/>
                        <br/>
>>>>>>> da67f18e6a667ab590035177838c48931c8fbeae
>>>>>>> 94aa69675c1827965b87377634694aa4e3748821
                    <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Nama</th><th>Tipe</th><th>Deksripsi</th><th>Dimensi</th><th>Berat</th><th>Foto
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($barangs as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->namabarang }}</td>
                                        <td>{{ $item->tipe }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->dimensi }}</td>
                                        <td>{{ $item->berat }}</td>
                                        <td>{{ $item->foto }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $barangs->appends(['search' => Request::get('search')])->render() !!} 
                            </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

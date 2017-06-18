@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Barang</div>

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

                    <div class="panel-body">
                        <br/>
                        <br/>
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

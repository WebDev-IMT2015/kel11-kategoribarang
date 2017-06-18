@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Barang</div>
                    <div class="panel-body">
                        <a href="{{ url('/barangs/create') }}" class="btn btn-success btn-sm" title="Add New barang">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Barang
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/barangs', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Mencari...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"><img src="../search-icon.png" width="15px" height="15px">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>


                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Nama</th><th>Tipe</th><th>Deksripsi</th><th>Dimensi</th><th>Berat</th><th>Foto
                                        </th><th>Tindakan
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
                                       
                                        <td>
                                            <a href="{{ url('/barangs/' . $item->id) }}" title="View barang"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                                            <a href="{{ url('/barangs/' . $item->id . '/edit') }}" title="Edit barang"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/barangs', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Hapus', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete barang',
                                                        'onclick'=>'return confirm("Anda yakin untuk menghapus?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $barangs->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

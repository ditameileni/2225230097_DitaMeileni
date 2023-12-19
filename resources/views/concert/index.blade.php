@extends('concert.template')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h2>NCT Concert</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/concert/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Jumlah Tiket</th>
                                        <th>Cat Tempat Duduk</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($concert as $c)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $c->nama }}</td>
                                        <td>{{ $c->email }}</td>
                                        <td>{{ $c->noTelepon }}</td>
                                        <td>{{ $c->jumlahTiket }}</td>
                                        <td>{{ $c->catTempatDuduk }}</td>
 
                                        <td>
                                            <a href="{{ url('/concert/' . $c->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/concert/' . $c->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/concert' . '/' . $c->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Apakah ingin dihapus?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
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
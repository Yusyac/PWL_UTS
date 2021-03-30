@extends('layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2 >Daftar Barang</h2>
            </div>

            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('create') }}"> Tambah Barang</a>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ route('search') }}" method="GET">
                        <div class="row">
                            <div class="col-lg-8">
                                <input type="text" name="keywords" class="form-control" id="keywords" aria-describedby="keywords"
                                    placeholder="Kode Barang / Nama Barang / Kategori ">
                            </div>
                            <div class="col-lg-4 pl-0">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Qty</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>

            <td>{{ $product ->ID }}</td>
            <td>{{ $product ->Kodebarang }}</td>
            <td>{{ $product ->NamaBarang }}</td>
            <td>{{ $product ->Kategori }}</td>
            <td>{{ $product ->Harga }}</td>
            <td>{{ $product ->Qty }}</td>
            <td>
            <form action="{{ route('destroy',$product->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('show',$product->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('edit',$product->id) }}">Edit</a>
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="float-right my-2">
        <div class="col-12 text-center" >
            {{ $products->links() }}
        </div>
    </div>
@endsection

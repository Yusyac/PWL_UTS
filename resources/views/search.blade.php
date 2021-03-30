@extends('layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Daftar Product</h2>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <a href="{{ route('index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

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
                <td>{{ $product ->KodeBarang }}</td>
                <td>{{ $product ->NamaBarang }}</td>
                <td>{{ $product ->Kategori }}</td>
                <td>{{ $product ->Harga }}</td>
                <td>{{ $product ->Qty }}</td>
                <td>
                    <form action="{{ route('destroy', $product->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('show', $product->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('edit', $product->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="float-right my-2">
        <div class="col-12 text-center">
            {{ $products->links() }}
        </div>
    </div>
@endsection
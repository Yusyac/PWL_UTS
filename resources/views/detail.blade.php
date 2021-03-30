@extends('layouts')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Products
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID : </b>{{$product ->ID}}</li>
                    <li class="list-group-item"><b>Kode Barang : </b>{{$product ->KodeBarang}}</li>
                    <li class="list-group-item"><b>Nama Barang : </b>{{$product ->NamaBarang}}</li>
                    <li class="list-group-item"><b>Kategori : </b>{{$product ->Kategori}}</li>
                    <li class="list-group-item"><b>Harga : </b>{{$product ->Harga}}</li>
                    <li class="list-group-item"><b>Qty : </b>{{$product ->Qty}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection
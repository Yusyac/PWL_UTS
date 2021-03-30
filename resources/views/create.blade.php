@extends('layouts')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There Were Some Problems With Your Input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="ID">ID</label><br>
                    <input type="text" name="ID" class="formcontrol" id="ID" aria-describedby="ID" >
                </div>
                <div class="form-group">
                    <label for="KodeBarang">Kode Barang</label><br>
                    <input type="KodeBarang" name="KodeBarang" class="formcontrol" id="KodeBarang" aria-describedby="KodeBarang" >
                </div>
                <div class="form-group">
                    <label for="NamaBarang">Nama Barang</label><br>
                    <input type="NamaBarang" name="NamaBarang" class="formcontrol" id="NamaBarang" aria-describedby="NamaBarang" >
                </div>
                <div class="form-group">
                    <label for="Kategori">Kategori</label><br>
                    <input type="Kategori" name="Kategori" class="formcontrol" id="Kategori" aria-describedby="Kategori" >
                </div>
                <div class="form-group">
                    <label for="Harga">Harga</label><br>
                    <input type="Harga" name="Harga" class="formcontrol" id="Harga" aria-describedby="Harga" >
                </div>
                <div class="form-group">
                    <label for="Qty">Qty</label><br>
                    <input type="Qty" name="Qty" class="formcontrol" id="Qty" aria-describedby="Qty" >
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection

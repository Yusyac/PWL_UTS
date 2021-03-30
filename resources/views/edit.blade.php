@extends('layouts')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Daftar
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There Were Some Problems With Your Input. <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('update', $Products->id) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="ID">ID</label><br>
                <input type="ID" name="ID" class="formcontrol" id="ID" value="{{ $Products->ID }}" ariadescribedby="ID" >
            </div>
            <div class="form-group">
                <label for="KodeBarang">Kode Barang</label><br>
                <input type="KodeBarang" name="KodeBarang" class="formcontrol" id="KodeBarang" value="{{ $Products->KodeBarang }}" ariadescribedby="KodeBarang" >
            </div>
            <div class="form-group">
                <label for="NamaBarang">Nama Barang</label><br>
                <input type="NamaBarang" name="NamaBarang" class="formcontrol" id="NamaBarang" value="{{ $Products->NamaBarang }}" ariadescribedby="NamaBarang" >
            </div>
            <div class="form-group">
                <label for="Kategori">Kategori</label><br>
                <input type="Kategori" name="kategori" class="formcontrol" id="Kategori" value="{{ $Products->Kategori }}" ariadescribedby="Kategori" >
            </div>
            <div class="form-group">
                <label for="Harga">Harga</label><br>
                <input type="Harga" name="Harga" class="formcontrol" id="Harga" value="{{ $Products->Harga }}" ariadescribedby="Harga" >
            </div>
            <div class="form-group">
                <label for="Qty">Qty</label><br>
                <input type="Qty" name="Qty" class="formcontrol" id="Qty" value="{{ $Products->Qty }}" ariadescribedby="Qty" >
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection

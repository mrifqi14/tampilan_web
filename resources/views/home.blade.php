@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card"  style="width: 18rem;">
              <img src="{{ url('img\produk') }}/{{ $barang->gambar}}" class="card-img-top" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                <p class="card-text">
                    <strong> Harga : </strong> Rp. {{ number_format($barang->harga) }}<br>
                    <strong> Stok : </strong> {{ $barang->stok }}<br>
                    <strong> Keterangan : </strong> {{ $barang->keterangan }}
                </p>
                <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
                </div>
            </div>
        </div>     
        @endforeach
    </div>
</div>
@endsection

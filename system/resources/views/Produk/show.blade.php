@extends('Template.base') @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Detail Data Produk
            </div>
            <div class="card-body">
                <h3>{{$Produk->nama}}</h3>
                <hr>
                <p>
                    {{$Produk->harga}} |
                    Stok : {{$Produk->stok}} |
                    Seller : {{$Produk->seller->nama}} |
                    Tanggal Produk : {{$Produk->created_at->diffForHumans()}}
                </p>
                <p>
                    {!! nl2br($Produk->deskripsi) !!}
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

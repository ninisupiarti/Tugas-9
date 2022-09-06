@extends('Template.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Tambah Data Produk
            </div>
            <div class="card-body">
                <form action="{{url('Admin/Produk')}}" method="post">
                  @csrf

                  {{-- <div class="form-group">
                    <label for="" class="control-label">Nama Penjual</label>
                    <select name="id_user" class="form-control">
                        <option value=""> Silahkan Pilih Penjual</option>
                        @foreach ($list_user as $user)
                            <option value="{{$user->id}}">{{$user->nama}}</option>
                        @endforeach
                    </select>
                </div> --}}
                <input type="text" value="{{auth()->user()->id}}" name="id_user" hidden>
                  <div class="form-group">
                      <label for="" class="control-label">Nama</label>
                      <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Harga</label>
                            <input type="text" class="form-control" name="harga">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Stok</label>
                            <input type="text" class="form-control" name="stok">
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Deskripsi</label>
                      <textarea name="deskripsi" class="form-control"></textarea>
                  </div>
                  <button class="btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

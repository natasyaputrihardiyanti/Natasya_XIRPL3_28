@extends('template')
@section('content')
<section class="main-section">
  <div class="content">
    <h1>Ubah barang</h1>
    <hr>
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
 
    @foreach($data as $datas)
    <form action="{{ route('barang.update' , $datas->id)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="form-group">
          <label for="kode_barang">Kode Barang:</label>
          <input type="text" class="form-control" name="kode_barang" value="{{ $datas->kode_barang}}">
        </div>

        <div class="form-group">
          <label for="nama_barang">Nama Barang:</label>
          <input type="text" class="form-control" name="nama_barang" value="{{ $datas->nama_barang}}">
        </div>

        <div class="form-group">
          <label for="stok"> Stok :</label>
          <input type="text" class="form-control" name="stok" value="{{ $datas->stok}}">
        </div>

        <div class="form-group">
          <label for="harga"> Harga :</label>
          <input type="text" class="form-control" name="harga" value="{{ $datas->harga}}">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-md btn-primary">Submit</button>
          <button type="reset" class="btn btn-md btn-danger">Cancel</button>

        </div>
      </form> 
      @endforeach
      </div>
</section>
@endsection

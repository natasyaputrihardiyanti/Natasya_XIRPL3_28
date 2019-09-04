@extends('template')
@section('content')
<section class="main-section">
  <div class="content">
    <h1>Ubah Penjualan</h1>
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
    <form action="{{ route('penjualan.update' , $datas->id)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="form-group">
          <label for="kode_barang">Kode baeang:</label>
          <input type="text" class="form-control" name="kode_barang" value="{{ $datas->kode_barang}}">
        </div>

        <div class="form-group">
          <label for="jumlah">Jumlah:</label>
          <input type="text" class="form-control" name="jumlah" value="{{ $datas->jumlah}}">
        </div>

        <div class="form-group">
          <label for="total_harga">Total harga:</label>
          <input type="text" class="form-control" name="total_harga" value="{{ $datas->total_harga}}">
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

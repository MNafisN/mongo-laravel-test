@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ 'Edit Kendaraan' }}</div>
                <div class="card-body">
                    <form method="post", action="{{route('updateKendaraan')}}">
                    @csrf
                    <input type="hidden" class="form-control" name="id" value="{{$kendaraan->id}}">
                        <!-- <div class="mb-3">
                            <label for="inputNoKendaraan" class="form-label">Nomor Kendaraan</label>
                            <input type="text" class="form-control" name="inputNoKendaraan" value="{{$kendaraan->kendaraanId}}" placeholder="Masukkan Nomor Kendaraan">
                        </div> -->
                        <div class="mb-3">
                            <label for="inputTahunKeluaran" class="form-label">Tahun</label>
                            <input type="text" class="form-control" name="inputTahunKeluaran" value="{{$kendaraan->tahunKeluaran}}" placeholder="Masukkan Tahun Keluaran Kendaraan">
                        </div>
                        <div class="mb-3">
                            <label for="inputWarna" class="form-label">Warna</label>
                            <input type="text" class="form-control" name="inputWarna" value="{{$kendaraan->warna}}" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="inputHarga" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="inputHarga" value="{{$kendaraan->harga}}" placeholder="Masukkan Harga Kendaraan">
                        </div>
                        <div class="mb-3">
                            <label for="inputJumlahStok" class="form-label">Jumlah Stok</label>
                            <input type="text" class="form-control" name="inputJumlahStok" value="{{$kendaraan->jumlahStok}}" placeholder="Tentukan Jumlah Stok Kendaraan">
                        </div>
                        <a href="{{ route('Kendaraan') }}"><button type="button" class="btn btn-secondary">Batalkan</button></a>
                        <button type="submit" class="btn btn-primary float-end">Simpan Perubahan</button>
                    </form>
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

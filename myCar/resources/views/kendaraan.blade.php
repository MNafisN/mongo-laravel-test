@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ 'Daftar Stok Kendaraan' }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No. Kendaraan</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Warna</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah Stok</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehicles as $kendaraan)

                            <tr>
                                <th scope="row">{{ $kendaraan->kendaraanId }}</th>
                                <td>{{ $kendaraan->tahunKeluaran }}</td>
                                <td>{{ $kendaraan->warna }}</td>
                                <td>{{ $kendaraan->harga }}</td>
                                <td>{{ $kendaraan->jumlahStok }}</td>
                                <td>
                                    <a href="{{route('editKendaraan', ['id'=>$kendaraan->id])}}">Edit</a>
                                    <a href="">Lihat</a>
                                    <a href="">Beli</a>
                                    <a href="{{route('hapusKendaraan', ['id'=>$kendaraan->id])}}" onclick="return confirm('Apakah anda yakin untuk menghapus data?')">Hapus</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKendaraanModal">Tambah</button>
                </div>
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message')}}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahKendaraanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kendaraan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post", action="{{route('tambahKendaraan')}}">
                @csrf
                <div class="modal-body">
                    <!-- <div class="mb-3">
                        <label for="inputNoKendaraan" class="form-label">Nomor Kendaraan</label>
                        <input type="text" class="form-control" name="inputNoKendaraan" placeholder="Masukkan Nomor Kendaraan">
                    </div> -->
                    <div class="mb-3">
                        <label for="inputTahunKeluaran" class="form-label">Tahun</label>
                        <input type="text" class="form-control" name="inputTahunKeluaran" placeholder="Masukkan Tahun Keluaran Kendaraan">
                    </div>
                    <div class="mb-3">
                        <label for="inputWarna" class="form-label">Warna</label>
                        <input type="text" class="form-control" name="inputWarna" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="inputHarga" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="inputHarga" placeholder="Masukkan Harga Kendaraan">
                    </div>
                    <div class="mb-3">
                        <label for="inputJumlahStok" class="form-label">Jumlah Stok</label>
                        <input type="text" class="form-control" name="inputJumlahStok" placeholder="Tentukan Jumlah Stok Kendaraan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

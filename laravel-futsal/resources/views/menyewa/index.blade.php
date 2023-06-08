@extends('layouts/main')
@section('container')

  <!-- Content -->
  <section class="heroSectionSewa align-items-center p-0" id="">
    <div class="container">
      <h3 class="text-red fw-bold text-GoeboexFutsal">My Bookings</h3>
      <div class="col-12 text-white">
        <table class="table cart-wrap text-white text-center">
          <thead>
            <tr>
              <th>Name</th>
              <th>Tanggal & Waktu</th>
              <th>Durasi</th>
              <th>Status</th>
              <th>Harga</th>
              <th>Pembayaran</th>
            </tr>
          </thead>
          <tbody>@foreach ($menyewa as $sewa)
            <tr class="">
                <td>{{ $sewa->booking_code }}</td>
                <td>{{ $sewa->tanggal }}</td>
                <td>{{ $sewa->jam }}</td>
                <td class="{{ $sewa->status === 'Belum Lunas' ? 'text-danger' : 'text-success' }}">{{ $sewa->status }}</td>
                <td>{{ $sewa->harga }}</td>
                <td>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Lakukan Pembayaran
                  </button>
                </td>
            </tr> 
        @endforeach
          </tbody>
        </table>
      </div>  
    </div>
  </section>

  <!-- Button trigger modal -->
  

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Kode Pembayaran : ....</p>
          <p>Cara Pembayaran : </p>
          <ul>
            <li>Melakukan transfer ke no rekening dibawah : </li>
            <li>No rek : ....</li>
            <li>Bukti transfer dikirimkan via Whatsapp dengan nomor yang ada dibawah ini</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="https://wa.link/sux9st" target="_blank"><button type="button" class="btn btn-success">Kirim Bukti Pembayaran</button></a>
        </div>
      </div>
    </div>
  </div>

@endsection
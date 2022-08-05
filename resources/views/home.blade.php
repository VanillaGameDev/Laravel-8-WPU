@extends("layouts.main")

@section('container')

<h1 style="text-align: center; padding-top: 50px">Selamat Datang Di <strong>OxNews</strong></h1>
<p style="text-align: center; font-size: 20px">Di Website ini kita menyajikan Berita-Berita Yang Menarik, Register Sekarang!!</p>
<main style="padding-top: 50px">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center ">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">User</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Gratis</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Melihat Postingan</li>
              <li>Akses Dashboard</li>
              <li>Mencari Postingan</li>
              <li>-</li>
            </ul>
            <a href="/register"><button type="button" class="w-100 btn btn-lg btn-primary">Register</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Admin</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rp.200.000<small class="text-muted fw-light">/Bulan</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>Melihat Postingan</li>
                <li>Akses Dashboard</li>
                <li>Mencari Postingan</li>
                <li>Membuat Postingan</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary">
            <h4 class="my-0 fw-normal">Investor</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Rp.1.000.000<small class="text-muted fw-light">/Bulan</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>Melihat Postingan</li>
                <li>Akses Dashboard</li>
                <li>Membuat Postingan</li>
                <li>Mendapatkan 2% Penghasilan Perusahaan</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
    </div>

@endsection

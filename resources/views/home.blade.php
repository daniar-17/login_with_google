@extends('main')

@section('title_content','Home')

@section('content')
  <div class="card">
    <div class="card-header align-items-center d-flex">
      <h4>Selamat Datang</h4>
    </div>
    <!-- end card header -->

    <div class="card-body">
      <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-primary border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
                        <div class="flex-grow-1 text-truncate">
                            <b>Cek Ongkir</b>.
                        </div>
                    </div>
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md me-3">
                                <span class="avatar-title bg-soft-primary rounded-circle fs-1">
                                    <i class="ri-truck-line text-primary"></i>
                                </span>
                            </div>
                        </div>
                        <div>
                            <p class="fs-16 lh-base">Cek Ongkir lebih mudah dengan 3 pilihan kurir <span class="fw-semibold">JNE, POS dan TIKI</span>, silahkan cek ongkir dengan klik tombol dibawah. <i class="mdi mdi-arrow-down"></i>
                            </p>
                            <div class="mt-3">
                                <a href="{{ url('ongkir') }}" class="btn btn-primary">Cek Ongkir</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div>
        </div> <!-- end col-->
      </div>
    </div>
  <!-- end card-body -->
  </div>
@endsection

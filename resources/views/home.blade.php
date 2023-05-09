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
                            <p class="fs-16 lh-base">Check postage is easy with 3 courier options.<span class="fw-semibold">JNE, POS and TIKI</span>, Please check by clik the button below. <i class="mdi mdi-arrow-down"></i>
                            </p>
                            <div class="mt-3">
                                <a href="{{ url('ongkir') }}" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div>
        </div> <!-- end col-->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-success border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
                        <div class="flex-grow-1 text-truncate">
                            <b>Send Email With Attachment</b>.
                        </div>
                    </div>
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md me-3">
                                <span class="avatar-title bg-soft-success rounded-circle fs-1">
                                    <i class="ri-mail-check-line text-success"></i>
                                </span>
                            </div>
                        </div>
                        <div>
                            <p class="fs-16 lh-base">Send Email with<span class="fw-semibold">attachment file. When file generate from system.</span>, Please check by clik the button below.<i class="mdi mdi-arrow-down"></i>
                            </p>
                            <div class="mt-3">
                                <a href="{{ url('school') }}" class="btn btn-success">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div>
        </div> <!-- end col-->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-info border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
                        <div class="flex-grow-1 text-truncate">
                            <b>Convert Image</b>.
                        </div>
                    </div>
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0">
                            <div class="avatar-md me-3">
                                <span class="avatar-title bg-soft-info rounded-circle fs-1">
                                    <i class="ri-image-2-line text-info"></i>
                                </span>
                            </div>
                        </div>
                        <div>
                            <p class="fs-16 lh-base">Convert Image <span class="fw-semibold">from page HTML to Image format PNG with Library Canvas.</span>, Please check by clik the button below.<i class="mdi mdi-arrow-down"></i>
                            </p>
                            <div class="mt-3">
                                <a href="{{ url('images') }}" class="btn btn-info">Learn More</a>
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

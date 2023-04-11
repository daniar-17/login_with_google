@extends('main')

@section('title_content','Cek Ongkir')

@push('addon-css')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <style>
    .select2-selection__rendered {
        line-height: 31px !important;
    }
    .select2-container .select2-selection--single {
        height: 35px !important;
    }
    .select2-selection__arrow {
        height: 34px !important;
    }
  </style>
@endpush

@section('content')
  <div class="card">
    <div class="card-header align-items-center d-flex">
      <h4>Cek Ongkir</h4>
    </div>
    <!-- end card header -->
    <div class="card-body">
      <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-primary border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
                        <div class="flex-grow-1 text-truncate">
                            <b>Asal Pengiriman</b>.
                        </div>
                    </div>
                    <div class="d-flex p-2">
                        <select class="form-control js-example-basic-single asal" name="state">
                            <option value="">Asal Pengiriman</option>
                            <option value="Choice 1">Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-primary border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
                        <div class="flex-grow-1 text-truncate">
                            <b>Tujuan Pengiriman</b>.
                        </div>
                    </div>
                    <div class="d-flex p-2">
                        <select class="form-control js-example-basic-single tujuan" name="state">
                            <option value="">Tujuan Pengiriman</option>
                            <option value="Choice 1">Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-primary border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
                        <div class="flex-grow-1 text-truncate">
                            <b>Berat</b>.
                        </div>
                    </div>
                    <div class="d-flex p-2">
                        <input type="text" class="form-control" id="berat" placeholder="1.00">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="card">
                <div class="card-body p-0">
                    <div class="alert alert-primary border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
                        <div class="flex-grow-1 text-truncate">
                            <b>Cek Tarif</b>.
                        </div>
                    </div>
                    <div class="d-grid p-2 flex-wrap gap-2">
                        <button type="button" class="btn btn-primary btn-label waves-effect waves-light w-lg"><i class="ri-search-2-line label-icon align-middle fs-16 me-2"></i> Cek Tarif</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  <!-- end card-body -->
  </div>
@endsection


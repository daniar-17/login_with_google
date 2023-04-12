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
                            @foreach ( $responseBody->rajaongkir->results as $item )
                              <option value="{{ $item->city_id }}">{{ $item->type }}, {{ $item->city_name }}, {{ $item->province }}</option>
                            @endforeach
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
                            @foreach ( $responseBody->rajaongkir->results as $item )
                              <option value="{{ $item->city_id }}">{{ $item->type }}, {{ $item->city_name }}, {{ $item->province }}</option>
                            @endforeach
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
                        <input type="number" class="form-control" id="berat" placeholder="1.00">
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
  </div>
  <div class="card">
    <div class="card-header align-items-center d-flex">
      <h4>Tarif Ongkir</h4>
    </div>
    <div class="card-body">
      <table class="table table-striped table-nowrap align-middle mb-0">
        <thead>
            <tr>
                <th scope="col">Ekspedisi</th>
                <th scope="col">Layanan</th>
                <th scope="col">Estimasi Waktu</th>
                <th scope="col">Biaya</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="{{asset('assets/images/jne.png')}}" alt="" style="width: 25%;"></td>
                <td>Bobby Davis</td>
                <td>Nov 14, 2021</td>
                <td>$2,410</td>
            </tr>
            <tr>
                <td><img src="{{asset('assets/images/pos.png')}}" alt="" style="width: 25%;"></td>
                <td>Christopher Neal</td>
                <td>Nov 21, 2021</td>
                <td>$1,450</td>
            </tr>
            <tr>
                <td><img src="{{asset('assets/images/tiki.png')}}" alt="" style="width: 25%;"></td>
                <td>Christopher Neal</td>
                <td>Nov 21, 2021</td>
                <td>$1,450</td>
            </tr>
        </tbody>
    </table>
    </div>
  </div>
@endsection


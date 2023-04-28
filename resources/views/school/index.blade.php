@extends('main')

@section('title_content','Data Guru')

@section('content')
  <div class="card">
    <div class="card-header align-items-center d-flex gap-2">
      <a href="{{ url('school/add') }}" class="btn btn-primary add-btn-multiple">
          Check Add
      </a>
      <a href="{{ route('school_pdf_single') }}" class="btn btn-success add-btn-multiple" id="create-btn-multiple">
          Generate PDF
      </a>
    </div>
    <div class="card-body">
        <table id="bootstrap-data-table2" class="table dt-responsive nowrap table-striped align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kota</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->kota}}</td>
                    <td>{{$item->umur}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  <!-- end card-body -->
  </div>
@endsection

@push('addon-script')
    <script type="text/javascript">
        $(document).ready(function(){
            
        //Last Line
        });
    </script>
@endpush
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
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#signupModals">
          Send and Generate PDF
      </button>
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

  <div id="signupModals" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-header p-3">
                <h4 class="card-title mb-0">Send Data & CV</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="alert alert-success rounded-0 mb-0">
                <p class="mb-0">Please complete the Data...</p>
            </div>
            <div class="modal-body">
                <form action="{{ route('school_pdf_parsing') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" id="fullName" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" id="emailInput" placeholder="Enter your email">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@push('addon-script')
    <script type="text/javascript">
        $(document).ready(function(){
            
        //Last Line
        });
    </script>
@endpush
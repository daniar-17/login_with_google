@extends('main')

@section('title_content','Guru')

@section('content')
  <div class="card">
    <div class="card-header align-items-center d-flex">
      <h4>Add Guru</h4>
    </div>
    <!-- end card header -->

    <div class="card-body">
      <div>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <form id="add_form" name="add_form" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kota</th>
                        <th>Umur</th>
                        <th class="text-center">
                            <a href="javascript:;" class="btn btn-success addRow" id="addRow"><i class="ri-add-line"></i></a>
                        </th>
                    </tr>
                </thead>
                <tbody class="addData">
                    <tr>
                        <td>
                            <select name="nama[]" id="nama" class="form-control nama">
                                @foreach ($data as $item)
                                <option value="{{$item->nama }}" data-umur="{{ $item->umur }}" data-kota="{{ $item->kota }}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="text" name="kota[]" class="form-control kota" value="" required autofocus placeholder="kota..">
                        </td>
                        <td>
                            <input type="number" name="umur[]" class="form-control umur" value="" required autofocus placeholder="umur..">
                        </td>
                        <td class="text-center"><a href="javascript:;" class="btn btn-danger deleteRow"><i class="ri-delete-bin-fill"></i></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <button type="button" class="btn btn-success" style="float: right;" id="btn-save" data-url=""><i class="ri-save-line"></i> Save</button>
                            <a href="" class="btn btn-light">
                                <i class="ri-arrow-go-back-line"></i> Back
                            </a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
      </div>
    </div>
  <!-- end card-body -->
  </div>
@endsection

@push('addon-script')
    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on("click", ".nama", function () {
                var tr = $(this).parent().parent();
                var gUmur = $('option:selected', this).attr('data-umur');
                var gKota = $('option:selected', this).attr('data-kota');
                tr.find('.umur').val(gUmur);
                tr.find('.kota').val(gKota);
            });

            //Add Row Form
            $('#addRow').on('click', function(){
                var tr = 
                '<tr>'+
                    '<td>'+
                        '<select name="nama[]" id="nama" class="form-control nama">'+
                            '@foreach ($data as $item)'+
                                '<option value="{{$item->nama }}" data-umur="{{ $item->umur }}" data-kota="{{ $item->kota }}">{{$item->nama}}</option>'+
                            '@endforeach'+
                        '</select>'+
                    '</td>'+
                    '<td>'+
                        '<input type="text" name="kota[]" class="form-control kota" value="" required autofocus placeholder="kota..">'+
                    '</td>'+
                    '<td>'+
                        '<input type="number" name="umur[]" class="form-control umur" value="" required autofocus placeholder="umur..">'+
                    '</td>'+
                    '<td class="text-center"><a href="javascript:;" class="btn btn-danger deleteRow"><i class="ri-delete-bin-fill"></i></a></td>'+
                '</tr>';

                $('table tbody').append(tr);
            });

            //Delete Row Form
            $('tbody').on('click', '.deleteRow', function(){
                $(this).parent().parent().remove();
                total();
            });
            
        //Last Line
        });
    </script>
@endpush
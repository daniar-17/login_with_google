@extends('main')

@section('title_content','Convert to Image')

@push('addon-css')
    <style>
        .container {
            position: relative;
            max-width: 100%; /* Maximum width */
            margin: 0 auto; /* Center it */
        }

        .container .content {
            position: absolute; /* Position the background text */
            bottom: 0; /* At the bottom. Use top:0 to append it to the top */
            background: rgb(0, 0, 0); /* Fallback color */
            background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
            width: 96%; /* Full width */
            padding: 10px; /* Some padding */
        }
    </style>
@endpush

@section('content')
  <div class="card">
    <div class="card-header align-items-center d-flex gap-2">
      <h4 class="card-title mb-0 flex-grow-1">Convert Page Html to Image</h4>
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return confirm('Apakah Data Akan Disimpan ? ')">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="container">
                        <p>
                            <img src="{{asset('assets/images/img01.jpg')}}" class="rounded shadow" id="upload_target" width="100%" style="border: 1px solid #555;" >
                        </p>
                        <div class="content">
                            <h4 class="titikKoordinatImage text-white">Titik Koordinat</h4>
                            <p class="captionImage text-white">Caption in here. . .</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" accept="image/*" class="form-control" name="image" id="daftar_foto">
                    </div>
                    <div class="mb-3">
                        <label for="">Titik Koordinat</label>
                        <input type="text" name="titikKoordinat" class="form-control titikKoordinat" value="" autofocus placeholder="Titik Koordinat..">
                    </div>
                    <div class="mb-3">
                        <label for="">Caption</label>
                        <input type="text" name="caption" class="form-control caption" value="" autofocus placeholder="Caption..">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-success" id="btn-setText" style="width: 100%;">Set Text</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-primary" id="btn-generateImage" style="width: 100%;">Generate Image</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  <!-- end card-body -->
  </div>
@endsection

@push('addon-script')
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var element = $(".container");
            var getCanvas;
            $("#btn-generateImage").click(function(){
                var titikKoordinat = $(".titikKoordinat").val();
                var caption = $(".caption").val();
                if(titikKoordinat == "" || caption == ""){
                    errMsg("Caption and Titik Koordinat Cannot Be Empty!")
                    return false;
                }
                html2canvas(document.querySelector(".container")).then(canvas => {
                    var canvasUrl = canvas.toDataURL();

                    // Create an anchor, and set the href value to our data URL
                    const createEl = document.createElement('a');
                    createEl.href = canvasUrl;

                    // This is the name of our downloaded file
                    createEl.download = "download-this-canvas";

                    // Click the download button, causing a download, and then remove it
                    createEl.click();
                    createEl.remove();
                });
            });

            //Error Message Function
            function errMsg(msg){
                Swal.fire({
                    icon: 'error',
                    title: msg,
                })
            }

            //Success Message Function
            function successMsg(msg){
                Swal.fire({
                    icon: 'success',
                    title: msg,
                    showConfirmButton: false,
                    timer: 1500
                })
            }

            daftar_foto.onchange = evt => {
                const [file] = daftar_foto.files
                if (file) {
                    upload_target.src = URL.createObjectURL(file)
                }
            }

            $("#btn-setText").click(function(){
                var titikKoordinat = $(".titikKoordinat").val();
                var caption = $(".caption").val();
                if(titikKoordinat == "" || caption == ""){
                    errMsg("Caption and Titik Koordinat Cannot Be Empty!")
                    return false;
                }
                $(".titikKoordinatImage").html(titikKoordinat);
                $(".captionImage").html(caption);
            });
        //Last Line
        });
    </script>
@endpush
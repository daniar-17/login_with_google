
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>Sign In | Mie Sedap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    @include('layouts.css_sign')
</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-3 mb-2 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="{{asset('assets/images/logo-light.png')}}" alt="" style="width: 60%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Set Password</h5>
                                    <p class="text-muted">Set Password to continue to Access Website.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <meta name="csrf-token" content="{{ csrf_token() }}" />
                                    <form action="" method="POST">
                                        @csrf
                                        <input type="text" class="form-control" id="google_id" name="google_id" value="{{ $user->id }}" hidden>
                                        <div class="mb-3">
                                            <label for="validationCustom01" class="form-label">Name</label>
                                            <div class="form-icon right">
                                                <input type="text" class="form-control form-control-icon name" id="name" name="name" placeholder="Enter Name.." value="{{ $user->name }}" required readonly>
                                                <i class="ri-checkbox-circle-fill text-success fs-22"></i>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <div class="form-icon right">
                                                <input type="email" class="form-control email" id="email" name="email" placeholder="Enter Email.." value="{{ $user->email }}" required readonly>
                                                <i class="ri-checkbox-circle-fill text-success fs-22"></i>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="password" class="form-control pe-5 password-input password" placeholder="Enter password" id="password-input" required autofocus>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" id="btn_submit" type="button" data-url="{{ route('postlogin') }}">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    @include('layouts.js_sign')

    {{-- Process Login --}}
    <script type="text/javascript">
        $(document).ready(function(){

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

            //Declare Csrf
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });

            //Function to Submit
            $("#btn_submit").click(function (){
                var url = $(this).attr('data-url');
                var name = $("#name").val();
                var email = $("#email").val();
                var password = $("#password-input").val();
                var google_id = $("#google_id").val();
                if(password == ""){
                    errMsg("Password Tidak Boleh Kosong !");
                    return false;
                }
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: url,
                    data: {
                        email : email,
                        name : name,
                        google_id : google_id,
                        password : password,
                    },
                    success: function(val) {
                        if (val["status"] == false) {
                            errMsg(val['info']);
                        }else{
                            successMsg(val['info']);
                            setTimeout(function() { 
                                window.location = '{{ url('home') }}';
                            }, 1700);
                        }
                    },
                    error: function(val) {
                        console.log('Error: ', data);
                    }
                });
            });
        });
    </script>

{{-- Last Line --}}
</body>

</html>
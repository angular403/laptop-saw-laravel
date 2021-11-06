<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Register Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}} " rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/style.css')}} " rel="stylesheet" type="text/css" />

        <script src="{{asset('admin/assets/js/modernizr.min.js')}} "></script>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="index.html" class="text-success">
                                                <h1>Registrasi Lucky Shop</h1>
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="account-content">
                                        <form class="form-horizontal" id="form-register" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="emailaddress">Name</label>
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email address</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password">Password</label>
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" value="">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password_confirmation">Confirm Password</label>
                                                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>

                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit">Regsitrasi</button>
                                                </div>
                                            </div>



                                        </form>

                                    

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->


        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}} "></script>
        <script src="{{asset('admin/assets/js/popper.min.js')}} "></script>
        <script src="{{asset('admin/assets/js/bootstrap.min.js')}} "></script>
        <script src="{{asset('admin/assets/js/waves.js')}} "></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}} "></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/jquery.core.js')}} "></script>
        <script src="{{asset('admin/assets/js/jquery.app.js')}} "></script>
        <script type="text/javascript">
            $("#form-register").on('submit',function(e){
                const password = $("#form-register [name='password']").val()
                const confirm_password = $("#form-register [name='password_confirmation']").val()
                console.log(password,confirm_password);
                if(password!=confirm_password){
                    e.preventDefault()
                    alert("Password tidak sama")
                }else{
                    return true;
                }
            })
        </script>
    </body>
</html>
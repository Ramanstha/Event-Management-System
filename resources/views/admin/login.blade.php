<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Event Managment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <!-- Bootstrap css -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="{{asset('backend/js/head.js')}}"></script>

</head>

<body>

    <div style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-3">Event Managment System</h3>
                            <h4 class="mb-3">Sign in</h4>
                            @error('error')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                            <form action="{{ route('admin.login.submit') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-2">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email"
                                        placeholder="abc@example.com" />
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control form-control-lg"
                                            placeholder="Enter your password" name="password">
                                        <div class="input-group-text" data-password="false">
                                            <span><i class="fa fa-eye"></i></span>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page -->

    <footer class="footer text-light footer-alt">
        <script>
            document.write(new Date().getFullYear())
        </script> &copy; by <a href="#" class="text-white-50"></a>
    </footer>

    <!-- Vendor js -->
    <script src="{{asset('backend/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('backend/js/app.min.js')}}"></script>

</body>

</html>
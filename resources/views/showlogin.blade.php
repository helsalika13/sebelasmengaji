<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sebelas Mengaji </title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin-assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin-assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin-assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('admin-assets/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin-assets/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login" style="background : url('app-assets/images/banner.jpg')">

    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <h1>Silahkan Login</h1>
                                <div>
                                    <input type="text" class="form-control" placeholder="Username" name="username" required="" />
                                </div>
                                <div>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="" />
                                </div>
                                <div>
                                    <button class="btn btn-success submit" type="submit">Log in</button>
                                    <a class="reset_pass" href="#">Lost your password?</a>
                                </div>

                                <div class="clearfix"></div>

                                <div class="separator">
                                    <p class="change_link">New to site?
                                        <a href="#signup" class="to_register"> Create Account </a>
                                    </p>

                                    <div class="clearfix"></div>
                                    <br />

                                    <div>
                                        <h1><i class="fa fa-book"></i> Sebelas Mengaji!</h1>
                                        <p>©sebelas mengaji 2021</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
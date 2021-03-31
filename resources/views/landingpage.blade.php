<!DOCTYPE HTML>
<html>

<head>
    <title>Sebelas Mengaji</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('app-assets/css/main.css') }}" />
</head>

<body>

    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="index.html" class="logo"><strong>Sebelas</strong> Mengaji</a>
            <nav id="nav">
                <a href="#" class="icon fa-sign-in"> Login</a>
            </nav>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <header>
                <h1>Sudah membaca Qur'an hari ini ?</h1>
            </header>

            <div class="flex ">

                <div>
                    <span class="icon fa-book"></span>
                    <h3>Qur'an Online</h3>
                    <p>Membaca Al-qur'an kapan saja !</p>
                </div>

                <div>
                    <span class="icon fa-tasks"></span>
                    <h3>Progress Membaca Qur'an</h3>
                    <p>Mengelola progress pembacaan Qur'an !</p>
                </div>

            </div>

            <footer>
                <a href="{{route('quran')}}" class="button">Get Started</a>
            </footer>
        </div>
    </section>

    <!-- Scripts -->
    <script src="{{asset('app-assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('app-assets/js/skel.min.js')}}"></script>
    <script src="{{asset('app-assets/js/util.js')}}"></script>
    <script src="{{asset('app-assets/js/main.js')}}"></script>

</body>

</html>
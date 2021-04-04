@extends('layouts.master')

@section('content')

<body class="subpage" style="background : url('app-assets/images/banner.jpg'); font-family : cursive;">
    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="index.html" class="logo"><strong>Sebelas</strong> Mengaji</a>
            <nav id="nav">
                <a href="{{route('ilogin')}}" class="icon fa-sign-in"> Login</a>
            </nav>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>




    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="inner">
                        <header class="align-center">
                            <h5 class="card-title">Baca Alquran</h5>
                            <p class="card-text">Pilih surat untuk menampilkan ayat</p>
                        </header><br><br>

                        <h4>Pilih Surat</h4>
                        <hr>

                        <div class="align-center">
                            <div class="3u 12u$(small)">

                                <a href="#" class="button small">Al - Fatihah</a>

                            </div>
                        </div>
                        <div class="row">
                            <div class="3u 12u$(small)">

                                <a href="#" class="button small">Al - Fatihah</a>

                            </div>
                        </div>
                        <div class="row">
                            <div class="3u 12u$(small)">

                                <a href="#" class="button small">Al - Fatihah</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

@endsection
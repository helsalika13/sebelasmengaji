@extends('layouts.master')

@section('content')

<body class="subpage" style="background : url('app-assets/images/banner.jpg'); font-family : cursive;">
    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="index.html" class="logo"><strong>Sebelas</strong> Mengaji</a>
            <nav id="nav">
                <a href="#" class="icon fa-home"> Home</a>
                <a href="#" class="icon fa-sign-in"> Login</a>
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

                        <h6>Pilih surat !</h6>
                        @foreach ($quran as $q)
                        <table>
                            <th>ayat</th>

                            <tr>
                                <td>{{$q->ayat}}
                                </td>
                            </tr>
                        </table>


                        @endforeach
                        <div class="row">
                            <div class="3u 12u$(small)">
                                <ul class="actions vertical small">
                                    <li><a href="#" class="button small">Alfatihah</a></li>
                                    <li><a href="#" class="button small">Albaqarah</a></li>
                                    <li><a href="#" class="button small"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

@endsection
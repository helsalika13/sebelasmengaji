@extends('layouts.master')

@section('content')

<body class="subpage" style="background : url('app-assets/images/banner.jpg'); font-family : cursive;">
    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="index.html" class="logo"><strong>Sebelas</strong> Mengaji</a>
            <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>
    </header>




    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="inner">
                        <header class="align-center">
                            <h5 class="card-title"></h5><br><br>
                            <p class="card-text"><b> ﷽﷽</p></b>
                        </header><br><br>

                        <hr>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        @foreach ($quran as $q)

                                        <p class="card-text" style="text-align : right">{{$q->no_ayat}} {{$q->ayat}}</p>
                                        </h5>
                                        <p class="card-text">{{$q->latin}}</p>
                                        <p class="card-text">{{$q->terjemahan}}</p><br><br>
                                        @endforeach
                                    </div>
                                </div>
                            </div><br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

@endsection
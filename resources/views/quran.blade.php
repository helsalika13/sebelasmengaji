@extends('layouts.master')

@section('content')

<body class="subpage" style="background : url('app-assets/images/banner.jpg'); font-family : cursive;">
    <!-- Header -->
    <header id="header">
        <div class="inner">
            <a href="#" class="logo"><strong>Sebelas</strong> Mengaji</a>
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
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al Fatihah</h5>
                                        <p class="card-text">Pembukaan</p>
                                        <a href="{{route('quransurat', 1)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al Baqarah</h5>
                                        <p class="card-text">Sapi Betina</p>
                                        <a href="{{route('quransurat', 2)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ali Imran</h5>
                                        <p class="card-text">Keluarga Imran</p>
                                        <a href="{{route('quransurat', 3)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">An - Nisa</h5>
                                        <p class="card-text">Perempuan</p>
                                        <a href="{{route('quransurat', 4)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Ma’idah</h5>
                                        <p class="card-text">Jamuan</p>
                                        <a href="{{route('quransurat', 5)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-An’am</h5>
                                        <p class="card-text">Binatang Ternak</p>
                                        <a href="{{route('quransurat', 6)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-A’raf </h5>
                                        <p class="card-text">Tempat yang tertinggi</p>
                                        <a href="{{route('quransurat', 7)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-A’raf</h5>
                                        <p class="card-text">Harta Rampasan Perang</p>
                                        <a href="{{route('quransurat', 8)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">At-Taubah</h5>
                                        <p class="card-text">Pengampunan</p>
                                        <a href="{{route('quransurat', 9)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Yunus</h5>
                                        <p class="card-text">Nabi Yunus</p>
                                        <a href="{{route('quransurat', 10)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Hud</h5>
                                        <p class="card-text">Nabi Hud</p>
                                        <a href="{{route('quransurat', 11)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Yusuf </h5>
                                        <p class="card-text">Nabi Yusuf</p>
                                        <a href="{{route('quransurat', 12)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ar-Ra’d</h5>
                                        <p class="card-text">Guruh</p>
                                        <a href="{{route('quransurat', 13)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ibrahim</h5>
                                        <p class="card-text">Nabi Ibrahi,</p>
                                        <a href="{{route('quransurat', 14)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Hijr</h5>
                                        <p class="card-text">Al-Hijr</p>
                                        <a href="{{route('quransurat', 15)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">An-Nahl</h5>
                                        <p class="card-text">Lebah</p>
                                        <a href="{{route('quransurat', 16)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Isra’</h5>
                                        <p class="card-text">Memperjalankan di waktu malam</p>
                                        <a href="{{route('quransurat', 17)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Kahf</h5>
                                        <p class="card-text">Penghuni-Penghuni Gua</p>
                                        <a href="{{route('quransurat', 18)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Maryam</h5>
                                        <p class="card-text">Maryam</p>
                                        <a href="{{route('quransurat', 19)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ta Ha</h5>
                                        <p class="card-text">Ta Ha</p>
                                        <a href="{{route('quransurat', 20)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Anbiya</h5>
                                        <p class="card-text">Nabi-Nabi</p>
                                        <a href="{{route('quransurat', 21)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Hajj</h5>
                                        <p class="card-text">Haji</p>
                                        <a href="{{route('quransurat', 22)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Mu’minun</h5>
                                        <p class="card-text">Orang-orang mukmin</p>
                                        <a href="{{route('quransurat', 23)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">An-Nur</h5>
                                        <p class="card-text">Cahaya</p>
                                        <a href="{{route('quransurat', 24)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Furqan</h5>
                                        <p class="card-text">Pembeda</p>
                                        <a href="{{route('quransurat', 25)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Asy-Syu’ara’</h5>
                                        <p class="card-text">Penyair</p>
                                        <a href="{{route('quransurat', 26)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">An-Naml</h5>
                                        <p class="card-text">Semut</p>
                                        <a href="{{route('quransurat', 27)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Qasas</h5>
                                        <p class="card-text">Cerita</p>
                                        <a href="{{route('quransurat', 28)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-‘Ankabut</h5>
                                        <p class="card-text">Laba-laba</p>
                                        <a href="{{route('quransurat', 29)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ar-Rum</h5>
                                        <p class="card-text">Bangsa Romawi</p>
                                        <a href="{{route('quransurat', 30)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Luqman</h5>
                                        <p class="card-text">Keluarga Luqman</p>
                                        <a href="{{route('quransurat', 31)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">As-Sajdah</h5>
                                        <p class="card-text">Sajdah</p>
                                        <a href="{{route('quransurat', 32)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Ahzab</h5>
                                        <p class="card-text">Golongan-Golongan yang bersekutu</p>
                                        <a href="{{route('quransurat', 33)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Saba’</h5>
                                        <p class="card-text">Kaum Saba’</p>
                                        <a href="{{route('quransurat', 34)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Fatir</h5>
                                        <p class="card-text">Pencipta</p>
                                        <a href="{{route('quransurat', 35)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ya Sin</h5>
                                        <p class="card-text">Yaasiin</p>
                                        <a href="{{route('quransurat', 36)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">As-Saffat </h5>
                                        <p class="card-text">Barisan-barisan </p>
                                        <a href="{{route('quransurat', 37)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Sad</h5>
                                        <p class="card-text">Shaad </p>
                                        <a href="{{route('quransurat', 38)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Az-Zumar</h5>
                                        <p class="card-text">Rombongan-rombongan</p>
                                        <a href="{{route('quransurat', 39)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Mu’min</h5>
                                        <p class="card-text">Orang yg Beriman</p>
                                        <a href="{{route('quransurat', 40)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Fussilat</h5>
                                        <p class="card-text">Yang dijelaskan</p>
                                        <a href="{{route('quransurat', 41)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Asy-Syura</h5>
                                        <p class="card-text">Musyawarah</p>
                                        <a href="{{route('quransurat', 42)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Az-Zukhruf</h5>
                                        <p class="card-text">Perhiasan</p>
                                        <a href="{{route('quransurat', 43)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ad-Dukhan</h5>
                                        <p class="card-text">Kabut</p>
                                        <a href="{{route('quransurat', 44)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Jasiyah</h5>
                                        <p class="card-text">Yang bertekuk lutut</p>
                                        <a href="{{route('quransurat', 45)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Ahqaf</h5>
                                        <p class="card-text">Bukit-bukit pasir</p>
                                        <a href="{{route('quransurat', 46)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Muhammad </h5>
                                        <p class="card-text">Muhammad</p>
                                        <a href="{{route('quransurat', 47)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Fath</h5>
                                        <p class="card-text">Kemenangan</p>
                                        <a href="{{route('quransurat', 48)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Hujurat</h5>
                                        <p class="card-text">Kamar-kamar</p>
                                        <a href="{{route('quransurat', 49)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Qaf</h5>
                                        <p class="card-text">Qaaf</p>
                                        <a href="{{route('quransurat', 50)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Az-Zariyat</h5>
                                        <p class="card-text">Angin yang menerbangkan</p>
                                        <a href="{{route('quransurat', 51)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">At-Tur</h5>
                                        <p class="card-text">Bukit</p>
                                        <a href="{{route('quransurat', 52)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">An-Najm</h5>
                                        <p class="card-text">Bintang</p>
                                        <a href="{{route('quransurat', 53)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Qamar</h5>
                                        <p class="card-text"> Bulan</p>
                                        <a href="{{route('quransurat', 54)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ar-Rahman</h5>
                                        <p class="card-text">Yang Maha Pemurah</p>
                                        <a href="{{route('quransurat', 55)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Waqi’ah</h5>
                                        <p class="card-text">Hari Kiamat</p>
                                        <a href="{{route('quransurat', 56)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Hadid</h5>
                                        <p class="card-text">Besi</p>
                                        <a href="{{route('quransurat', 57)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Mujadilah</h5>
                                        <p class="card-text"> Wanita yang mengajukan gugatan</p>
                                        <a href="{{route('quransurat', 58)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Hasyr</h5>
                                        <p class="card-text">Pengusiran</p>
                                        <a href="{{route('quransurat', 59)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Mumtahanah </h5>
                                        <p class="card-text">Wanita yang diuji</p>
                                        <a href="{{route('quransurat', 60)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">As-Saff </h5>
                                        <p class="card-text">Satu barisan</p>
                                        <a href="{{route('quransurat', 61)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Jumu’ah</h5>
                                        <p class="card-text">Hari Jum’at</p>
                                        <a href="{{route('quransurat', 62)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Munafiqun</h5>
                                        <p class="card-text">Orang-orang yang munafik</p>
                                        <a href="{{route('quransurat', 63)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">At-Tagabun</h5>
                                        <p class="card-text">Hari dinampakkan kesalahan-kesalahan</p>
                                        <a href="{{route('quransurat', 64)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">At-Talaq</h5>
                                        <p class="card-text">Talak</p>
                                        <a href="{{route('quransurat', 65)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">At-Tahrim</h5>
                                        <p class="card-text">Mengharamkan</p>
                                        <a href="{{route('quransurat', 66)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Mulk</h5>
                                        <p class="card-text">Kerajaan</p>
                                        <a href="{{route('quransurat', 67)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Qalam</h5>
                                        <p class="card-text">Pena</p>
                                        <a href="{{route('quransurat', 68)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Haqqah</h5>
                                        <p class="card-text">Hari Kiamat</p>
                                        <a href="{{route('quransurat', 69)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Ma’arij</h5>
                                        <p class="card-text">Tempat Naik</p>
                                        <a href="{{route('quransurat', 70)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Nuh</h5>
                                        <p class="card-text">Nuh</p>
                                        <a href="{{route('quransurat', 71)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Jinn</h5>
                                        <p class="card-text">Jin</p>
                                        <a href="{{route('quransurat', 72)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Muzzammil</h5>
                                        <p class="card-text">Orang yang berselimut</p>
                                        <a href="{{route('quransurat', 73)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Muddassir</h5>
                                        <p class="card-text">Orang yang berkemul</p>
                                        <a href="{{route('quransurat', 74)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Qiyamah</h5>
                                        <p class="card-text">Hari Kiamat</p>
                                        <a href="{{route('quransurat', 75)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Insan</h5>
                                        <p class="card-text">Manusia</p>
                                        <a href="{{route('quransurat', 76)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Mursalat</h5>
                                        <p class="card-text">Malaikat-Malaikat Yang Diutus</p>
                                        <a href="{{route('quransurat', 77)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">An-Naba’</h5>
                                        <p class="card-text">Berita besar</p>
                                        <a href="{{route('quransurat', 78)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">An-Nazi’at </h5>
                                        <p class="card-text">Malaikat-Malaikat Yang Mencabut</p>
                                        <a href="{{route('quransurat', 79)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">‘Abasa</h5>
                                        <p class="card-text">Ia Bermuka masam</p>
                                        <a href="{{route('quransurat', 80)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">At-Takwir</h5>
                                        <p class="card-text">Menggulung</p>
                                        <a href="{{route('quransurat', 81)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Infitar</h5>
                                        <p class="card-text">terbelah</p>
                                        <a href="{{route('quransurat', 82)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Tatfif</h5>
                                        <p class="card-text">Orang-orang yang curang</p>
                                        <a href="{{route('quransurat', 83)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Insyiqaq</h5>
                                        <p class="card-text">Terbelah</p>
                                        <a href="{{route('quransurat', 84)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Buruj</h5>
                                        <p class="card-text">Gugusan bintang</p>
                                        <a href="{{route('quransurat', 85)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">At-Tariq </h5>
                                        <p class="card-text">Yang datang di malam hari </p>
                                        <a href="{{route('quransurat', 86)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-A’la</h5>
                                        <p class="card-text">Yang paling tinggi</p>
                                        <a href="{{route('quransurat', 87)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Gasyiyah</h5>
                                        <p class="card-text">Hari Pembalasan</p>
                                        <a href="{{route('quransurat', 88)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Fajr </h5>
                                        <p class="card-text">Fajar</p>
                                        <a href="{{route('quransurat', 89)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Balad</h5>
                                        <p class="card-text">Negeri</p>
                                        <a href="{{route('quransurat', 90)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Asy-Syams</h5>
                                        <p class="card-text">Matahari</p>
                                        <a href="{{route('quransurat', 91)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Lail</h5>
                                        <p class="card-text">Malam</p>
                                        <a href="{{route('quransurat', 92)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ad-Duha</h5>
                                        <p class="card-text">Waktu matahari sepenggalahan naik (Dhuha)</p>
                                        <a href="{{route('quransurat', 93)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Insyirah</h5>
                                        <p class="card-text">Melapangkan</p>
                                        <a href="{{route('quransurat', 94)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">At-Tin</h5>
                                        <p class="card-text">Buah Tin</p>
                                        <a href="{{route('quransurat', 95)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-‘Alaq</h5>
                                        <p class="card-text">Segumpal Darah</p>
                                        <a href="{{route('quransurat', 96)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Qadr </h5>
                                        <p class="card-text">Kemuliaan</p>
                                        <a href="{{route('quransurat', 97)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Bayyinah</h5>
                                        <p class="card-text">Pembukaan</p>
                                        <a href="{{route('quransurat', 98)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Az-Zalzalah</h5>
                                        <p class="card-text">Kegoncangan</p>
                                        <a href="{{route('quransurat', 99)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-‘Adiyat</h5>
                                        <p class="card-text">Berlari kencang</p>
                                        <a href="{{route('quransurat', 100)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Qari’ah</h5>
                                        <p class="card-text">Hari Kiamat</p>
                                        <a href="{{route('quransurat', 101)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">At-Takasur</h5>
                                        <p class="card-text">Bermegah - megahan</p>
                                        <a href="{{route('quransurat', 102)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-‘Asr</h5>
                                        <p class="card-text">Masa Waktu</p>
                                        <a href="{{route('quransurat', 103)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Humazah</h5>
                                        <p class="card-text">Pengumpat</p>
                                        <a href="{{route('quransurat', 104)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Fil</h5>
                                        <p class="card-text">Gajah</p>
                                        <a href="{{route('quransurat', 105)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Quraisy</h5>
                                        <p class="card-text">Suku Quraisy</p>
                                        <a href="{{route('quransurat', 106)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Ma’un </h5>
                                        <p class="card-text">Barang-barang yang berguna</p>
                                        <a href="{{route('quransurat', 107)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Kausa</h5>
                                        <p class="card-text">Nikmat yang Berlimpah</p>
                                        <a href="{{route('quransurat', 108)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Kafirun</h5>
                                        <p class="card-text">Orang-orang Kafir</p>
                                        <a href="{{route('quransurat', 109)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">An-Nasr</h5>
                                        <p class="card-text">Pertolongan</p>
                                        <a href="{{route('quransurat', 110)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Lahab</h5>
                                        <p class="card-text">Gejolak Api Sabut</p>
                                        <a href="{{route('quransurat', 111)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Ikhlas</h5>
                                        <p class="card-text">Ikhlas</p>
                                        <a href="{{route('quransurat', 112)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Al-Falaq</h5>
                                        <p class="card-text">Waktu Subuh</p>
                                        <a href="{{route('quransurat', 113)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">An-Nas</h5>
                                        <p class="card-text">Manusia</p>
                                        <a href="{{route('quransurat', 114)}}" class="btn btn-success">Baca Surat</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

@endsection
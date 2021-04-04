@extends('layoutsadmin.master')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Mengelola <small>Progress</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Ayat</th>
                                                <th>Surat</th>
                                                <th>Kelas</th>
                                                <th colspan="2">Aksi</th>
                                            </tr>
                                        </thead>
                                        @foreach ($progress as $p)
                                        <tbody>
                                            <tr>
                                                <td>{{ $p->tanggal }}</td>
                                                <td>{{ $p->ayat_ke }}</td>
                                                <td>{{ $p->surat_ke }}</td>
                                                <td>{{ $p->class }}</td>
                                                <td>
                                                    <a href="{{ route('feedback', $p->progressid) }}"><i class="fa fa-plus"></i> Tambah Feedback </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
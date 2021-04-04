@extends('layoutsSadmin.master')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Mengelola <small>Data Guru</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <a href="{{ route('addguru') }}" type="button" class="btn btn-primary">Tambah Guru</a>
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
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th colspan="2">Aksi</th>
                                            </tr>
                                        </thead>
                                        @foreach ($teachers as $teacher)
                                        <tbody>
                                            <tr>
                                                <td>{{ $teacher->nip }}</td>
                                                <td>{{ $teacher->name }}</td>
                                                <td>
                                                    <a href="{{ route('createakun', $teacher->nip)}}"><i class="fa fa-plus"></i></a>
                                                </td>
                                                <td>
                                                    <a href="#" onclick="return confirm('Apakah yakin akan menghapus ?')"><i class="fa fa-trash"></i></a>
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
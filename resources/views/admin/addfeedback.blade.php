@extends('layoutsadmin.master')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah Feedback</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah <small>feedback kelas</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        @foreach ($progress as $p)
                        <form action="{{ route('createfeedback') }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tanggal">Tanggal <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="hidden" name="progressid" required="required" class="form-control " value="{{$p->progressid}}">
                                    <input type="text" name="tanggal" required="required" class="form-control " value="{{$p->tanggal}}" disabled>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ayat_ke">Ayat Ke - <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="ayat_ke" name="ayat_ke" required="required" class="form-control" value="{{$p->ayat_ke}}" disabled>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="surat_ke">Surat Ke - <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="surat_ke" name="surat_ke" value="{{$p->surat_ke}}" required="required" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="class">Kelas <span class="required" disabled>*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="class" name="class" required="required" class="form-control" value="{{$p->class}}" disabled>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="teacher_id">Guru PAI <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">

                                    <select class="form-control" name="feedback_id">

                                        <option>Beri Feedback</option>
                                        @foreach ($feedback as $f)
                                        <option value="{{$f->id}}">{{$f->feedback}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="{{route('progress')}}" type="button" class="btn btn-primary" type="button">Kembali</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
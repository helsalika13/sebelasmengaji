@extends('layoutsSadmin.master')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Edit Kelas</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit <small>data kelas</small></h2>
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
                        @foreach ($kelas as $k)
                        <form action="{{ route('updatekelas', $k->id) }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nis">NIS <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="hidden" name="id" required="required" class="form-control " value="{{$k->id}}">
                                    <input type="hidden" name="nis" required="required" class="form-control " value="{{$k->nis}}">
                                    <input type="text" name="nis" required="required" class="form-control " value="{{$k->nis}}" disabled>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="class">Kelas <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="class" name="class" required="required" class="form-control" value="{{$k->class}}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="sie_rohani">Sie Rohani <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="sie_rohani" name="sie_rohani" value="{{$k->sie_rohani}}" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="contact">Email <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="contact" name="contact" required="required" class="form-control" value="{{$k->contact}}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="teacher_id">Guru PAI <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">

                                    <select class="form-control" name="teacher_id">
                                        <option>pilih guru</option>
                                        @foreach ($teachers as $t)
                                        @if ($k->teacher_id == $t->id)
                                        <option value="{{$t->id}}" selected>{{$t->name}}</option>
                                        @else
                                        <option value="{{$t->id}}">{{$t->name}}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="{{route('dataguru')}}" type="button" class="btn btn-primary" type="button">Kembali</a>
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
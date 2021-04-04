@extends('layoutsadmin.master')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <h2>Selamat Datang {{Auth::User()->name}}</h2>

</div>
<!-- /page content -->
@endsection
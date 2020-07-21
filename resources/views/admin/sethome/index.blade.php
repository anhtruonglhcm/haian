@extends('admin.partials.master')
@section('title', 'Cấu hình web')
@section('content')
<div class="content-wrapper">
<section class="content-header">
    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <div class="page-heading">
                    <h1>Cấu hình web</h1>
                    <div class="options">
                        <div class="btn-toolbar">
                        </div>
                    </div>
                </div>
                <ol class="breadcrumb">
                    <li>Trang chủ</li>
                    <li class="active">Cấu hình</li>
                </ol>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                @include('errors.message')
                                <div class="panel-body">
                                    <form role="form" class="form-horizontal" method="post"
                                    action="{{ route('admin.sethome.update') }}"
                                    enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tên công ty: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                    placeholder="Tên công ty" name="name_vi" value="{{ $sethomes->name_vi }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tên công ty_en: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                    placeholder="Tên công ty" name="name_en" value="{{ $sethomes->name_en }}">
                                                </div>
                                            </div>

                                            
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button class="btn-success btn">Lưu</button>
                                                    <a class="btn-default btn" href='javascript:goback()'>Quay lại</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection

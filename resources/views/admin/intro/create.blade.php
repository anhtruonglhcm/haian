@extends('admin.partials.master')
@section('title', 'Thêm')
@section('content')
<div class="content-wrapper">
<section class="content-header">
    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <div class="page-heading">
                    <h1>Thêm</h1>
                    <div class="options">
                        <div class="btn-toolbar">
                        </div>
                    </div>
                </div>
                <ol class="breadcrumb">
                    <li>Trang chủ</li>
                    <li>Giới thiệu</li>
                    <li class="active">Thêm</li>
                </ol>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                @include('errors.message')
                                <div class="panel-body">
                                    <form role="form" class="form-horizontal" method="POST"
                                    action="{{ route('admin.intro.createPost') }}"
                                    enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tiêu đề: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                    placeholder="Nhập tiêu đề" name="name_vi" value="{{ old('name_vi') }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tiêu đề_en: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                    placeholder="Nhập tiêu đề" name="name_en" value="{{ old('name_en') }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-3 control-label">Ảnh bìa: </label>
                                                    <div class="col-md-8">
                                                        <input type="file" class="form-control" name="image">
                                                    </div>
                                                </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Vị trí: </label>
                                                <div class="col-md-8">
                                                     <input type="number" class="form-control"
                                                    placeholder="Nhập vị trí" name="position" value="{{ old('position') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nội dung: </label>
                                                <div class="col-md-8">
                                                    <textarea name="description_vi" class="form-control "
                                                    id="editor1">
                                                        {{ old('description_vi') }}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nội dung_en: </label>
                                                <div class="col-md-8">
                                                    <textarea name="description_en" class="form-control "
                                                    id="editor2">
                                                        {{ old('description_en') }}
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Trạng thái: </label>
                                                <label class="switch">
                                                    <input type="checkbox" name="status" value="0">
                                                    <span class="slider round"></span>
                                                    <input type="hidden" name="id" value="1">
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title_SEO: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Title SEO"
                                                    name="title_seo" value="{{ old('title_seo') }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_key: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_key"
                                                    name="meta_key" value="{{ old('meta_key') }}"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_Des: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                    name="meta_des" value="{{ old('meta_des') }}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button class="btn-success btn">Lưu</button>
                                                    <a class="btn-default btn"
                                                    href="{{ route('admin.intro.create') }}">
                                                        Hủy
                                                    </a>
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
<!-- Main content -->
</div><!-- /.content-wrapper -->
@endsection
@section('script')
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
    } );
    CKEDITOR.replace( 'editor2', {
        filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
    } );
</script>
@endsection

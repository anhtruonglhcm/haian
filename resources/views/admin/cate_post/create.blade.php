@extends('admin.partials.master')
@section('title', 'Thêm danh mục')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <div class="page-heading">
                    <h1>Thêm danh mục</h1>
                    <div class="options">
                        <div class="btn-toolbar">
                        </div>
                    </div>
                </div>
                <ol class="breadcrumb">
                    <li>Trang chủ</li>
                    <li>Quản lý tin</li>
                    <li>Danh mục</li>
                    <li class="active">Thêm</li>
                </ol>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                @include('errors.message')
                                <div class="panel-body">
                                    <form role="form" class="form-horizontal" method="POST"
                                    action="{{ route('admin.cate_post.createPost') }}"
                                    enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tên danh mục: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                    placeholder="Name" name="name_vi" value="{{ old('name_vi') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tên danh mục_en: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                    placeholder="Name" name="name_en" value="{{ old('name_en') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Vị trí: </label>
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control"
                                                    placeholder="Vị trí" name="position" value="{{ old('position') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Miêu tả: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Miêu tả"
                                                    name="description_vi" value="{{ old('description_vi') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Miêu tả_en: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Miêu tả"
                                                    name="description_en" value="{{ old('description_en') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Ảnh bìa: </label>
                                                <div class="col-md-8">
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>

                                            <div style="margin-top: 20px;margin-bottom: 20px;">
                                                <label class="col-md-3 control-label">Trạng thái: </label>
                                                <label class="switch">
                                                    <input type="checkbox" name="status" value="0">
                                                    <span class="slider round"></span>
                                                    <input type="hidden" name="id" value="1">
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Danh mục: </label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="parent_id">
                                                        <option value="0" selected="selected">Chọn danh mục</option>
                                                        <?php  menu($data);?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title_SEO: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Title SEO"
                                                    name="title_seo_vi" value="{{ old('title_seo_vi') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title_SEO_en: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Title SEO"
                                                    name="title_seo_en" value="{{ old('title_seo_en') }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_key: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_key"
                                                    name="meta_key_vi">{{ old('meta_key_vi') }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_key_en: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_key"
                                                    name="meta_key_en">{{ old('meta_key_en') }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_Des: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                    name="meta_des_vi">{{ old('meta_des_vi') }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_Des_en: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                    name="meta_des_en">{{ old('meta_des_en') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button class="btn-success btn">Lưu</button>
                                                    <a class="btn-default btn"
                                                    href="{{ route('admin.cate_post.create') }}">
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
</div>
@endsection

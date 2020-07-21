@extends('admin.partials.master')
@section('title', 'Sửa bài viết')
@section('content')
<div class="content-wrapper">
<section class="content-header">
    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <div class="page-heading">
                    <h1>Sửa bài viết</h1>
                    <div class="options">
                        <div class="btn-toolbar">
                        </div>
                    </div>
                </div>
                <ol class="breadcrumb">
                    <li>Trang chủ</li>
                    <li>Quản lý bài viết</li>
                    <li>Bài viết</li>
                    <li class="active">Sửa</li>
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
                                    action="{{ route('admin.post.postUpdate', $post->id) }}"
                                    enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tên: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                    placeholder="Nhập tên" name="name_vi" value="{{ $post->name_vi }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tên_en: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                    placeholder="Nhập tên" name="name_en" value="{{ $post->name_en }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Ảnh bìa: </label>
                                                <div class="col-md-8">
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-8">
                                                    <img src="{{ asset($post->image) }}"
                                                    style="height: 50px; width: 50px">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Trạng thái: </label>
                                                <label class="switch">
                                                    <input type="checkbox" name="status"
                                                    {{ ($post->status) ? 'checked': '' }}>
                                                    <span class="slider round"></span>
                                                    <input type="hidden" name="id" value="1">
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tin hot: </label>
                                                <label class="switch">
                                                    <input type="checkbox" name="is_home"
                                                    {{ ($post->is_home) ? 'checked': '' }}>
                                                    <span class="slider round"></span>
                                                    <input type="hidden" name="id" value="1">
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Vị trí: </label>
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control"
                                                    placeholder="Nhập vị trí" name="position"
                                                    value="{{ $post->position }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Giới thiệu: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Giới thiệu"
                                                    name="title_vi"  value="{{ $post->title_vi }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Giới thiệu_en: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Giới thiệu"
                                                    name="title_en"  value="{{ $post->title_en }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Miêu tả: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Miêu tả"
                                                    name="description_vi" id="editor1">
                                                        {{ $post->description_vi }}
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Miêu tả_en: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Miêu tả"
                                                    name="description_en" id="editor2">
                                                        {{ $post->description_en }}
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Danh mục: </label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="cate_post_id">
                                                        <?php $hihi = DB::table('cate_posts')
                                                        ->where('id',$post->cate_post_id)->first(); ?>
                                                        @if(isset($hihi))
                                                        <option value="{{ $post->cate_post_id }}">
                                                            {{ $hihi->name_vi }}
                                                        </option>
                                                        @else
                                                        <option value="0">
                                                            {{ $post->name_vi }}
                                                        </option>
                                                        @endif
                                                        <?php  menu($data);?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title_SEO: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Title SEO"
                                                    name="title_seo_vi" value="{{ $post->title_seo_vi }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title_SEO_en: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Title SEO"
                                                    name="title_seo_en" value="{{ $post->title_seo_en }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_key: </label>
                                                <div class="col-md-8">
                                                    <textarea type="text" class="form-control" placeholder="Meta_key"
                                                    name="meta_key_vi">{{ $post->meta_key_vi }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_key_en: </label>
                                                <div class="col-md-8">
                                                    <textarea type="text" class="form-control" placeholder="Meta_key"
                                                    name="meta_key_en">{{ $post->meta_key_en }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_des: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                    name="meta_des_vi">{{ $post->meta_des_vi }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_des_en: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                    name="meta_des_en">{{ $post->meta_des_en }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button class="btn-success btn">Lưu</button>
                                                    <a class="btn-default btn"
                                                    href="{{ route('admin.post.create') }}">
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
@section('script')
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
    } );
</script>
<script>
    CKEDITOR.replace( 'editor2', {
        filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
    } );
</script>
@endsection
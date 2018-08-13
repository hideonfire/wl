@extends('layouts.app')

@section('title', '添加影院')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>添加影院</h2>
            <ol class="breadcrumb">
                <li>
                <a href="{{ url('/') }}">主页</a>
                </li>
                <li>
                <a>影院</a>
                </li>
                <li class="active">
                <strong>添加影院</strong>
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="ibox-content">
    <form action="" class="form-horizontal " id="dropzoneForm">
        <div class="form-group">
            <label for="cinemaname" class="col-sm-2 control-label">影院名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="cinemaname">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">联系人</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sss">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">联系方式</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="" id="phone">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">添加影院</label>
            <div class="col-sm-3">
                <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="2">
                    <option value="">选择省份</option>
                    <option value="a">aaaa</option>
                    <option value="a">bbbb</option>
                    <option value="a">ccccc</option>
                    <option value="a">dddd</option>
                    <option value="a">eeeee</option>
                </select>
            </div>
            <div class="col-sm-3">
                <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="2">
                    <option value="">选择城市</option>
                    <option value="a">aaaa</option>
                    <option value="a">bbbb</option>
                    <option value="a">ccccc</option>
                    <option value="a">dddd</option>
                    <option value="a">eeeee</option>
                </select>
            </div>
            <div class="col-sm-4">
                <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="2">
                    <option value="">选择区县</option>
                    <option value="a">aaaa</option>
                    <option value="a">bbbb</option>
                    <option value="a">ccccc</option>
                    <option value="a">dddd</option>
                    <option value="a">eeeee</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">详细地址</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>        
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">影院LOGO</label>
            <div class="col-sm-10">
                 <div id="myId" class="dropzone" ></div>
            </div>      
        </div>
    </form>
</div>
@endsection

@section('scripts')

<script>
    $('.chosen-select').chosen({width: "100%"});
    var selector=$('#phone');
    Inputmask({regex:"(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])-\\d{4}-\\d{4}"}).mask(selector);

        Dropzone.autoDiscover = false;
        $("#myId").dropzone({ 
        url: "{{ url('upload-cinema-logo') }}",
        addRemoveLinks: true,        
        method: 'post',
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        filesizeBase: 1024 ,
        dictDefaultMessage: "拖动/点击上传",
        uploadMultiple: true,
        });
</script>
@endsection

@extends('layouts.app')

@section('title', '添加影院')

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
    <form action="" class="form-horizontal">
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
            <div class="col-sm-10">
                <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="2">
                    <option value="">select</option>
                    <option value="a">aaaa</option>
                    <option value="a">bbbb</option>
                    <option value="a">ccccc</option>
                    <option value="a">dddd</option>
                    <option value="a">eeeee</option>
                </select>
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
    

</script>
@endsection

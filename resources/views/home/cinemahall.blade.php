@extends('layouts.app')

@section('title', '影厅管理')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>影厅管理</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ url('/') }}">主页</a>
                    </li>
                    <li>
                        <a>影院</a>
                    </li>
                    <li class="active">
                        <strong>影厅管理</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center m-t-lg">
                    <h1>
                        添加影院
                    </h1>
                    <small>
                        滴滴滴滴滴
                    </small>
                </div>
            </div>
        </div>
    </div>
@endsection


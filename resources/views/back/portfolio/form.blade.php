@extends('layouts.app')

@section('page-css')
<link href="{{asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
        <div id="form_error_alert" class="alert alert-danger">
        <button class="close" data-close="alert"></button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Portfolio manage</div>

                <div class="card-body">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                @if(isset($project))
                                <i class="fa fa-edit"></i>編輯案件
                                @else
                                <i class="fa fa-plus"></i>新增案件
                                @endif
                            </div>
                        </div>
                        <div class="portlet-body">
                        @if(isset($project))
                            <form action="" method="POST" class=""  enctype="multipart/form-data">
                            @method('put')
                        @else
                            <form action="" method="POST" class=""  enctype="multipart/form-data">
                        @endif
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="control-label">案件名稱<span class="required" aria-required="true"> * </span></label>
                                    <input name="name" type="text" class="form-control" value="{{ old('name') ?? isset($project->name)? $project->name : NULL }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">業主<span class="required" aria-required="true"> * </span></label>
                                    <input name="owner" type="text" class="form-control" value="{{ old('owner') ?? isset($project->owner)? $project->owner : NULL }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">案件開始日期<span class="required" aria-required="true"> * </span></label>
                                            <input name="date_start" type="text" class="form-control datepicker" value="{{ old('date_start') ?? isset($project->date_start) ? $project->date_start : NULL }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">案件結束日期<span class="required" aria-required="true"> * </span></label>
                                            <input name="date_end" type="text" class="form-control datepicker" value="{{ old('date_end') ?? isset($project->date_end) ? $project->date_end : NULL }}">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>案件說明</label>
                                    <textarea name="desc" class="form-control" rows="5">{{ old('desc') ?? isset($project->desc)? $project->desc : NULL }}</textarea>
                                </div>
                                <div class="form-actions" style="margin-top:40px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="{{action('Back\PortfolioController@index')}}" class="btn btn-default"><i class="fa fa-arrow-left"></i> 返回</a>
                                            <button type="submit" class="btn blue-hoki pull-right"><i class="fa fa-check"></i> 送出</button>
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
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <!-- BEGIN PORTLET-->
        
        <div class="col-md-12">
            
        </div>

        <div class="col-md-6">
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
@endsection

@section('page-js')
<script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.zh-TW.min.js')}}" type="text/javascript"></script>
<script>
$.fn.datepicker.defaults.format = "yyyy-mm-dd";
$('.datepicker').datepicker({
    autoclose: true,
    language: 'zh-TW',
    format: "yyyy-mm-dd",
});
</script>
@endsection
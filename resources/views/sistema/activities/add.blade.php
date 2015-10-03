@extends('sistema._template.master')

@section('content')


    <div class="container-fluid">

        <h1 class="page-header">Activities > Add</h1>

        <div class="row">

            <div class="col-xs-6">

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title">
                </div>

                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Content"></textarea>
                </div>

                <div class="form-group">
                    <textarea class="form-control" rows="10" placeholder="Tour Explanation"></textarea>
                </div>

            </div>

            <div class="col-xs-6">

                <div class="container-fluid">
                    <h4>Upload Images</h4>
                    <div class="row" style="padding-top:10px;">
                        <div class="col-xs-2">
                            <button id="uploadBtn" class="btn btn-large btn-primary">Choose File</button>
                        </div>
                        <div class="col-xs-10">
                            <div id="progressOuter" class="progress progress-striped active" style="display:none;">
                                <div id="progressBar" class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top:10px;">
                        <div class="col-xs-10">
                            <div id="msgBox"></div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>


@endsection

@section('before-scripts-end')
    {!! HTML::script('js/vendor/SimpleAjaxUploader.js') !!}
@stop

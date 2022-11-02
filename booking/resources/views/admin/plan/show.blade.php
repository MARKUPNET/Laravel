@extends('adminlte::page')

@section('title', '詳細 | プラン')

@section('content_header')
    <h1>詳細（プラン）</h1>
@stop

@section('content')

    <div id="app" class="p-3">

        <div class="row">

            <div class="col-6">

                    <div class="row">

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="plan_name d-flex align-items-center">
                                    <dt class="col-4">プラン名</dt>
                                    <dd class="col-8 row align-items-center m-0">
                                        {{ $plan->name }}
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="plan_price d-flex align-items-center">
                                    <dt class="col-4">価格</dt>
                                    <dd class="col-8 row align-items-center m-0">
                                        {{ $plan->price }}
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="plan_note d-flex align-items-center">
                                    <dt class="col-4">備考</dt>
                                    <dd class="col-8 row align-items-center m-0">
                                        {{ $plan->note }}
                                    </dd>
                                </dl>
                            </div>
                        </div>

                    </div>

                    <div class="mt-3">
                        <a href="{{ route('plan.index') }}" class="btn btn-primary">戻る</a>
                    </div>

            </div>

        </div>

    </div>

@stop

@section('css')
    <link href="{{ asset('css/admin_custom.css') }}" rel="stylesheet" />
@stop

@section('js')

@stop

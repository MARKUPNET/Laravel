@extends('adminlte::page')

@section('title', '編集 | プラン')

@section('content_header')
    <h1>編集（プラン）</h1>
@stop

@section('content')

    <div id="app" class="p-3">

        <div class="row">

            <div class="col-12 col-md-6">

                <form action="{{ route('plan.update', $plan->id) }}" method="POST">

                    @csrf

                    <div class="row">

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="plan_name d-flex align-items-center">
                                    <dt class="col-4">プラン名</dt>
                                    <dd class="col-8 m-0">
                                        <input type="text" name="name" class="form-control" value="{{ $plan->name }}">
                                        @error('name')
                                        <p class="col-12" style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="plan_price d-flex">
                                    <dt class="col-4">価格</dt>
                                    <dd class="col-8 m-0">
                                        <input type="text" name="price" class="form-control" value="{{ $plan->price }}">
                                        @error('price')
                                        <p class="col-12" style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="plan_note d-flex">
                                    <dt class="col-4">備考</dt>
                                    <dd class="col-8 m-0">
                                        <textarea name="note" rows="4" class="form-control">{{ $plan->note }}</textarea>
                                        @error('note')
                                        <p class="col-12" style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <button type="submit" class="btn btn-primary w-100">更新</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

@stop

@section('css')
    <link href="{{ asset('css/admin_custom.css') }}" rel="stylesheet" />
@stop

@section('js')

@stop

@extends('admin.layouts.admin')

@section('title',__('views.admin.sales.edit.title', ['name' => $sale->product_name]) )

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{ Form::open(['route'=>['admin.sales.update', $sale->id],'method' => 'put','class'=>'form-horizontal form-label-left']) }}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_name" >
                        {{ __('views.admin.sales.edit.product_name') }}
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="product_name" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('product_name')) parsley-error @endif"
                               name="product_name" value="{{ $sale->product_name }}" required>
                        @if($errors->has('product_name'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('product_name') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="amount">
                        {{ __('views.admin.sales.edit.amount') }}
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="amount" type="number" class="form-control col-md-7 col-xs-12 @if($errors->has('amount')) parsley-error @endif"
                               name="amount" value="{{ $sale->amount }}" required>
                        @if($errors->has('amount'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('amount') as $error)
                                    <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="purchase_cycle_id">
                        {{ __('views.admin.sales.edit.purchase_cycle_id') }}
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="purchase_cycle_id" name="purchase_cycle_id" class="select2" style="width: 100%" autocomplete="off">
                            @foreach($cycles as $cycle)
                                <option @if($sale->purchaseCycle->find($cycle->id)) selected="selected" @endif value="{{ $cycle->id }}">{{ $cycle->cycle_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class="btn btn-primary" href="{{ URL::previous() }}"> {{ __('views.admin.sales.edit.cancel') }}</a>
                        <button type="submit" class="btn btn-success"> {{ __('views.admin.sales.edit.save') }}</button>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/users/edit.css')) }}
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/users/edit.js')) }}
@endsection
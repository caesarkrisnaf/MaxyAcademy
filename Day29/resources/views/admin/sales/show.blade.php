@extends('admin.layouts.admin')

@section('title', __('views.admin.sales.show.title', ['name' => $sale->product_name]))

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{ __('views.admin.sales.show.details') }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="btn btn-primary" href="{{ route('admin.sales.edit', $sale->id) }}">
                                {{ __('views.admin.sales.show.edit') }}
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('admin.sales.destroy', $sale->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('views.admin.sales.show.confirm_delete') }}');">
                                    {{ __('views.admin.sales.show.delete') }}
                                </button>
                            </form>
                        </li>
                        <li>
                            <a class="btn btn-default" href="{{ URL::previous() }}">
                                {{ __('views.admin.sales.show.back') }}
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>{{ __('views.admin.sales.show.product_name') }}:</label>
                                <p>{{ $sale->product_name }}</p>
                            </div>
                            <div class="form-group">
                                <label>{{ __('views.admin.sales.show.amount') }}:</label>
                                <p>{{ $sale->amount }}</p>
                            </div>
                            <div class="form-group">
                                <label>{{ __('views.admin.sales.show.purchase_cycle') }}:</label>
                                <p>{{ $sale->purchaseCycle ? $sale->purchaseCycle->cycle_name : __('views.admin.sales.show.no_cycle') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('admin.layouts.admin')

@section('title', __('views.admin.cycles.edit.title', ['name' => $cycle->cycle_name]))

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{ Form::model($cycle, ['route' => ['admin.cycles.update', $cycle->id], 'method' => 'put', 'class' => 'form-horizontal form-label-left']) }}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cycle_name">
                        {{ __('views.admin.cycles.edit.cycle_name') }}
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="cycle_name" type="text" class="form-control col-md-7 col-xs-12 @if($errors->has('cycle_name')) parsley-error @endif"
                               name="cycle_name" value="{{ old('cycle_name', $cycle->cycle_name) }}" required>
                        @if($errors->has('cycle_name'))
                            <ul class="parsley-errors-list filled">
                                @foreach($errors->get('cycle_name') as $error)
                                        <li class="parsley-required">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class="btn btn-primary" href="{{ URL::previous() }}"> {{ __('views.admin.cycles.edit.cancel') }}</a>
                        <button type="submit" class="btn btn-success"> {{ __('views.admin.cycles.edit.save') }}</button>
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

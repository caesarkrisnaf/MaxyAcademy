@extends('admin.layouts.admin')

@section('title', __('views.admin.cycles.show.title', ['name' => $cycle->cycle_name]))

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{ __('views.admin.cycles.show.details') }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="btn btn-primary" href="{{ route('admin.cycles.edit', $cycle->id) }}">
                                {{ __('views.admin.cycles.show.edit') }}
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('admin.cycles.destroy', $cycle->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('views.admin.cycles.show.confirm_delete') }}');">
                                    {{ __('views.admin.cycles.show.delete') }}
                                </button>
                            </form>
                        </li>
                        <li>
                            <a class="btn btn-default" href="{{ URL::previous() }}">
                                {{ __('views.admin.cycles.show.back') }}
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>{{ __('views.admin.cycles.show.cycle_name') }}:</label>
                                <p>{{ $cycle->cycle_name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
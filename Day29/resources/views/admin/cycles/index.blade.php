@extends('admin.layouts.admin')

@section('title', __('views.admin.cycles.index.title'))

@section('content')
<div class="row">
    <div class="col-md-8 col-12">
        <a href="{{route('admin.cycles.create')}}" class="btn btn-primary">Create</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>@sortablelink('cycle_name', __('views.admin.cycles.index.table_header_0'),['page' => $cycles->currentPage()])</th>
                <th>@sortablelink('created_at', __('views.admin.cycles.index.table_header_1'),['page' => $cycles->currentPage()])</th>
                <th>@sortablelink('updated_at', __('views.admin.cycles.index.table_header_2'),['page' => $cycles->currentPage()])</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cycles as $cycle)
                <tr>
                    <td>{{ $cycle->cycle_name }}</td>
                    <td>{{ $cycle->created_at }}</td>
                    <td>{{ $cycle->updated_at }}</td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.cycles.show', [$cycle->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.cycles.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.cycles.edit', [$cycle->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.cycles.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <form action="{{ route('admin.cycles.destroy', [$cycle->id]) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.cycles.index.delete') }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {{ $cycles->links() }}
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        function confirmDelete() {
            return confirm("{{ __('views.admin.cycles.index.confirm_delete') }}");
        }
    </script>
@endsection
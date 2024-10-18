@extends('admin.layouts.admin')

@section('title', __('views.admin.sales.index.title'))

@section('content')
<div class="row">
    <div class="col-md-8 col-12">
        <a href="{{route('admin.sales.create')}}" class="btn btn-primary">Create</a>
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
                <th>@sortablelink('product_name', __('views.admin.sales.index.table_header_0'),['page' => $sales->currentPage()])</th>
                <th>@sortablelink('amount',  __('views.admin.sales.index.table_header_1'),['page' => $sales->currentPage()])</th>
                <th>@sortablelink('purchase_cycle_id', __('views.admin.sales.index.table_header_2'),['page' => $sales->currentPage()])</th>
                <th>@sortablelink('created_at', __('views.admin.sales.index.table_header_3'),['page' => $sales->currentPage()])</th>
                <th>@sortablelink('updated_at', __('views.admin.sales.index.table_header_4'),['page' => $sales->currentPage()])</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->product_name }}</td>
                    <td>{{ $sale->amount }}</td>
                    <td>{{ $sale->purchaseCycle->cycle_name }}</td>
                    <td>{{ $sale->created_at }}</td>
                    <td>{{ $sale->updated_at }}</td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.sales.show', [$sale->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.sales.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.sales.edit', [$sale->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.sales.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        {{-- <a href="{{ route('admin.sales.destroy', [$sale->id]) }}" class="btn btn-xs btn-danger sale_destroy" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.sales.index.delete') }}" onsubmit="return confirmDelete();">
                            <i class="fa fa-trash"></i>
                        </a> --}}
                        <form action="{{ route('admin.sales.destroy', [$sale->id]) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.sales.index.delete') }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {{ $sales->links() }}
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        function confirmDelete() {
            return confirm("{{ __('views.admin.sales.index.confirm_delete') }}");
        }
    </script>
@endsection
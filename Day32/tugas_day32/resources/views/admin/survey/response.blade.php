@extends('sb-admin/app')

@section('title', 'Response Survei')
@section('survey-response', 'active') <!-- Menandai menu aktif pada sidebar -->
@section('user-active', 'show') <!-- Menandai sub-menu aktif -->

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Response Survei</h1>

    <!-- Form Pencarian -->
    @include('sb-admin.search') <!-- Include form pencarian -->

    <!-- Menampilkan Pesan Pencarian -->
    @if (isset($searchTerm) && $searchTerm)
        <div class="alert alert-info mt-3">
            Menampilkan hasil pencarian untuk: <strong>{{ $searchTerm }}</strong>
        </div>
    @endif

    @if ($responses->isNotEmpty())
        {{-- Table --}}
        <table class="table mt-4 table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Response</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($responses as $index => $response)
                    <tr>
                        <th scope="row" width="10%">{{ $index + 1 }}</th>
                        <td>{{ $response->name ?? 'Anonymous' }}</td>
                        <td>{{ $response->responses}}</td> <!-- Menampilkan sebagian dari response -->
                        <td>{{ $response->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $responses->links() }}
        </div>
    @else
        <!-- Notifikasi jika tidak ada data -->
        <div class="alert alert-info mt-4" role="alert">
            Belum ada response dari pengguna.
        </div>
    @endif
@endsection

@section('search-url', url()->current()) <!-- Kirim URL saat ini ke form pencarian -->

@section('search')
    @include('sb-admin.search') <!-- Include form pencarian -->
@endsection

@section('search-responsive')
    @include('sb-admin.search-responsive')
@endsection

@section('javascript')
    @include('admin/navbar-mobile')
@endsection

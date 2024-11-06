<!doctype html>
<html lang="en">
{{-- head --}}
    @include('sb-admin/head')

  <body id="page-top">
    {{-- navbar --}}
    @include('artikel/template/navbar')

    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
      @include('sb-admin/footer')

    <!-- Scroll to Top Button-->
    @include('sb-admin/button-topbar')

   {{-- logout --}}
   @include('sb-admin/logout-modal')
  
   <!-- resources/views/layouts/app.blade.php -->
    <!-- Modal survey -->
    <div class="modal" id="surveyModal" tabindex="-1" role="dialog" aria-labelledby="surveyModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="surveyModalLabel">Beri Umpan Balik untuk Kami</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p>Terima kasih telah mengunjungi kami! Kami ingin mendengar pendapat Anda melalui survei singkat ini.</p>
                  <a href="{{ url('/survey/form') }}" class="btn btn-primary">Isi Survei</a>
              </div>
          </div>
      </div>
    </div>

    <script>
      // Tampilkan modal setelah beberapa detik
      setTimeout(function() {
          $('#surveyModal').modal('show');
      }, 5000); // 5 detik setelah halaman dimuat
    </script>

   
   {{-- javascript --}}
   @include('sb-admin/javascript')
  </body>
  
</html>
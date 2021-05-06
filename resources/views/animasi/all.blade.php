<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.header')
</head>

<body>
  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.left-sidebar')

  <main>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <div class="py-4 d-flex justify-content-end align-items-center">
            <h2 class="mr-auto">Daftar Model Animasi</h2>
            <a href="{{ route('animation') }}" class="btn btn-primary">
              Tambah Animasi</a>
          </div>

          <div class="row">
            @forelse ($animations as $animasi)
            <a href="#" class="modal-trigger" role="button" class="col-3 nav-link popover-test" title="Klik untuk lihat detail" data-bs-toggle="modal" data-bs-target="#modal-detail-{{$loop->index}}">
              <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body text-dark">
                  <h5 class="card-title"> Scene : </h5>
                  <div class="preview-container col-12 p-0">
                    <div id="preview-canvas-{{$loop->index}}" class="preview" style="height: 200px;" data-model="{{ asset('storage/animations/').$animasi['path'] }}"></div>
                  </div>
                  <p class="card-text"> {{$animasi['description']}} </p>
                </div>
              </div>
            </a>
            <!-- Modal -->
            <div class="modal  fade " id="modal-detail-{{$loop->index}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">

                    <h5 class="modal-title" id="staticBackdropLabel">Modal {{$loop->index}}
                    <a href="{{url('/animation/'.$animasi->id) }}" type="button" class="btn btn-warning">Edit</a>
                    </h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                  </div>
                  <div class="modal-body mx-3 p-0" id="container-detail-animasi-{{$loop->index}}" style="height: 400px;">

                    <div id="detail-animasi-{{$loop->index}}"></div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
            @empty
            <div class="text-center">Tidak ada data...</div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('template.footer')
  @include('template.script')
</body>

</html>
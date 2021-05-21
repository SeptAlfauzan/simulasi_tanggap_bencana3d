<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.header')
  <style>
        /* agar shadow dari modal kedua bisa overlay modal pertama */
        div.modal-backdrop + div.modal-backdrop {
        z-index: 1060; 
      }
  </style>
</head>

<body id="body">
  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.left-sidebar')

  <main>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          @if(Session::has('pesan'))
          <div class="alert mt-2 alert-warning alert-dismissible fade show" role="alert">
            {{ Session::get('pesan') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <div class="py-4 d-flex justify-content-end align-items-center">
            <h2 class="mr-auto">Daftar Model Animasi</h2>
            <a href="{{ route('animation') }}" class="btn btn-primary">
              Tambah Animasi</a>
          </div>

          <div class="row">
            @forelse ($animations as $animasi)
            <div class="col-md-4 col-6 px-3 py-2">
              <a href="#" class="modal-trigger" role="button" class="col-12 nav-link popover-test m-0" title="Klik untuk lihat detail" data-bs-toggle="modal" data-bs-target="#modal-detail-{{$loop->index}}">
                <div class="card border-dark mb-3">
                  <div class="card-header">
                    Id scene {{ $animasi['scenes_id'] }}
                    @if($animasi->author_id != session('id_user'))
                    <span class="card-title text-secondary">Hanya Preview</span>
                    @endif
                  </div>
                  <div class="card-body text-dark">
                 
                    <div class="preview-container col-12 p-0" style="height: 200px;">
                      <div id="preview-canvas-{{$loop->index}}" class="preview"  data-model="{{ asset('storage/animations/').$animasi['path'] }}"></div>
                    </div>
                    <p class="card-text text-secondary"> Nomor urut pada scene {{$animasi['position']}} </p>
                    <p class="card-text text-secondary"> Deskripsi: {{$animasi['description']}} </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- Modal -->
            <div class="modal  fade " id="modal-detail-{{$loop->index}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">

                    <h5 class="modal-title" id="staticBackdropLabel">Modal {{$loop->index}}
                    @if($animasi->author_id != session('id_user'))
                      <button data-bs-toggle="tooltip" data-bs-placement="top" title="Anda bukan author dari model ini" type="button" disabled class="btn btn-warning">Edit</button>
                      <button data-bs-toggle="tooltip" data-bs-placement="top" title="Anda bukan author dari model ini" type="button" disabled class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{$loop->index}}">
                        delete
                      </button>
                    @else
                      <a href="{{ route('animasi.edit', $animasi->id) }}"  type="button" class="btn btn-warning">Edit</a>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{$loop->index}}">
                        delete
                      </button>
                    @endif
                    </h5>

                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                  </div>
                  <div class="modal-body mx-3 p-0" id="container-detail-animasi-{{$loop->index}}" style="height: 400px;">
                    <div id="detail-animasi-{{$loop->index}}"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark btn-close" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- modal delete -->
            <div class="modal fade" style="z-index: 1070" id="delete-{{$loop->index}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Apakah anda ingin menghapus model ini
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal hapus</button>
                    
                    <form action="{{ route('animasi.delete', $animasi->id) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger">Iya, hapus</button>
                    </form>
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
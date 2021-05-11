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
        @if(session()->has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session()->get('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="py-4 d-flex justify-content-end align-items-center">
          <h2 class="mr-auto">Daftar Scene</h2>
          <a href="{{ route('scene.add-new') }}" class="btn btn-primary">Tambah Scene</a>
        </div>
        <div class="list-group">
          @forelse ($scenes as $scene)
            <a href="{{ route('scene.list-model',  $scene->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Klik untuk melihat list model animasi dari scene {{ $scene->nama }}" class="list-group-item text-secondary list-group-item-action" aria-current="true">
                id: <span class="text-dark font-weight-bold">{{ $scene->id }}</span>, nama scene: <span class="text-dark font-weight-bold">{{ $scene->nama }}</span>
            </a>
          @empty
            <div class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Scene masih kosong</div>
          @endforelse
        </div>
        <hr>
        <div class="py-4 d-flex justify-content-end align-items-center">
          <h2 class="mr-auto">Daftar Scene yang telah dihapus</h2>
        </div>
        <div class="list-group">
          @forelse ($deletedScenes as $dscene)
            <div class="position-relative row mb-2">
            <div data-bs-toggle="tooltip" data-bs-placement="top" class="list-group-item disabled text-secondary list-group-item-action col-md-11 col-9" aria-current="true">
                id: {{ $dscene->id }}, nama scene: {{ $dscene->nama }}
            </div>
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#restore-{{$dscene->id}}">restore</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="restore-{{ $dscene->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Restore Scene</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Apakah anda yakin ingin me-restore scene {{ $dscene->nama }}
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal restore</button>
                    <a href="{{ route('scene.restore', $dscene->id) }}" type="button" class="btn btn-primary">Iya</a>
                  </div>
                </div>
              </div>
            </div>

          @empty
            <div class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Tidak ada scene yang dihapus</div>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</main>

@include('template.footer')

@include('template.script')
</body>
</html>

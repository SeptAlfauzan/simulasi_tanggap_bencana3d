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

      </div>
    </div>
  </div>
</main>

@include('template.footer')

@include('template.script')
</body>
</html>

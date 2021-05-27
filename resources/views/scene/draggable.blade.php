<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.header')
<style>
  .draggable-mirror {
    box-shadow:
      0 2.8px 2.2px rgba(0, 0, 0, 0.034),
      0 6.7px 5.3px rgba(0, 0, 0, 0.048),
      0 12.5px 10px rgba(0, 0, 0, 0.06),
      0 22.3px 17.9px rgba(0, 0, 0, 0.072),
      0 41.8px 33.4px rgba(0, 0, 0, 0.086),
      0 100px 80px rgba(0, 0, 0, 0.12);
    width: 75% !important;
  }

  .draggable:hover {
    background-color: #edf7ff;
    transition: 0.2s;
  }

  .see-preview {
    display: none;
    position: absolute;
    z-index: 1000;
  }

  .list-model:hover+.see-preview {
    transition: 0.9s;
    display: block !important;
    color: black;
  }

  .list-model:focus+.see-preview {
    display: none;
  }
</style>
@livewireStyles
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
        <div class="col-12 my-5">
          <div class="border px-3 py-5 shadow">
            @livewire('update-scene', ['scenes_id'=> $scenes_id])
            <span class="text-info" style="font-size: 11px;">*klik nama scene lalu ubah nilainya, kemudian tekan tombol update untuk mengubah nama scene ini</span>
            <h5>Daftar (deskripsi) model animasi</h5>
            <span class="text-info" style="font-size: 11px;">*<i>drag and drop</i> daftar model, untuk menggantuk nomor urut penampilan animasi (ascending)</span>
            @livewire('draggable-list', ['scenes_id'=> $scenes_id])
          </div>
        </div>
      </div>
    </div>
  </main>

  @livewireScripts
  @include('template.footer')

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <!-- draggable componen script -->
  <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script type="module" src="{{ asset('js/threejsHandler/preview-list.js') }}"></script>
</body>

</html>
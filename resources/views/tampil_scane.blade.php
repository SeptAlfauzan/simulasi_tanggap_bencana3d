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
        <h2 class="mr-auto">Tabel Scene</h2>
        <a href="{{ route('scane') }}" class="btn btn-primary">
            Tambah Scene</a>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th><center>Id Scene</th>
            <th><center>Nama</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($scenes as $scene)
          <tr>
            <th><center>{{$loop->iteration}}</th>
            <td>{{$scene->nama}}</td>
          </tr>
          @empty
            <td colspan="6" class="text-center">Tidak ada data...</td>
          @endforelse
        </tbody>
      </table>
      </div>
    </div>
  </div>
</main>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<!-- /.control-sidebar -->

<!-- Main Footer -->
@include('template.footer')

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('template.script')
</body>
</html>

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

    <!-- Content Wrapper. Contains page content -->
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Input Scene</h1>
            <br>
            <form action="{{ route('scene.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Scene</label>
                    <input type="text" hidden name="id_author" value="1">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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
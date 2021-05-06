<!DOCTYPE html>
<html lang="en">
    <head>
    @include('template.header')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
<body>
        <!-- Navbar -->
        @include('template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('template.left-sidebar')

        <!-- Content Wrapper. Contains page content -->
        <main>
            <div class="container mt-3">
                <div class="row">
                  <div class="col-12">
                  <ul>
                    <div class="col-12 row px-5">
                        <div id="main-container" class="col-lg-7 col-12 p-0" style="height: 500px;">
                            <div data-model src="{{ asset('data_file/'.$animasi->path) }}" id="canvas" ></div>
                            <div class="col-12 m-0 row border px-3 bg-secondary">
                                <div class="col-1 p-0">
                                    <button class="col-12 btn btn-outline-dark" id="pause">pause</button>
                                </div>
                                <input type="range" class="col-11" name="" id="timeline" value="0" min="0" step="0.000000000000001">
                            </div>
                        </div>
                    </div>
                    <li>Deskripsi: {{$animasi->description}} </li>
                  </ul>

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

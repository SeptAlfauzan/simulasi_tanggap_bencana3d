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
            <div class="container-fluid row">
                    <form class="mx-auto px-4 py-3 order-md-1 order-1" action="{{ route('animasi.update', ['animasi'=> $animasi->id]) }}" method="POST" enctype="multipart/form-data">
                        <h1 class="mt-4">Edit Model Animasi</h1>
                        <p class="col-12 row nav-link"><a href="{{ route('tampil_animasi') }}">Daftar Model Animasi</a>/Edit Model Animasi</p>
                        @method('PATCH')
                        @csrf
                        <div class="row col-12 border">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="scenes_id">Scene</label>
                                    <select class="form-control" name="scenes_id" id="scenes_id">
                                        <option {{ old('scenes_id')? "" : "selected" }} disabled>Pilih scene</option>
                                        @foreach ($scenes as $items)
                                        <option {{ ( !old("scenes_id") && $animasi->scenes_id == $items->id )? "selected":""  }} {{ ( old("scenes_id") == $items->id )? "selected":""  }} value="{{$items->id}}">{{$items->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea type="text" class="form-control" id="description" name="description" rows="8" cols="50">{{ empty(old('description'))? $animasi->description : old('description')}}</textarea>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Author</label>
                                    <input type="text" class="form-control" id="email" name="author_id" value="{{session('email')}}" readonly>
                                    @error('author_id')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="preview">Preview</label>
                                <div class="col-12 bg-secondary" style="height: 200px;" id="container-preview-form">
                                        <div id="canvas-preview-form"></div>
                                </div>
                                <div class="form-group">
                                    <label for="path">Model Animasi</label>
                                    <input type="file" class="form-control-file" id="path" name="path">
                                    @error('path')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="customRange1">Ukuran skala dari model</label>
                                    <br>
                                    <input type="range" value="{{ empty(old('scale'))? $animasi->scale : old('scale') }}" name="scale" min="1" max="40" step="0.1" class="form-range" id="scaleSlider">
                                    <span class="badge rounded-pill bg-secondary py-1 text-white col-1 text-center" id="value-scale">0</span>
                                    @error('scale')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="customRange1">Warna latar dari model</label>
                                    <br>
                                    <input type="color" value="{{ empty(old('background_color'))? Str::replaceFirst('0x','#',$animasi->background_color) : old('background_color') }}" name="background_color">
                                    @error('background_color')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 row justify-content-end">
                                <a href="{{ route('tampil_animasi') }}" class="btn btn-outline-dark px-3">Kembali</a>
                                <button type="submit" class="ml-2 btn btn-primary px-3">Tambah</button>
                            </div>
                    </form>
                </div>
            </div>
        </main>
        <script>
            const scaleSlider = document.querySelector('#scaleSlider');
            const scaleSliderValue = document.querySelector('#value-scale');
            scaleSlider.addEventListener('input', (e)=>{
                scaleSliderValue.innerHTML = scaleSlider.value
            })
        </script>
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


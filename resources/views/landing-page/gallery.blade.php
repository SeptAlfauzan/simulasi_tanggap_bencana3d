@extends('template.landing-page.template')
@section('title', 'Gallery Scene')
@section('gallery-scene', 'active')
@section('content')
<!-- Page Content -->
<div class="container" style="min-height: 40vh;">
    <div class="row text-center text-lg-left">
    @forelse($scenes as $scene)
        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-duration="{{ $loop->index * 1000 }}">
        <div class="card" style="width: 18rem;">
        <div class="preview-container col-12 p-0" style="height: 200px;">
            <div id="preview-canvas-{{$loop->index}}" class="preview"  data-model="{{ asset('storage/animations/').$scene[0]->path }}"></div>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $scene[0]->nama }}</h5>
            <a href="{{ route('landing.show-scene', $scene[0]->id) }}" class="btn btn-primary">Lihat Scene</a>
        </div>
        </div>
        </div>
    @empty
        <h1 class="text-secondary my-auto font-weight-light text-center">Belum ada data scene</h1>
    @endforelse
    </div>
</div>

<script type="module" src="{{ asset('js/threejsHandler/preview.js') }}"></script>
@endsection


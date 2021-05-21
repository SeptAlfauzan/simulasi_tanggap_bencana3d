@extends('template.landing-page.template')
@section('title', 'Gallery Scene')
@section('gallery-scene', 'active')
@section('content')
<!-- Page Content -->
<div class="container" style="min-height: 40vh;">
    <div class="row text-center text-lg-left">
    @forelse($scenes as $scene)
        <div class="col-lg-4 col-md-6 col-12">
            <a href="{{ route('landing.show-scene', $scene[0]->id) }}" class="d-block mb-4 h-100">
                <p>{{$scene[0]->path}}</p>
            </a>
        </div>
    @empty
        <h1 class="text-secondary my-auto font-weight-light text-center">Belum ada data scene</h1>
    @endforelse
    </div>
</div>
@endsection
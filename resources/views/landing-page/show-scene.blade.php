<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Animasi Scene {{$scene->nama}}</title>
    <style>
      .transition{
        transition: 0.5s;
      }
  .lds-facebook {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-facebook div {
  display: inline-block;
  position: absolute;
  left: 0;
  width: 16px;
  background: #dedede;
  animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {
  left: 8px;
  animation-delay: -0.24s;
}
.lds-facebook div:nth-child(2) {
  left: 32px;
  animation-delay: -0.12s;
}
.lds-facebook div:nth-child(3) {
  left: 56px;
  animation-delay: 0;
}
@keyframes lds-facebook {
  0% {
    top: 8px;
    height: 64px;
  }
  50%, 100% {
    top: 24px;
    height: 32px;
  }
}
.centering{
  top: 40%;
  left: 0;
  right: 0;
}
#canvas{
  cursor: pointer;
}
</style>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <!-- dataset model animasi -->
    <div class="position-absolute col-12 justify-content-center text-center">
      <h4>Animasi</h4>
    @foreach($animations as $animation)
      <input type="hidden" class="data-model" data-model="{{ asset('storage/animations/').$animation->path }}">
      <button class="btn btn-outline-dark btn-change-look" data-index="{{ $loop->index }}">{{ $animation->id }}</button>
    @endforeach
  </div>
  <!-- this animation loader -->
    <div id="faded" class="d-block mx-auto position-absolute col-3 text-center p-o centering">
      <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>

    <div style="height: 100vh;" id="main-container" class="col-12 bg-secondary">
      <div id="canvas"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script type="module" src="{{ asset('js/threejsHandler/setup-showcase.js') }}" crossorigin="anonymous"></script>
  </body>

</html>

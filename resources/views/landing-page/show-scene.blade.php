<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <!-- dataset model animasi -->
    <div class="position-absolute col-12 justify-content-center text-center border border-dark">
      <h4>Animasi</h4>
    @foreach($animations as $animation)
      <input type="hidden" class="data-model" data-model="{{ asset('storage/animations/').$animation->path }}">
      <button class="btn btn-outline-dark btn-change-look" data-index="{{ $loop->index }}">{{ $animation->id }}</button>
    @endforeach
    </div>

    <div style="height: 100vh;" id="main-container" class="col-12 bg-secondary">
      <div id="canvas"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script type="module" src="{{ asset('js/threejsHandler/setup-showcase.js') }}" crossorigin="anonymous"></script>
  </body>

</html>

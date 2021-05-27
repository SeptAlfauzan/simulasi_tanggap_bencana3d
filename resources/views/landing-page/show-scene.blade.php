  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <title>Animasi Scene {{$scene->nama}}</title>
    <style>
      .transition {
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

        50%,
        100% {
          top: 24px;
          height: 32px;
        }
      }

      .centering {
        top: 40%;
        left: 0;
        right: 0;
      }

      #canvas {
        cursor: pointer;
      }

      .control {
        position: absolute;
        right: 0;
        left: 0;
        text-align: center;
        top: 40%;
        z-index: 1000;
      }

      .toggle-control {
        font-size: 4em;
        animation: growfade 1.5s infinite;
      }

      @keyframes growfade {
        0% {
          color: rgba(232, 232, 232, 0);
        }

        25% {
          color: rgba(232, 232, 232, 1);
          font-size: 10em;
        }

        100% {
          color: rgba(232, 232, 232, 0);
          font-size: 10em;
        }
      }

      .modal-content{
        background-color: rgba(0, 0, 0, 0.3) !important;
      }
    </style>
  </head>

  <body>
    <a href="{{ route('landing.gallery-scene') }}" style="z-index: 3000" class="position-absolute m-3 col-1 btn btn-primary nav-link text-white row font-weight-bold text-center">&LeftAngleBracket;&LeftAngleBracket;</a>
  <!-- icon of toggle play and pause -->
  <i id="player-controll" class="fas fa-play control d-none"></i>
    <!-- dataset model animasi -->
    <div class="position-absolute col-12 justify-content-center text-center pt-4">

        <h4>
          Animasi
          <button type="button" id="btn-deskripsi" class="btn dropdown-toggle" data-bs-toggle="modal" data-bs-target="#modal-deskripsi">
          deskripsi
          </button>
        </h4>

      @foreach($animations as $animation)
      <!-- <input type="hidden" class="data-model" data-model="{{ asset('storage/animations/').$animation->path }}" data-deskripsi="{{ $animation }}"> -->
      <button class="btn btn-outline-dark btn-change-look data-model" data-model="{{ asset('storage/animations/').$animation->path }}" data-deskripsi="{{ $animation->description }}" data-index="{{ $loop->index }}">{{ $animation->position }}</button>
      @endforeach
    </div>

    <!-- Modal Deskripsi -->
    <div class="modal fade  text-light" id="modal-deskripsi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="modal-body" class="modal-body border-0">
              
            </div>
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>

    <!-- this animation loader -->
    <div id="faded" class="d-block mx-auto position-absolute col-3 text-center p-o centering">
      <div class="lds-facebook">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    
    <div style="height: 100vh;" id="main-container" class="col-12 bg-secondary">
      <div id="canvas"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script type="module" src="{{ asset('js/threejsHandler/setup-showcase.js') }}" crossorigin="anonymous"></script>
  </body>

      <script>
        const btnDeskripsi = document.querySelector('#btn-deskripsi');
        const modalDeskripsiBody = document.querySelector('#modal-body');
        btnDeskripsi.addEventListener('click', (e)=>{
          modalDeskripsiBody.innerHTML = document.querySelector('.data-model.active').dataset.deskripsi;
        })


        document.getElementById("double-tap").addEventListener("touchstart", touchStart);

        var clickTimer = null;

        function touchStart() {
            if (clickTimer == null) {
                clickTimer = setTimeout(function () {
                    clickTimer = null;
                    alert("single");

                }, 500)
            } else {
                clearTimeout(clickTimer);
                clickTimer = null;
                alert("double");

            }
        }
      </script>
  </html>
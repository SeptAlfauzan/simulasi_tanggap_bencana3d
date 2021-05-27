@extends('template.landing-page.template')
@section('home', 'active')
@section('content')
  <div class="header-4-1 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
    <div class="row">
      <div class="mx-auto d-flex flex-lg-row flex-column hero">
        <!-- Left Column -->
        <div
          class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center">
          
          <h1 class="title-text-big">
            Ilustrasikan simulasi tanggap bencana dengan Animasi 3D
          </h1>
          <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">

            <a href="{{ route('login') }}" class="btn btn-outline">
              <div class="d-flex align-items-center">
                Log In Sebagai Contributor
              </div>
            </a>
          </div>
        </div>
        <!-- Right Column -->
        <div class="right-column text-center d-flex justify-content-lg-end justify-content-center pe-0">
          <img id="img-fluid" class="h-auto mw-100"
            src="{{ asset('images/landing-page-ilus.png') }}"
            alt="" />
        </div>
      </div>
    </div>
  </div>
@endsection

@section('other')
<section id="ther" class="w-100 bg-white" style="box-sizing: border-box">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .content-2-1 .btn:focus,
    .content-2-1 .btn:active {
      outline: none !important;
    }

    .content-2-1 .title-text {
      padding-top: 5rem;
      margin-bottom: 3rem;
    }

    .content-2-1 .text-title {
      font: 600 2.25rem/2.5rem Poppins, sans-serif;
      color: #121212;
      margin-bottom: 0.625rem;
    }

    .content-2-1 .text-caption {
      color: #121212;
      font-weight: 300;
    }

    .content-2-1 .column {
      padding: 2rem 2.25rem;
    }

    .content-2-1 .icon {
      margin-bottom: 1.5rem;
    }

    .content-2-1 .icon-title {
      font: 500 1.5rem/2rem Poppins, sans-serif;
      margin-bottom: 0.625rem;
      color: #121212;
    }

    .content-2-1 .icon-caption {
      font: 400 1rem/1.625 Poppins, sans-serif;
      letter-spacing: 0.025em;
      color: #565656;
    }

    .content-2-1 .card-block {
      padding: 1rem 1rem 5rem;
    }

    .content-2-1 .card {
      padding: 1.75rem;
      background-color: #fff7f4;
      border-radius: 0.75rem;
      border: 1px solid #ff7c57;
    }

    .content-2-1 .card-title {
      font: 600 1.5rem/2rem Poppins, sans-serif;
      margin-bottom: 0.625rem;
      color: #000000;
    }

    .content-2-1 .card-caption {
      font: 300 1rem/1.5rem Poppins, sans-serif;
      color: #565656;
      letter-spacing: 0.025em;
      margin-bottom: 0;
    }

    .content-2-1 .btn-card {
      font: 700 1rem/1.5rem Poppins, sans-serif;
      background-color: #ff7c57;
      padding-top: 1rem;
      padding-bottom: 1rem;
      width: 100%;
      border-radius: 0.75rem;
      margin-bottom: 1.25rem;
    }

    .content-2-1 .btn-card:hover {
      --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
        0 4px 6px -2px rgba(0, 0, 0, 0.05);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
        var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .content-2-1 .btn-outline {
      font: 400 1rem/1.5rem Poppins, sans-serif;
      color: #979797;
      border: 1px solid #979797;
      padding-top: 1rem;
      padding-bottom: 1rem;
      width: 100%;
      border-radius: 0.75rem;
    }

    .content-2-1 .btn-outline:hover {
      border: 1px solid #ff7c57;
      color: #ff7c57;
    }

    .content-2-1 .card-text {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
    }

    .content-2-1 .grid-padding {
      padding: 0rem 1rem 3rem;
    }

    @media (min-width: 576px) {
      .content-2-1 .grid-padding {
        padding: 0rem 2rem 3rem;
      }

      .content-2-1 .card-block {
        padding: 3rem 2rem 5rem;
      }
    }

    @media (min-width: 768px) {
      .content-2-1 .grid-padding {
        padding: 0rem 4rem 3rem;
      }

      .content-2-1 .card-block {
        padding: 3rem 4rem 5rem;
      }
    }

    @media (min-width: 992px) {
      .content-2-1 .grid-padding {
        padding: 1rem 6rem 3rem;
      }

      .content-2-1 .card-block {
        padding: 3rem 6rem 5rem;
      }

      .content-2-1 .column {
        padding: 0rem 2.25rem;
      }
    }

    @media (min-width: 1200px) {
      .content-2-1 .grid-padding {
        padding: 1rem 10rem 3rem;
      }

      .content-2-1 .card-block {
        padding: 3rem 6rem 5rem;
      }

      .content-2-1 .card-btn-space {
        margin-top: 15px;
        margin-bottom: 15px;
      }

      .content-2-1 .btn-outline,
      .content-2-1 .btn-card {
        width: 95%;
        float: right;
      }
    }

    @media (max-width: 980px) {
      .content-2-1 .card-btn-space {
        width: 100%;
      }
    }
  </style>
  <div class="content-2-1 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
    <div class="text-center title-text">
      <h1 class="text-title">3 Keys Benefit</h1>
      <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
        Ilustrasikan simulasi tanggap bencana dengan Animasi 3D
      </p>
    </div>

    <div class="grid-padding text-center">
      <div class="row">
        <div class="col-lg-4 column" data-aos="fade-up" data-aos-duration="1000">
          <div class="icon">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-2.png"
              alt="" />
          </div>
          <h3 class="icon-title">Mudah</h3>
          <p class="icon-caption">
            Lorem ipsum dolor sit amet.
          </p>
        </div>
        <div class="col-lg-4 column" data-aos="fade-up" data-aos-duration="2000">
          <div class="icon">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-3.png"
              alt="" />
          </div>
          <h3 class="icon-title">Atraktif</h3>
          <p class="icon-caption">
            Lorem ipsum dolor sit.
          </p>
        </div>
        <div class="col-lg-4 column" data-aos="fade-up" data-aos-duration="3000">
          <div class="icon">
            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-4.png"
              alt="" />
          </div>
          <h3 class="icon-title">Interaktif</h3>
          <p class="icon-caption">
            Lorem ipsum dolor sit.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
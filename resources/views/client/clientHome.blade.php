@extends('layouts.master')
@section('content')

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
/>



<body>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="{{asset('img/cita.webp')}}"> 
        <div class="text" data-swiper-parallax="-100">
          <h1>
          Reserva tu Consulta para tus peluditos con Bs.50
          </h1>
        </div>
    </div>
      <div class="swiper-slide"> 
        <img src="{{asset('img/emergenciag.jpg')}}"> 
        <div class="text" data-swiper-parallax="-100">
          <h1>
           Atencion 24/7
          </h1>
        </div>
    </div>
      <div class="swiper-slide">
        <img src="{{asset('img/vacuna.png')}}">
        <div class="text" data-swiper-parallax="-100">
          <h1>
           Vacunas y tratamientos para tu peludito
          </h1>
        </div>

      </div>
      <div class="swiper-slide">
        <img src="{{asset('img/spa.jpg')}}">
        <div class="text" data-swiper-parallax="-100">
          <h1>
            Servicios como baños, peluqueria, y mucho mas...
          </h1>
        </div>
      </div>
      <div class="swiper-slide"> 
        <img src="{{asset('img/radiografia.jpg')}}"> 
        <div class="text" data-swiper-parallax="-100">
          <h1>
           Servicio de Radiografia desde Bs.100
          </h1>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="{{asset('img/ecografia.jpg')}}"> 
        <div class="text" data-swiper-parallax="-100">
            <h1>
                Servicio de Ecografia desde Bs.100
               </h1>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="{{asset('img/hemograma.jpg')}}"> 
        <div class="text" data-swiper-parallax="-100">
            <h1>
                Servicio de Hemograma desde Bs.50
               </h1>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="{{asset('img/medicamentos.jpg')}}">
        <div class="text" data-swiper-parallax="-100">
            <h1>
                Venta de todo tipo de medicamentos 
               </h1>
        </div>
      </div>
      <div class="swiper-slide"> 
        <img src="{{asset('img/articulos.jpg')}}"> 
        <div class="text" data-swiper-parallax="-100">
            <h1>
                Venta de Juguetes, Alimento, y mucho mas...
               </h1>
        </div>
    </div>
    
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

                  
@endsection
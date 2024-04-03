@extends('main')
<style>
    .swiper {
        width: 100%;
        height: 32rem;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
        background-clip: content-box;
    }
    .container-swiper{
        padding: 1rem 0;
    }
</style>
@section('pagina-oferta')
    <div class="container-swiper">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/slide1.png') }}')"></div>
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/slide2.png') }}')"></div>
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/slide3.webp') }}')"></div>
                <div class="swiper-slide" style="background-image: url('{{ asset('assets/images/slide4.png') }}')"></div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
@endsection

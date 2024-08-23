@extends('header')
@section('content')
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach($banners as $banner)
      <div class="swiper-slide">
        <img src="{{asset('images/banners/'.$banner->photopath)}}" alt="" class="h-[500px] w-full object-cover">
      </div>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <div class="px-24 py-10">
    <h1 class="text-2xl font-semibold text-center">Our Packages</h1>
    <p class="text-center text-gray-500">We provide the best packages for you</p>
    <div class="grid grid-cols-3 gap-10 mt-5">
        @foreach($packages as $package)
        <div class="bg-blue-600 text-white shadow-lg rounded-lg hover:-translate-y-1 duration-300 cursor-pointer">
            <h1 class="text-center mt-2 p-2 text-lg">{{$package->name}}</h1>
            <hr class="mx-4">
            <p class="text-2xl font-bold text-center mt-2">Rs. {{$package->price}}</p>
            <p class="p-4 text-justify line-clamp-1">{{$package->description}}</p>
            {{-- Price  --}}
            <div class="text-center justify-between items-center p-4">
                <a href="" class="bg-blue-50 text-blue-600 px-4 py-2 rounded-lg">Get Package</a>
            </div>
        </div>
        @endforeach
    </div>
  </div>

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
@endsection

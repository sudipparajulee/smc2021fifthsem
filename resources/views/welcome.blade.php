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
    <div class="grid grid-cols-3 gap-10">
        <div class="bg-blue-100 shadow-lg p-4 rounded-lg hover:-translate-y-1 duration-300 cursor-pointer">
            <h1 class="font-bold">Package 1</h1>
            <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
            {{-- Price  --}}
            <div class="flex justify-between items-center mt-5">
                <p class="text-2xl font-bold">Rs. 10000</p>
                <button class="bg-blue-500 text-white px-4 py-1 rounded-lg">Get Package</button>
            </div>
        </div>
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

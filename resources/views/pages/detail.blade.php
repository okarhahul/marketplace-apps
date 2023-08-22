@extends('layouts.app')

@section('title')
    Detail Page 
@endsection

@section('content')
    <div class="page-content page-details">
        <section
        class="store-breadcrumb"
        data-aos="fade-down"
        data-aos-delay="100"
        >
            <div class="container">
                <div class="row">
                <div class="col-12">
                    <div class="breadcrumb">
                        <div class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </div>
                    <div class="breadcrumb-item active">Page Details</div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->

        <!-- Hero Image -->
        <section class="store-gallery" id="gallery">
            <div class="container">
                <div class="row">
                <div class="col-lg-8" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                    <img
                        :src="photos[activePhoto].url"
                        :key="photos[activePhoto].id"
                        class="w-100 main-image"
                        alt=""
                    />
                    </transition>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                    <!-- V-FOR merupakan pengulangan pada vue, dimana ia akan membuat variabel baru dari variabel utama -->
                    <!-- :Key merupakan sebuah target pada sebuah object yang dituju -->
                    <div
                        class="col-3 col-lg-12 mt-2 mt-lg-0"
                        v-for="(photo, index) in photos"
                        :key="photo.id"
                        data-aos="zoom-in"
                        data-aos-delay="100"
                    >
                        <a href="#" @click="changeActive(index)">
                        <!-- :class merupakan pembuatan class pada vue, yang akan di styling nantinya menjadi dinamis -->
                        <img
                            :src="photo.url"
                            class="w-100 thumbnail-image"
                            :class="{ active:index == activePhoto }"
                            alt=""
                        />
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Details Porduct -->
        <div class="store-details-content mt-2" data-aos="fade-up">
        <section class="store-heading">
            <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <h1>{{ $product->name }}</h1>
                <div class="owner mb-1">By {{ $product->user->store_name }}</div>
                <div class="price">$ {{ number_format($product->price) }}</div>
                </div>
                <div class="col-lg-2" data-aos="fade-up">
                    @auth
                    <form action="{{ route('detail-add', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <button
                        type="submit"
                        class="btn btn-success px-4 text-white btn-block mb-3"
                        >
                            Add to Cart!
                        </button>
                    </form>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="btn btn-success px-4 text-white btn-block mb-3"
                        >
                            Add to Cart!
                        </a>    
                    @endauth
                </div>
            </div>
            </div>
        </section>

        <!-- Description Product -->
        <section class="store-description">
            <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                <p>
                    {!! $product->description !!}
                </p>
                </div>
            </div>
            </div>
        </section>

        <!-- Riview Product -->
        <section class="store-riview">
            <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 mt-3 mb-3">
                <h5>Customer Riview (3)</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                    <li class="media mb-4">
                    <img
                        src="images/icon-testimonial-1.png"
                        alt=""
                        class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                        <h5 class="mt-2 mb-1">Isnaini Rofi'ah</h5>
                        Sofanya bagus, cocok untuk keluarga di rumah
                    </div>
                    </li>
                    <li class="media mb-4">
                    <img
                        src="images/icon-testimonial-2.png"
                        alt=""
                        class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                        <h5 class="mt-2 mb-1">Nur Azizah Diti</h5>
                        Pengiriman cepat, gratis ongkir
                    </div>
                    </li>
                    <li class="media mb-4">
                    <img
                        src="images/icon-testimonial-3.png"
                        alt=""
                        class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                        <h5 class="mt-2 mb-1">Siti Ariyati Isqiqomah</h5>
                        Selain buat duduk, sofanya enak buat rebahan
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </section>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
      // Vue harus diinisialisasikan terlebih dahulu pada sebuah variabel
      var gallery = new Vue({
        el: "#gallery",
        // el disini berguna untuk menargetkan variabel gallert
        mounted() {
          // mounted digunakan untuk menampilkan animasi yang digunakan saat halaman sebuah website diakses
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            @foreach($product->galleries as  $gallery)
                {
                id: {{ $gallery->id }},
                url: "{{ Storage::url($gallery->photos) }}",
                },           
            @endforeach
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
@endpush
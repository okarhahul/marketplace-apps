@extends('layouts.auth')

@section('content')

{{-- sendiri --}}
    <!-- Page Content -->
    <div class="page-content page-auth" id="register">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4">
              <h2>
                Memulai untuk jual beli <br />
                dengan cara terbaru
              </h2>
              <form method="POST" action="{{ route('register') }}" class="mt-3">
                @csrf
                <div class="form-group">
                  <label for="">Full Name</label>
                  <x-text-input id="name" 
                  class="form-control" 
                  type="text" 
                  name="name" 
                  :value="old('name')" 
                  required 
                  autofocus
                  v-model="name" 
                  autocomplete="name" />
                  <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                </div>
                <div class="form-group">
                  <label for="">Email Address</label>
                  <x-text-input 
                    id="email" 
                    v-model="email"
                    @change="checkEmailAvailable()"
                    class="form-control"
                    {{-- :class="{ 'is-invalid' : this.email_unavailable }" --}}
                    {{-- :class="('is-invalid' : this.email_unavailable)" --}}
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required
                    autocomplete="email" />
                  <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                </div>
                <div class="form-group">
                  <label for="">Nomer Handphone</label>
                  <x-text-input 
                    id="phone_number" 
                    class="form-control" 
                    type="string" 
                    name="phone_number" 
                    :value="old('phone_number')" 
                    required
                    v-model="phone_number" 
                    autocomplete="phone_number" />
                  <x-input-error :messages="$errors->get('phone_number')" class="mt-2 text-danger" />
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <x-text-input 
                    id="password" 
                    class="form-control"
                    type="password"
                    name="password"
                    required 
                    autocomplete="new-password" />
                  <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                </div>
                <div class="form-group">
                  <label for="">Konfrimasi Password</label>
                  <x-text-input 
                    id="password_confirmation" 
                    class="form-control"
                    type="password"
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password" />
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                </div>
                <div class="form-group">
                  <label for="">Store</label>
                  <p class="text-muted">Apakah anda juga ingin membuka toko?</p>
                  <div
                    class="custom-control custom-radio custom-control-inline"
                  >
                    <input
                      type="radio"
                      class="custom-control-input"
                      name="is_store_open"
                      id="openStoreTrue"
                      v-model="is_store_open"
                      :value="true"
                    />
                    <label for="openStoreTrue" class="custom-control-label"
                      >Iya, Boleh</label
                    >
                  </div>
                  <div
                    class="custom-control custom-radio custom-control-inline"
                  >
                    <input
                      type="radio"
                      class="custom-control-input"
                      name="is_store_open"
                      id="openStoreFalse"
                      v-model="is_store_open"
                      :value="false"
                    />
                    <label for="openStoreFalse" class="custom-control-label"
                      >Tidak, Terimakasih</label
                    >
                  </div>
                </div>
                <div class="form-group" v-if="is_store_open">
                  <label for="">Nama Toko</label>
                  <x-text-input 
                    id="store_name" 
                    v-model="store_name"
                    class="form-control"
                    type="text"
                    name="store_name"
                    required
                    autofocus 
                    autocomplete />
                  <x-input-error :messages="$errors->get('store_name')" class="mt-2 text-danger" />
                </div>
                <div class="form-group" v-if="is_store_open">
                  <label>Kategori</label>
                  <select name="categories_id" class="form-control">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                      {{ $category->name }}
                    </option>                        
                    @endforeach
                  </select>
                </div>
                <button 
                  href="/index.html" 
                  type="submit"
                  class="btn btn-success btn-block mt-4"
                  :disabled="this.email_unavailable"
                  >Sign Up Now</button
                >
                <a href="{{ route('login') }}" class="btn btn-singup btn-block mt-2"
                  >Back to Sign In</a
                >
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script>
      Vue.use(Toasted);

      var register = new Vue({
        el: "#register",
        mounted() {
          AOS.init();
        },
        methods: {
          checkEmailAvailable: function(){
            var self = this;
            axios.get('{{ route('api-register-check') }}',{
              params: {
                email: this.email
              }
            })
              .then(function (response) {
                if(response.data == "Available"){
                    self.$toasted.error(
                      "Email anda tersedia",
                      {
                        position: "top-center",
                        className: "rounded",
                        duration: 1000,
                      }
                    );
                    self.email_unavailable = false;
                } else {
                    self.$toasted.error(
                      "Maaf, tampaknya email sudah terdaftar pada sistem kami.",
                      {
                        position: "top-center",
                        className: "rounded",
                        duration: 1000,
                      }
                    );
                    self.email_unavailable = true;
                }
                // handle success
                console.log(response);
              })
          }
        },
        data() {
          return {
            name: "Angga Hazza Sett",
            email: "kamujagoan@bwa.id",
            phone_number: "081234123422",
            is_store_open: "true",
            store_name: "",
            email_unavailable: false
          }
        }
      });
    </script>
@endpush


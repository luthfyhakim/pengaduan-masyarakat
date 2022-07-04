@extends('layouts.masyarakat')

@section('title')
Dashboard
@endsection
@section('content')

<main>
  <section id="contact" class="contact dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
    <div class="container ">
      
      

    <div class="row">
      <img src="assets/img/logo.svg">
      <h4 class="text-center fw-bold">APLIKASIKU</h4>
      
      <hr>

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <h5>lokasi</h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude">
          </div>
          
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude">
          </div>          
        </div>
        
        
      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="{{ route('pengaduan.store')}} " method="POST" enctype="multipart/form-data" class="php-email-form ">
          @csrf
          <div class="row ">
            <div class="form-group col-md-6">
              <label for="user_nik">NIK</label>
              <input type="text" name="user_nik" class="form-control "
              type="text" id="user_nik" placeholder="Nik" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <label for="name">Nomor Hp</label>
              <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Nomor Hp" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group mt-3">
            <label for="name">laporan</label>
            <textarea class="form-control" name="description" id="descriptiom"rows="5" placeholder="Tulis laporan anda disini " required></textarea>
          </div>
           
          <label for="image" class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Kirim Foto</span>
            <input
              class="block w-full mt-1 text-sm  form-input"
              type="file" value="{{ old('image')}}" name="image" />
          </label>
          
          <div class="form-group mt-3">
            <label for="name">Alamat Kejadian</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat kejadian" required>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center btn-btn-success"><button type="submit">Kirim Laporan</button></div>
          <button class="btn btn-danger" type="#">kembali</button>
        </form>
      </div>

    </div>

  </div>
</section>
  </main>



















{{-- <main class="h-full pb-16 overflow-y-auto">

  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
      Silahkan ajukan pengaduan Anda!
    </h2>

    


    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }} </li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{ route('pengaduan.store')}} " method="POST" enctype="multipart/form-data">
      @csrf

      
      
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Nik</span>
          <input
            class="block w-50 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="text" name="nik" />
        </label>
        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Nik</span>
          <input
            class="block w-50 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="text" name="nik" />
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Laporan</span>
          <textarea
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Isi laporan Anda" value="{{ old('description')}}"
            name="description"></textarea>
        </label>

        <label for="image" class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Foto</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="file" value="{{ old('image')}}" name="image" />
        </label>
        <button type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Laporkan
        </button>

      </div>
    </form> --}}

    @endsection


















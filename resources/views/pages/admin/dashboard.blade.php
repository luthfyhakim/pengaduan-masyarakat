@extends('layouts.admin')

@section('title')
Dashboard
@endsection

@section('content')
<main class="h-full overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Dashboard
    </h2>

    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
          <svg class="w-5 h-5"xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 16 16" viewBox="0 0 16 16"><path fill="#231f20" d="m 12.222656,1.5039061 c -1.348,0 -2.5040935,0.8250938 -2.9960935,1.9960938 l -8.31445318,0 C 0.41010937,3.4999999 0,3.9081561 0,4.4101561 l 0,2.6796875 c 0,0.262 0.11496875,0.4941563 0.29296874,0.6601563 C 0.11496874,7.9159999 0,8.1481561 0,8.4101561 L 0,11.089844 C 0,11.351844 0.11496875,11.584 0.29296874,11.75 0.11496874,11.916 0,12.148156 0,12.410156 l 0,2.679688 C 0,15.591844 0.41010937,16 0.91210932,16 L 12.589844,16 C 13.091844,16 13.5,15.591844 13.5,15.089844 l 0,-2.679688 C 13.5,12.148156 13.385031,11.916 13.207031,11.75 13.385031,11.584 13.5,11.351844 13.5,11.089844 l 0,-2.6796879 c 0,-0.23 -0.09337,-0.43375 -0.234375,-0.59375 1.279,-0.437 2.207031,-1.6375 2.207031,-3.0625 0,-1.792 -1.458,-3.25 -3.25,-3.25 z m 0,0.5 c 1.517,0 2.75,1.233 2.75,2.75 0,1.503 -1.212937,2.7250938 -2.710937,2.7460938 l -0.07813,0 c -1.498,-0.021 -2.7109378,-1.2430938 -2.7109378,-2.7460938 -10e-4,-1.517 1.2339998,-2.75 2.7499998,-2.75 z m 1.31836,1.5136719 -1.94336,1.9433594 -0.695312,-0.6953125 -0.353516,0.3535156 0.871094,0.8730469 c 0.049,0.048 0.113734,0.072266 0.177734,0.072266 0.064,0 0.126781,-0.023266 0.175781,-0.072266 L 13.894531,3.8710936 13.541016,3.517578 Z m -12.62890668,0.4824219 8.15820318,0 c -0.059,0.243 -0.097656,0.4929062 -0.097656,0.7539062 0,1.159 0.6132969,2.1710938 1.5292965,2.7460938 l -9.58984338,0 C 0.68510937,7.4999999 0.5,7.3158436 0.5,7.0898436 l 0,-2.6796875 c 0,-0.227 0.18610937,-0.4101562 0.41210932,-0.4101562 z m 0.83789068,1.5 0,0.5 4,0 0,-0.5 -4,0 z m -0.83789068,2.5 11.27148468,0 c 0.013,0 0.02506,0.00391 0.03906,0.00391 0.014,0 0.02506,-0.00391 0.03906,-0.00391 l 0.328125,0 c 0.227,0 0.412109,0.1841562 0.412109,0.4101562 l 0,2.6796879 c 0,0.227 -0.186109,0.410156 -0.412109,0.410156 l -11.67773468,0 C 0.68510937,11.5 0.5,11.315844 0.5,11.089844 l 0,-2.6796879 c 0,-0.227 0.18610937,-0.4101562 0.41210932,-0.4101562 z M 11.269531,9.4492186 A 0.30000001,0.30000001 0 0 0 10.970703,9.7499999 0.30000001,0.30000001 0 0 0 11.269531,10.050781 0.30000001,0.30000001 0 0 0 11.570312,9.7499999 0.30000001,0.30000001 0 0 0 11.269531,9.4492186 Z M 1.75,9.4999999 l 0,0.5 4,0 0,-0.5 -4,0 z M 0.91210932,12 12.589844,12 C 12.816844,12 13,12.184156 13,12.410156 l 0,2.679688 C 13,15.316844 12.815844,15.5 12.589844,15.5 l -11.67773468,0 C 0.68510937,15.5 0.5,15.315844 0.5,15.089844 l 0,-2.679688 C 0.5,12.183156 0.68610937,12 0.91210932,12 Z M 11.24414,13.449219 A 0.30000001,0.30000001 0 0 0 10.943359,13.75 0.30000001,0.30000001 0 0 0 11.24414,14.050781 0.30000001,0.30000001 0 0 0 11.544922,13.75 0.30000001,0.30000001 0 0 0 11.24414,13.449219 Z m -9.49414,0.05078 0,0.5 4,0 0,-0.5 -4,0 z"/></svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Jumlah Pengaduan
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{ $pengaduan }}
          </p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
          <svg class="w-5 h-5"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><rect width="44" height="6" x="7" y="3" fill="#ff9811"/><polygon fill="#ff9811" points="48 9 57 56 49.81 56 48 9"/><polygon fill="#ffda44" points="50 61 41 61 39 53 19 53 17 61 8 61 10 9 18 9 18 16 40 16 40 9 48 9 49.81 56 50 61"/><polygon fill="#d80027" points="45 49 13 49 29 20 45 49"/><circle cx="29" cy="44" r="2" fill="#fff"/><polygon fill="#fff" points="31 30 30 39 28 39 27 30 31 30"/><path d="M29.875,19.517a1.04,1.04,0,0,0-1.75,0l-16,29A1,1,0,0,0,13,50H45a1,1,0,0,0,.875-1.483ZM14.694,48,29,22.07,43.306,48Z"/><path d="M26.255 29.333a1 1 0 0 0-.249.777l1 9A1 1 0 0 0 28 40h2a1 1 0 0 0 .994-.89l1-9A1 1 0 0 0 31 29H27A1 1 0 0 0 26.255 29.333zM29.883 31l-.778 7H28.9l-.778-7zM29 41a3 3 0 1 0 3 3A3 3 0 0 0 29 41zm0 4a1 1 0 1 1 1-1A1 1 0 0 1 29 45z"/><path d="M49.21,10H51a1,1,0,0,0,1-1V3a1,1,0,0,0-1-1H7A1,1,0,0,0,6,3V9a1,1,0,0,0,1,1H8.96L7,60.96A1.008,1.008,0,0,0,8,62h9a1,1,0,0,0,.97-.76L19.78,54H38.22l1.81,7.24A1,1,0,0,0,41,62h9a1.008,1.008,0,0,0,1-1.04L50.85,57H57a1,1,0,0,0,.98-1.19ZM8,8V4H50V8Zm31,2v5H19V10Zm2.78,50-1.81-7.24A1,1,0,0,0,39,52H19a1,1,0,0,0-.97.76L16.22,60H9.04l1.92-50H17v6a1,1,0,0,0,1,1H40a1,1,0,0,0,1-1V10h6.04l1.92,50Zm8.99-5L49.51,22.19,55.79,55Z"/></svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Belum di Proses
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{ $pending }}
          </p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path
              d="M8 5a1 1 0 100 2h5.586l-1.293 1.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L13.586 5H8zM12 15a1 1 0 100-2H6.414l1.293-1.293a1 1 0 10-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L6.414 15H12z" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Sedang di Proses
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{ $process }}
          </p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
          <svg class="w-5 h-5" viewBox=" 0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Selesai
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{ $success }}
          </p>
        </div>
      </div>
    </div>
    @if( Auth::user()->roles == 'ADMIN')

    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
      <!-- Card -->
      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
            </path>
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Jumlah User
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{ $user }}
          </p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path
              d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Jumlah Petugas
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{ $petugas }}
          </p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700
        ">
          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
            Jumlah Admin
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{ $admin }}
          </p>
        </div>
      </div>
      <!-- Card -->
      <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
              clip-rule="evenodd"></path>
          </svg>
        </div>
        <div>
          <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Jumlah Tanggapan
          </p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $tanggapan }}
          </p>
        </div>
      </div>
    </div>
    @endif
  </div>
</main>
@endsection
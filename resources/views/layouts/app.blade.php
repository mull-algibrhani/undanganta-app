<!DOCTYPE html>
<html :class="{ 'dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <title>{{ config('app.name', 'Laravel') }}</title>
 <!-- Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans:wght@100;300;400;600;700&display=swap"
  rel="stylesheet">
 <link rel="preconnect" href="https://fonts.bunny.net">
 <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
 <!-- Style -->
 <link rel="stylesheet" href="{{ asset('assets/css/scrolbar.css')}}">
 <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
 <!-- Scripts -->
 <script src="{{ asset('assets/js/backend-alpine.js')}}"></script>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

 <!-- <div class="loader">
  <div class=" fixed z-50 top-0 left-0 w-full h-full bg-white dark:bg-gray-800 flex justify-center items-center">
   <svg class="animate-spin -ml-1 mr-3 h-8 w-8 text-violet-700" xmlns="http://www.w3.org/2000/svg" fill="none"
    viewBox="0 0 24 24">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
    </circle>
    <path class="opacity-75" fill="currentColor"
     d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
    </path>
   </svg>
  </div>
  <div class=" fixed z-50 top-0 mt-8 left-0 w-full h-full flex justify-center items-center">
   <span class=" text-violet-700 text-lg tracking-wider">Loading...</span>
  </div>
 </div> -->
 <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': menuMobileOpen }">
  <livewire:layout.menu-desktop />
  <livewire:layout.menu-mobile />

  <div class="flex flex-col flex-1 w-full">
   <livewire:layout.header />
   <main id="style-scrolbar" class="h-full overflow-y-auto">
    {{ $slot }}
   </main>
  </div>
 </div>
</body>

</html>
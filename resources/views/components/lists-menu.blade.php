<div class=" text-gray-500 dark:text-gray-400">
  <div>
    <!-- <div
   class="mt-2 flex justify-center bg-gray-white transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400 uppercase dark:text-gray-50 text-gray-600 font-bold text-lg">
   <a href="/dashboard" rel="noopener noreferrer">
    <h2>{{ config('app.name') }}</h2>
   </a>
  </div> -->
    <a href="/dashboard" wire:navigate @click="closeMenuMobile" class=" flex justify-center text-lg font-bold dark:bg-gray-800 shadow-md bg-white text-gray-800 dark:text-gray-200
   border-b dark:border-gray-900 border-gray-300" aria-label="Logo">
      <x-application-logo class="w-28 h-16 mt-2.5 mb-2 text-violet-600 dark:text-violet-300 hover:text-violet-700 dark:hover:text-violet-500" />
    </a>
  </div>
  <div class=" rounded-lg dark:bg-gray-800 mr-2 bg-gray-50">
    <ul class="mt-2">
      <li class="relative px-6 py-3">
        <span id="dashboard" class="{{ request()->is('dashboard') ? '' : 'hidden' }} absolute inset-y-0 left-0 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
        <a href="/dashboard" wire:navigate @click="closeMenuMobile" class=" inline-flex items-center w-full text-sm font-semibold text-gray-500 transition-colors duration-150
     hover:text-violet-500 dark:hover:text-violet-400 dark:text-gray-400">
          <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-border-style" viewBox="0 0 16 16">
            <path d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm8 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-4 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm8 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-4-4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1z" />
          </svg>
          <span class="ml-4">Dashboard</span>
        </a>
      </li>
    </ul>
    <ul>
      <li class="relative px-6 py-3">
        <span id="project" class="{{ request()->is('daftar-tamu') ? '' : 'hidden' }} absolute inset-y-0 left-3 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400" href="/daftar-tamu" wire:navigate>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
          </svg>
          <span class="ml-4">Daftar tamu</span>
        </a>
      </li>

    </ul>
    <ul>
      <li class="relative px-6 py-3">
        <span id="project" class="{{ request()->is('daftar-tamu-reservasi') ? '' : 'hidden' }} absolute inset-y-0 left-3 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400" href="/daftar-tamu-reservasi" wire:navigate>
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
          </svg>
          <span class="ml-4">Reservasi</span>
        </a>
      </li>

    </ul>
    <!-- <ul>
   <li class="relative px-6 py-3" x-data="{ postMenuOpen : false }">
    <span id="post"
     class="{{ request()->is('new-posts') || request()->is('all-posts') || request()->is('post-draft') || request()->is('post-categorys') || request()->is('post-category-edit/*') || request()->is('posts-archives') ? '' : 'hidden' }} absolute inset-y-0 left-3 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg"
     aria-hidden="true"></span>
    <button
     class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400"
     @click="postMenuOpen = ! postMenuOpen" aria-haspopup="true">
     <span class="inline-flex items-center">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-square-text"
       viewBox="0 0 16 16">
       <path
        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
       <path
        d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
      </svg>
      <span class="ml-4">Posts</span>
     </span>
     <svg x-show="postMenuOpen" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      class="bi bi-caret-down" viewBox="0 0 16 16">
      <path
       d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
     </svg>
     <svg x-show="!postMenuOpen" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      class="bi bi-caret-left" viewBox="0 0 16 16">
      <path
       d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
     </svg>
    </button>
    <div x-show="postMenuOpen" x-transition class="from-left">
     <ul
      class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium rounded-md shadow-inner bg-gray-200 text-violet-700 dark:text-violet-400 dark:bg-gray-900"
      aria-label="submenu">
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/new-posts">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-pencil-square" viewBox="0 0 16 16">
         <path
          d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
         <path fill-rule="evenodd"
          d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
        </svg>
        <span class="ml-2">New Posts</span>
       </a>
      </li>
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/all-posts">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-card-list"
         viewBox="0 0 16 16">
         <path
          d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
         <path
          d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
        </svg>
        <span class="ml-2">All Posts</span>
       </a>
      </li>
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/all-draft">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-text"
         viewBox="0 0 16 16">
         <path
          d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
         <path
          d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
        </svg>
        <span class="ml-2">Draft</span>
       </a>
      </li>
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/post-categorys">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list-check"
         viewBox="0 0 16 16">
         <path fill-rule="evenodd"
          d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
        </svg>
        <span class="ml-2">Categorys</span>
       </a>
      </li>
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/all-archives">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-journal-bookmark"
         viewBox="0 0 16 16">
         <path fill-rule="evenodd"
          d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
         <path
          d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
         <path
          d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
        </svg>
        <span class="ml-2">Archives</span>
       </a>
      </li>
     </ul>
    </div>
   </li>
   <li class="relative px-6 py-3" x-data="{ galeriMenuOpen : false }">
    <span id="galeri"
     class="{{ request()->is('galeri-photos') || request()->is('galeri-photos/*') || request()->is('galeri-videos') || request()->is('galeri-videos/*') || request()->is('galeri-documents') || request()->is('galeri-documents/*') ? '' : 'hidden' }} absolute inset-y-0 left-3 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg"
     aria-hidden="true"></span>
    <button
     class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400"
     @click="galeriMenuOpen = ! galeriMenuOpen" aria-haspopup="true">
     <span class="inline-flex items-center">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
       class="bi bi-person-video2" viewBox="0 0 16 16">
       <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
       <path
        d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2ZM1 3a1 1 0 0 1 1-1h2v2H1V3Zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3H5Zm-4-2h3v2H2a1 1 0 0 1-1-1v-1Zm3-1H1V8h3v2Zm0-3H1V5h3v2Z" />
      </svg>
      <span class="ml-4">Galeri</span>
     </span>
     <svg x-show="galeriMenuOpen" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      class="bi bi-caret-down" viewBox="0 0 16 16">
      <path
       d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
     </svg>
     <svg x-show="!galeriMenuOpen" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      class="bi bi-caret-left" viewBox="0 0 16 16">
      <path
       d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
     </svg>
    </button>
    <div x-show="galeriMenuOpen" x-transition class="from-left">
     <ul
      class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium rounded-md shadow-inner bg-gray-200 text-violet-700 dark:text-violet-400 dark:bg-gray-900"
      aria-label="submenu">
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/galeri-photos">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-file-earmark-image" viewBox="0 0 16 16">
         <path d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
         <path
          d="M14 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5V14zM4 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4z" />
        </svg>
        <span class="ml-2">Photos</span>
       </a>
      </li>
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/galeri-videos">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-file-earmark-play-fill" viewBox="0 0 16 16">
         <path
          d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6 6.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43V6.884z" />
        </svg>
        <span class="ml-2">Videos</span>
       </a>
      </li>
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/galeri-documents">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
         <path
          d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
         <path fill-rule="evenodd"
          d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
        </svg>
        <span class="ml-2">Documents</span>
       </a>
      </li>
     </ul>
    </div>
   </li>
   <li class="relative px-6 py-3" x-data="{ teamsMenuOpen : false}">
    <span id="team"
     class="{{ request()->is('all-team') || request()->is('all-team/*') || request()->is('position-team') || request()->is('position-team/*') ? '' : 'hidden' }} absolute inset-y-0 left-3 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg"
     aria-hidden="true"></span>
    <button
     class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400"
     @click="teamsMenuOpen = ! teamsMenuOpen" aria-haspopup="true">
     <span class="inline-flex items-center">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
       class="bi bi-person-lines-fill" viewBox="0 0 16 16">
       <path
        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
      </svg>
      <span class="ml-4">Team</span>
     </span>
     <svg x-show="teamsMenuOpen" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      class="bi bi-caret-down" viewBox="0 0 16 16">
      <path
       d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
     </svg>
     <svg x-show="!teamsMenuOpen" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      class="bi bi-caret-left" viewBox="0 0 16 16">
      <path
       d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
     </svg>
    </button>
    <div x-show="teamsMenuOpen" x-transition class="from-left">
     <ul
      class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium rounded-md shadow-inner bg-gray-200 text-violet-700 dark:text-violet-400 dark:bg-gray-900"
      aria-label="submenu">
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/all-team">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-person-lines-fill" viewBox="0 0 16 16">
         <path
          d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
        </svg>
        <span class="ml-2">All Team</span>
       </a>
      </li>
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/position-team">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
         <path fill-rule="evenodd"
          d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z" />
        </svg>
        <span class="ml-2">Position</span>
       </a>
      </li>
     </ul>
    </div>
   </li>
   <li class="relative px-6 py-3">
    <span id="project"
     class="{{ request()->is('all-project') || request()->is('new-project') || request()->is('project/edit/*') ? '' : 'hidden' }} absolute inset-y-0 left-3 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg"
     aria-hidden="true"></span>
    <a
     class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400"
     href="/all-project">
     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
      class="bi bi-columns-gap" viewBox="0 0 16 16">
      <path
       d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
     </svg>
     <span class="ml-4">Programs</span>
    </a>
   </li>
   <li class="relative px-6 py-3">
    <span id="partner"
     class="{{ request()->is('all-partner') || request()->is('new-partner') || request()->is('partner/edit/*') ? '' : 'hidden' }} absolute inset-y-0 left-3 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg"
     aria-hidden="true"></span>
    <a
     class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400"
     href="/all-communities">
     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
      class="bi bi-bounding-box" viewBox="0 0 16 16">
      <path
       d="M5 2V0H0v5h2v6H0v5h5v-2h6v2h5v-5h-2V5h2V0h-5v2H5zm6 1v2h2v6h-2v2H5v-2H3V5h2V3h6zm1-2h3v3h-3V1zm3 11v3h-3v-3h3zM4 15H1v-3h3v3zM1 4V1h3v3H1z" />
     </svg>
     <span class="ml-4">Communities</span>
    </a>
   </li>
   <li class="relative px-6 py-3">
    <span id="contact"
     class="{{ request()->is('all-contact') ? '' : 'hidden' }} absolute inset-y-0 left-3 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg"
     aria-hidden="true"></span>
    <a
     class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400"
     href="/all-contact">
     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
      class="bi bi-phone" viewBox="0 0 16 16">
      <path
       d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
      <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
     </svg>
     <span class="ml-4">Contact</span>
    </a>
   </li>
   <li class="relative px-6 py-3">
    <span id="admin"
     class="{{ request()->is('all-admin') ? '' : 'hidden' }} absolute inset-y-0 left-3 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg"
     aria-hidden="true"></span>
    <a
     class="{{ request()->is('all-admin') ? 'text-violet-500 dark:text-violet-400' : '' }} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400"
     href="/all-admin">
     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
      class="bi bi-person-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd"
       d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
     </svg>
     <span class="ml-4">Admin</span>
    </a>
   </li>
   <li class="relative px-6 py-3" x-data="{ settingsMenuOpen : false}">
    <span id="settings"
     class="{{ request()->is('setting-homepage') ? '' : 'hidden' }} absolute inset-y-0 left-3 w-1 bg-violet-600 rounded-tr-lg rounded-br-lg"
     aria-hidden="true"></span>
    <button
     class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-violet-500 dark:hover:text-violet-400"
     @click="settingsMenuOpen = ! settingsMenuOpen" aria-haspopup="true">
     <span class="inline-flex items-center">
      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
       class="bi bi-wrench-adjustable-circle" viewBox="0 0 16 16">
       <path d="M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z" />
       <path
        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z" />
      </svg>
      <span class="ml-4">Settings</span>
     </span>
     <svg x-show="settingsMenuOpen" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      class="bi bi-caret-down" viewBox="0 0 16 16">
      <path
       d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
     </svg>
     <svg x-show="!settingsMenuOpen" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
      class="bi bi-caret-left" viewBox="0 0 16 16">
      <path
       d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
     </svg>
    </button>
    <div x-show="settingsMenuOpen" x-transition class="from-left">
     <ul
      class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium rounded-md shadow-inner bg-gray-200 text-violet-700 dark:text-violet-400 dark:bg-gray-900"
      aria-label="submenu">
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/setting-homepage">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-house-gear-fill" viewBox="0 0 16 16">
         <path
          d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5Z" />
         <path
          d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.504 1.504 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03Z" />
         <path
          d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z" />
        </svg>
        <span class="ml-2">Home Page</span>
       </a>
      </li>
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/profile-page">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-body-text" viewBox="0 0 16 16">
         <path fill-rule="evenodd"
          d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5m0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
        </svg>
        <span class="ml-2">Profile Page</span>
       </a>
      </li>
      <li class="px-2 py-1 transition-colors duration-150 hover:text-violet-400 dark:hover:text-violet-700">
       <a class="inline-flex w-full items-center" href="/program-page">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
         class="bi bi-body-text" viewBox="0 0 16 16">
         <path fill-rule="evenodd"
          d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5m0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
        </svg>
        <span class="ml-2">Program Page</span>
       </a>
      </li>
     </ul>
    </div>
   </li>
  </ul> -->
  </div>
  <div class="px-6 my-6">
    <a href="/register" class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-violet-600 border border-transparent rounded-lg active:bg-violet-600 hover:bg-violet-700 focus:outline-none focus:shadow-outline-violet">
      Add Admin
      <span class="ml-2" aria-hidden="true">+</span>
    </a>
  </div>
</div>
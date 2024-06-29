<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
  /**
   * Log the current user out of the application.
   */
  public function logout(Logout $logout): void
  {
    $logout();

    $this->redirect('/', navigate: true);
  }
}; ?>
<div>
 <header class=" z-10 py-4 bg-white shadow-md dark:bg-gray-800" x-data="animasiHeader()" x-init="cekAnimasiHeader"
  :class="{'top-down': runAnimasi}">
  <div
   class="md:container flex items-center justify-end h-full px-3 md:px-6 md:mx-auto text-violet-600 dark:text-violet-300">

   <!-- Desktop Menu Arrow -->
   <button class="hidden md:block rounded-md focus:outline-none" aria-label="Menu" @click="toggleDesktopMenu">
    <svg x-show="HideMenu" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
     class="w-7 h-7 bi bi-text-indent-right" viewBox="0 0 16 16">
     <path
      d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm10.646 2.146a.5.5 0 0 1 .708.708L11.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zM2 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
    </svg>
    <svg x-show="!HideMenu" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
     class="w-7 h-7 bi bi-text-indent-left" viewBox="0 0 16 16">
     <path
      d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
    </svg>
   </button>



   <!-- Mobile hamburger -->
   <button
    class="p-1 rounded-md md:hidden lg:hidden xl:hidden 2xl:hidden focus:outline-none focus:shadow-outline-violet"
    @click="toggleMobileMenu" aria-label="Menu">
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
     <path fill-rule="evenodd"
      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
      clip-rule="evenodd"></path>
    </svg>
   </button>

   <div class="flex justify-center items-center w-full mx-1 md:mx-6">
    <div class=" text-violet-500 dark:focus-within dark:text-violet-300">
     <h2 class="font-sacramento text-2xl md:text-3xl font-semibold">Undanganta</h2>
    </div>
   </div>

   <ul class="pl-4 flex items-center justify-center flex-shrink-0 space-x-5 md:space-x-4 lg:space-x-8">
    <!-- Notifications menu -->
    <!-- Button menu Notification -->
    <li class="relative" x-data="{ openNotificationsMenu: false }">
     <button class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-violet"
      @click="openNotificationsMenu = ! openNotificationsMenu " @keydown.escape="openNotificationsMenu = false"
      @click.outside="openNotificationsMenu = false" aria-label="Notifications" aria-haspopup="true">
      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
       <path
        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
       </path>
      </svg>
      <!-- Notification badge -->
      <span aria-hidden="true"
       class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
     </button>
     <!-- menu Notification -->
     <div x-show="openNotificationsMenu" x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-95" style="display: none;">
      <div class="relative rounded-md ring-1 ring-black ring-opacity-5">
       <ul
        class="absolute right-0 -top-6 w-40 md:w-56 p-2 mt-8 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">
        <li class="flex">
         <a
          class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
          href="#">
          <span>Messages</span>
          <span
           class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
           0
          </span>
         </a>
        </li>
        <li class="flex">
         <a
          class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
          href="#">
          <span>Info</span>
          <span
           class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
           0
          </span>
         </a>
        </li>
       </ul>
      </div>
     </div>
     <!-- menu Notification end -->
    </li>
    <!-- Button menu Notification end -->
    <!-- Theme toggler -->
    <li class="flex">
     <button class="rounded-md focus:outline-none focus:shadow-outline-violet" @click="toggleTheme"
      aria-label="Toggle color mode">
      <template x-if="!dark">
       <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
       </svg>
      </template>
      <template x-if="dark">
       <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
         d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
         clip-rule="evenodd"></path>
       </svg>
      </template>
     </button>
    </li>
    <!-- User Name -->
    <li class="hidden md:block">
     <div class="flex justify-start">{{ Auth::user()->name }}</div>
    </li>
    <!-- User Name end -->
    <div class="relative" x-data="{ openMenuProfile: false }" @click.outside="openMenuProfile = false"
     @close.stop="openMenuProfile = false">
     <div @click="openMenuProfile = ! openMenuProfile">
      <button
       class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md">
       <img class="object-cover aspect-auto w-8 h-8 rounded-full" src="{{auth()->user()->getAvatar()}}" alt="Avatar"
        aria-hidden="true" aria-label="Profile" />
      </button>
     </div>
     <div x-show="openMenuProfile" x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-95" class="absolute z-50 mt-2 rounded-md shadow-lg"
      style="display: none;">
      <div class="relative rounded-md ring-1 ring-black ring-opacity-5">
       <ul
        class="absolute -right-10 -top-3 w-40 md:w-56 p-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
        aria-label="submenu">
        <li class="flex">
         <a href="{{ route('profile') }}" wire:navigate class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150
          rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
          <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
           stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
           <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
          </svg>
          <span>Profile</span>
         </a>
        </li>
        <li class="flex">
         <button wire:click="logout"
          class="flex items-center px-2 py-1 text-sm font-medium leading-5 transition-colors duration-150 border border-transparent rounded-lg hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200 focus:outline-none w-full ">
          <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
           stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
           <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
           </path>
          </svg>
          <span class="flex justify-start">Log out</span>
         </button>
        </li>
       </ul>
      </div>
     </div>
    </div>
   </ul>
  </div>
 </header>
</div>
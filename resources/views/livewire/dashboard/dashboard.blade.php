<x-slot name="title">
  {{ __('Dashboard') }}
</x-slot>
<div class="md:container px-6 py-2 sm:px-3 mx-auto grid">
  <!-- CTA -->
  <div class="top-down flex items-center justify-between py-2 mb-2 text-sm font-semibold text-white bg-violet-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-violet">
    <div class="flex items-center px-4">
      <span class="text-lg font-semibold">Dashboard</span>
    </div>
  </div>


  <!-- Start Cards -->
  <div class="grid gap-6 mb-8 md:grid-cols-2 lg:md:grid-cols-4 grid-cols-1">
    <!-- Card -->
    <div class="zoom-in-1 flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-rose-500 bg-rose-200 rounded-full dark:text-rose-100 dark:bg-rose-500">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
          <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
        </svg>
      </div>
      <div>
        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
          Total Tamu
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $tamuCount }}
        </p>
      </div>
    </div>
    <!-- Card -->
    <div class="zoom-in-1 flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-green-600 bg-green-200 rounded-full dark:text-green-100 dark:bg-green-600">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
          <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
          <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
        </svg>
      </div>
      <div>
        <p class="mb-2 text-lg font-medium text-gray-600 dark:text-gray-400">
          Total Reservasi
        </p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $rsvpCount }}
        </p>
      </div>
    </div>
    <!-- Card -->

  </div>
</div>
<!-- Start Cards -->
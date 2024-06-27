<!-- Mobile sidebar -->
<!-- Backdrop -->
<div class="md:hidden" :class="{ 'hidden': ! menuMobileOpen }">
 <div x-show="menuMobileOpen" x-transition:enter="transition ease-out duration-50" x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-50"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
 </div>
 <!-- Backdrop End -->
 <aside id="scrolbar-none"
  class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-900 rounded-tr-lg"
  x-show="menuMobileOpen" x-transition:enter="transition ease-out duration-300"
  x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100 scale-100"
  x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 transform -translate-x-20"
  @click.away="closeMenuMobile" @keydown.escape="closeMenuMobile">
  <x-lists-menu />
 </aside>
</div>
<!-- Mobile sidebar End -->
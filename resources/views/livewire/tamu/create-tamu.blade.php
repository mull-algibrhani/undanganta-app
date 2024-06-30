<x-slot name="title">
  {{ __('Tambah tamu') }}
</x-slot>
<div class="md:container px-6 py-2 sm:px-3 mx-auto grid">
  <!-- CTA -->
  <div class="top-down flex items-center justify-between py-2 mb-2 text-sm font-semibold text-white bg-violet-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-violet">
    <div class="flex items-center px-4">
      <span class="text-lg font-semibold">Tambah Tamu</span>
    </div>
  </div>
  <div class="bottom-up">
    <div class="bg-gray-300 dark:bg-gray-800 overflow-hidden shadow-xl rounded-lg px-4 py-4">

      <div class="">
        <form wire:submit.prevent="create" class="max-w-md mx-auto bg-gray-200 dark:bg-gray-900 py-5 px-5 rounded-lg shadow-md">
          <div class="relative z-0 w-full mb-5 group">
            <label for="underline_select" class="sr-only">Underline select</label>
            <select wire:model="sapaan" id="underline_select" class="block text-gray-900 py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
              <option class="text-gray-500 bg-gray-200 dark:bg-gray-700" selected>Sapaan kerabat</option>
              <option class="bg-gray-200 dark:bg-gray-700" value="Bapak">Bapak</option>
              <option class="bg-gray-200 dark:bg-gray-700" value="Ibu">Ibu</option>
              <option class="bg-gray-200 dark:bg-gray-700" value="Saudara">Saudara</option>
              <option class="bg-gray-200 dark:bg-gray-700" value="Saudari">Saudari</option>
              <option class="bg-gray-200 dark:bg-gray-700" value="kakak">Kakak</option>
              <option class="bg-gray-200 dark:bg-gray-700" value="Adik">Adik</option>
              <option class="bg-gray-200 dark:bg-gray-700" value="Kakanda">Kakanda</option>
              <option class="bg-gray-200 dark:bg-gray-700" value="Adinda">Adinda</option>
              <option class="bg-gray-200 dark:bg-gray-700" value="Keluarga Besar">Keluarga Besar</option>
            </select>
            @error('sapaan')
            <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>
          <div class="relative z-0 w-full mb-5 group">
            <input wire:model="nama" type="text" id="floating_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-violet-500 focus:outline-none focus:ring-0 focus:border-violet-600 peer" placeholder=" " />
            <label for="floating_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-violet-600 peer-focus:dark:text-violet-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
            @error('nama')
            <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="relative z-0 w-full mb-5 group">
            <input wire:model="alamat" type="text" id="floating_alamat" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-violet-500 focus:outline-none focus:ring-0 focus:border-violet-600 peer" placeholder=" " />
            <label for="floating_alamat" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-violet-600 peer-focus:dark:text-violet-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
            @error('alamat')
            <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <div class="flex justify-center">
            <button type="submit" class="w-1/2 md:w-2/3 text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Save</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
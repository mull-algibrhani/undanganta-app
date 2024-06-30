<x-slot name="title">
 {{ __('Daftar Tamu') }}
</x-slot>
<div class="md:container px-6 py-2 sm:px-3 mx-auto grid">
 <!-- CTA -->
 <a
  class="top-down flex items-center justify-between py-2 mb-2 text-sm font-semibold text-white bg-violet-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-violet"
  href="/daftar-tamu" wire:navigate>
  <div class="flex items-center px-4">
   <span class="text-lg font-semibold">Daftar Tamu</span>
  </div>
 </a>
 <div class="bottom-up">
  <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl rounded-lg">
   <div class="grid grid-cols-2">
    <div class="flex justify-start">
     <div class="relative w-full lg:w-3/4 my-2 px-2">
      <input wire:model.live="search" type="text" placeholder="Search"
       class="transition-color block w-full max-w-[16rem] rounded-[10px] border-1 border-violet-600 dark:border-none dark:bg-gray-900 py-2 pl-10 pr-4 text-sm text-gray-800 dark:text-gray-300 placeholder-gray-500 outline-none focus-visible:ring-1 focus-visible:ring-violet-500 sm:max-w-none">
      <div class="pointer-events-none absolute inset-0 left-4 flex items-center" aria-hidden="true">
       <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-4 w-4 text-gray-500" viewBox="0 0 16 16">
        <path
         d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
       </svg>
      </div>
     </div>
    </div>
    <div class="flex justify-end">
     <a wire:navigate href="/tambah-tamu"
      class="bg-violet-600 inline-flex my-2 mr-2 px-2 py-2 text-sm font-medium leading-5 text-white rounded-lg focus:outline-none"
      aria-label="Delete">
      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
       <path fill-rule="evenodd"
        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
        clip-rule="evenodd"></path>
      </svg>
      <span class=" ml-1">Tambah Tamu</span>
     </a>
    </div>
   </div>
   <div class="mx-auto py-1 sm:py-4 sm:px-4 lg:px-8">
    <div class="grid grid-cols-1 gap-6">
     <!-- New Table -->
     <div class="bottom-up w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
       @if($datatamu->count() > 0)
       <table class="w-full whitespace-no-wrap">
        <thead>
         <tr
          class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3"></th>
          <th class="px-4 py-3">Nama</th>
          <th class="px-4 py-3">Alamat</th>
          <th class="px-4 py-3">link</th>
          <th class="px-4 py-3">Action</th>
         </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
         @foreach($datatamu as $index => $item)
         <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
           <div class="flex items-center text-sm">
            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
             <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
            </div>
            <div>
             <p class="font-semibold">{{ ($datatamu->currentPage() - 1) * $datatamu->perPage() + $index + 1 }}</p>
            </div>
           </div>
          </td>
          <td class="px-4 py-3 text-xs">
           <div class="flex items-center text-sm sm:text-xs">
            <div>
             <p class="font-semibold">{{$item->nama}}</p>
            </div>
           </div>
          </td>
          <td class="px-4 py-3 text-xs">
           <div class="flex items-center text-sm sm:text-xs">
            <div>
             <p class="font-semibold">
              {{$item->alamat}}
             </p>
            </div>
           </div>
          </td>
          <td class="px-4 py-3 text-sm sm:text-xs">
           https://www.undanganta.online/dari-adi-saputra-dan-rismawati/kepada-yth-{{$item->slug}}
          </td>
          <td class="px-4 py-3 text-xs">
           <div class="flex items-center space-x-3">
            <div class="relative">
             <button
              onclick="copyToClipboard('https://www.undanganta.online/dari-adi-saputra-dan-rismawati/kepada-yth-{{$item->slug}}')"
              class="flex items-center justify-between px-2 py-1 font-medium leading-5 text-white transition-colors duration-150 bg-sky-500 border border-transparent rounded-lg active:bg-sky-600 hover:bg-sky-600 focus:outline-none focus:shadow-outline-sky">
              <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
               <path fill-rule="evenodd"
                d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
              </svg>
              <span>Copy</span>
             </button>
            </div>

            <a href="/dari-adi-saputra-dan-rismawati/kepada-yth-{{$item->slug}}" target="_blank"
             class="flex items-center justify-between px-2 py-1 font-medium leading-5 text-white transition-colors duration-150 bg-violet-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
             <svg class="w-3 h-3 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
              <path fill-rule="evenodd"
               d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
               clip-rule="evenodd" />
             </svg>
             <span>View</span>
            </a>
            <a wire:navigate href="/edit-tamu/{{$item->id}}"
             class="flex items-center justify-between px-2 py-1 font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-700 hover:bg-green-700 focus:outline-none focus:shadow-outline-yellow">
             <svg class="w-3 h-3 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path
               d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
              </path>
             </svg>
             <span>Edit</span>
            </a>
            <button wire:click="delete({{$item->id}})" wire:confirm="Apakah kamu yakin menghapus data ini?"
             partner-id="id"
             class="confirdeletepartner flex items-center justify-between px-2 py-1 font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
             <svg class="w-3 h-3 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
               d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
               clip-rule="evenodd"></path>
             </svg>
             <span>Delete</span>
            </button>
           </div>
          </td>
         </tr>
         @endforeach
        </tbody>
       </table>
       {{ $datatamu->links() }}
       @else
       <div class="flex justify-center py-4 text-gray-500 dark:text-gray-400">
        <p>Daftar tamu tidak ditemukan.</p>
       </div>
       @endif
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- Toaster start -->
 <div x-data="{ alert: false, message: '' }"
  @toast-message.window="message = $event.detail.message; alert = true; setTimeout(() => alert = false, 3000)">
  <div id="toast-success" x-show="alert" x-transition:enter="transition ease-out delay-100 duration-300"
   x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
   x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
   x-transition:leave-end="opacity-0 scale-90"
   class="fixed right-0 bottom-0 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
   role="alert">
   <div
    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
     <path
      d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
    </svg>
    <span class="sr-only">Check icon</span>
   </div>
   <div class="ml-3 text-sm font-normal" x-text="message"></div>
   <button @click="alert = false" type="button"
    class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
    aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
    </svg>
   </button>
  </div>
 </div>
 <!-- Toaster end -->
</div>


<script>
function copyToClipboard(text) {
 if (navigator.clipboard && navigator.clipboard.writeText) {
  navigator.clipboard.writeText(text).then(function() {
   window.dispatchEvent(new CustomEvent('toast-message', {
    detail: {
     message: 'Alamat berhasil disalin ke clipboard!'
    }
   }));
  }).catch(function(error) {
   console.error('Gagal menyalin teks ke clipboard: ', error);
  });
 } else {
  // Fallback method
  var textArea = document.createElement("textarea");
  textArea.value = text;
  textArea.style.position = "fixed"; // Prevent scrolling to bottom of page in MS Edge.
  document.body.appendChild(textArea);
  textArea.focus();
  textArea.select();
  try {
   var successful = document.execCommand('copy');
   if (successful) {
    window.dispatchEvent(new CustomEvent('toast-message', {
     detail: {
      message: 'Alamat berhasil disalin ke clipboard!'
     }
    }));
   } else {
    console.error('Gagal menyalin teks ke clipboard');
   }
  } catch (err) {
   console.error('Gagal menyalin teks ke clipboard: ', err);
  }
  document.body.removeChild(textArea);
 }
}
</script>
<!-- <script>
//confirm delete
window.$('.confirdeletepartner').click(function() {
 var partner_id = $(this).attr('partner-id');
 Swal.fire({
   title: 'Communities delete ?',
   text: "Communities will be deleted permanently",
   icon: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#d33',
   cancelButtonColor: '#7E3AF2',
   confirmButtonText: 'Yes, delete!',
   cancelButtonText: 'Cancel',
  })
  .then((result) => {
   if (result.isConfirmed) {
    window.location = "/communities/delete/" + partner_id;
   }
  });
});
//end confirm delete
</script> -->
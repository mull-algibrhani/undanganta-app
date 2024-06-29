<x-slot name="title">
 {{ __('Daftar reservasi') }}
</x-slot>
<div class="md:container px-6 py-2 sm:px-3 mx-auto grid">
 <!-- CTA -->
 <a
  class="top-down flex items-center justify-between py-2 mb-2 text-sm font-semibold text-white bg-violet-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-violet"
  href="/daftar-tamu" wire:navigate>
  <div class="flex items-center px-4">
   <span class="text-lg font-semibold">Daftar Reservasi</span>
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
    <!-- <div class="flex justify-end">
          <a wire:navigate href="/tambah-tamu" class="bg-violet-600 inline-flex my-2 mr-2 px-2 py-2 text-sm font-medium leading-5 text-white rounded-lg focus:outline-none" aria-label="Delete">
            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
            </svg>
            <span class=" ml-1">Tambah Tamu</span>
          </a>
        </div> -->
   </div>
   <div class="mx-auto py-1 sm:py-4 sm:px-4 lg:px-8">
    <div class="grid grid-cols-1 gap-6">
     <!-- New Table -->
     <div class="bottom-up w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
       @if($datareservasi->count() > 0)
       <table class="w-full whitespace-no-wrap">
        <thead>
         <tr
          class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
          <th class="px-4 py-3"></th>
          <th class="px-4 py-3">Nama</th>
          <th class="px-4 py-3">Alamat</th>
          <th class="px-4 py-3">Status</th>
          <th class="px-4 py-3">Action</th>
         </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
         <?php $no = 1; ?>
         @foreach($datareservasi as $tamu)
         <tr class="text-gray-700 dark:text-gray-400">
          <td class="px-4 py-3">
           <div class="flex items-center text-sm">
            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
             <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
            </div>
            <div>
             <p class="font-semibold">{{$no}}</p>
            </div>
           </div>
          </td>
          <td class="px-4 py-3 text-xs">
           <div class="flex items-center text-sm sm:text-xs">
            <div>
             <p class="font-semibold">{{$tamu->nama}}</p>
            </div>
           </div>
          </td>
          <td class="px-4 py-3 text-xs">
           <div class="flex items-center text-sm sm:text-xs">
            <div>
             <p class="font-semibold">
              {{$tamu->alamat}}
             </p>
            </div>
           </div>
          </td>
          <td class="px-4 py-3 text-xs">
           <div class="flex items-center text-sm sm:text-xs">
            <div>
             <p class="font-semibold">
              {{$tamu->status}}
             </p>
            </div>
           </div>
          </td>
          <td class="px-4 py-3 text-xs">
           <div class="flex items-center space-x-3">
            <button wire:click="delete({{$tamu->id}})" wire:confirm="Apakah kamu yakin menghapus data ini?"
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
         <?php $no++; ?>
         @endforeach
        </tbody>
       </table>
       @else
       <div class="flex justify-center py-4 text-gray-500 dark:text-gray-400">
        <p>Daftar reservasi tidak ditemukan.</p>
       </div>
       @endif
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

<!-- <script>
  function tableCopy() {
    return {
      copied: false,
      copiedText: '',
      async copy(text) {
        try {
          await navigator.clipboard.writeText(text);
          this.copied = true;
          this.copiedText = text;
          setTimeout(() => {
            this.copied = false;
            this.copiedText = '';
          }, 2000); // Reset after 2 seconds
        } catch (err) {
          console.error('Failed to copy: ', err);
        }
      }
    }
  }
</script> -->
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
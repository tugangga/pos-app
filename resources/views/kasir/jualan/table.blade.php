<table class="table-auto w-full text-sm/normal text-left">
            <thead class="sticky top-0 z-10 bg-gray-200">
              <tr>
                <th class="px-5 py-2 font-medium ">Kode</th>
                <th class="px-5 py-2 font-medium ">Barang</th>
                <th class="px-2 py-2 font-medium text-right">Harga</th>
                <th class="px-2 py-2 font-medium text-right">Qty</th>
                <th class="px-5 py-2 font-medium text-right">Total</th>
                <th class="px-5 py-2 font-medium text-right"></th>
              </tr>
            </thead>
            <tbody>
             
              @foreach ( $keranjangs as $keranjang )
              <tr class="odd:bg-white even:bg-slate-100">
                <td class="pl-5 py-2 font-light align-top">
                  {{-- <div class=" ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                      </svg>
                  </div> --}}
                    {{ $keranjang->kode }}
                </td>
                <td class="px-2 py-2 font-light align-top">
                      {{ ucwords(strtolower($keranjang->namabrg)) }}
                </td>
                <td class="px-2 py-2 font-light text-right align-top">
                  <div class="ps-4">
                     {{ number_format($keranjang->hjual,0,',','.') }}
                  </div>
                  {{-- <div class="ps-4 font-light ">
                    {{ number_format($keranjang->qty,0,',','.') }}
                  </div> --}}
                </td>
                <td class="px-5 py-2 font-light text-right content-start">{{ number_format($keranjang->qty,0,',','.') }}</td>
                <td class="px-5 py-2 font-normal text-right content-start">{{ number_format($keranjang->total,0,',','.') }}</td>
                <td class="px-2 py-2 font-light flex ">
                      
                      <form action="{{ route('hapus.keranjang',$keranjang->id) }}" method="POST" x-data 
                          @submit.prevent="
                              Swal.fire({
                                  title: 'Apakah Anda yakin?',
                                  text: 'Data yang dihapus tidak bisa dikembalikan!',
                                  icon: 'warning',
                                  showCancelButton: true,
                                  confirmButtonColor: '#d33',
                                  cancelButtonColor: '#3085d6',
                                  confirmButtonText: 'Ya, hapus!',
                                  cancelButtonText: 'Batal'
                              }).then((result) => {
                                  if (result.isConfirmed) {
                                      $el.submit(); // Mengirim form jika dikonfirmasi
                                  }
                              })
                          ">
                          @method('DELETE')
                          @csrf
                          <button type="submit" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="cursor-pointer size-6 inline text-red-800 stroke-[1.5] items-start" >
                              <path strokeLinecap="round" strokeLinejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                          </svg></button>

                      </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
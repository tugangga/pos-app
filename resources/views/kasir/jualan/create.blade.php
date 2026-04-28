<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    @vite('resources/css/app.css')
    
    <script
      src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1"
      type="module"
    ></script>
   
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Kasir</title>
</head>
<body>
<header class="bg-slate-200 flex py-4 px-3 ">
  <nav aria-label="Global" class="flex items-center">
    <div class="flex ">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="cursor-pointer -m-2.5 inline-flex items-center justify-center rounded-md p-4 lg:px-6 text-gray-700 ">
        <span class="sr-only">Open main menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 ">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
  </nav>
     

  <el-dialog>
    <dialog id="mobile-menu" class="backdrop:bg-transparent transition ">
      <div tabindex="0" class="fixed inset-0 focus:outline-none">
        <el-dialog-panel class="fixed inset-y-0 left-0 z-50 w-full overflow-y-auto bg-slate-200 p-6 sm:max-w-sm sm:ring-1 sm:ring-indigo-800/10">
          <div class="flex items-center justify-between">
            
            <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Close menu</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 ">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <div class="-mx-3">
                  <button type="button" command="--toggle" commandfor="products" class="flex w-full items-center justify-between  rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold  hover:bg-slate-100">
                    Product
                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none in-aria-expanded:rotate-180">
                      <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                  </button>
                  <el-disclosure id="products" hidden class="mt-2 block space-y-2">
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7  font-semibold  hover:bg-slate-100">x demo</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7  font-semibold  hover:bg-slate-100">x demo</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7  font-semibold  hover:bg-slate-100">x demo</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7  font-semibold  hover:bg-slate-100">x demo</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7  font-semibold  hover:bg-slate-100">x demo</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7  font-semibold  hover:bg-slate-100">x demo</a>
                    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7  font-semibold  hover:bg-slate-100">x demo</a>
                  </el-disclosure>
                </div>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold  hover:bg-slate-100">x demo</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold  hover:bg-slate-100">x demo</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold  hover:bg-slate-100">x demo</a>
              </div>
              <div class="py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold  hover:bg-slate-100">Log out</a>
              </div>
            </div>
          </div>
        </el-dialog-panel>
      </div>
    </dialog>
  </el-dialog>

  <div class="flex justify-between w-full grow ">
    <div class="flex gap-2">
      <a href="/produk" class="btn-red">Tutup Kasir</a>
      <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
        <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>
        </div>
        <input type="text" name="kode" placeholder="Cari Kode/Barcode/Nama" class="block min-w-0 w-64 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
      </div>
    </div>

    <div class="flex ">
      <div class="relative pr-5">
        @if (count($keranjangs)=== 0)
          <img src="{{ asset('images/shopping-cart-remove-svgrepo-com.svg') }}" alt="shopping cart" class="size-9">
        @else
          <span class="absolute -top-2 right-2 inline-flex items-center rounded-2xl bg-green-600 px-2 py-1 text-[10px] font-mono text-white inset-ring inset-ring-green-600/20">{{ $totalItems }}</span>
          <img src="{{ asset('images/shopping-cart-svgrepo-com.svg') }}" alt="shopping cart" class="size-9 ">
        @endif
      </div>
      <button class="cursor-pointer hover:rounded-md hover:bg-gray-300 p-2 ">
        <img src="{{ asset('images/list-svgrepo-com.svg') }}" alt="list" class="size-6">
      </button>
    </div>
    
  </div>
</header>

<main>
  <div class="grid grid-cols-10" >
    {{-- left side --}}
    <div class="col-span-5 w-full min-h-full bg-gray-100" style="background-image: url({{ asset('images/double-bubble.png') }});" > 

      <div class="grid grid-cols-3 gap-2 p-4  h-[calc(100vh-70px)] overflow-y-scroll  ">
        
          @foreach ($produks as $produk)
          <div class="relative bg-white grow outline-1 outline-gray-200 rounded-lg shadow-lg mb-2  " x-data="{count:1}">
            <form action="/kasir/keranjang" method="post" >
              @csrf
              <input type="hidden" name="kode" value="{{ $produk->kode }}">
              <input type="hidden" name="qty" id="" x-model="count">
              <button type="submit" href="" class="w-full text-left cursor-pointer">
                <div class="">
                  <div class="flex justify-center">
                    <img src="{{ asset('storage/images/produk/'.$produk->gambar) }}"  alt="sepatu" class="aspect-square object-center" >
                  </div>
                  <div class="text-xs px-4 pt-4 pb-1 text-green-600">{{ $produk->kode }}</div>
                  <div class="text-xs px-4 pb-1 font-light md:font-normal md:text-sm  ">{{ ucwords(strtolower($produk->namabrg)) }}</div>
                  <div class="px-4 pb-14 text-blue-500 ">Rp. {{ number_format($produk->hjual,0,',','.') }}</div>
                </div>
              </button>
            </form>
            <div class="absolute bg-gray-100 h-12 p-2 w-full bottom-0 right-0 rounded-b-lg"> 
              {{-- <div class="  "> --}}
                <div class="flex justify-between " >
                  <button class=" p-1 text-xl/2 cursor-pointer" @click="count=1">
                    <img src="{{ asset('images/reset-svgrepo-com.svg') }}" alt="reset" class="size-6">
                  </button>
                  <div class="flex justify-end w-full h-full gap-1">
                    <button class="rounded-full  bg-white outline outline-gray-300 p-1 text-xl/2 cursor-pointer" @click="(count<=12)?count:count-=12">
                      <img src="{{ asset('images/box-minimalistic-svgrepo-com.svg') }}" alt="box min" class="size-6">
                    </button>
                    <button class="rounded-full bg-white outline outline-gray-300 p-1 text-xl/2 cursor-pointer" @click="(count<=1)?count=1:count--">
                      <img src="{{ asset('images/minus-svgrepo-com.svg') }}" alt="minus" class="size-6">
                    </button>
                    <input type="text" class="block w-10 min-h-0 bg-white rounded-md text-center text-base  outline outline-gray-300 sm:text-sm/6"  x-model="count">
                    <button class="rounded-full bg-white outline outline-gray-300 p-1 text-xl/2 cursor-pointer" @click="count++">
                      <img src="{{ asset('images/plus-svgrepo-com.svg') }}" alt="plus" class="size-6">
                    </button>
                    <button class="rounded-full bg-white outline outline-gray-300 p-1 text-xl/2 cursor-pointer" @click="(count==1)?count=12:count+=12">
                      <img src="{{ asset('images/box-minimalistic-svgrepo-com.svg') }}" alt="box plus" class="size-6">
                    </button>
                  </div>
                </div>
              {{-- </div> --}}
            </div>

          </div>
          @endforeach
          
      </div>
    </div>
    {{-- end of left side --}}
    
    
    {{-- right side --}}
    <div class="col-span-5 p-2 grid h-[calc(100vh-72px)] grid-rows-[46px_1fr_54px_72px] border border-gray-200" x-data="{totalHarga:@js($totalHarga)}">
      <div class="">
        <form action="/kasir/keranjang" method="post" >
          @csrf
          <div class="flex space-x-1 mb-2 ">
            <div class="">
              <div class="flex items-center rounded-sm bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">Qty</div>
                <input id="qty" type="text" name="qty" value="1" class="block min-w-0 w-16 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
              </div>
              @error('qty')
              <div class="text-xs text-red-900 font-light">{{ $message }}</div>
              @enderror
            </div>
            <div class="">
              <div class="flex items-center rounded-sm bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                {{-- <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">Kode/Barcode:</div> --}}
                <img src="{{ asset('images/barcode-2-svgrepo-com.svg') }}" alt="barcode" class="size-8">
                <input id="kode" type="text" name="kode" 
                class="block w-64 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Input kode/barcode" autofocus />
              </div>
              @error('kode')
              <div class="text-xs text-red-900 font-light">{{ $message }}</div>
              @enderror
            </div>

            <div class="">
              <button type="submit" class="btn-white">Add</button>
            </div>
          </div>
        </form>
      </div>

      {{-- container luar table --}}
      <div class="">
        @if (count($keranjangs)=== 0)
        <div class="grid place-items-center h-full">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-1/2 block mx-auto">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
            <div class="text-center font-semibold pt-2">Keranjang belanja kosong</div>
            <div class="text-center font-light pt-1">Silahkan masukkan produk terlebih dahulu</div>
          </div>
        </div>
        @else
        <div class="relative h-full overflow-x-auto overflow-y-auto bg-white border border-gray-200/20">
          
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
              
              {{-- <tr class="border-b border-gray-400/20 bg-white"> --}}
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
                      {{-- <a href="/produk/{{ $produk->kode }}/edit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6"  class="size-6 inline text-green-800 stroke-[]1.5]">
                            <path strokeLinecap="round" strokeLinejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                      </a> --}}

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

        </div>
        @endif
      </div>
      {{-- end of container luar table --}}


      <div class="bg-slate-200 flex justify-center items-center font-bold text-3xl">
        Rp {{ number_format($totalHarga,0,',','.') }}
      </div>
      <div class=" flex gap-1 pt-1">
          <button class="cursor-pointer rounded-xs w-1/3 bg-white px-3 py-2 text-base font-normal text-red-700 shadow-xs border border-red-700 hover:bg-red-500 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600" tabindex="-1">Batal</button>
          <button class="cursor-pointer rounded-xs w-1/3 bg-orange-400 px-3 py-2 text-base font-normal text-white shadow-xs   hover:bg-orange-300 hover:text-orange-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-100" tabindex="-1">Simpan</button>


          <button command="show-modal" commandfor="dialog" class="cursor-pointer rounded-xs w-full bg-green-700 px-3 py-2 text-base font-normal text-white shadow-xs hover:bg-green-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700">Bayar</button>
        
          <el-dialog>
            <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent ">
              <el-dialog-backdrop class="fixed inset-0 bg-gray-700/90 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

              <div tabindex="0" class="  flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
                <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                  {{-- <h3 class="p-4 font-semibold ">BAYAR</h3> --}}
                  <form action="{{ route('kasir.bayar') }}" method="post"  >
                    @csrf
                      
                    <div class="bg-gray-100 p-4 text-4xl font-semibold text-center text-green-900"> Rp. <span class="" x-text="Number(totalHarga).toLocaleString('id-ID')"></span></div>
                    <input type="hidden" name="total" :value="totalHarga">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4" x-data="{tipe:'cash', rpBayar:'', kembalian:0}">
                      <div class="grid grid-cols-6">
                        <label for="bayar" class="col-span-2">Bayar </label>
                        <input type="text" name="bayar" id="bayar" class="input-form-control col-span-4" autofocus x-model="rpBayar">
                      </div>
                      <div class="grid grid-cols-6 mt-2">
                          <label for="tipebayar" class="col-span-2">Tipe Bayar </label>
                          <div class="grid grid-cols-1 col-span-4" >
                            <select x-model="tipe"  class="select-form-control" name="tipebayar" id="tipebayar">
                                <option value="cash" selected>Cash</option>
                                <option value="qris">QRIS</option>
                                <option value="debit">Debit Card</option>
                                <option value="kredit">Kredit Card</option>
                            </select>
                            <svg
                                viewBox="0 0 16 16"
                                fill="currentColor"
                                data-slot="icon"
                                aria-hidden="true"
                                class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                            >
                                <path
                                d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"
                                />
                            </svg>
                          </div>
                      </div>
                      <div class="grid grid-cols-6 mt-2" x-show="tipe !== 'cash'" x-cloak>
                        <label for="bank" class="col-span-2">Pilih Bank</label>
                        <div class="grid grid-cols-1 col-span-4" >
                          <select name="bank" id="bank" class="select-form-control col-span-4">
                              <option value="bca">BCA</option>
                              <option value="mandiri">Mandiri</option>
                              <option value="bni">BNI</option>
                              <option value="bri">BRI</option>
                          </select>
                          <svg
                                viewBox="0 0 16 16"
                                fill="currentColor"
                                data-slot="icon"
                                aria-hidden="true"
                                class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                            >
                                <path
                                d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"
                                />
                            </svg>
                        </div>
                      </div>
                      <div class="grid grid-cols-6 mt-2" x-show="tipe == 'cash'">
                        <label for="kembali" class="col-span-2">Kembalian </label>
                        <input type="text" name="kembali" id="kembali" class="input-form-control col-span-4" readonly 
                        :value="Math.max(0, rpBayar - totalHarga).toLocaleString('id-ID')" >
                      </div>
                    </div>
                    <div class="sm:flex sm:flex-row-reverse mt-6 ">
                    
                        <button type="submit" command="close" commandfor="dialog" class="cursor-pointer inline-flex grow w-full justify-center  bg-green-700 px-3 py-4 text-md font-semibold text-white shadow-xs hover:bg-green-600  sm:w-auto">Proses</button>
                      
                      {{-- <div class="inline-flex grow w-full"> --}}
                        <button type="button" command="close" commandfor="dialog" class="mt-3 cursor-pointer inline-flex grow w-full justify-center   px-3 py-4 text-md font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Batal</button>
                      {{-- </div> --}}
                    </div>
                  </form>
                </el-dialog-panel>
              </div>
            </dialog>
          </el-dialog>
      </div>


    </div>
    {{-- end of right side --}}

  </div>
</main>

</body>
</html>
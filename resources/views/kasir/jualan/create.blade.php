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

    <title>Document</title>
</head>
<body>
<header class="bg-slate-200 flex py-4 px-3 ">
  <nav aria-label="Global" class="flex items-center">
    <div class="flex ">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-4 lg:px-6 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 ">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
  </nav>
  
    
    <div class=" ">
      <div class="flex gap-2">
        <a href="" class="btn-red">Tutup Kasir</a>
        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
          <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </div>
          <input type="text" name="kode" placeholder="Cari Kode/Barcode/Nama" class="block min-w-0 w-64 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
        </div>
      </div>
    </div>

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
</header>

<main>
  <div class="grid grid-cols-10" >
    {{-- left side --}}
    <div class="col-span-6 w-full min-h-full bg-gray-100" style="background-image: url({{ asset('storage/images/bg/moroccan-flower.png') }});" > 

      <div class="grid grid-cols-3 gap-2 p-4  h-[calc(100vh-102px)] overflow-y-scroll  ">
        
          @foreach ($produks as $produk)
          <div class="relative bg-white grow outline-1 outline-gray-200 rounded-lg shadow-lg mb-2  ">
            <form action="/kasir/keranjang" method="post" >
              @csrf
              <input type="hidden" name="kode" value="{{ $produk->kode }}">
              <button type="submit" href="" class="w-full text-left cursor-pointer">
                <div class="">
                  <div class="flex justify-center">
                    <img src="{{ asset('storage/images/produk/'.$produk->gambar) }}"  alt="sepatu" class="aspect-square object-center" >
                  </div>
                  <div class="text-xs px-4 pt-4 pb-1">{{ $produk->kode }}</div>
                  <div class="text-xs px-4 pb-1 font-light md:font-normal md:text-sm  ">{{ $produk->namabrg }}</div>
                  <div class="px-4 pb-14 text-blue-500 ">Rp. {{ number_format($produk->hjual,0,',','.') }}</div>
                </div>
              </button>
            </form>
            <div class="absolute bg-gray-800 h-12 p-4 w-full bottom-0 right-0 rounded-b-lg overflow-hidden "> 
              <div class=" absolute bottom-2 right-2 ">
                <div class="flex justify-end gap-4 " x-data="{count:0}">
                  <button class="rounded-full border border-white p-2 text-xl/2 text-white size-8 cursor-pointer" @click="(count==0)?0:count--">-</button>
                  <span class="block text-center text-xl/8 text-white " x-text="count" >0</span>
                  <button class="rounded-full border border-white p-2 text-xl/2 text-white size-8 cursor-pointer" @click="count++">+</button>
                </div>
              </div>
            </div>

          </div>
          @endforeach
          
      </div>
    </div>
    {{-- end of left side --}}
    
    
    {{-- right side --}}
    <div class="col-span-4 p-4 ">

      <form action="/kasir/keranjang" method="post">
        @csrf
        <div class="flex space-x-3 mb-2">
          <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">Kode/Barcode:</div>
            <input id="kode" type="text" name="kode" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" autofocus />
          </div>
          <div class="">
            <button type="submit" class="btn-primary">save</button>
          </div>
        </div>
      </form>


      {{-- container luar table --}}
      <div class="">

        @if (count($keranjangs)=== 0)
        <div class="grid-cols-1 pt-10">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-1/6 block mx-auto">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>
          <h4 class="text-center pt-4">Belum ada data di keranjang</h4>
          
        </div>
        @else
        <div class="relative max-h-102 overflow-x-auto overflow-y-auto bg-gray-300 shadow-md rounded-lg border border-gray-200/20">
          
          <table class="table-auto w-full text-sm/normal text-left">
            <thead class="sticky top-0 z-10 bg-gray-200">
              <tr>
                <th class="px-6 py-3 font-medium ">Barang</th>
                {{-- <th class="px-6 py-3 font-medium">Nama</th> --}}
                <th class="px-6 py-3 font-medium text-right">Harga</th>
                <th class="px-6 py-3 font-medium text-right">Qty</th>
                <th class="px-6 py-3 font-medium text-right">Total</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $keranjangs as $keranjang )
              
              <tr class="border-b border-gray-400/20 bg-white">
               
                <td class="px-6 py-3 font-light flex relative  ">
                  <span class="absolute items-center top-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                      </svg>
                  </span>
                  <div class="">
                    <div class="ps-4">
                      {{ $keranjang->kode }}
                    </div>
                    <div class="ps-4">
                      {{ $keranjang->namabrg }}
                    </div>
                  </div>
                </td>
                {{-- <td class="px-6 py-3 font-light ">{{ $keranjang->namabrg }}</td> --}}
                <td class="px-6 py-3 font-light text-right">{{ number_format($keranjang->hjual,0,',','.') }}</td>
                <td class="px-6 py-3 font-light text-right">{{ number_format($keranjang->qtyjual,0,',','.') }}</td>
                <td class="px-6 py-3 font-light text-right">{{ number_format($keranjang->total,0,',','.') }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
        @endif
      </div>
      {{-- end of container luar table --}}
    </div>
    {{-- end of right side --}}

  </div>
</main>


</body>
</html>
<x-admin.layout>
    <h1>home</h1>

     <!-- form -->
        {{-- <form>
          <!-- <div class="space-y-12"> -->
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">
              Data Produk Baru
            </h2>
            <p class="mt-1 text-sm/6 text-gray-600">
              Use a permanent address where you can receive mail.
            </p>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 md:grid-cols-6">
              <div class="">
                <label
                  for="kode"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Kode Barang</label
                >
                <div class="mt-2">
                  <input
                    id="kode"
                    type="text"
                    name="kode"
                    autocomplete=""
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  />
                </div>
              </div>

              <div class="md:col-span-2">
                <label
                  for="barang"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Nama Produk</label
                >
                <div class="mt-2">
                  <input
                    id="barang"
                    type="text"
                    name="barang"
                    autocomplete=""
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  />
                </div>
              </div>
              <div class="">
                <label
                  for="satuan"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Satuan</label
                >
                <div class="mt-2 grid grid-cols-1">
                  <select
                    id="satuan"
                    name="satuan"
                    autocomplete=""
                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  >
                    <option>PCS</option>
                    <option>PACK</option>
                    <option>DUS</option>
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
              <div class="">
                <label
                  for="kategori"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Kategori</label
                >
                <div class="mt-2">
                  <input
                    id="barang"
                    type="text"
                    name="barang"
                    autocomplete=""
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  />
                </div>
                <div class="mt-2 grid grid-cols-1">
                  <select
                    id="kategori"
                    name="kategori-option"
                    autocomplete=""
                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  >
                    <option>PILIH JIKA ADA</option>
                    <option>COKLAT</option>
                    <option>SNACK</option>
                    <option>BERAS</option>
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
              <div class="">
                <label
                  for="harga-beli"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Harga Beli</label
                >
                <div class="mt-2">
                  <input
                    id="harga-beli"
                    type="number"
                    name="harga-beli"
                    autocomplete=""
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  />
                </div>
              </div>
              <div class="">
                <label
                  for="harga-jual"
                  class="block text-sm/6 font-medium text-gray-900"
                  >Harga Jual</label
                >
                <div class="mt-2">
                  <input
                    id="harga-jual"
                    type="number"
                    name="harga-jual"
                    autocomplete=""
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </form> --}}
        <!-- end of form -->
</x-admin.layout>
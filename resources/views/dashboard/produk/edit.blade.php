<x-admin.layout>
   <div class="flex justify-between border-b border-gray-400/20 relative">
         <div class="mb-3">
            <h2 class="text-2xl font-semibold text-gray-900 ">
                Ubah Data 
            </h2>
            <p class="mt-1 text-sm/6 text-slate-400">
                Form untuk mengubah data produk 
            </p>
        </div>

        
    </div>
   
    <form method="POST" action="/produk/{{ $produk->id }}">
        @method('put')
        @csrf
        <!-- <div class="space-y-12"> -->
            <div class="border-b border-gray-900/10 pb-6 mb-4">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 md:grid-cols-6">
                    <div class="md:col-span-2 lg:col-span-1">
                        <label for="kode" class="block text-sm/6 font-medium text-gray-900" >Kode
                            <span class="hidden lg:block text-xs text-slate-400">Kode produk / barcode</span>
                        </label>
                        <div class="mt-2 ">
                            <input id="kode" type="text" name="kode"  value="{{ old('kode', $produk->kode) }}" class="input-form-control-disable" disabled  />
                        </div>
                        {{-- <div class="input-form-control">{{ old('kode', $produk->kode) }}</div> --}}
                        @error('kode')
                            <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="md:col-span-3">
                        <label for="barang" class="block text-sm/6 font-medium text-gray-900" >Nama
                            <span class="hidden lg:block text-xs text-slate-400">Nama produk</span>
                        </label>
                        <div class="mt-2">
                            <input id="barang" type="text" name="namabrg"  value="{{ old('namabrg', $produk->namabrg) }}" class="input-form-control uppercase" autofocus/>
                        </div>
                        @error('namabrg')
                            <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                        @enderror
                    </div>
               

                <div class="" >
                    <label for="satuan" class="block text-sm/6 font-medium text-gray-900">Satuan
                        <span class="hidden lg:block text-xs text-slate-400">Satuan produk</span>
                    </label>
                    <div class="mt-2">
                        <input id="satuan" type="text" name="satuan"  value="{{ old('satuan',  $produk->satuan) }}" class="input-form-control uppercase" />
                    </div>                   
                    <div class="text-xs text-green-900 font-light">pilih opsi jika ada</div>
                    @error('satuan')
                        <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror                                        
    
                    <div class="mt-2 grid grid-cols-1" >
                        <select  class="select-form-control" name="option_satuan">
                            <option value="0"  selected>Pilih...</option>
                            @foreach ($dataSatuans as $data)
                                <option value="{{ $data->satuan }}">{{ $data->satuan }}</option>
                            @endforeach
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

                <div class="" >
                    <label for="kategori"  class="block text-sm/6 font-medium text-gray-900" >Kategori
                        <span class="hidden lg:block text-xs text-slate-400">Kategori produk</span> 
                    </label>
                    <div class="mt-2">
                        <input id="kategori" type="text" name="kategori"   value="{{ old('kategori', $produk->kategori) }}" class="input-form-control uppercase" />
                    </div>

                    <div class="text-xs text-green-900 font-light">pilih opsi jika ada</div>
                    @error('kategori')
                        <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror    
                    
                    <div class="mt-2 grid grid-cols-1">
                    <select tabindex="-1" name="option_kategori"                                              
                        class="select-form-control"
                    >
                        <option value="0" selected>Pilih...</option>
                        @foreach ($dataKategoris as $data)
                            <option value="{{ $data->kategori }}">{{ $data->kategori }}</option>
                        @endforeach
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
                    <label for="harga_beli" class="block text-sm/6 font-medium text-gray-900">Rp. Beli
                        <span class="hidden lg:block text-xs text-slate-400">Harga beli produk</span>
                    </label >
                    <div class="mt-2">
                        <input id="harga_beli" type="number" name="hbeli"  value="{{ old('hbeli', $produk->hbeli) }}" class="input-form-control" />
                    </div>
                    @error('hbeli')
                        <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror    
                </div>
                <div class="">
                    <label for="harga_jual" class="block text-sm/6 font-medium text-gray-900" >Rp. Jual
                        <span class="hidden lg:block text-xs text-slate-400">Harga jual produk</span>
                    </label>
                    <div class="mt-2">
                        <input id="harga_jual" type="number" name="hjual"  value="{{ old('hjual', $produk->hjual) }}" class="input-form-control" />
                    </div>
                    @error('hbeli')
                        <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror
                </div>

                 <div class="">
                    <label for="re-stock" class="block text-sm/6 font-medium text-gray-900" >Qty RO-Stock
                        <span class="hidden lg:block text-xs text-slate-400">Qty min. untuk reorder stock</span>
                    </label>
                    <div class="mt-2">
                        <input id="re-stock" type="number" name="restock" value="{{ old('restock', $produk->restock) }}" class="input-form-control" />
                    </div>
                    @error('restock')
                        <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            {{-- quantity produk --}}
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 md:grid-cols-6">
                <div class="">
                    <label for="quantity_awal" class="block text-sm/6 font-medium text-gray-900" >Qty Stock
                        <span class="hidden lg:block text-xs text-slate-400">Jumlah Stock (Produk)</span>
                    </label>
                    <div class="mt-2">
                        <input id="quantity_awal" type="number" name="qawal" x-model.debounce="qawal" id="qawal"  value="{{ old('qawal',$produk->qawal) }}" class="input-form-control" />
                    </div>
                    @error('qawal')
                    <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            {{-- <div x-data="{
                qawal:0, 
                qbeli:0,
                qjual:0 , 
                get hitung(){
                    let a = parseFloat(this.qawal) || 0;
                    let b = parseFloat(this.qbeli) || 0;
                    let c = parseFloat(this.qjual) || 0;
                    return (a + b - c);
                }}"
                class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 md:grid-cols-6">
                <div class="">
                    <label for="quantity_awal" class="block text-sm/6 font-medium text-gray-900" >Qty Awal</label>
                    <div class="mt-2">
                        <input id="quantity_awal" type="number" name="qawal" x-model.debounce="qawal" id="qawal"  value="{{ old('qawal') }}" class="input-form-control" />
                    </div>
                    @error('qawal')
                        <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror
                </div>
                <div class="">
                    <label for="quantity_beli" class="block text-sm/6 font-medium text-gray-900" >Qty Beli</label>
                    <div class="mt-2">
                        <input id="quantity_beli" type="number" name="qbeli" x-model.debounce="qbeli" id="qbeli" value="{{ old('qbeli') }}" class="input-form-control" />
                    </div>
                    @error('qbeli')
                        <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror
                </div>
                <div class="">
                    <label for="quantity_jual" class="block text-sm/6 font-medium text-gray-900" >Qty Jual</label>
                    <div class="mt-2">
                        <input id="quantity_jual" type="number" name="qjual" x-model.debounce="qjual" id="qjual" value="{{ old('qjual') }}" class="input-form-control" />
                    </div>
                    @error('qjual')
                        <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror
                </div>
                <div class="">
                    <label for="quantity_akhir" class="block text-sm/6 font-medium text-gray-900" >Qty Akhir</label>
                    <div class="mt-2">
                        <input id="quantity_akhir" type="number" name="qakhir" id="qakhir" :value="hitung"  value="{{ old('qakhir') }}" class="input-form-control-disable" disabled />
                    </div>
                    @error('qakhir')
                        <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror
                </div>
            </div> --}}
            {{-- end of quantity produk --}}
            <div class="flex justify-end space-x-3">
                <a href="/produk" class="btn-white" tabindex="-1">Cancel</a>
                <button type="submit" class="btn-primary ">Update</button>
            </div>
        <!-- </div> -->
        </form>
</x-admin.layout>
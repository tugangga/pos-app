<x-admin.layout>
    <div class="flex justify-between  border-b border-gray-400/20 pb-3 mb-4">
        <div class="flex justify-between grow space-x-3 relative ">
            <h2 class="h2 text-2xl font-semibold text-gray-900 ">Produk</h2>
            @if (session('sukses'))
            <div x-data="{ show: true }" 
                x-init="setTimeout(() => show = false, 3000)" 
                x-show="show"
                x-transition.opacity.duration.1000ms
                class="p-2 bg-green-600 text-white text-sm rounded-lg px-4 mb-2 absolute right-2 z-20">
                <p>{{ session('sukses') }} </p>
            </div>
            @endif
        </div>
        <a href="{{ route('tambah-produk') }}" class="btn-primary">Tambah Produk Baru</a>
    </div>

    
    <div class="relative overflow-x-auto bg-gray-200 shadow-xs rounded-lg border border-gray-200/20">
        <table class="table-auto md:table-fixed w-full text-xs/normal text-left">
            <thead>
                <tr>
                    <th class="px-6 py-3 font-medium w-10">No</th>
                    <th class="px-6 py-3 font-medium sm:w-24">Kode</th>
                    <th class="px-6 py-3 font-medium sm:w-1/3">Nama Barang</th>
                    <th class="px-6 py-3 font-medium">Satuan</th>
                    <th class="px-6 py-3 font-medium">Kategri</th>
                    <th class="px-6 py-3 font-medium sm:w-26 text-right">Rp. Beli</th>
                    <th class="px-6 py-3 font-medium sm:w-26 text-right">Rp. Jual</th>
                    <th class="px-6 py-3 font-medium sm:w-26 text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $produk )
                <tr class="border-b border-gray-400/20 bg-white">
                    <td class="px-6 py-3 font-light">{{ $loop->iteration }}</td>
                    <td class="px-6 py-3 font-light" >{{ $produk->kode }}</td>
                    <td class="px-6 py-3 font-light" >{{ $produk->namabrg }}</td>
                    <td class="px-6 py-3 font-light" >{{ $produk->satuan }}</td>
                    <td class="px-6 py-3 font-light" >{{ $produk->kategori }}</td>
                    <td class="px-6 py-3 font-light text-right">{{  number_format($produk->hbeli,0,',','.') }}</td>
                    <td class="px-6 py-3 font-light text-right">{{  number_format($produk->hjual,0,',','.') }}</td>
                    <td class="px-6 py-3 flex space-x-2">
                        
                        <a href="/produk/{{ $produk->kode }}/edit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-5"  class="size-6 inline text-green-800 stroke-[]1.5]">
                        <path strokeLinecap="round" strokeLinejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        </a>

                        <form action="{{ route('produk',$produk->id) }}" method="POST" x-data 
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
                            <button type="submit" ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="cursor-pointer size-6 inline text-red-800 stroke-[1.5]">
                                <path strokeLinecap="round" strokeLinejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg></button>

                        </form>

                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
        <div class="px-4 py-3">
            {{ ($produks->links()) }}
        </div>
    </div>
</x-admin.layout>
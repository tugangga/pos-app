<x-admin.layout>
    <div class="flex justify-between border-b border-gray-400/20 relative">
        <div class="mb-3">
            <h2 class="text-2xl font-semibold text-gray-900 ">
                User Baru
            </h2>
            <p class="mt-1 text-sm/6 text-slate-400">
                Form untuk menambahkan data user baru
            </p>
        </div>

        @if (session('sukses'))
        <div x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 3000)" 
            x-show="show"
            x-transition.opacity.duration.1000ms
            class="p-2 bg-green-600 text-white text-sm rounded-lg px-4 mb-2 absolute right-0 top-6">
            <p>{{ session('sukses') }}</p>
        </div>
        @endif
    </div>

    <form method="POST" action="{{ route('user.store') }}">
        @csrf
            <div class="border-b border-gray-900/10 pb-6 mb-4  md:w-2xl  ">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-2 md:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="username" class="block text-sm/6 font-medium text-gray-900" >Username
                            <span class="hidden lg:block text-xs text-slate-400">Username</span>
                        </label>
                    </div>
                    <div class=" col-span-4 ">
                        <div class="">
                            <input id="username" type="text" name="username" value="{{ old('username') }}" class="input-form-control" required autofocus/>
                        </div>
                        <div class="text-xs text-green-900 font-light">min:6 character</div>
                        @error('username')
                            <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-2 md:grid-cols-6">
                   
                    <div class="sm:col-span-2">
                        <label for="nama" class="block text-sm/6 font-medium text-gray-900" >Nama
                            <span class="hidden lg:block text-xs text-slate-400">Nama User</span>
                        </label>
                    </div>
                    <div class=" col-span-4 ">
                        <div class="">
                            <input id="nama" type="text" name="nama" value="{{ old('nama') }}" required class="input-form-control "/>
                        </div>
                        @error('nama')
                            <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-2 md:grid-cols-6" >
                    <div class="sm:col-span-2">
                        <label for="role" class="block text-sm/6 font-medium text-gray-900">Hak akses
                            <span class="hidden lg:block text-xs text-slate-400">Hak akses user</span>
                        </label>
                    </div>
                    <div class=" grid grid-cols-1 col-span-4">
                        @php 
                            $arrRole = ['kasir','admin']; 
                            $role= (is_null(old('role')))? old('role') : '';
                        @endphp
                        
                        <select  class="select-form-control" name="role" required>
                            <option value="" disabled {{ ($role===null)? 'selected' : '' }}>Pilih...</option>
                            @foreach ($arrRole as $data) 
                                @php $selected = ($data==$role)? "selected":""; @endphp
                                <option value="{{ $data }}" {{ $selected }}>{{ ucwords($data) }}</option>
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
                    @error('akses')
                        <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                    @enderror                                        
                </div>
                {{-- <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-2 md:grid-cols-6" >
                    <div class="sm:col-span-2">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password
                            <span class="hidden lg:block text-xs text-slate-400">Password</span>
                        </label>
                    </div>
                    
                    <div class=" col-span-4">
                        <div class="">
                            <input id="password" type="password" name="password" value="" required class="input-form-control "/>
                        </div>
                        @error('password')
                            <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-2 md:grid-cols-6" >
                    <div class="sm:col-span-2">
                        <label for="telp" class="block text-sm/6 font-medium text-gray-900">No HP
                            <span class="hidden lg:block text-xs text-slate-400">telp</span>
                        </label>
                    </div>
                    
                    <div class=" col-span-4">
                        <div class="">
                            <input id="telp" type="text" name="telp" value="{{ old('telp') }}" required class="input-form-control "/>
                        </div>
                        @error('telp')
                            <div class="text-xs text-red-900 font-light">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex justify-end gap-4  md:w-2xl ">
                <a href="{{ route('user') }}" class="btn-white">Batal</a>
                <button type="submit" class="btn-primary">Simpan</button>
            </div>
        </form>
</x-admin.layout>
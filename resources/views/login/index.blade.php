<!doctype html>
<html lang="en" class="h-full bg-gray-900">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
    <title>{{ $title }}</title>
  </head>
  <body class="h-full">
  
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img src="{{ asset('images/apple-touch-icon.png') }}" alt="POS i-BATU" class="mx-auto h-10 w-auto" />
          <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">Sign in to your account</h2>
      </div>
      
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
         @if(session()->has('error'))
          <div class="p-3 mb-4 rounded-md text-white bg-red-600">
              {{ session('error') }} 
          </div>
        @endif
          <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @method('POST')
              @csrf
            <div>
                <label for="username" class="block text-sm/6 font-medium text-gray-100">Username</label>
                <div class="mt-2">
                  <input id="username" type="username" name="username" required autocomplete="username" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" autofocus />
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm/6 font-medium text-gray-100">Password</label>
                <div class="mt-2">
                 <input id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign in</button>
            </div>
            
          </form>
        
      </div>
    </div>

    
  </body>
</html>

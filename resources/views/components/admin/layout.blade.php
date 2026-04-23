<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
    <title>POS</title>
  </head>
  <body>
    <x-admin.header></x-admin.header>
    {{-- header --}}

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
       
      </div>
    </main>
  </body>
</html>

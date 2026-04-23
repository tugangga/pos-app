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
<body class="">

    <div class="bg-slate-200 w-3/4 mx-auto grid grid-cols-3 p-4 gap-4">
        <div class="relative border grow bg-white  shadow-lg rounded-lg  h-28 p-4">
            <div class="bg-slate-100 w-full" >isi konten</div>
            <div class="absolute  bg-slate-200 bottom-2 right-2" >navigasi</div>
        </div>
        <div class="relative border grow bg-white  shadow-lg rounded-lg  h-28 p-4">
            <div class="bg-slate-100 w-full" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro officia ratione incidunt, fugiat eius non consectetur veritatis hic </div>
            <div class="absolute  bg-slate-200 bottom-2 right-2" >navigasi</div>
        </div>
        <div class="relative border grow bg-white  shadow-lg rounded-lg  h-28 p-4">
            <div class="bg-slate-100 w-full" >isi konten</div>
            <div class="absolute  bg-slate-200 bottom-2 right-2" >navigasi</div>
        </div>
    </div>
</body>
</html>
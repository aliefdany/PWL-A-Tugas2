<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel | Mahasiswa</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased min-h-screen w-full flex items-center justify-center">
        <div>
            <h1 class="font-semibold text-2xl text-center mb-4">Data Mahasiswa</h1>
            <form class="space-y-4">
                <div>
                    <label class="block" for="nama">Nama</label>
                    <input class="w-[400px] block p-2 border-2 border-black rounded-md" id="nama" value="{{$mahasiswa->nama}}"/>
                </div>
                <div>
                    <label class="block" for="nama">NIM</label>
                    <input class="w-[400px] block p-2 border-2 border-black rounded-md" id="nama" value="{{$mahasiswa->nim}}"/>
                </div>
                <div>
                    <label class="block" for="nama">Alamat</label>
                    <input class="w-[400px] block p-2 border-2 border-black rounded-md" id="nama" value="{{$mahasiswa->alamat}}"/>
                </div>
                <div>
                    <label class="block" for="nama">Hobi</label>
                    <input class="w-[400px] block p-2 border-2 border-black rounded-md" id="nama" value="{{$mahasiswa->hobi}}"/>
                </div>
            </form>
        </div>
    </body>
</html>

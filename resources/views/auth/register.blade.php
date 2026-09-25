<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="page-transition">
    <div class="flex min-h-screen items-center justify-center">
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                 </ul>
            </div>
         @endif
        <form action="{{route('register.proses')}}" method="POST" class="flex flex-col border-1 rounded-lg p-4 shadow-md hover:scale-105 transaction duration-300">
            @csrf
            <h1 class="text-2xl font-bold">Form Registrasi</h1>
            <hr class="border-1 my-2 w-25 border-blue-500">
            <div class="flex gap-10 mt-10">
                <div class="flex flex-col">
                    <span>Nama Lengkap</span>
                    <input type="text" name="name" value="{{old('name')}}" class="border-1 px-2 font-medium">
                </div>
                <div class="flex flex-col">
                    <span>Username</span>
                    <input type="text" name="username" value="{{old('username')}}" class="border-1 px-2 font-medium">
                </div>
            </div>
            <div class="flex gap-10 mt-5">
                <div class="flex flex-col">
                    <span>Email</span>
                    <input type="text" name="email" value="{{old('email')}}" class="border-1 px-2 font-medium">
                </div>
                <div class="flex flex-col">
                    <span>Nomer Telpon</span>
                    <input type="text" name="nomer_telp" value="{{old('nomer_telp')}}" class="border-1 px-2 font-medium">
                </div>
            </div>
            <div class="flex gap-10 mt-5">
                <div class="flex flex-col">
                    <span>Password</span>
                    <input type="password" name="password" value="{{old('password')}}" class="border-1 px-2 font-medium">
                </div>
                <div class="flex flex-col">
                    <span>Ulangi Password</span>
                    <input type="password" name="password_confirmation" class="border-1 px-2 font-medium">
                </div>
            </div>
            <h1 class="mt-5 mb-2">Jenis Kelamin </h1>
            <div class="flex gap-5">
                <label>
                    <input type="radio" name="gender" value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'checked' : '' }}> Laki-laki
                </label>
                <label>
                    <input type="radio" name="gender" value="Perempuan" {{ old('gender') == 'Perempuan' ? 'checked' : '' }}> Perempuan
                </label>
            </div>
            <button type="submit" class="bg-blue-500 font-bold mt-5 mb-2 hover:bg-gray-500 rounded-lg transaction duration-300 shadow-md">Simpan</button>
            <a href="{{route('login')}}" class="bg-[#0D031B] font-bold text-[#ffffff] hover:bg-red-500 rounded-lg transaction duration-300 shadow-md flex justify-center">Kembali Ke Login</a>
        </form>
    </div>
</body>
</html>
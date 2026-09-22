<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex min-h-screen justify-center items-center bg-[#FFFFFF]">
        <form action="#" class="shadow-md hover:scale-105 transaction duration-300 flex gap-2 p-2">
            <img src="{{asset('images/login_photo.jpg')}}" alt="Login" class="h-75 w-75">
            <div class="flex flex-col gap-2 items-stretch justify-center">
                <span>Login Page</span>
                <input type="text" class="border-1">
                <input type="text" class="border-1">
                <button class="bg-blue-500 w-auto h-auto">Submit</button>
                <button class="bg-[#000000] text-[#ffffff] w-auto h-auto">google</button>
            </div>
        </form>
    </div>
</body>
</html>
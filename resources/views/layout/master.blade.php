<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockLy - ERP Inventory</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 flex flex-col h-screen overflow-hidden">
    @include('layout.navbar')
    <div class="flex flex-1 overflow-hidden">
        @include('layout.sidebar')
        <main class="flex-1 bg-gray-50 p-6 overflow-y-auto">
            @yield('content')
        </main>
    </div>
</body>
</html>
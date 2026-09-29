<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex border">
        <div class="flex p-2 justify-center items-center gap-2 border-r">
            <img src="{{asset('images/logo.png')}}" alt="Logo" class="w-10 h-15 ">
            <div class="whitespace-nowrap m-2">
                <h1>StockLy</h1>
                <h2>ERP Iventory</h2>
            </div>
        </div>
        <div class="flex p-2 justify-between items-center gap-2 w-full">
            <div class="flex gap-1">
                <h1>StockLy /</h1>
                <h2>ERP Iventory</h2>
            </div>
            <div class="flex gap-1">
                <span id="realtime-clock"></span>
                <img src="#" alt="photo">
            </div>
        </div>
    </div>

    <script>
        function updateClock() {
            const now = new Date();
            const optionsDate = { weekday: 'short', day: 'numeric', month: 'short', year: 'numeric' };
            const dateStr = now.toLocaleDateString('id-ID', optionsDate);
            const timeStr = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
            document.getElementById('realtime-clock').innerText = `${dateStr} - ${timeStr}`;
        }

        updateClock();
        setInterval(updateClock, 1000);
    </script>
</body>
</html>
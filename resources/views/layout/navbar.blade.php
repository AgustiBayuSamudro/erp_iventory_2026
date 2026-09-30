    <div class="bg-white border-b border-gray-200 flex items-center justify-between px-4 py-2 shadow-sm">

        <div class="flex items-center w-64 gap-3 border-r border-gray-200 pr-6">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 object-contain">
            <div class="whitespace-nowrap leading-tight">
                <h1 class="font-bold text-gray-800 text-base">StockLy</h1>
                <span class="text-xs text-gray-500 font-medium">ERP Inventory</span>
            </div>
        </div>
        <div class="flex items-center justify-between w-full pl-6">
            <div class="flex items-center gap-2 text-sm text-gray-600">
                <span class="font-semibold text-gray-800">StockLy</span>
                <span class="text-gray-400">/</span>
                <span class="text-gray-500">Dashboard</span>
            </div>
            <div class="flex items-center gap-4">
                <div id="realtime-clock" class="text-right text-xs font-medium text-gray-600 bg-gray-100 px-3 py-1.5 rounded-md border border-gray-200">
                </div>

                <div class="flex items-center gap-2">
                    <img src="https://ui-avatars.com/api/?name=Agusti+Bayu&background=0D8ABC&color=fff" alt="User Photo" class="w-10 h-10 rounded-full object-cover border border-gray-300 shadow-sm">
                </div>
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
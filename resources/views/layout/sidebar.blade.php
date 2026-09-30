<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

    <div class="flex flex-col w-64 h-screen bg-white p-4 space-y-2 shadow-md overflow-y-auto">

        <span class="text-xs font-bold text-gray-400 tracking-wider mt-2">OVERVIEW</span>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700 font-medium">Dashboard</a>

        <span class="text-xs font-bold text-gray-400 tracking-wider mt-4">MASTER DATA</span>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Produk</a>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Kategori</a>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Vendor</a>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Gudang</a>

        <span class="text-xs font-bold text-gray-400 tracking-wider mt-4">INVENTORY</span>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Inventory Stok</a>

        <span class="text-xs font-bold text-gray-400 tracking-wider mt-4">TRANSAKSI</span>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Purchase Order</a>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Sales Order</a>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Goods Receipt</a>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Invoice</a>

        <span class="text-xs font-bold text-gray-400 tracking-wider mt-4">ANALITIK</span>
        <a href="#" class="text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Laporan</a>
        <div class="pt-4 mt-auto">
            <button type="button" class="w-full text-left px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-700">Collapse</button>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SehatPlus | Pemesanan Obat</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Menggunakan Tailwind dari CDN -->
</head>
<body class="bg-blue-50">

    @include('partial.nav')

  <main class="container mx-auto mt-6 px-6">
  <div class="flex justify-center mb-8">
                <input type="text" placeholder="Cari Obat..." class="w-2/3 p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <button class="ml-4 bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-700">
                    Cari
                </button>
    </div>
   <div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full bg-white">
     <thead>
      <tr class="w-full bg-gray-100 text-left text-gray-600 uppercase text-sm leading-normal">
       <th class="py-3 px-4">
        Produk
       </th>
       <th class="py-3 px-4">
        Harga Satuan
       </th>
       <th class="py-3 px-4">
        Kuantitas
       </th>
       <th class="py-3 px-4">
        Total Harga
       </th>
       <th class="py-3 px-4">
        Aksi
       </th>
      </tr>
     </thead>
     <tbody class="text-gray-600 text-sm font-light">
      <tr class="border-b border-gray-200 hover:bg-gray-100">
       <td class="py-3 px-4 flex items-center">
        <input class="mr-2" type="checkbox"/>
        <img src="{{ asset('img/Obat Sakit Kepala.png') }}" class="w-12 h-12 mr-4" height="50" width="50"/>
        <span class="font-medium">
         Obat Sakit Kepala
        </span>
       </td>
       <td class="py-3 px-4">
        Rp410
       </td>
       <td class="py-3 px-4">
        1 tablet
       </td>
       <td class="py-3 px-4">
        Rp4.100
       </td>
       <td class="py-3 px-4">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-full">
         <i class="fas fa-trash-alt">
         </i>
         Hapus
        </button> 
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-100">
       <td class="py-3 px-4 flex items-center">
        <input class="mr-2" type="checkbox"/>
        <img src="{{ asset('img/paracetamol.png') }}" class="w-12 h-12 mr-4" height="50" width="50"/>
        <span class="font-medium">
         Paracetamol
        </span>
       </td>
       <td class="py-3 px-4">
        Rp1.155
       </td>
       <td class="py-3 px-4">
        1 tablet
       </td>
       <td class="py-3 px-4">
        Rp.11.550
       </td>
       <td class="py-3 px-4">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-full">
         <i class="fas fa-trash-alt">
         </i>
         Hapus
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-100">
       <td class="py-3 px-4 flex items-center">
        <input class="mr-2" type="checkbox"/>
        <img src="{{ asset('img/ibuprofen.png') }}" class="w-12 h-12 mr-4" height="50" width="50"/>
        <span class="font-medium">
         Ibuprofen
        </span>
       </td>
       <td class="py-3 px-4">
        Rp300
       </td>
       <td class="py-3 px-4">
        1 tablet
       </td>
       <td class="py-3 px-4">
        Rp3.000
       </td>
       <td class="py-3 px-4">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-full">
         <i class="fas fa-trash-alt">
         </i>
         Hapus
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-100">
       <td class="py-3 px-4 flex items-center">
        <input class="mr-2" type="checkbox"/>
        <img src="{{ asset('img/antibiotik.png') }}" class="w-12 h-12 mr-4" height="50" width="50"/>
        <span class="font-medium">
         Antibiotik
        </span>
       </td>
       <td class="py-3 px-4">
        Rp670
       </td>
       <td class="py-3 px-4">
        1 tablet
       </td>
       <td class="py-3 px-4">
        Rp6.700
       </td>
       <td class="py-3 px-4">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-full">
         <i class="fas fa-trash-alt">
         </i>
         Hapus
        </button>
       </td>
      </tr>
      <tr class="border-b border-gray-200 hover:bg-gray-100">
       <td class="py-3 px-4 flex items-center">
        <input class="mr-2" type="checkbox"/>
        <img src="{{ asset('img/vitamin C.jpeg') }}" class="w-12 h-12 mr-4" height="50" width="50"/>
        <span class="font-medium">
         Vitamin C
        </span>
       </td>
       <td class="py-3 px-4">
        Rp7.000
       </td>
       <td class="py-3 px-4">
        1 pack
       </td>
       <td class="py-3 px-4">
        Rp35.000
       </td>
       <td class="py-3 px-4">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-full">
         <i class="fas fa-trash-alt">
         </i>
         Hapus
        </button>
       </td>
      </tr>
     </tbody>
    </table>
   </div>
   <div class="flex justify-between items-center bg-white shadow-md rounded-lg mt-6 p-4">
    <span class="font-bold text-lg">
     TOTAL
    </span>
    <span class="font-bold text-lg">
     Rp25.000
    </span>
   </div>
  </main>
 </body>
</html>
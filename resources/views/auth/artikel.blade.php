<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/icon.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SehatPlus | Artikel</title>
    <style>
        body {
            margin: 0;
        }
    </style>
</head>
<body>
    @include('partial.nav')

<div class="h-screen bg-sky-100 flex justify-center">
    <main class="py-16 px-8">
        <div class="text-center mb-20">
            <h2 class="text-blue-600 text-lg font-semibold">Blog &amp; News</h2>
            <h1 class="text-4xl font-bold text-gray-800">Read Our Latest News</h1>
        </div>

        <div class="flex justify-center space-x-6">
 <!-- Article 1 -->
<div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
    <img
    src="{{ asset('img/keriputimg.png') }}">
    <div class="p-4">
        <div class="text-gray-500 text-sm mb-2">Medical | March 31, 2022</div>
        <h3 class="text-lg font-semibold mb-2">6 Cara menghindari keriput di wajah</h3>
        <div class="flex items-center">
            <img
                alt="SehatPlus"
                class="w-8 h-8 rounded-full mr-2"
                src="{{ asset('img/logo.png') }}"
                >
            <div class="text-gray-800">SehatPlus</div>
        </div>
    </div>
</div>

<!-- Article 2 -->
<div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
    <img
    src="{{ asset('img/buahsayurimg.jpeg') }}">
    <div class="p-4">
        <div class="text-gray-500 text-sm mb-2">Medical | March 31, 2022</div>
        <h3 class="text-lg font-semibold mb-2">Buah dan sayur sebagai cemilan yang enak </h3>
        <div class="flex items-center">
            <img
            alt="SehatPlus"
            class="w-8 h-8 rounded-full mr-2"
            src="{{ asset('img/logo.png') }}"
            >
            <div class="text-gray-800">Rebecca Lee</div>
        </div>
    </div>
</div>

<!-- Article 3 -->
<div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xs">
    <img
    src="{{ asset('img/perokokimg.jpg') }}">
    <div class="p-4">
        <div class="text-gray-500 text-sm mb-4">Medical | March 31, 2022</div>
        <h3 class="text-lg font-semibold mb-2">Resiko perokok pasif yang harus diketahui</h3>
        <div class="flex items-center">
            <img
            alt="SehatPlus"
            class="w-8 h-8 rounded-full mr-2"
            src="{{ asset('img/logo.png') }}"
            >
            <div class="text-gray-800">SehatPlus</div>
        </div>
    </div>
</div>

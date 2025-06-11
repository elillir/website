@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <section class="mb-12">
        <div class="bg-cover bg-center h-96 rounded-lg" style="background-image: url('https://ooo-strit.com/wp-content/uploads/2023/05/seo-1024x724.jpg')">
            <div class="bg-black bg-opacity-50 h-full flex items-center justify-center rounded-lg">
                <div class="text-center text-white px-4">
                    <h1 class="text-4xl font-bold mb-4">Добро пожаловать в кафе "Уют"</h1>
                    <p class="text-xl mb-8">Уютная атмосфера и вкусная кухня</p>
                    <a href="{{ route('reservations.create') }}" class="bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-3 px-6 rounded-lg text-lg transition duration-300">Забронировать столик</a>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-3xl font-bold mb-8 text-center">Наши акции</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-48 flex justify-center">
                    <img src="https://images.unsplash.com/photo-1558326567-98ae2405596b?w=200&auto=format&fit=crop" alt="Макаруны" class="h-full object-contain">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Акция на макаруны</h3>
                    <p class="text-gray-600 mb-4">Попробуйте наши нежные макаруны с различными вкусами по специальной цене!</p>
                    <span class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold">Скидка 10%</span>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="h-48 flex justify-center">
                    <img src="https://images.unsplash.com/photo-1597318181409-cf64d0b5d8a2?w=200&auto=format&fit=crop" alt="Облепиховый чай" class="h-full object-contain">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Акция на облепиховый чай</h3>
                    <p class="text-gray-600 mb-4">Согревающий облепиховый чай с медом и пряностями теперь еще выгоднее!</p>
                    <span class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold">Скидка 5%</span>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-3xl font-bold mb-8 text-center">Популярные блюда</h2>
        <div class="grid grid-cols-1 gap-4">

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex items-center p-4">
                    <div class="w-20 h-20 flex-shrink-0 mr-4">
                        <img src="https://avatars.mds.yandex.net/i?id=6d43e09c76b0daabd1a4fc7e256830a4_l-4936722-images-thumbs&n=13?w=150&auto=format&fit=crop" alt="Тирамису" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold mb-1">Тирамису</h3>
                        <p class="text-gray-600 text-sm mb-2">Классический итальянский десерт с нежным вкусом кофе и маскарпоне</p>
                        <span class="text-lg font-bold">350 ₽</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex items-center p-4">
                    <div class="w-20 h-20 flex-shrink-0 mr-4">
                        <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?w=150&auto=format&fit=crop" alt="Стейк из лосося" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold mb-1">Стейк из лосося</h3>
                        <p class="text-gray-600 text-sm mb-2">Нежное филе лосося с хрустящей корочкой и овощным рататуем</p>
                        <span class="text-lg font-bold">890 ₽</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex items-center p-4">
                    <div class="w-20 h-10 flex-shrink-0 mr-4">
                        <img src="https://avatars.mds.yandex.net/i?id=89caf9dfbaebd227f1f2d9b25c44f5be_l-4593379-images-thumbs&n=13" alt="Хинкали" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold mb-1">Хинкали</h3>
                        <p class="text-gray-600 text-sm mb-2">Настоящие грузинские хинкали с сочной мясной начинкой</p>
                        <span class="text-lg font-bold">450 ₽</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

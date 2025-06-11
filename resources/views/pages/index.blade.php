@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <section class="mb-12">
        <div class="bg-cover bg-center h-96 rounded-lg" style="background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')">
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
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($promotions as $promotion)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-300">
                        @if($promotion->image)
                            <img src="{{ asset('storage/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-500">Нет изображения</div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">{{ $promotion->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($promotion->description, 100) }}</p>
                        @if($promotion->discount)
                            <span class="inline-block bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold">Скидка {{ $promotion->discount }}%</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <h2 class="text-3xl font-bold mb-8 text-center">Популярные блюда</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($popularMenu as $item)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-300">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-500">Нет изображения</div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">{{ $item->name }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($item->description, 80) }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold">{{ $item->price }} ₽</span>
                            <button class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded-lg transition duration-300">Заказать</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

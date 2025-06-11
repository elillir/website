@extends('layouts.app')

@section('title', 'Меню кофейни')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-center">Наше меню</h1>

    @foreach($categories as $category)
    <div class="mb-12">
        <h2 class="text-2xl font-semibold mb-4 border-b pb-2">{{ $category->name }}</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($category->menus as $item)
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold">{{ $item->name }}</h3>
                    <span class="text-lg font-bold">{{ $item->price }} ₽</span>
                </div>
                <p class="text-gray-600 mb-4">{{ $item->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection

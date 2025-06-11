@extends('layouts.app')

@section('title', 'Акции кофейни')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-center">Текущие акции</h1>

    @if($promotions->isEmpty())
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
            <p class="text-gray-600">В данный момент активных акций нет</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($promotions as $promotion)
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                <h2 class="text-xl font-bold mb-2">{{ $promotion->title }}</h2>
                <p class="text-gray-600 mb-4">{{ $promotion->description }}</p>

                @if($promotion->discount)
                <span class="inline-block bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-semibold mb-2">
                    Скидка {{ $promotion->discount }}%
                </span>
                @endif

                <div class="flex items-center text-sm text-gray-500">
                    Действует до: {{ $promotion->end_date->format('d.m.Y') }}
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

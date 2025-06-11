@extends('layouts.app')

@section('title', 'Бронирование столика')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6">Бронирование столика</h1>

        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="customer_name" class="block text-gray-700 mb-2">Ваше имя</label>
                <input type="text" name="customer_name" id="customer_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>

            <div class="mb-4">
                <label for="customer_phone" class="block text-gray-700 mb-2">Телефон</label>
                <input type="tel" name="customer_phone" id="customer_phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>

            <div class="mb-4">
                <label for="customer_email" class="block text-gray-700 mb-2">Email</label>
                <input type="email" name="customer_email" id="customer_email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>

            <div class="mb-4">
                <label for="reservation_time" class="block text-gray-700 mb-2">Дата и время</label>
                <input type="datetime-local" name="reservation_time" id="reservation_time" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>

            <div class="mb-4">
                <label for="guests_count" class="block text-gray-700 mb-2">Количество гостей</label>
                <input type="number" name="guests_count" id="guests_count" min="1" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
            </div>

            <div class="mb-4">
                <label for="table_id" class="block text-gray-700 mb-2">Столик</label>
                <select name="table_id" id="table_id" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                    <option value="">Выберите столик</option>
                    @foreach($tables as $table)
                        <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->capacity }} персон, {{ $table->location }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label for="special_requests" class="block text-gray-700 mb-2">Особые пожелания</label>
                <textarea name="special_requests" id="special_requests" rows="3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
            </div>

            <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-3 px-4 rounded-lg transition duration-300">Забронировать</button>
        </form>
    </div>
@endsection

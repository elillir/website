<header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold">Кафе "Уют"</a>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="{{ route('home') }}" class="hover:text-yellow-300">Главная</a></li>
                <li><a href="{{ route('menu.index') }}" class="hover:text-yellow-300">Меню</a></li>
                <li><a href="{{ route('promotions.index') }}" class="hover:text-yellow-300">Акции</a></li>
                <li><a href="{{ route('reservations.create') }}" class="hover:text-yellow-300">Бронирование</a></li>
            </ul>
        </nav>
    </div>
</header>

<header class="bg-gray-900 text-white py-4 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">

            <a href="{{ route('home') }}"
               class="text-3xl font-bold text-amber-200 hover:text-amber-100 transition duration-200">
                Кафе "Уют"
            </a>

            <nav class="w-full md:w-auto">
                <ul class="flex flex-wrap justify-center gap-8">
                    <li>
                        <a href="{{ route('home') }}"
                           class="hover:text-amber-200 transition duration-200 font-medium text-lg">
                            ◯◯◯◯◯◯Главная◯◯◯◯◯◯
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('menu.index') }}"
                           class="hover:text-amber-200 transition duration-200 font-medium text-lg">
                            Меню
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('promotions.index') }}"
                           class="hover:text-amber-200 transition duration-200 font-medium text-lg">
                            ◯◯◯◯◯◯Акции
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('reservations.create') }}"
                           class="bg-amber-500 hover:bg-amber-600 text-gray-900 rounded-lg transition duration-200 font-bold text-lg ml-4">
                            ◯◯◯◯◯◯Бронирование◯◯◯◯◯◯
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

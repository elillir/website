<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Promotion;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Кофе', 'slug' => 'coffee'],
            ['name' => 'Чай', 'slug' => 'tea'],
            ['name' => 'Десерты', 'slug' => 'desserts'],
            ['name' => 'Основные блюда', 'slug' => 'main-dishes'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $menuItems = [
            'coffee' => [
                ['name' => 'Эспрессо', 'price' => 200, 'description' => 'Крепкий черный кофе'],
                ['name' => 'Американо', 'price' => 220, 'description' => 'Эспрессо с добавлением воды'],
                ['name' => 'Капучино', 'price' => 250, 'description' => 'Кофе с молочной пенкой'],
                ['name' => 'Латте', 'price' => 270, 'description' => 'Кофе с большим количеством молока'],
                ['name' => 'Раф', 'price' => 300, 'description' => 'Кофе со сливками и ванилью'],
            ],
            'tea' => [
                ['name' => 'Облепиховый чай', 'price' => 180, 'description' => 'Ароматный чай с облепихой'],
                ['name' => 'Татарский чай', 'price' => 190, 'description' => 'Традиционный чай с травами'],
                ['name' => 'Черный чай', 'price' => 150, 'description' => 'Классический черный чай'],
                ['name' => 'Зеленый чай', 'price' => 160, 'description' => 'Свежий зеленый чай'],
            ],
            'desserts' => [
                ['name' => 'Тирамису', 'price' => 350, 'description' => 'Классический итальянский десерт'],
                ['name' => 'Макаруны', 'price' => 120, 'description' => 'Французское пирожное, 1 шт'],
                ['name' => 'Чизкейк', 'price' => 320, 'description' => 'Нежный десерт из творожного сыра'],
                ['name' => 'Панна котта', 'price' => 280, 'description' => 'Итальянский сливочный десерт'],
                ['name' => 'Круассан', 'price' => 180, 'description' => 'Французская выпечка с начинкой'],
                ['name' => 'Медовик', 'price' => 300, 'description' => 'Традиционный русский торт'],
            ],
            'main-dishes' => [
                ['name' => 'Стейк из лосося', 'price' => 650, 'description' => 'Лосось на гриле с овощами'],
                ['name' => 'Хинкали', 'price' => 420, 'description' => 'Грузинские хинкали, 5 шт'],
                ['name' => 'Паста Карбонара', 'price' => 480, 'description' => 'Итальянская паста с беконом'],
                ['name' => 'Салат Цезарь', 'price' => 390, 'description' => 'С курицей и соусом цезарь'],
                ['name' => 'Греческий салат', 'price' => 350, 'description' => 'Свежие овощи с фетой'],
            ]
        ];

        foreach ($menuItems as $categorySlug => $items) {
            $category = Category::where('slug', $categorySlug)->first();

            foreach ($items as $item) {
                $category->menus()->create([
                    'name' => $item['name'],
                    'slug' => Str::slug($item['name']),
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'is_available' => true
                ]);
            }
        }


        Promotion::create([
            'title' => 'Скидка на макаруны',
            'slug' => 'macarons-sale',
            'description' => 'Все виды макарун со скидкой 10%',
            'discount' => 10,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays(30),
        ]);

        Promotion::create([
            'title' => 'Скидка на облепиховый чай',
            'slug' => 'sea-buckthorn-tea-sale',
            'description' => 'Наш фирменный облепиховый чай со скидкой 5%',
            'discount' => 5,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays(45),
        ]);
    }
}

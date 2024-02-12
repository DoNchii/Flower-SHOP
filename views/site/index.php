<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Carousel;

$this->title = 'My Yii Application';
$this->registerCssFile('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css');
?>
<div class="site-index">

    <main class="container px-36 py-12">
        <div class="italic text-center font-bold text-5xl text-purple-400">
            <h1>Мир цветов</h1>
        </div>
        <div class="flex flex-col items-center justify-center py-8">
            <h2 class="text-center font-semibold text-4xl text-green-500 pb-2">
                Наши новинки
            </h2>
            <div class="flex items-center justify-center rounded-xl border-2 border-purple-400 overflow-hidden w-2/3 bg-white">
                <?= Carousel::widget([
                    'items' => array_map(function ($product) {
                                        return [
                                            'content' => '<img src="' . $product->image. '">',
                                            'caption' => '<h3 class="text-center font-bold text-3xl">' . $product->name . '</h3>',
                                        ];
                                    }, $products),
                ]);
                ?>
                
            </div>
            <div class="italic text-center mt-5 font-bold text-5xl text-purple-400">
            <h1>"Мир цветов"-  это не только сеть цветочных супермаркетов с широчайшим ассортиментом, но и, в первую очередь, сервис доставки свежайших букетов, составленных непосредственно в момент заказа лучшими флористами города. </h1>
        </div>
        </div>
    </main>
</div>
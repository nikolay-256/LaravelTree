<?php declare(strict_types=1);

namespace Tests\Feature;

use App\Model\Item;
use App\Model\Items;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ItemsOrderTest extends TestCase
{
    /**
     * Проверка упорядочивания продкутов по позициям
     *
     * @return void
     */
    public function testOrder()
    {
        /**@var  \App\Model\Item $items */
        $items = [];
        $items[] = (new Item())->setPosition('1');
        $items[] = (new Item())->setPosition('1.2');
        $items[] = (new Item())->setPosition('1.3');
        $items[] = (new Item())->setPosition('1.4');
        $items[] = (new Item())->setPosition('2');
        $items[] = (new Item())->setPosition('2.3');
        $items[] = (new Item())->setPosition('2.1');
        $items[] = (new Item())->setPosition('3.1.2');
        $items[] = (new Item())->setPosition('3.1.3.6');
        shuffle($items);//перемешиваем
        $items = Items::order($items);
        self::assertEquals($items[1]['value']->getPosition(), '1');
        self::assertEquals($items[2]['childs'][3]['value']->getPosition(), '2.3');
        self::assertEquals($items[3]['childs'][1]['childs'][3]['childs'][6]['value']->getPosition(), '3.1.3.6');
    }
}

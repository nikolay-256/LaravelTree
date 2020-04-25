<?php declare(strict_types=1);

namespace App\Model;

class Items
{
    /**
     * Упорядочивание одномерного массива в многомерный, с учетом позиции каждого продукта
     *
     * @param Item[] $items Одноуровневый массив объектов Item
     *
     * @return array Многомерный массив объектов Product
     */
    public static function order(array $items): array
    {
        $result = [];
        foreach ($items as $item) {
            $position_exp = explode('.', $item->getPosition());
            self::recursive($result, $item, $position_exp);
        }

        return $result;
    }

    /**
     * Рекурсивное создание многомерного массива
     *
     * @param array           $result
     * @param \App\Model\Item $item
     * @param array           $position_exp
     * @param int             $depth
     */
    private static function recursive(array &$result, Item $item, array $position_exp, int $depth = 0)
    {
        $key = $position_exp[$depth];
        if (empty($result[$key])) {
            $result[$key] = ['childs' => [], 'value' => []];
        }
        if (count($position_exp) == $depth + 1) {
            $result[$key]['value'] = $item;
        } else {
            self::recursive($result[$key]['childs'], $item, $position_exp, $depth + 1);
        }
        ksort($result);
    }
}

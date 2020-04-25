<?php declare(strict_types=1);

namespace App\Http\Controllers\Validation;

use Illuminate\Contracts\Validation\Rule;

class PriceValidateRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        if ($value == '') {
            return false;
        }

        if (!is_numeric($value)) {
            return false;
        }

        return true;
    }

    public function message(): string
    {
        return 'Поле "Стоимость товара" должно быть не пустым и числовым';
    }
}

<?php declare(strict_types=1);

namespace App\Http\Controllers\Validation;

use Illuminate\Contracts\Validation\Rule;

class TitleValidateRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        if ($value == '') {
            return false;
        }

        return true;
    }

    public function message(): string
    {
        return 'Field "Item description" must not be empty';
    }
}

<?php declare(strict_types=1);

namespace App\Http\Controllers\Validation;

use Illuminate\Contracts\Validation\Rule;

class PositionValidateRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        if ($value == '') {
            return false;
        }
        $value_exp = explode('.', $value);
        foreach ($value_exp as $cur_val) {
            if (!is_numeric($cur_val)) {
                return false;
            }
        }

        return true;
    }

    public function message(): string
    {
        return 'Field "Item position", invalid input format. Example: 1.2.1';
    }
}

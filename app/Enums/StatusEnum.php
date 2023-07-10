<?php

namespace App\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self not_started()
 * @method static self in_process()
 * @method static self completed()
 */
class StatusEnum extends Enum
{

    protected static function values(): array
    {
        return [
          'not_started' => 'Не розпочато',
          'in_process' => 'В процесі',
          'completed' => 'Завершено',
        ];
    }
}

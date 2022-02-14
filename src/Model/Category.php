<?php
declare(strict_types=1);

namespace App\Model;

use App\Kernel\Model\Model;

class Category extends Model
{
    protected static function getTableName(): string
    {
        return 'category';
    }
}
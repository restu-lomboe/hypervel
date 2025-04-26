<?php

declare(strict_types=1);

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Hypervel\Database\Eloquent\Model;
use Hyperf\Database\Model\Concerns\HasUuids;

class Article extends Model
{
    use HasUuids;
    /**
     * The attributes that are mass assignable.
     */
    protected array $guarded = [];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [];
}

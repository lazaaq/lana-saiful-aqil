<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function getIconAttribute($value)
    {
        $path = 'image/skills';
        if ($value && strpos($value, 'http') !== 0) {
            return env('ASSET_URL') . $path . '/' . $value;
        } else {
            return $value;
        }
    }
}

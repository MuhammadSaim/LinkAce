<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class link
 *
 * @package App\Model
 * @property int        $id
 * @property int        $user_id
 * @property string     $short_code
 */
class ShortURL extends Model
{
    use HasFactory;

    protected $table = 'short_urls';

    protected $fillable = [
      'user_id',
      'short_code',
    ];
}

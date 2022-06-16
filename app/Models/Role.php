<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $primaryKey = 'role';

    protected $keyType = 'string';

    public $timestamps = false;

    public $fillable = [
        'role', 'label', 'is_admin'
    ];
}

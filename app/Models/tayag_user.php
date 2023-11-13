<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tayag_user extends Model
{
    use HasFactory;
    const UPDATED_AT = 'date_modified';
    const CREATED_AT = 'date_created';
}

<?php

namespace App\Models;

use App\Http\Controllers\admin\RoomsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\rooms;

class type_rooms extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = ['id','room_type'];

    public function rooms()
    {
        return $this->hasMany(rooms::class, 'type_id', 'id');
    }
}
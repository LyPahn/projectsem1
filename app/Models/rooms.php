<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class rooms extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['id','name','image','type_id','isBooked','price','people' , 'status','room_code',];
    
    /**
     * Get the user that owns the rooms
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeRooms()
    {
        return $this->belongsTo(type_rooms::class, 'type_id', 'id');
    }

    /**
     * Get all of the comments for the rooms
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(images::class, 'room_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class bookings extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = ['name','room_id','status','description','check_in','check_out','adluts','children','email','phone'];

    /**
     * Get the user that owns the rooms
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Rooms()
    {
        return $this->belongsTo(Rooms::class, 'room_id', 'id');
    }
    /**
     * Get the user that owns the rooms
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

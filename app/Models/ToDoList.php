<?php

// app/Models/ToDoList.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'isDone',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accessor for is_done
    public function getIsDoneAttribute($value)
    {
        return $this->attributes['isDone'];
    }

    // Mutator for is_done
    public function setIsDoneAttribute($value)
    {
        $this->attributes['isDone'] = $value;
    }
}

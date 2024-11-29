<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';
    protected $guarded = ['id'];

    public function speciality(): BelongsTo
    {
        return $this->belongsTo(Speciality::class);
    }
}

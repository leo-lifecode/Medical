<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Speciality extends Model
{
  protected $table = 'specialities';
  protected $guarded = ['id'];


  public function doctors():HasMany {
    return $this->hasMany(Doctor::class);
  }
}

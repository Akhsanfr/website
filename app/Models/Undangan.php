<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;
    /**
     * Get the user associated with the Undangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pesan()
    {
        return $this->hasOne(Pesan::class);
    }
}

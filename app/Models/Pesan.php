<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    /**
     * Get the undangan that owns the Pesan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function undangan()
    {
        return $this->belongsTo(Undangan::class);
    }
}

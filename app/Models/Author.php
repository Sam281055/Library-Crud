<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'last_name', 'country_id'];
    public function books():BelongsToMany{
        return $this->belongsToMany(Book::class);
    }

    public function country(): BelongsTo{
        return $this->belongsTo(Country::class);
    }

}

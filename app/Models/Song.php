<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    public const ROLE = [
        "Artist / Performer",
        "Composer",
        "Lyricist / Songwriter",
        "Producer",
        "Arranger",
        "Mixer",
        "Mastering Engineer",
        "DJ / Remixer"
    ];
}

<?php

namespace App\Models\Traits;

use Carbon\Carbon;

trait HasCarbonDate
{
    public function getDateAsCarbonAttribute() {
        return Carbon::parse($this->created_at);
    }
}

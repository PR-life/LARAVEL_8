<?php

namespace App\Inspections;

use Exception;

class InvalidKeywords
{
    /**
     * All spam keywords
     *
     * @var array
     */
    protected $keywords = [
        'customer support',
    ];

    /**
     * Detect spam
     *
     * @param  string $sms
     * @throws \Exception
     */
    public function detect($sms)
    {
        foreach ($this->keywords as $keyword) {
            if (stripos($sms, $keyword) !== false) {
                throw new Exception("Your comment contains spam.");
            }
        }
    }

}
<?php

namespace App\Inspections;

use Exception;

class KeyHeldDown
{
    /**
     * Detect spam
     *
     * @param  string $sms
     * @throws \Exception
     */
    public function detect($sms)
    {
        if (preg_match('/(.)\\1{4,}/', $sms)) {
            throw new Exception("Your comment contains spam.");
        }
    }
}
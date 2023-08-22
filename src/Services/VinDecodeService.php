<?php

namespace Composite\LaravelNhtsa\Services;

use Composite\LaravelNhtsa\Facades\Nhtsa;

class VinDecodeService
{
    /**
     * @param string $vin
     * @param $modelYear
     * @return mixed
     */
    public function find(string $vin, $modelYear = null): mixed
    {
        $payload = [
            'format' => 'json',
        ];

        if ($modelYear) {
            $payload['modelyear'] = $modelYear;
        }

        return Nhtsa::get("vehicles/decodevinvalues/{$vin}", $payload);
    }
}

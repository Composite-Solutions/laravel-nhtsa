<?php

namespace Composite\LaravelNhtsa\Traits;

use Composite\LaravelNhtsa\Services\VinDecodeService;

trait Services
{
    /**
     * @return VinDecodeService
     */
    public function vinDecodeService(): VinDecodeService
    {
        return new VinDecodeService();
    }
}

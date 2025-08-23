<?php

namespace Villafinder\Butter\Messages;

class SharedMessage
{
    public const int API_VERSION = 1;

    public int $apiVersion = self::API_VERSION;

    private function __construct()
    {
    }

    public function isVersionValid(): bool
    {
        return $this->apiVersion === self::API_VERSION;
    }
}

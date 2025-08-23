<?php

namespace Villafinder\Butter\Messages;

class ResourceUpdatedMessage extends SharedMessage
{
    public function __construct(
        public string $resourceName,
        public string $resourceId,
        public string $resourceAttribute,
        public string $sourceLocale,
        /** @var array<string> */
        public array $targetLocales = [],
        public \DateTimeImmutable $updatedAt = new \DateTimeImmutable(),
    ) {
    }
}

<?php

namespace Villafinder\Butter\Messages;

class ResourceCreatedMessage extends SharedMessage
{
    public function __construct(
        public string $resourceName,
        public string $resourceId,
        public string $sourceLocale,
        /** @var array<string> */
        public ?array $targetLocales = null,
        public \DateTimeImmutable $createdAt = new \DateTimeImmutable(),
    ) {
    }
}

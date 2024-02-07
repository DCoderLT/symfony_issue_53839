<?php declare(strict_types=1);

namespace App\Service;

class TagUsingService
{
    public function __construct(
        private readonly iterable $taggedServices,
    ) {
    }

    public function getTaggedCount(): int
    {
        return count([...$this->taggedServices]);
    }
}

<?php
declare(strict_types=1);

namespace Spaghetti;

interface Patch
{
    public function appliesTo(string $filePath): bool;

    public function apply(string $source): string;
}

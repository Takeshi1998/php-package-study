<?php
declare(strict_types=1);

namespace Takeshi;

class Takeshi
{
    public function name(): string
    {
        return 'Takeshi';
    }

    public function age(): int
    {
        return 24;
    }

    public function address(): string
    {
        return 'Tokyo';
    }
}

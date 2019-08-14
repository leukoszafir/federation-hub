<?php

declare(strict_types=1);

namespace App\Infrastructure\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class LayoutExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('layout', [$this, 'getLayout']),
        ];
    }

    public function getLayout(string $hint): string
    {
        return 'base.html.twig';
    }
}

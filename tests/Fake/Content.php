<?php

declare(strict_types=1);

namespace NaokiTsuchiya\Plan;

final class Content
{
    public function __construct(private string $content)
    {}

    public function __toString(): string
    {
        $escaped = htmlspecialchars(string: $this->content);
        return <<<HTML
<div>
  {$escaped}
</div>
HTML;
    }
}

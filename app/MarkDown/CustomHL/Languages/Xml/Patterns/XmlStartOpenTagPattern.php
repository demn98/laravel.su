<?php

declare(strict_types=1);

namespace App\MarkDown\CustomHL\Languages\Xml\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\Tokens\TokenType;
use Tempest\Highlight\Tokens\DynamicTokenType;

final readonly class XmlStartOpenTagPattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '/(?<match><[\/\!]?)[\w\-]+/';
    }

    public function getTokenType(): TokenType
    {
        return new DynamicTokenType('hl-xml-delimeter');
    }
}

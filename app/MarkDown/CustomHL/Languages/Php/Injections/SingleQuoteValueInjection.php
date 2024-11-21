<?php

declare(strict_types=1);

namespace App\MarkDown\CustomHL\Languages\Php\Injections;

use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Injection;
use Tempest\Highlight\IsInjection;
use Tempest\Highlight\Escape;
use Tempest\Highlight\Tokens\DynamicTokenType;

final readonly class SingleQuoteValueInjection implements Injection
{
    use IsInjection;

    public function getPattern(): string
    {
        return "'(?<match>.*?)'";
    }

    public function parseContent(string $content, Highlighter $highlighter): string
    {
        $theme = $highlighter->getTheme(); 

        $clear_content = Escape::terminal($content);
        
        return Escape::injection(
            Escape::tokens($theme->before(new DynamicTokenType('hl-php-value')))
            . $clear_content
            . Escape::tokens($theme->after(new DynamicTokenType('hl-php-value')))
        ); 
    }
}

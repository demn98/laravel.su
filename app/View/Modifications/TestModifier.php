<?php

namespace App\View\Modifications;

class TestModifier extends HTMLModifier
{
    /**
     * @param string   $content The HTML content to be modified.
     * @param \Closure $next    The next method in the middleware pipeline.
     *
     * @return mixed The modified HTML content.
     */
    public function handle(string $content, \Closure $next)
    {
        $content = $this->crawler($content)->filterXpath('//body')->first()->html();

        return $next($content);
    }
}

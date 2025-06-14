<?php

namespace App\Services;

use League\CommonMark\CommonMarkConverter;

class MarkdownService
{
    private CommonMarkConverter $converter;
    
    public function __construct()
    {
        $this->converter = new CommonMarkConverter([
            'html_input' => 'escape',
            'allow_unsafe_links' => false,
            'max_nesting_level' => 50,
            'max_delimiters_per_line' => 500,
        ]);
    }
    
    public function toHtml(?string $markdown): string
    {
        if (empty($markdown)) {
            return '';
        }
        
        return $this->converter->convert($markdown)->getContent();
    }
}

<?php

/**
 * API Routes Definition for php-markdown-parser-engine
 */

return [
    'GET /api/v1/health' => ['App\Controllers\ApiController', 'health'],
    'GET /api/v1/markdown-parser-engine' => ['App\Controllers\\MarkdownParserEngineController', 'index'],
    'POST /api/v1/markdown-parser-engine' => ['App\Controllers\\MarkdownParserEngineController', 'store'],
    'GET /api/v1/markdown-parser-engine/{id}' => ['App\Controllers\\MarkdownParserEngineController', 'show'],
    'DELETE /api/v1/markdown-parser-engine/{id}' => ['App\Controllers\\MarkdownParserEngineController', 'destroy']
];
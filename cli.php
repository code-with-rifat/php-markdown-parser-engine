<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\\MarkdownParserEngineController;

echo "========================================\n";
echo " PHP High-Speed Markdown to HTML Parser CLI Engine\n";
echo "========================================\n\n";

$controller = new MarkdownParserEngineController();
$status = $controller->status();

echo "Service: " . $status['service'] . "\n";
echo "Version: " . $status['version'] . "\n";
echo "Status:  " . $status['status'] . "\n\n";
echo "System Ready.\n";
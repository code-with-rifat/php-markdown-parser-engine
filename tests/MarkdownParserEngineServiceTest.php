<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Services\\MarkdownParserEngineService;

class MarkdownParserEngineServiceTest extends TestCase
{
    private MarkdownParserEngineService $service;

    protected function setUp(): void
    {
        $this->service = new MarkdownParserEngineService();
    }

    public function testHealthCheckReturnsTrue(): void
    {
        $this->assertTrue($this->service->healthCheck());
    }

    public function testProcessReturnsSuccessStatus(): void
    {
        $input = ['test_key' => 'test_value'];
        $result = $this->service->process($input);

        $this->assertIsArray($result);
        $this->assertEquals('success', $result['status']);
        $this->assertEquals($input, $result['data']);
    }
}
<?php

declare(strict_types=1);

namespace Tavaan\Engine\Media\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Media\Image;
use Tavaan\Engine\Media\MediaManager;

/**
 * T-NN scenario tests for the media engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class MediaScenarioTest extends TestCase
{'    public function t01_image_make_blank_canvas(): void\n    {\n        // Scenario T-01\nif (!function_exists("imagecreatetruecolor")) {\n            $this->markTestSkipped("GD not available");\n        }\n        $img = new Image();\n        $img->make(null, 50, 30);\n        $this->assertSame(50, $img->getWidth());\n        $this->assertSame(30, $img->getHeight());\n    }\n    public function t02_image_resize_changes_dimensions(): void\n    {\n        // Scenario T-02\nif (!function_exists("imagecreatetruecolor")) {\n            $this->markTestSkipped("GD not available");\n        }\n        $img = new Image();\n        $img->make(null, 100, 100);\n        $img->resize(50, 50, false);\n        $this->assertSame(50, $img->getWidth());\n        $this->assertSame(50, $img->getHeight());\n    }\n    public function t03_media_manager_frompath_missing_returns_null(): void\n    {\n        // Scenario T-03\n$mgr = new MediaManager(["upload_dir" => "/tmp/test_media"]);\n        $this->assertNull($mgr->fromPath("/nonexistent/file"));\n    }'}

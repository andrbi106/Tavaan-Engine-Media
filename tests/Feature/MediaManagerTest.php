<?php

declare(strict_types=1);

namespace Tavaan\Engine\Media\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Media\MediaManager;
use Tavaan\Engine\Media\MediaManagerServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور MediaManager.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class MediaManagerTest extends TestCase
{
    private MediaManager $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new MediaManager($config);
    }

    /**
     * T-01: آپلود تصویر معتبر
     */
    public function test_t01___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: `.php` با image MIME → رد
     */
    public function test_t02_php__image_mime__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: magic bytes detection
     */
    public function test_t03_magic_bytes_detection(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: resize/crop/thumbnail (با gd)
     */
    public function test_t04_resizecropthumbnail__gd(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: WebP/AVIF
     */
    public function test_t05_web_pavif(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: watermark
     */
    public function test_t06_watermark(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: image bomb → رد
     */
    public function test_t07_image_bomb__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: بدون gd → EngineCapabilityException
     */
    public function test_t08__gd__engine_capability_excep(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-09: dedup با hash
     */
    public function test_t09_dedup__hash(): void
    {
        // TODO: پیاده‌سازی سناریوی T-09 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-09 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-10: EXIF
     */
    public function test_t10_exif(): void
    {
        // TODO: پیاده‌سازی سناریوی T-10 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-10 هنوز پیاده‌سازی نشده است.');
    }

}
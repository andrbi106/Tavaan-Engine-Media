<?php

declare(strict_types=1);

namespace Tavaan\Engine\Media;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Image — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Media\Contracts\ImageInterface
 */
final class Image implements Contracts\ImageInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function make(/* ... */): mixed
    {
        // TODO: پیاده‌سازی make مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function resize(/* ... */): mixed
    {
        // TODO: پیاده‌سازی resize مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function crop(/* ... */): mixed
    {
        // TODO: پیاده‌سازی crop مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function thumbnail(/* ... */): mixed
    {
        // TODO: پیاده‌سازی thumbnail مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function watermark(/* ... */): mixed
    {
        // TODO: پیاده‌سازی watermark مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function convert(/* ... */): mixed
    {
        // TODO: پیاده‌سازی convert مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function rotate(/* ... */): mixed
    {
        // TODO: پیاده‌سازی rotate مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function flip(/* ... */): mixed
    {
        // TODO: پیاده‌سازی flip مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function save(/* ... */): mixed
    {
        // TODO: پیاده‌سازی save مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function exif(/* ... */): mixed
    {
        // TODO: پیاده‌سازی exif مطابق مستندات (سند §3 API).
        return null;
    }
}
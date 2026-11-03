<?php

declare(strict_types=1);

namespace Tavaan\Engine\Media;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * MediaManager — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Media\Contracts\MediaManagerInterface
 */
final class MediaManager implements Contracts\MediaManagerInterface
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
    public function upload(/* ... */): mixed
    {
        // TODO: پیاده‌سازی upload مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function fromPath(/* ... */): mixed
    {
        // TODO: پیاده‌سازی fromPath مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function variants(/* ... */): mixed
    {
        // TODO: پیاده‌سازی variants مطابق مستندات (سند §3 API).
        return null;
    }
}
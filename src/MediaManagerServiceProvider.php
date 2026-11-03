<?php

declare(strict_types=1);

namespace Tavaan\Engine\Media;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Media\Contracts\MediaManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * MediaManagerServiceProvider — ثبت سرویس‌های موتور MediaManager.
 */
final class MediaManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(MediaManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new MediaManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('media', $this->app->get(MediaManagerInterface::class));

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            MediaManagerInterface::class,
            'media',
        ];
    }
}
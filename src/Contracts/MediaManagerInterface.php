<?php

declare(strict_types=1);

namespace Tavaan\Engine\Media\Contracts;

/**
 * قرارداد MediaManager.
 *
 * @see \Tavaan\Engine\Media\MediaManager
 * @api 1.0
 */
interface MediaManagerInterface
{
    /**
     * متد upload.
     *
     * @return mixed
     */
    public function upload(/* ... */): mixed;

    /**
     * متد fromPath.
     *
     * @return mixed
     */
    public function fromPath(/* ... */): mixed;

    /**
     * متد variants.
     *
     * @return mixed
     */
    public function variants(/* ... */): mixed;
}
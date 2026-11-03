<?php

declare(strict_types=1);

namespace Tavaan\Engine\Media\Contracts;

/**
 * قرارداد Image.
 *
 * @see \Tavaan\Engine\Media\Image
 * @api 1.0
 */
interface ImageInterface
{
    /**
     * متد make.
     *
     * @return mixed
     */
    public function make(/* ... */): mixed;

    /**
     * متد resize.
     *
     * @return mixed
     */
    public function resize(/* ... */): mixed;

    /**
     * متد crop.
     *
     * @return mixed
     */
    public function crop(/* ... */): mixed;

    /**
     * متد thumbnail.
     *
     * @return mixed
     */
    public function thumbnail(/* ... */): mixed;

    /**
     * متد watermark.
     *
     * @return mixed
     */
    public function watermark(/* ... */): mixed;

    /**
     * متد convert.
     *
     * @return mixed
     */
    public function convert(/* ... */): mixed;

    /**
     * متد rotate.
     *
     * @return mixed
     */
    public function rotate(/* ... */): mixed;

    /**
     * متد flip.
     *
     * @return mixed
     */
    public function flip(/* ... */): mixed;

    /**
     * متد save.
     *
     * @return mixed
     */
    public function save(/* ... */): mixed;

    /**
     * متد exif.
     *
     * @return mixed
     */
    public function exif(/* ... */): mixed;
}
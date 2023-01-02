<?php

namespace Erykai\Compress;


use ImagickException;

/**
 *
 */
class Compress extends Resource
{
    /**
     * @return Compress
     */
    public function pdf(): Compress
    {
        return $this->compressPdf();
    }

    /**
     * @throws ImagickException
     */
    public function img(): Compress
    {
        return $this->compressImg();
    }

    /**
     * @return Compress
     */
    public function video(): Compress
    {
       return $this->compressVideo();
    }

    /**
     * @return Compress
     */
    public function audio(): Compress
    {
        return $this->compressAudio();
    }

    /**
     *
     */
    public function send(): void
    {
        $this->copyAndDelete();
    }
}
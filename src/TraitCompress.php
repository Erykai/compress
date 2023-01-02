<?php

namespace Erykai\Compress;

use ErrorException;
use Imagick;
use ImagickException;

/**
 *
 */
trait TraitCompress
{
    /**
     * @return $this
     */
    protected function compressPdf(): static
    {
        $sDEVICE = "-sDEVICE=pdfwrite";
        $dPDFSETTINGS = "-dPDFSETTINGS=/screen";
        $dColorImageResolution = "-dColorImageResolution=" . $this->getQuality();
        $sOutputFile = "-sOutputFile=";
        $output = $this->getOutput();
        $input = $this->getInput();
        $cmd = "gs  $sDEVICE $dPDFSETTINGS $dColorImageResolution $sOutputFile$output $input";
        shell_exec($cmd);
        return $this;
    }

    /**
     * @throws ImagickException
     */
    protected function compressImg(): static
    {
        $image = new Imagick();
        $image->readImage($this->getInput());
        $image->resizeImage($this->getWidth(), 0, Imagick::FILTER_POINT, 10);
        $image->setImageCompressionQuality($this->getQuality());
        $image->stripImage();
        $image->writeImage($this->getOutput());
        return $this;
    }


    /**
     * @return $this
     */
    protected function compressVideo(): static
    {
        return $this;
    }

    /**
     * @return $this
     */
    protected function compressAudio(): static
    {
        return $this;
    }

    /**
     * copy and remove file
     */
    protected function copyAndDelete(): void
    {
        copy($this->getOutput(), $this->getInput());
        unlink($this->getOutput());
    }

    /**
     * @param string $path
     * @throws ErrorException
     */
    protected function createDir(string $path): void
    {
        $folders = explode("/", $path);
        $dir = dirname(__DIR__, 4);
        foreach ($folders as $folder) {
            $dir .= "/" . $folder;
            if (!file_exists($dir) && !mkdir($dir) && !is_dir($dir)) {
                throw new ErrorException(sprintf('Directory "%s" was not created', $dir));
            }
        }
    }
}
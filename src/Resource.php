<?php

namespace Erykai\Compress;

/**
 *
 */
abstract class Resource
{
    use TraitCompress;

    /**
     * @var string
     */
    protected string $path;
    /**
     * @var string
     */
    protected string $file;
    /**
     * @var int
     */
    protected int $quality;
    /**
     * @var int
     */
    protected int $width;
    /**
     * @var string
     */
    protected string $input;
    /**
     * @var string
     */
    protected string $output;

    /**
     * @param string $path
     * @param string $file
     * @param int $quality
     * @param int $width
     */
    public function __construct(string $path, string $file, int $quality, int $width = 0)
    {
        $this->setPath($path);
        $this->setFile($file);
        $this->setQuality($quality);
        $this->setInput($this->getPath() ."/". $this->getFile());
        $this->setWidth($width);
        //create dir temp
        $pathOut = $this->getPath() . "/compress_temp";
        $this->createDir($pathOut);
        $this->setOutput($pathOut . "/" . $this->getFile());
    }

    /**
     * @return string
     */
    protected function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    protected function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    protected function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    protected function setFile(string $file): void
    {
        $this->file = $file;
    }

    /**
     * @return int
     */
    protected function getQuality(): int
    {
        return $this->quality;
    }

    /**
     * @param int $quality
     */
    protected function setQuality(int $quality): void
    {
        $this->quality = $quality;
    }

    /**
     * @return int
     */
    protected function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    protected function setWidth(int $width): void
    {
        if(!$width)
        {
            [$width] = getimagesize($this->getInput());
            if($width > 1920){
                $width = 1920;
            }
        }

        $this->width = $width;
    }

    /**
     * @return string
     */
    protected function getInput(): string
    {
        return $this->input;
    }

    /**
     * @param string $input
     */
    protected function setInput(string $input): void
    {
        $this->input = $input;
    }

    /**
     * @return string
     */
    protected function getOutput(): string
    {
        return $this->output;
    }

    /**
     * @param string $output
     */
    protected function setOutput(string $output): void
    {
        $this->output = $output;
    }


}
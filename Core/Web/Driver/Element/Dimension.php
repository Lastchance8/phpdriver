<?php
namespace Core\Web\Driver\Element;

/**
 * Class Dimension
 */
class Dimension
{
    /**
     * The width
     *
     * @var int
     */
    protected $width;

    /**
     * The height
     *
     * @var int
     */
    protected $height;

    /**
     * Constructor
     *
     * @param (int)$width
     * @param (int)$height
     */
    public function __construct($width, $height)
    {
        $this->width = (int)$width;
        $this->height = (int)$height;
    }

    /**
     * Get the height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Get the width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Check whether the given dimension is the same as the instance
     *
     * @param Dimension $dimension
     * @return bool
     */
    public function equals(Dimension $dimension)
    {
        return $this->height === $dimension->getHeight() && $this->width === $dimension->getWidth();
    }
}

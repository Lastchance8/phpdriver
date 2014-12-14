<?php
namespace Core\Web\Driver\Element;

/**
 * Class Point
 */
class Point
{
    /**
     * The x-coordinate
     *
     * @var int
     */
    protected $x;

    /**
     * The y-coordinate
     *
     * @var int
     */
    protected $y;

    /**
     * Constructor
     *
     * @param int $x
     * @param int $y
     */
    public function __construct($x, $y)
    {
        $this->x = (int)$x;
        $this->y = (int)$y;
    }

    /**
     * Get the x-coordinate
     *
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Get the y-coordinate
     *
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the point to a new position
     *
     * @param int $x
     * @param int $y
     * @return $this
     */
    public function move($x, $y)
    {
        $this->x = (int)$x;
        $this->y = (int)$y;

        return $this;
    }

    /**
     * Move the current by offsets
     *
     * @param int $x
     * @param int $y
     * @return $this
     */
    public function moveBy($x, $y)
    {
        $this->x += $x;
        $this->y += $y;

        return $this;
    }

    /**
     * Check whether the given point is the same as the instance
     *
     * @param Point $point
     * @return bool
     */
    public function equals(Point $point)
    {
        return $this->x === $point->getX() && $this->y === $point->getY();
    }
}

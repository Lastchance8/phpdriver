<?php
namespace Core\Web\Driver\Element;

use Core\Web\Exception\UnsupportedOperationException;

/**
 * Class Coordinates
 */
class Coordinates
{
    /**
     * @var mixed
     */
    protected $onScreen;

    /**
     * @var \Closure
     */
    protected $inViewPort;

    /**
     * @var \Closure
     */
    protected $onPage;

    /**
     * The attached object
     *
     * @var object
     */
    protected $auxiliary;

    /**
     * Constructor
     *
     * @param mixed $onScreen
     * @param callable $inViewPort
     * @param callable $onPage
     * @param $auxiliary
     */
    public function __construct($onScreen, \Closure $inViewPort, \Closure $onPage, $auxiliary)
    {
        $this->onScreen = $onScreen;
        $this->inViewPort = $inViewPort;
        $this->onPage = $onPage;
        $this->auxiliary = $auxiliary;
    }

    /**
     * @return Point
     * @throws UnsupportedOperationException
     */
    public function onScreen()
    {
        throw new UnsupportedOperationException('onScreen is planned but not yet supported by Selenium');
    }

    /**
     * @return Point
     */
    public function inViewPort()
    {
        return call_user_func($this->inViewPort);
    }

    /**
     * @return Point
     */
    public function onPage()
    {
        return call_user_func($this->onPage);
    }

    /**
     * @return object
     */
    public function getAuxiliary()
    {
        return $this->auxiliary;
    }
}

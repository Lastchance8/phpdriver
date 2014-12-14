<?php
namespace Core\Web\Driver;

use Core\Web\Exception\NoSuchElementException;
use Core\Web\Exception\TimeOutException;

/**
 * Class Wait
 */
class Wait
{
    /**
     * Constructor
     *
     * @param \Core\Web\DriverInterface $driver
     * @param int $timeout
     * @param int $interval
     */
    public function __construct(\Core\Web\DriverInterface $driver, $timeout, $interval)
    {
        $this->driver = $driver;
        $this->timeout = $timeout;
        $this->interval = $interval;
    }

    /**
     * Selenium driver
     *
     * @var \Core\Web\DriverInterface
     */
    protected $driver;

    /**
     * Timeout for search
     *
     * @var int
     */
    protected $timeout;

    /**
     * Interval call
     *
     * @var int
     */
    protected $interval;

    /**
     * Calls the function provided with the driver as an argument until the return value is not falsey
     *
     * @param callable|\Core\Web\Driver\ExpectedCondition $expectedCondition
     * @return mixed
     * @throws NoSuchElementException
     * @throws TimeOutException
     */
    public function until($expectedCondition) {
        $end = microtime(true) + $this->timeout;
        $lastException = null;

        while ($end > microtime(true)) {
            try {
                if ($expectedCondition instanceof \Core\Web\Driver\ExpectedCondition) {
                    $result = call_user_func($expectedCondition->getApply(), $this->driver);
                } else {
                    $result = call_user_func($expectedCondition, $this->driver);
                }
                if ($result) {
                    return $result;
                }
            } catch (NoSuchElementException $e) {
                $lastException = $e;
            }
            usleep($this->interval * 1000);
        }

        if ($lastException) {
            throw $lastException;
        }
        throw new TimeOutException();
    }
}

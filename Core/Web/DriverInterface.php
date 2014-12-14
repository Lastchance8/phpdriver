<?php
namespace Core\Web;

/**
 * Interface DriverInterface
 */
interface DriverInterface extends SearchContextInterface
{
    /**
     * Close the current window
     *
     * @return DriverInterface
     */
    public function close();

    /**
     * Load a new web page in the current browser window
     *
     * @param string $url
     * @return DriverInterface
     */
    public function get($url);

    /**
     * Get a string representing the current URL that the browser is looking at
     *
     * @return string
     */
    public function getCurrentURL();

    /**
     * Get the source of the last loaded page
     *
     * @return string
     */
    public function getPageSource();

    /**
     * Get the title of the current page
     *
     * @return string
     */
    public function getTitle();

    /**
     * Return an opaque handle to this window that uniquely identifies it within this driver instance
     *
     * @return string
     */
    public function getWindowHandle();

    /**
     * Get all window handles available to the current session
     *
     * @return array
     */
    public function getWindowHandles();

    /**
     * Quits this driver, closing every associated window
     *
     * @return void
     */
    public function quit();

    /**
     * Take a screenshot in PNG format of the current page
     *
     * @param string $savePath
     * @return string
     */
    public function takeScreenshot($savePath = null);

    /**
     * Construct a new WebDriverWait by the current WebDriver instance
     *
     * @param int $timeout
     * @param int $interval
     * @return \Core\Web\Driver\Wait
     */
    public function wait($timeout = 30, $interval = 250);

    /**
     * An abstraction for managing stuff you would do in a browser menu. For example, adding and deleting cookies
     *
     * @return WebDriverOptions
     */
    public function manage();

    /**
     * An abstraction allowing the driver to access the browser's history and to navigate to a given URL
     *
     * @return WebDriverNavigation
     */
    public function navigate();

    /**
     * Switch to a different window or frame
     *
     * @return WebDriverTargetLocator
     */
    public function switchTo();

    /**
     * Execute command
     *
     * @param string $name
     * @param array $params
     * @return mixed
     */
    public function execute($name, array $params);
}

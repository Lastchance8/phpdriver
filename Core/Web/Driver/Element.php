<?php
namespace Core\Web\Driver;

use Core\Web\Driver\Element\Point;
use Core\Web\Driver\Element\Dimension;

/**
 * Class Element
 */
class Element implements ElementInterface
{
    /**
     * If this element is a TEXTAREA or text INPUT element, this will clear the value
     *
     * @return $this
     */
    public function clear()
    {
        // TODO: Implement clear() method.
    }

    /**
     * Click this element
     *
     * @return $this
     */
    public function click()
    {
        // TODO: Implement click() method.
    }

    /**
     * Get the value of a the given attribute of the element
     *
     * @param string $name
     * @return string
     */
    public function getAttribute($name)
    {
        // TODO: Implement getAttribute() method.
    }

    /**
     * Get the value of a given CSS property
     *
     * @param string $cssPropertyName
     * @return string
     */
    public function getCSSValue($cssPropertyName)
    {
        // TODO: Implement getCSSValue() method.
    }

    /**
     * Get the location of element relative to the top-left corner of the page
     *
     * @return Point
     */
    public function getLocation()
    {
        // TODO: Implement getLocation() method.
    }

    /**
     * Try scrolling the element into the view port and return the location of element relative to the top-left corner
     * of the page afterwards
     *
     * @return Point
     */
    public function getLocationOnScreenOnceScrolledIntoView()
    {
        // TODO: Implement getLocationOnScreenOnceScrolledIntoView() method.
    }

    /**
     * Get the size of element.
     *
     * @return Dimension The dimension of the element.
     */
    public function getSize()
    {
        // TODO: Implement getSize() method.
    }

    /**
     * Get the tag name of this element.
     *
     * @return string The tag name.
     */
    public function getTagName()
    {
        // TODO: Implement getTagName() method.
    }

    /**
     * Get the visible (i.e. not hidden by CSS) innerText of this element, including sub-elements, without any
     * leading or trailing whitespace
     *
     * @return string
     */
    public function getText()
    {
        // TODO: Implement getText() method.
    }

    /**
     * Is this element displayed or not? This method avoids the problem of having to parse an
     * element's "style" attribute
     *
     * @return bool
     */
    public function isDisplayed()
    {
        // TODO: Implement isDisplayed() method.
    }

    /**
     * Is the element currently enabled or not? This will generally return true for everything but disabled
     * input elements
     *
     * @return bool
     */
    public function isEnabled()
    {
        // TODO: Implement isEnabled() method.
    }

    /**
     * Determine whether or not this element is selected or not
     *
     * @return bool
     */
    public function isSelected()
    {
        // TODO: Implement isSelected() method.
    }

    /**
     * Simulate typing into an element, which may set its value
     *
     * @param mixed $value
     * @return ElementInterface
     */
    public function sendKeys($value)
    {
        // TODO: Implement sendKeys() method.
    }

    /**
     * If this current element is a form, or an element within a form, then this will be submitted to the remote server
     *
     * @return ElementInterface
     */
    public function submit()
    {
        // TODO: Implement submit() method.
    }

    /**
     * Get the opaque ID of the element
     *
     * @return string
     */
    public function getId()
    {
        // TODO: Implement getId() method.
    }

    /**
     * Find the first Element within this element using the given mechanism
     *
     * @param By $locator
     * @return ElementInterface
     */
    public function findElement(\Core\Web\Driver\By $locator)
    {
        // TODO: Implement findElement() method.
    }

    /**
     * Find all Elements within this element using the given mechanism
     *
     * @param By $locator
     * @return ElementInterface[]
     */
    public function findElements(\Core\Web\Driver\By $locator)
    {
        // TODO: Implement findElements() method.
    }
}

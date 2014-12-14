<?php
namespace Core\Web\Driver;

use Core\Web\Driver\Element\Point;
use Core\Web\SearchContextInterface;
use Core\Web\Driver\Element\Dimension;

/**
 * Interface ElementInterface
 */
interface ElementInterface extends SearchContextInterface
{
    /**
     * If this element is a TEXTAREA or text INPUT element, this will clear the value
     *
     * @return $this
     */
    public function clear();

    /**
     * Click this element
     *
     * @return $this
     */
    public function click();

    /**
     * Get the value of a the given attribute of the element
     *
     * @param string $name
     * @return string
     */
    public function getAttribute($name);

    /**
     * Get the value of a given CSS property
     *
     * @param string $cssPropertyName
     * @return string
     */
    public function getCSSValue($cssPropertyName);

    /**
     * Get the location of element relative to the top-left corner of the page
     *
     * @return Point
     */
    public function getLocation();

    /**
     * Try scrolling the element into the view port and return the location of element relative to the top-left corner
     * of the page afterwards
     *
     * @return Point
     */
    public function getLocationOnScreenOnceScrolledIntoView();

    /**
     * Get the size of element.
     *
     * @return Dimension The dimension of the element.
     */
    public function getSize();

    /**
     * Get the tag name of this element.
     *
     * @return string The tag name.
     */
    public function getTagName();

    /**
     * Get the visible (i.e. not hidden by CSS) innerText of this element, including sub-elements, without any
     * leading or trailing whitespace
     *
     * @return string
     */
    public function getText();

    /**
     * Is this element displayed or not? This method avoids the problem of having to parse an
     * element's "style" attribute
     *
     * @return bool
     */
    public function isDisplayed();

    /**
     * Is the element currently enabled or not? This will generally return true for everything but disabled
     * input elements
     *
     * @return bool
     */
    public function isEnabled();

    /**
     * Determine whether or not this element is selected or not
     *
     * @return bool
     */
    public function isSelected();

    /**
     * Simulate typing into an element, which may set its value
     *
     * @param mixed $value
     * @return ElementInterface
     */
    public function sendKeys($value);

    /**
     * If this current element is a form, or an element within a form, then this will be submitted to the remote server
     *
     * @return ElementInterface
     */
    public function submit();

    /**
     * Get the opaque ID of the element
     *
     * @return string
     */
    public function getId();
}

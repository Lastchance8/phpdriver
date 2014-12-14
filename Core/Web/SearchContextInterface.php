<?php
namespace Core\Web;

use Core\Web\Driver\By;
use Core\Web\Driver\ElementInterface;

/**
 * Interface SearchContextInterface
 */
interface SearchContextInterface
{
    /**
     * Find the first Element within this element using the given mechanism
     *
     * @param By $locator
     * @return ElementInterface
     */
    public function findElement(\Core\Web\Driver\By $locator);

    /**
     * Find all Elements within this element using the given mechanism
     *
     * @param By $locator
     * @return ElementInterface[]
     */
    public function findElements(\Core\Web\Driver\By $locator);
}

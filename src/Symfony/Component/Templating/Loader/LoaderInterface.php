<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Templating\Loader;

/**
 * LoaderInterface is the interface all loaders must implement.
 *
 * @author Fabien Potencier <fabien.potencier@symfony-project.com>
 */
interface LoaderInterface
{
    /**
     * Loads a template.
     *
     * @param string $template The logical template name
     *
     * @return Storage|Boolean false if the template cannot be loaded, a Storage instance otherwise
     */
    function load($template);

    /**
     * Returns true if the template is still fresh.
     *
     * @param string    $template The template name
     * @param timestamp $time     The last modification time of the cached template
     */
    function isFresh($template, $time);
}

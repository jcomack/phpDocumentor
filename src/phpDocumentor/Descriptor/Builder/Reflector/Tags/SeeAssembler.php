<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link http://phpdoc.org
 */

namespace phpDocumentor\Descriptor\Builder\Reflector\Tags;

use phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract;
use phpDocumentor\Descriptor\Tag\SeeDescriptor;
use phpDocumentor\Reflection\DocBlock\Tags\See;

/**
 * Constructs a new Descriptor from a Reflector object for the `@see` tag.
 *
 * This class will gather the properties that were parsed by the Reflection mechanism for, specifically, an `@see` tag
 * and use that to create a SeeDescriptor that describes all properties that an `@see` tag may have.
 */
class SeeAssembler extends AssemblerAbstract
{
    /**
     * Creates a new Descriptor from the given Reflector.
     *
     * @param See $data
     */
    public function create($data) : SeeDescriptor
    {
        $descriptor = new SeeDescriptor($data->getName());
        $descriptor->setDescription((string) $data->getDescription());

        $reference = $data->getReference();
        $descriptor->setReference($reference);

        return $descriptor;
    }
}

<?php

/*
 * This file is part of the Draft.php library.
 *
 * (c) The Webstronauts <contact@webstronauts.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Draft\Model\Immutable;

class CharacterMetadata
{
    /**
     * @var array
     */
    private $style;

    /**
     * @var string|null
     */
    private $entity;

    /**
     * Constructor.
     *
     * @param array $style
     * @param string|null $entity
     */
    public function __construct(array $style = [], $entity = null)
    {
        $this->style = $style;
        $this->entity = $entity;
    }

    /**
     * @return array
     */
    public function getStyle(): array
    {
        return $this->style;
    }

    /**
     * @param array $style
     */
    public function setStyle(array $style)
    {
        $this->style = $style;
    }

    /**
     * @return null|string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param null|string $entity
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    }
}

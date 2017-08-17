<?php
namespace RamseyAws\Api;

/**
 * Base class representing a modeled shape.
 */
class Shape extends AbstractModel
{
    /**
     * Get a concrete shape for the given definition.
     *
     * @param array    $definition
     * @param ShapeMap $shapeMap
     *
     * @return mixed
     * @throws \RuntimeException if the type is invalid
     */
    public static function create(array $definition, ShapeMap $shapeMap)
    {
        static $map = [
            'structure' => 'RamseyAws\Api\StructureShape',
            'map'       => 'RamseyAws\Api\MapShape',
            'list'      => 'RamseyAws\Api\ListShape',
            'timestamp' => 'RamseyAws\Api\TimestampShape',
            'integer'   => 'RamseyAws\Api\Shape',
            'double'    => 'RamseyAws\Api\Shape',
            'float'     => 'RamseyAws\Api\Shape',
            'long'      => 'RamseyAws\Api\Shape',
            'string'    => 'RamseyAws\Api\Shape',
            'byte'      => 'RamseyAws\Api\Shape',
            'character' => 'RamseyAws\Api\Shape',
            'blob'      => 'RamseyAws\Api\Shape',
            'boolean'   => 'RamseyAws\Api\Shape'
        ];

        if (isset($definition['shape'])) {
            return $shapeMap->resolve($definition);
        }

        if (!isset($map[$definition['type']])) {
            throw new \RuntimeException('Invalid type: '
                . print_r($definition, true));
        }

        $type = $map[$definition['type']];

        return new $type($definition, $shapeMap);
    }

    /**
     * Get the type of the shape
     *
     * @return string
     */
    public function getType()
    {
        return $this->definition['type'];
    }

    /**
     * Get the name of the shape
     *
     * @return string
     */
    public function getName()
    {
        return $this->definition['name'];
    }
}

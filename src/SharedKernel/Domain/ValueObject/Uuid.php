<?php

namespace srctests\SharedKernel\Domain\ValueObject;

use srctests\SharedKernel\Domain\Assertion\DomainAssertion;

class Uuid extends EntityId
{
    /**
     * @var string
     */
    private $id;

    /**
     * @param string $id
     */
    private function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->id;
    }

    /**
     * @param EntityId|Uuid $id
     * @return bool
     */
    public function equalsTo(EntityId $id): bool
    {
        return $this->id === $id->getValue();
    }

    /**
     * @param $uuidString
     * @return Uuid
     * @throws \Assert\AssertionFailedException
     */
    public static function fromString($uuidString)
    {
        $uuid = self::parseHumanReadableId($uuidString);
        DomainAssertion::uuid($uuid);

        return new self($uuid);
    }

    /**
     * @param $id
     * @return string
     */
    private static function parseHumanReadableId($id)
    {
        if (strpos($id, '-') === false) {
            $id = substr($id, 0, 8) . '-' .
                substr($id, 8, 4) . '-' .
                substr($id, 12, 4) . '-' .
                substr($id, 16, 4) . '-' .
                substr($id, 20);
        }

        return strtolower($id);
    }
}
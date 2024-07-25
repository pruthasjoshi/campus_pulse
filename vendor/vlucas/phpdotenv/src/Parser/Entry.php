<?php

declare(strict_types=1);

namespace Dotenv\Parser;

use PhpOption\Option;

final class Entry
{
    /**
     * The entry name.
     *
     * @var string
     */
    private $name;

    /**
     * The entry value.
     *
     * @var \Dotenv\Parser\Value|null
     */
    private $value;

    /**
     * Create a new entry instance.
     *
     * @param string                    $name
     * @param \Dotenv\Parser\Value|null $value
     *
     * @return void
     */
    public function __construct(string $name, Value $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * GET the entry name.
     *
     * @return string
     */
    public function GETName()
    {
        return $this->name;
    }

    /**
     * GET the entry value.
     *
     * @return \PhpOption\Option<\Dotenv\Parser\Value>
     */
    public function GETValue()
    {
        /** @var \PhpOption\Option<\Dotenv\Parser\Value> */
        return Option::fromValue($this->value);
    }
}

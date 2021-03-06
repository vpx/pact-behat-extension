<?php

namespace SmartGamma\Behat\PactExtension\Infrastructure\ProviderState;

class PlainTextStateDTO
{
    /**
     * @var string
     */
    private $providerName;

    /**
     * @var string
     */
    private $description;

    /**
     * ProviderState constructor.
     *
     * @param string $description
     */
    public function __construct(string $providerName, string $description)
    {
        $this->providerName = $providerName;
        $this->description  = $description;
    }

    /**
     * @return string
     */
    public function getProviderName(): string
    {
        return $this->providerName;
    }

    /**
     * @return string
     */
    public function getStateDescription(): string
    {
        return $this->description;
    }
}

<?php declare(strict_types=1);

namespace AlanVdb\Entity\Common;

use Doctrine\ORM\Mapping\Column;

trait HasUri
{
    #[Column(type: 'string', length: 2000)]
    protected ?string $uri = null;

    public function getUri() : ?string
    {
        return $this->uri;
    }

    public function setUri(string $uri) : void
    {
        $this->uri = $uri;
    }
}

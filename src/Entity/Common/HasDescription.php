<?php declare(strict_types=1);

namespace AlanVdb\Entity\Common;

use Doctrine\ORM\Mapping\Column;

trait HasDescription
{
    #[Column(type: 'string', length: 255)]
    protected ?string $description = null;

    public function getDescription() : ?string
    {
        return $this->description;
    }

    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }
}

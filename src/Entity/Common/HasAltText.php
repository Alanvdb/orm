<?php declare(strict_types=1);

namespace AlanVdb\Entity\Common;

use Doctrine\ORM\Mapping\Column;

trait HasAltText
{
    #[Column(type: 'string', length: 255)]
    protected ?string $altText = null;

    public function getAltText() : ?string
    {
        return $this->altText;
    }

    public function setAltText(string $altText) : void
    {
        $this->altText = $altText;
    }
}

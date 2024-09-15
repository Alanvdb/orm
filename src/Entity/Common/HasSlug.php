<?php declare(strict_types=1);

namespace AlanVdb\Entity\Common;

use Doctrine\ORM\Mapping\Column;

trait HasSlug
{
    #[Column(type: 'string', unique: true, length: 255)]
    protected ?string $slug = null;

    public function getSlug() : ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug) : void
    {
        $this->slug = $slug;
    }
}

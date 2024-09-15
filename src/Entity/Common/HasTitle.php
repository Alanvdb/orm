<?php declare(strict_types=1);

namespace AlanVdb\Entity\Common;

use Doctrine\ORM\Mapping\Column;

trait HasTitle
{
    #[Column(type: 'string', length: 255)]
    protected ?string $title = null;

    public function getTitle() : ?string
    {
        return $this->title;
    }

    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }
}

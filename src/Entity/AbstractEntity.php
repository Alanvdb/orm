<?php declare(strict_types=1);

namespace AlanVdb\ORM\Entity;

use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;

#[MappedSuperclass]
abstract class AbstractEntity
{
    #[Id, Column(type: 'integer'), GeneratedValue]
    protected int|null $id = null;

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getId() : ?int
    {
        return $this->id;
    }
}

<?php declare(strict_types=1);

namespace AlanVdb\ORM\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;

use AlanVdb\ORM\Entity\Common\HasSlug;
use AlanVdb\ORM\Entity\Common\HasThumb;
use AlanVdb\ORM\Entity\Common\HasDescription;

#[Entity]
#[Table(name: 'tags')]
class Tag extends AbstractEntity
{
    use HasSlug, HasThumb, HasDescription;
}

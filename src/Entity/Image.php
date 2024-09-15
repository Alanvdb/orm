<?php declare(strict_types=1);

namespace AlanVdb\ORM\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToMany;

use AlanVdb\ORM\Entity\Common\HasSlug;
use AlanVdb\ORM\Entity\Common\HasTitle;
use AlanVdb\ORM\Entity\Common\HasThumb;
use AlanVdb\ORM\Entity\Common\HasUri;
use AlanVdb\ORM\Entity\Common\HasAltText;
use AlanVdb\ORM\Entity\Common\HasDescription;
use AlanVdb\ORM\Entity\Common\HasTags;

#[Entity]
#[Table(name: 'images')]
class Image extends AbstractEntity
{
    use HasSlug, HasTitle, HasThumb, HasUri, HasAltText, HasDescription, HasTags;    
}

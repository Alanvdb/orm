<?php declare(strict_types=1);

namespace AlanVdb\Entity\Common;

use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinColumn;

trait HasTags
{
    #[ManyToMany(targetEntity: "AlanVdb\\Entity\\Tag")]
    #[JoinTable(name: "user_groups")]
    #[JoinColumn(name: "tag_id", referencedColumnName: "id")]
    protected array $tags = [];

    public function getTags() : array
    {
        return $this->tags;
    }

    public function setTags(array $tags) : void
    {
        $this->tags = $tags;
    }
}

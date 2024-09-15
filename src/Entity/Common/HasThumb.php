<?php declare(strict_types=1);

namespace AlanVdb\Entity\Common;

use AlanVdb\Entity\Image;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

trait HasThumb
{
    #[Column(name: 'thumb', nullable: true)]
    #[ManyToOne(targetEntity: Image::class)]
    #[JoinColumn(name: 'image_id', referencedColumnName: 'id')]
    protected ?Image $thumb = null;

    public function getThumb() : ?Image
    {
        return $this->thumb;
    }

    public function setThumb(?Image $thumb) : void
    {
        $this->thumb = $thumb;
    }
}

<?php

namespace AppBundle\Music;


class MusicCollection
{
    protected $collection = [];

    public function setCollection(array $collection)
    {
        $this->collection = $collection;
    }

    public function getCollection(): array
    {
        return $this->collection;
    }
}
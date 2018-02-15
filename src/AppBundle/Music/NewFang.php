<?php

namespace AppBundle\Music;


class NewFang implements MusicInterface
{
    public function getType(): string
    {
        return 'rock';
    }

    public function getName(): string
    {
        return 'New fang';
    }

    public function getArtist(): string
    {
        return 'Them Crooked Vultures';
    }
}
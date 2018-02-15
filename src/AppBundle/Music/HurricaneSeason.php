<?php

namespace AppBundle\Music;


class HurricaneSeason implements MusicInterface
{
    public function getType(): string
    {
        return 'Brass Band';
    }

    public function getName(): string
    {
        return 'Hurricane Season';
    }

    public function getArtist(): string
    {
        return 'Trombone Shorty';
    }
}
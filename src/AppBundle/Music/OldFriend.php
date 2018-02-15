<?php

namespace AppBundle\Music;


class OldFriend implements MusicInterface
{
    public function getType(): string
    {
        return 'blues';
    }

    public function getName(): string
    {
        return 'Old Friend';
    }

    public function getArtist(): string
    {
        return 'The Allman Brothers band';
    }
}
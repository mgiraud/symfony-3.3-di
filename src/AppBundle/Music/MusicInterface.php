<?php

namespace AppBundle\Music;


interface MusicInterface
{
    public function getType(): string;

    public function getName(): string;

    public function getArtist(): string;
}
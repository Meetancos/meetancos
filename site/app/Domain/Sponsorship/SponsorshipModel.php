<?php

namespace App\Domain\Sponsorship;

use App\Domain\Model;

class SponsorshipModel extends Model
{
    public $id, $name, $url, $image;

    public function __construct($id, $name, $url, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
        $this->image = $image;
    }
}

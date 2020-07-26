<?php

declare(strict_types=1);

namespace App\Domain\Sponsorship;

use App\Domain\DomainException;

class SponsorshipException extends DomainException
{
    public $message;

    public function notFound()
    {
        $this->message = 'The sponsorship you requested does not exist.';
    }
}

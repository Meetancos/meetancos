<?php

declare(strict_types=1);

namespace App\Domain\Sponsorship;

use App\Domain\Repository;

class SponsorshipRepository extends Repository
{
    protected $dataSet;
    protected $exception;

    public function __construct(array $dataSet = null)
    {
        $this->exception = new SponsorshipException();
        $this->dataSet = $dataSet ?? [
                1 => new SponsorshipModel(
                    1, 'Bling ERP', 'https://bling.com.br', '/assets/images/sponsorship/bling.png'
                ),
                2 => new SponsorshipModel(
                    1, 'Hos Sistemas', 'https://hos.com.br', '/assets/images/sponsorship/hos.png'
                ),
                3 => new SponsorshipModel(1, 'tiny ERP', 'https://tiny.com.br', '/assets/images/sponsorship/tiny.png'),
            ];
    }

}

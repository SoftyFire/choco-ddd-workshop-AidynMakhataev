<?php
declare(strict_types=1);

namespace Billing\Domain\Event;

use Billing\Domain\Aggregate\Merchant;
use Ramsey\Uuid\UuidInterface;

final class MerchantWasRegistered
{
    /**
     * @var UuidInterface
     */
    private $id;

    public static function occurred(Merchant $merchant): self
    {
        $self = new self();
        $self->id = $merchant->id();

        return $self;
    }

    public function merchantId(): UuidInterface
    {
        return $this->id;
    }
}

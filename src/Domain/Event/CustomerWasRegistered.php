<?php
declare(strict_types=1);

namespace Billing\Domain\Event;

use Billing\Domain\Aggregate\Customer;
use Ramsey\Uuid\UuidInterface;

final class CustomerWasRegistered
{
    /**
     * @var UuidInterface
     */
    private $id;

    public static function occurred(Customer $customer): self
    {
        $self = new self();
        $self->id = $customer->id();

        return $self;
    }
}

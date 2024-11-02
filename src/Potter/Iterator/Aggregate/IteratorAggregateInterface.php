<?php

declare(strict_types=1);

namespace Potter\Iterator\Aggregate;

use IteratorAggregate, Traversable;

interface IteratorAggregateInterface extends IteratorAggregate
{
     public function getIterator(): Traversable;
}

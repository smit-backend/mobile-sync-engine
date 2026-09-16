<?php

declare(strict_types=1);

namespace SmitBackend\SyncVault\Contracts;

/**
 * Interface ConflictResolverInterface
 *
 * @package SmitBackend\SyncVault
 */
interface ConflictResolverInterface
{
    public function execute(array $payload = []): mixed;
}

<?php

declare(strict_types=1);

namespace SmitBackend\SyncVault;

use SmitBackend\SyncVault\Contracts\ConflictResolverInterface;

/**
 * Class DeltaSyncManager
 *
 * @package SmitBackend\SyncVault
 */
class DeltaSyncManager implements ConflictResolverInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}

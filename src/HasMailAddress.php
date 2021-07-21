<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-ext/contract.
 *
 * @link     https://github.com/hyperf-ext/contract
 * @contact  eric@zhu.email
 * @license  https://github.com/hyperf-ext/contract/blob/master/LICENSE
 */
namespace HyperfExt\Contract;

interface HasMailAddress
{
    /**
     * Get the mail address of the entity.
     */
    public function getMailAddress(): ?string;

    /**
     * Get the mail address display name of the entity.
     */
    public function getMailAddressDisplayName(): ?string;
}

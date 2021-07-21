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

interface HasMobileNumber
{
    /**
     * Get the mobile number of the entity.
     * Must be E.164 international standard format (CC+NDC+SN, eg. +8618812345678).
     */
    public function getMobileNumber(): ?string;
}

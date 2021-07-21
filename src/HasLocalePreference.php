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

interface HasLocalePreference
{
    /**
     * Get the preferred locale of the entity.
     */
    public function getPreferredLocale(): ?string;
}

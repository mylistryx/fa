<?php

declare(strict_types=1);

namespace common\components\FontAwesome;

use common\components\FontAwesome\Base\FAFree;

/**
 * Class FAS
 * Uses for Solid icons. Works with Free config!
 * Use FAS::icon(FAS::_ICON_CONSTANT_NAME).
 * Don`t use strings! Use only constants.
 */
final class FAS extends FAFree
{
    public static string $cssPrefix = 'fa-solid';
}

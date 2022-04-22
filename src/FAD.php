<?php

declare(strict_types=1);

namespace common\components\FontAwesome;

use common\components\FontAwesome\Base\FAPro;

/**
 * Class FAD
 * Uses for DuoTone icons. Only with Pro config!
 * Use FAD::icon(FAD::_ICON_CONSTANT_NAME).
 * Don`t use strings! Use only constants.
 */
final class FAD extends FAPro
{
    public static string $cssPrefix = 'fa-duotone';
}

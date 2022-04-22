<?php

declare(strict_types=1);

namespace common\components\FontAwesome;

use common\components\FontAwesome\Base\FAPro;

/**
 * Class FAR
 * Uses for Regular icons. Works mostly with Pro config! Don`t recomendates to use with Free.
 * Use FAR::icon(FAR::_ICON_CONSTANT_NAME).
 * Don`t use strings! Use only constants.
 */
final class FAR extends FAPro
{
    public static string $cssPrefix = 'fa-regular';
}

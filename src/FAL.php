<?php

declare(strict_types=1);

namespace common\components\FontAwesome;

use common\components\FontAwesome\Base\FAPro;

/**
 * Class FAL
 * Uses for Light icons. Only with Pro config!
 * Use FAL::icon(FAL::_ICON_CONSTANT_NAME).
 * Don`t use strings! Use only constants.
 */
final class FAL extends FAPro
{
    public static string $cssPrefix = 'fa-light';
}

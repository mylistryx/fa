<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Groups\Astronomy;

final class AstronomyGroup implements AstronomyProInterface
{
    public static array $iconsFree = [
        self::_GLOBE,
        self::_METEOR,
        self::_MOON,
        self::_SATELLITE,
        self::_SATELLITE_DISH,
        self::_SHUTTLE_SPACE,
        self::_USER_ASTRONAUT,
    ];

    public static array $iconsPro = [
        self::_ALIEN,
        self::_CAT_SPACE,
        self::_COMET,
        self::_ECLIPSE,
        self::_GALAXY,
        self::_MOON_OVER_SUN,
        self::_MOON_STARS,
        self::_PLANET_MOON,
        self::_PLANET_RINGED,
        self::_RADAR,
        self::_SOLAR_SYSTEM,
        self::_STAR_SHOOTING,
        self::_STARS,
        self::_TELESCOPE,
        self::_UFO,
        self::_UFO_BEAM,
        self::_USER_ALIEN,
    ];
}

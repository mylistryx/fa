<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Groups\Alert;

final class AlertGroup implements AlertProInterface
{
    public static array $iconsFree = [
        self::_BELL,
        self::_BELL_SLASH,
        self::_CIRCLE_QUARTERS,
        self::_CIRCLE_RADIATION,
        self::_COMMENT_EXCLAMATION,
        self::_DIAMOND_EXCLAMATION,
        self::_EXCLAMATION,
        self::_LIGHT_EMERGENCY,
        self::_LIGHT_EMERGENCY_ON,
        self::_LIGHTBULB_EXCLAMATION,
        self::_MESSAGE_EXCLAMATION,
        self::_QUESTION,
        self::_RADIATION,
        self::_SKULL_CROSSBONES,
        self::_TRIANGLE_EXCLAMATION,
    ];

    public static array $iconsPro = [
        self::_ALARM_CLOCK,
        self::_ALARM_EXCLAMATION,
        self::_BATTERY_EXCLAMATION,
        self::_BELL_EXCLAMATION,
        self::_BELL_ON,
        self::_BELL_SCHOOL_SLASH,
        self::_BELLS,
        self::_CALENDAR_EXCLAMATION,
        self::_CIRCLE_EXCLAMATION,
        self::_CIRCLE_EXCLAMATION_CHECK,
        self::_CLOUD_EXCLAMATION,
        self::_CLOUD_QUESTION,
        self::_ENGINE_WORKING,
        self::_FILE_EXCLAMATION,
        self::_HEXAGON_EXCLAMATION,
        self::_LIGHTBULB_EXCLAMATION_ON,
        self::_LOCATION_EXCLAMATION,
        self::_OCTAGON_EXCLAMATION,
        self::_PARTY_BELL,
        self::_PARTY_HORN,
        self::_ROTATE_EXCLAMATION,
        self::_SEAL_EXCLAMATION,
        self::_SEAL_QUESTION,
        self::_SENSOR,
        self::_SENSOR_CLOUD,
        self::_SENSOR_FIRE,
        self::_SENSOR_ON,
        self::_SENSOR_TRIANGLE_EXCLAMATION,
        self::_SHIELD_EXCLAMATION,
        self::_SQUARE_EXCLAMATION,
        self::_STAR_EXCLAMATION,
        self::_WIFI_EXCLAMATION,
        self::_WIND_WARNING,
    ];
}

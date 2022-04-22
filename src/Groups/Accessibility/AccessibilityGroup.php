<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Groups\Accessibility;

final class AccessibilityGroup implements AccessibilityProInterface
{
    public static array $iconsFree = [
        self::_AUDIO_DESCRIPTION,
        self::_BRAILLE,
        self::_CIRCLE_INFO,
        self::_CIRCLE_QUESTION,
        self::_CLOSED_CAPTIONING,
        self::_EAR_DEAF,
        self::_EAR_LISTEN,
        self::_EYE,
        self::_EYE_LOW_VISION,
        self::_FINGERPRINT,
        self::_HANDS,
        self::_HANDS_ASL_INTERPRETING,
        self::_HANDSHAKE_ANGLE,
        self::_PERSON_CANE,
        self::_PERSON_WALKING_WITH_CANE,
        self::_PHONE_VOLUME,
        self::_QUESTION,
        self::_TTY,
        self::_UNIVERSAL_ACCESS,
        self::_WHEELCHAIR,
        self::_WHEELCHAIR_MOVE,
    ];

    public static array $iconsPro = [
        self::_AUDIO_DESCRIPTION_SLASH,
        self::_BRIGHTNESS,
        self::_BRIGHTNESS_LOW,
        self::_CLOSED_CAPTIONING_SLASH,
        self::_COMMENT_CAPTIONS,
        self::_DOG_LEASHED,
        self::_EAR,
        self::_HEAD_SIDE_HEART,
        self::_KEYBOARD_BRIGHTNESS,
        self::_KEYBOARD_BRIGHTNESS_LOW,
        self::_MESSAGE_CAPTIONS,
        self::_SQUARE_INFO,
        self::_SQUARE_QUESTION,
        self::_TTY_ANSWER,
    ];

}

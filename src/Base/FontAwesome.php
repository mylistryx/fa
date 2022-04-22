<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Base;

use common\components\FontAwesome\Items\Icon;
use common\components\FontAwesome\Items\Stack;
use common\components\FontAwesome\Items\UnorderedList;

abstract class FontAwesome
{
    public static string $cssPrefix = 'fa-solid';

    public static string $basePrefix = 'fa';


    /**
     * @param string $name
     * @param array $options
     * @return Icon
     */
    public static function icon(string $name, array $options = []): Icon
    {
        return new Icon(static::$cssPrefix, $name, $options);
    }

    /**
     * @param string $name
     * @param array $options
     * @return Icon
     */
    public static function i(string $name, array $options = []): Icon
    {
        return static::icon($name, $options);
    }

    /**
     * @param array $options
     * @return Stack
     */
    public static function stack(array $options = []): Stack
    {
        return new Stack(static::$cssPrefix, $options);
    }

    /**
     * @param array $options
     * @return Stack
     */
    public static function s(array $options = []): Stack
    {
        return static::stack($options);
    }

    /**
     * @param array $options
     * @return UnorderedList
     */
    public static function ul(array $options = []): UnorderedList
    {
        return new UnorderedList(static::$cssPrefix, $options);
    }
}

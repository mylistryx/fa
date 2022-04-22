<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Items;

use common\components\FontAwesome\Base\FontAwesome;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Icon
{
    private array $options = [];

    /**
     * @param string $cssPrefix
     * @param string $name
     * @param array $options
     */
    public function __construct(string $cssPrefix, string $name, array $options = [])
    {
        Html::addCssClass($options, $cssPrefix);
        Html::addCssClass($options, FontAwesome::$basePrefix . '-' . $name);
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $options = $this->options;

        $tag = ArrayHelper::remove($options, 'tag', 'i');

        return Html::tag($tag, null, $options);
    }


    /**
     * @return $this
     */
    public function inverse(): self
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-inverse');
    }

    /**
     * @param array $options
     * @return $this
     */
    public function spin(array $options = []): self
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-spin');
    }

    /**
     * @param array $options
     * @return $this
     */
    public function beat(array $options = []): self
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-beat');
    }

    /**
     * @param array $options
     * @return $this
     */
    public function pulse(array $options = []): self
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-pulse');
    }

    /**
     * @return $this
     */
    public function fixedWidth(): self
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-fw');
    }

    /**
     * @return $this
     */
    public function li(): self
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-li');
    }

    /**
     * @return $this
     */
    public function border(array $options = []): self
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-border');
    }

    /**
     * @return $this
     */
    public function pullLeft(): self
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-pull-left');
    }

    /**
     * @return $this
     */
    public function pullRight(): self
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-pull-right');
    }

    /**
     * @param $value
     * @return $this
     * @throws InvalidConfigException
     */
    public function size($value): self
    {
        $values = [
            FASizeEnum::SIZE_2XS,
            FASizeEnum::SIZE_XS,
            FASizeEnum::SIZE_SM,
            FASizeEnum::SIZE_LG,
            FASizeEnum::SIZE_XL,
            FASizeEnum::SIZE_2XL,
            FASizeEnum::SIZE_1X,
            FASizeEnum::SIZE_2X,
            FASizeEnum::SIZE_3X,
            FASizeEnum::SIZE_4X,
            FASizeEnum::SIZE_5X,
            FASizeEnum::SIZE_6X,
            FASizeEnum::SIZE_7X,
            FASizeEnum::SIZE_8X,
            FASizeEnum::SIZE_9X,
            FASizeEnum::SIZE_10X,
        ];

        if (!in_array((string)$value, $values, true)) {
            $message = sprintf(
                '%s - invalid value. Use one of the constants: %s.',
                'FontAwesome::size()',
                implode(', ', $values)
            );

            throw new InvalidConfigException($message);
        }

        return $this->addCssClass(FontAwesome::$basePrefix . '-' . $value);
    }

    /**
     * @param $value
     * @return $this
     * @throws InvalidConfigException
     */
    public function rotate($value): self
    {
        $values = [
            FARotateEnum::ROTATE_90,
            FARotateEnum::ROTATE_180,
            FARotateEnum::ROTATE_270,
        ];

        if (!in_array((string)$value, $values, true)) {
            $message = sprintf(
                '%s - invalid value. Use one of the constants: %s.',
                'FontAwesome::rotate()',
                implode(', ', $values)
            );

            throw new InvalidConfigException($message);
        }

        return $this->addCssClass(FontAwesome::$basePrefix . '-rotate-' . $value);
    }

    /**
     * @param $value
     * @return $this
     * @throws InvalidConfigException
     */
    public function flip($value): self
    {
        $values = [
            FAFlipEnum::FLIP_HORIZONTAL,
            FAFlipEnum::FLIP_VERTICAL,
            FAFlipEnum::FLIP_BOTH,
        ];

        if (!in_array((string)$value, $values, true)) {
            $message = sprintf(
                '%s - invalid value. Use one of the constants: %s.',
                'FontAwesome::flip()',
                implode(', ', $values)
            );

            throw new InvalidConfigException($message);
        }

        return $this->addCssClass(FontAwesome::$basePrefix . '-flip-' . $value);
    }

    /**
     * @param $class
     * @return $this
     */
    public function addCssClass($class): self
    {
        Html::addCssClass($this->options, $class);
        return $this;
    }
}

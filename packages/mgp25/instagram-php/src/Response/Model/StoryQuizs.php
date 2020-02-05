<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * StoryQuizs.
 *
 * @method float getHeight()
 * @method int getIsHidden()
 * @method int getIsPinned()
 * @method int getIsSticker()
 * @method QuizSticker getQuizSticker()
 * @method float getRotation()
 * @method float getWidth()
 * @method float getX()
 * @method float getY()
 * @method float getZ()
 * @method bool isHeight()
 * @method bool isIsHidden()
 * @method bool isIsPinned()
 * @method bool isIsSticker()
 * @method bool isQuizSticker()
 * @method bool isRotation()
 * @method bool isWidth()
 * @method bool isX()
 * @method bool isY()
 * @method bool isZ()
 * @method $this setHeight(float $value)
 * @method $this setIsHidden(int $value)
 * @method $this setIsPinned(int $value)
 * @method $this setIsSticker(int $value)
 * @method $this setQuizSticker(QuizSticker $value)
 * @method $this setRotation(float $value)
 * @method $this setWidth(float $value)
 * @method $this setX(float $value)
 * @method $this setY(float $value)
 * @method $this setZ(float $value)
 * @method $this unsetHeight()
 * @method $this unsetIsHidden()
 * @method $this unsetIsPinned()
 * @method $this unsetIsSticker()
 * @method $this unsetQuizSticker()
 * @method $this unsetRotation()
 * @method $this unsetWidth()
 * @method $this unsetX()
 * @method $this unsetY()
 * @method $this unsetZ()
 */
class StoryQuizs extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'x'                => 'float',
        'y'                => 'float',
        'z'                => 'float',
        'width'            => 'float',
        'height'           => 'float',
        'rotation'         => 'float',
        'is_pinned'        => 'int',
        'is_hidden'        => 'int',
        'is_sticker'       => 'int',
        'quiz_sticker'     => 'QuizSticker',
    ];
}

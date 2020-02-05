<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;
use InstagramAPI\Response\PropertyCollection;

/**
 * ReelMention.
 *
 * @method string getDisplayType()
 * @method float getHeight()
 * @method int getIsHidden()
 * @method int getIsPinned()
 * @method int getIsSticker()
 * @method float getRotation()
 * @method User getUser()
 * @method float getWidth()
 * @method float getX()
 * @method float getY()
 * @method float getZ()
 * @method bool isDisplayType()
 * @method bool isHeight()
 * @method bool isIsHidden()
 * @method bool isIsPinned()
 * @method bool isIsSticker()
 * @method bool isRotation()
 * @method bool isUser()
 * @method bool isWidth()
 * @method bool isX()
 * @method bool isY()
 * @method bool isZ()
 * @method $this setDisplayType(string $value)
 * @method $this setHeight(float $value)
 * @method $this setIsHidden(int $value)
 * @method $this setIsPinned(int $value)
 * @method $this setIsSticker(int $value)
 * @method $this setRotation(float $value)
 * @method $this setUser(User $value)
 * @method $this setWidth(float $value)
 * @method $this setX(float $value)
 * @method $this setY(float $value)
 * @method $this setZ(float $value)
 * @method $this unsetDisplayType()
 * @method $this unsetHeight()
 * @method $this unsetIsHidden()
 * @method $this unsetIsPinned()
 * @method $this unsetIsSticker()
 * @method $this unsetRotation()
 * @method $this unsetUser()
 * @method $this unsetWidth()
 * @method $this unsetX()
 * @method $this unsetY()
 * @method $this unsetZ()
 */
class ReelMention extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        PropertyCollection\Sticker::class,
        'user'         => 'User',
        'is_hidden'    => 'int',
        'display_type' => 'string',
        'is_sticker'   => 'int',
    ];
}

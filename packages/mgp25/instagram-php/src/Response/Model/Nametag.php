<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * Nametag.
 *
 * @method string getEmoji()
 * @method string getEmojiColor()
 * @method int getGradient()
 * @method int getMode()
 * @method int getSelfieSticker()
 * @method bool isEmoji()
 * @method bool isEmojiColor()
 * @method bool isGradient()
 * @method bool isMode()
 * @method bool isSelfieSticker()
 * @method $this setEmoji(string $value)
 * @method $this setEmojiColor(string $value)
 * @method $this setGradient(int $value)
 * @method $this setMode(int $value)
 * @method $this setSelfieSticker(int $value)
 * @method $this unsetEmoji()
 * @method $this unsetEmojiColor()
 * @method $this unsetGradient()
 * @method $this unsetMode()
 * @method $this unsetSelfieSticker()
 */
class Nametag extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'mode'                 => 'int',
        'gradient'             => 'int',
        'emoji'                => 'string',
        'emoji_color'          => 'string',
        'selfie_sticker'       => 'int',
    ];
}

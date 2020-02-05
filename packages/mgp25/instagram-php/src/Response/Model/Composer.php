<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * Composer.
 *
 * @method bool getAspectRatioFinished()
 * @method bool getNuxFinished()
 * @method bool isAspectRatioFinished()
 * @method bool isNuxFinished()
 * @method $this setAspectRatioFinished(bool $value)
 * @method $this setNuxFinished(bool $value)
 * @method $this unsetAspectRatioFinished()
 * @method $this unsetNuxFinished()
 */
class Composer extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'nux_finished'          => 'bool',
        'aspect_ratio_finished' => 'bool',
    ];
}

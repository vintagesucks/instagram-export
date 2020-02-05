<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * SupportedCapabilities.
 *
 * @method string getName()
 * @method string getValue()
 * @method bool isName()
 * @method bool isValue()
 * @method $this setName(string $value)
 * @method $this setValue(string $value)
 * @method $this unsetName()
 * @method $this unsetValue()
 */
class SupportedCapabilities extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'name'               => 'string',
        'value'              => 'string',
    ];
}

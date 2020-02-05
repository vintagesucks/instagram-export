<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * DataPoints.
 *
 * @method string getLabel()
 * @method int getValue()
 * @method bool isLabel()
 * @method bool isValue()
 * @method $this setLabel(string $value)
 * @method $this setValue(int $value)
 * @method $this unsetLabel()
 * @method $this unsetValue()
 */
class DataPoints extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'label'  => 'string',
        'value'  => 'int',
    ];
}

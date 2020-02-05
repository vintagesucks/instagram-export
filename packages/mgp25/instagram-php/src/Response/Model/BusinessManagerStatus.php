<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * BusinessManagerStatus.
 *
 * @method string getAccountType()
 * @method bool getHasInsights()
 * @method bool isAccountType()
 * @method bool isHasInsights()
 * @method $this setAccountType(string $value)
 * @method $this setHasInsights(bool $value)
 * @method $this unsetAccountType()
 * @method $this unsetHasInsights()
 */
class BusinessManagerStatus extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'has_insights'  => 'bool',
        'account_type'  => 'string',
    ];
}

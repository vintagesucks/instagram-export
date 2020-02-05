<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * IabAutofillOptoutInfo.
 *
 * @method string getDomain()
 * @method bool getIsIabAutofillOptout()
 * @method bool isDomain()
 * @method bool isIsIabAutofillOptout()
 * @method $this setDomain(string $value)
 * @method $this setIsIabAutofillOptout(bool $value)
 * @method $this unsetDomain()
 * @method $this unsetIsIabAutofillOptout()
 */
class IabAutofillOptoutInfo extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'domain'                            => 'string',
        'is_iab_autofill_optout'            => 'bool',
    ];
}

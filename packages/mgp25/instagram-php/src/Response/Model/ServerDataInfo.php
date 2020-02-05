<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * ServerDataInfo.
 *
 * @method string getCluster()
 * @method string getConferenceName()
 * @method string getNonce()
 * @method bool isCluster()
 * @method bool isConferenceName()
 * @method bool isNonce()
 * @method $this setCluster(string $value)
 * @method $this setConferenceName(string $value)
 * @method $this setNonce(string $value)
 * @method $this unsetCluster()
 * @method $this unsetConferenceName()
 * @method $this unsetNonce()
 */
class ServerDataInfo extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'cluster'                => 'string',
        'nonce'                  => 'string',
        'conferenceName'         => 'string',
    ];
}

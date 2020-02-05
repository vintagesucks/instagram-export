<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * CapabilitiesDecisionsResponse.
 *
 * @method mixed getDecisions()
 * @method mixed getMessage()
 * @method string getStatus()
 * @method Model\_Message[] get_Messages()
 * @method bool isDecisions()
 * @method bool isMessage()
 * @method bool isStatus()
 * @method bool is_Messages()
 * @method $this setDecisions(mixed $value)
 * @method $this setMessage(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetDecisions()
 * @method $this unsetMessage()
 * @method $this unsetStatus()
 * @method $this unset_Messages()
 */
class CapabilitiesDecisionsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'decisions'             => '',
    ];
}

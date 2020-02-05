<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * WriteSuppotedCapabilitiesResponse.
 *
 * @method mixed getMessage()
 * @method string getStatus()
 * @method Model\SupportedCapabilities[] getSupportedCapabilities()
 * @method Model\_Message[] get_Messages()
 * @method bool isMessage()
 * @method bool isStatus()
 * @method bool isSupportedCapabilities()
 * @method bool is_Messages()
 * @method $this setMessage(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this setSupportedCapabilities(Model\SupportedCapabilities[] $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetMessage()
 * @method $this unsetStatus()
 * @method $this unsetSupportedCapabilities()
 * @method $this unset_Messages()
 */
class WriteSuppotedCapabilitiesResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'supported_capabilities'             => 'Model\SupportedCapabilities[]',
    ];
}

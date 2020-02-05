<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * QPCooldownsResponse.
 *
 * @method int getDefault()
 * @method int getGlobal()
 * @method mixed getMessage()
 * @method Model\Slot[] getSlots()
 * @method string getStatus()
 * @method Model\QPSurface[] getSurfaces()
 * @method int getTtl()
 * @method Model\_Message[] get_Messages()
 * @method bool isDefault()
 * @method bool isGlobal()
 * @method bool isMessage()
 * @method bool isSlots()
 * @method bool isStatus()
 * @method bool isSurfaces()
 * @method bool isTtl()
 * @method bool is_Messages()
 * @method $this setDefault(int $value)
 * @method $this setGlobal(int $value)
 * @method $this setMessage(mixed $value)
 * @method $this setSlots(Model\Slot[] $value)
 * @method $this setStatus(string $value)
 * @method $this setSurfaces(Model\QPSurface[] $value)
 * @method $this setTtl(int $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetDefault()
 * @method $this unsetGlobal()
 * @method $this unsetMessage()
 * @method $this unsetSlots()
 * @method $this unsetStatus()
 * @method $this unsetSurfaces()
 * @method $this unsetTtl()
 * @method $this unset_Messages()
 */
class QPCooldownsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'ttl'       => 'int',
        'global'    => 'int',
        'default'   => 'int',
        'surfaces'  => 'Model\QPSurface[]',
        'slots'     => 'Model\Slot[]',
    ];
}

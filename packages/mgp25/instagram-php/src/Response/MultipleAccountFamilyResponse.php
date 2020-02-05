<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * MultipleAccountFamilyResponse.
 *
 * @method string[] getChildAccounts()
 * @method string[] getMainAccounts()
 * @method mixed getMessage()
 * @method string getStatus()
 * @method Model\_Message[] get_Messages()
 * @method bool isChildAccounts()
 * @method bool isMainAccounts()
 * @method bool isMessage()
 * @method bool isStatus()
 * @method bool is_Messages()
 * @method $this setChildAccounts(string[] $value)
 * @method $this setMainAccounts(string[] $value)
 * @method $this setMessage(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetChildAccounts()
 * @method $this unsetMainAccounts()
 * @method $this unsetMessage()
 * @method $this unsetStatus()
 * @method $this unset_Messages()
 */
class MultipleAccountFamilyResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'child_accounts' => 'string[]',
        'main_accounts'  => 'string[]',
    ];
}

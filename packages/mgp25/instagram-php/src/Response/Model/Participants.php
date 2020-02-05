<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * Participants.
 *
 * @method int getAnswer()
 * @method string getTs()
 * @method User getUser()
 * @method bool isAnswer()
 * @method bool isTs()
 * @method bool isUser()
 * @method $this setAnswer(int $value)
 * @method $this setTs(string $value)
 * @method $this setUser(User $value)
 * @method $this unsetAnswer()
 * @method $this unsetTs()
 * @method $this unsetUser()
 */
class Participants extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'user'                      => 'User',
        'answer'                    => 'int',
        'ts'                        => 'string',
    ];
}

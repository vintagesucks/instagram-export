<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * StoryQuizParticipantInfo.
 *
 * @method mixed getMaxId()
 * @method bool getMoreAvailable()
 * @method Participants[] getParticipants()
 * @method string getQuizId()
 * @method bool isMaxId()
 * @method bool isMoreAvailable()
 * @method bool isParticipants()
 * @method bool isQuizId()
 * @method $this setMaxId(mixed $value)
 * @method $this setMoreAvailable(bool $value)
 * @method $this setParticipants(Participants[] $value)
 * @method $this setQuizId(string $value)
 * @method $this unsetMaxId()
 * @method $this unsetMoreAvailable()
 * @method $this unsetParticipants()
 * @method $this unsetQuizId()
 */
class StoryQuizParticipantInfo extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'quiz_id'                         => 'string',
        'participants'                    => 'Participants[]',
        'max_id'                          => '',
        'more_available'                  => 'bool',
    ];
}

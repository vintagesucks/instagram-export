<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * DirectInboxResponse.
 *
 * @method bool getHasPendingTopRequests()
 * @method Model\DirectInbox getInbox()
 * @method Model\Megaphone getMegaphone()
 * @method mixed getMessage()
 * @method mixed getPendingRequestsTotal()
 * @method Model\User[] getPendingRequestsUsers()
 * @method string getSeqId()
 * @method string getSnapshotAtMs()
 * @method string getStatus()
 * @method Model\User getViewer()
 * @method Model\_Message[] get_Messages()
 * @method bool isHasPendingTopRequests()
 * @method bool isInbox()
 * @method bool isMegaphone()
 * @method bool isMessage()
 * @method bool isPendingRequestsTotal()
 * @method bool isPendingRequestsUsers()
 * @method bool isSeqId()
 * @method bool isSnapshotAtMs()
 * @method bool isStatus()
 * @method bool isViewer()
 * @method bool is_Messages()
 * @method $this setHasPendingTopRequests(bool $value)
 * @method $this setInbox(Model\DirectInbox $value)
 * @method $this setMegaphone(Model\Megaphone $value)
 * @method $this setMessage(mixed $value)
 * @method $this setPendingRequestsTotal(mixed $value)
 * @method $this setPendingRequestsUsers(Model\User[] $value)
 * @method $this setSeqId(string $value)
 * @method $this setSnapshotAtMs(string $value)
 * @method $this setStatus(string $value)
 * @method $this setViewer(Model\User $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetHasPendingTopRequests()
 * @method $this unsetInbox()
 * @method $this unsetMegaphone()
 * @method $this unsetMessage()
 * @method $this unsetPendingRequestsTotal()
 * @method $this unsetPendingRequestsUsers()
 * @method $this unsetSeqId()
 * @method $this unsetSnapshotAtMs()
 * @method $this unsetStatus()
 * @method $this unsetViewer()
 * @method $this unset_Messages()
 */
class DirectInboxResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'viewer'                   => 'Model\User',
        'pending_requests_total'   => '',
        'seq_id'                   => 'string',
        'has_pending_top_requests' => 'bool',
        'pending_requests_users'   => 'Model\User[]',
        'inbox'                    => 'Model\DirectInbox',
        'megaphone'                => 'Model\Megaphone',
        'snapshot_at_ms'           => 'string',
    ];
}

<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * DirectThread.
 *
 * @method ActionBadge getActionBadge()
 * @method string[] getAdminUserIds()
 * @method bool getApprovalRequiredForNewMembers()
 * @method bool getArchived()
 * @method int getBusinessThreadFolder()
 * @method bool getCanonical()
 * @method int getExpiringMediaReceiveCount()
 * @method int getExpiringMediaSendCount()
 * @method int getFolder()
 * @method bool getHasNewer()
 * @method bool getHasOlder()
 * @method int getInputMode()
 * @method User getInviter()
 * @method bool getIsGroup()
 * @method bool getIsPin()
 * @method bool getIsSpam()
 * @method DirectThreadItem[] getItems()
 * @method string getLastActivityAt()
 * @method mixed getLastActivityAtSecs()
 * @method PermanentItem getLastPermanentItem()
 * @method UnpredictableKeys\DirectThreadLastSeenAtUnpredictableContainer getLastSeenAt()
 * @method User[] getLeftUsers()
 * @method bool getMentionsMuted()
 * @method bool getMuted()
 * @method bool getNamed()
 * @method string getNewestCursor()
 * @method string getOldestCursor()
 * @method bool getPending()
 * @method string getPendingScore()
 * @method int getReadState()
 * @method int getReshareReceiveCount()
 * @method int getReshareSendCount()
 * @method string getThreadId()
 * @method string getThreadTitle()
 * @method string getThreadType()
 * @method string getThreadV2Id()
 * @method mixed getUnseenCount()
 * @method User[] getUsers()
 * @method bool getValuedRequest()
 * @method bool getVcMuted()
 * @method string getViewerId()
 * @method bool isActionBadge()
 * @method bool isAdminUserIds()
 * @method bool isApprovalRequiredForNewMembers()
 * @method bool isArchived()
 * @method bool isBusinessThreadFolder()
 * @method bool isCanonical()
 * @method bool isExpiringMediaReceiveCount()
 * @method bool isExpiringMediaSendCount()
 * @method bool isFolder()
 * @method bool isHasNewer()
 * @method bool isHasOlder()
 * @method bool isInputMode()
 * @method bool isInviter()
 * @method bool isIsGroup()
 * @method bool isIsPin()
 * @method bool isIsSpam()
 * @method bool isItems()
 * @method bool isLastActivityAt()
 * @method bool isLastActivityAtSecs()
 * @method bool isLastPermanentItem()
 * @method bool isLastSeenAt()
 * @method bool isLeftUsers()
 * @method bool isMentionsMuted()
 * @method bool isMuted()
 * @method bool isNamed()
 * @method bool isNewestCursor()
 * @method bool isOldestCursor()
 * @method bool isPending()
 * @method bool isPendingScore()
 * @method bool isReadState()
 * @method bool isReshareReceiveCount()
 * @method bool isReshareSendCount()
 * @method bool isThreadId()
 * @method bool isThreadTitle()
 * @method bool isThreadType()
 * @method bool isThreadV2Id()
 * @method bool isUnseenCount()
 * @method bool isUsers()
 * @method bool isValuedRequest()
 * @method bool isVcMuted()
 * @method bool isViewerId()
 * @method $this setActionBadge(ActionBadge $value)
 * @method $this setAdminUserIds(string[] $value)
 * @method $this setApprovalRequiredForNewMembers(bool $value)
 * @method $this setArchived(bool $value)
 * @method $this setBusinessThreadFolder(int $value)
 * @method $this setCanonical(bool $value)
 * @method $this setExpiringMediaReceiveCount(int $value)
 * @method $this setExpiringMediaSendCount(int $value)
 * @method $this setFolder(int $value)
 * @method $this setHasNewer(bool $value)
 * @method $this setHasOlder(bool $value)
 * @method $this setInputMode(int $value)
 * @method $this setInviter(User $value)
 * @method $this setIsGroup(bool $value)
 * @method $this setIsPin(bool $value)
 * @method $this setIsSpam(bool $value)
 * @method $this setItems(DirectThreadItem[] $value)
 * @method $this setLastActivityAt(string $value)
 * @method $this setLastActivityAtSecs(mixed $value)
 * @method $this setLastPermanentItem(PermanentItem $value)
 * @method $this setLastSeenAt(UnpredictableKeys\DirectThreadLastSeenAtUnpredictableContainer $value)
 * @method $this setLeftUsers(User[] $value)
 * @method $this setMentionsMuted(bool $value)
 * @method $this setMuted(bool $value)
 * @method $this setNamed(bool $value)
 * @method $this setNewestCursor(string $value)
 * @method $this setOldestCursor(string $value)
 * @method $this setPending(bool $value)
 * @method $this setPendingScore(string $value)
 * @method $this setReadState(int $value)
 * @method $this setReshareReceiveCount(int $value)
 * @method $this setReshareSendCount(int $value)
 * @method $this setThreadId(string $value)
 * @method $this setThreadTitle(string $value)
 * @method $this setThreadType(string $value)
 * @method $this setThreadV2Id(string $value)
 * @method $this setUnseenCount(mixed $value)
 * @method $this setUsers(User[] $value)
 * @method $this setValuedRequest(bool $value)
 * @method $this setVcMuted(bool $value)
 * @method $this setViewerId(string $value)
 * @method $this unsetActionBadge()
 * @method $this unsetAdminUserIds()
 * @method $this unsetApprovalRequiredForNewMembers()
 * @method $this unsetArchived()
 * @method $this unsetBusinessThreadFolder()
 * @method $this unsetCanonical()
 * @method $this unsetExpiringMediaReceiveCount()
 * @method $this unsetExpiringMediaSendCount()
 * @method $this unsetFolder()
 * @method $this unsetHasNewer()
 * @method $this unsetHasOlder()
 * @method $this unsetInputMode()
 * @method $this unsetInviter()
 * @method $this unsetIsGroup()
 * @method $this unsetIsPin()
 * @method $this unsetIsSpam()
 * @method $this unsetItems()
 * @method $this unsetLastActivityAt()
 * @method $this unsetLastActivityAtSecs()
 * @method $this unsetLastPermanentItem()
 * @method $this unsetLastSeenAt()
 * @method $this unsetLeftUsers()
 * @method $this unsetMentionsMuted()
 * @method $this unsetMuted()
 * @method $this unsetNamed()
 * @method $this unsetNewestCursor()
 * @method $this unsetOldestCursor()
 * @method $this unsetPending()
 * @method $this unsetPendingScore()
 * @method $this unsetReadState()
 * @method $this unsetReshareReceiveCount()
 * @method $this unsetReshareSendCount()
 * @method $this unsetThreadId()
 * @method $this unsetThreadTitle()
 * @method $this unsetThreadType()
 * @method $this unsetThreadV2Id()
 * @method $this unsetUnseenCount()
 * @method $this unsetUsers()
 * @method $this unsetValuedRequest()
 * @method $this unsetVcMuted()
 * @method $this unsetViewerId()
 */
class DirectThread extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'thread_id'                         => 'string',
        'thread_v2_id'                      => 'string',
        'users'                             => 'User[]',
        'left_users'                        => 'User[]',
        'items'                             => 'DirectThreadItem[]',
        'last_activity_at'                  => 'string',
        'muted'                             => 'bool',
        'is_pin'                            => 'bool',
        'named'                             => 'bool',
        'canonical'                         => 'bool',
        'pending'                           => 'bool',
        'valued_request'                    => 'bool',
        'thread_type'                       => 'string',
        'viewer_id'                         => 'string',
        'thread_title'                      => 'string',
        'pending_score'                     => 'string',
        'vc_muted'                          => 'bool',
        'is_group'                          => 'bool',
        'reshare_send_count'                => 'int',
        'reshare_receive_count'             => 'int',
        'expiring_media_send_count'         => 'int',
        'expiring_media_receive_count'      => 'int',
        'inviter'                           => 'User',
        'has_older'                         => 'bool',
        'has_newer'                         => 'bool',
        'last_seen_at'                      => 'UnpredictableKeys\DirectThreadLastSeenAtUnpredictableContainer',
        'newest_cursor'                     => 'string',
        'oldest_cursor'                     => 'string',
        'is_spam'                           => 'bool',
        'last_permanent_item'               => 'PermanentItem',
        'unseen_count'                      => '',
        'action_badge'                      => 'ActionBadge',
        'last_activity_at_secs'             => '',
        'admin_user_ids'                    => 'string[]',
        'approval_required_for_new_members' => 'bool',
        'archived'                          => 'bool',
        'business_thread_folder'            => 'int',
        'folder'                            => 'int',
        'input_mode'                        => 'int',
        'mentions_muted'                    => 'bool',
        'read_state'                        => 'int',
    ];
}

<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * CommentInfo.
 *
 * @method bool getCanViewMorePreviewComments()
 * @method int getCommentCount()
 * @method bool getCommentLikesEnabled()
 * @method bool getCommentThreadingEnabled()
 * @method bool getHasMoreComments()
 * @method string getInlineComposerDisplayCondition()
 * @method int getInlineComposerImpTriggerTime()
 * @method int getMaxNumVisiblePreviewComments()
 * @method mixed getPreviewComments()
 * @method bool isCanViewMorePreviewComments()
 * @method bool isCommentCount()
 * @method bool isCommentLikesEnabled()
 * @method bool isCommentThreadingEnabled()
 * @method bool isHasMoreComments()
 * @method bool isInlineComposerDisplayCondition()
 * @method bool isInlineComposerImpTriggerTime()
 * @method bool isMaxNumVisiblePreviewComments()
 * @method bool isPreviewComments()
 * @method $this setCanViewMorePreviewComments(bool $value)
 * @method $this setCommentCount(int $value)
 * @method $this setCommentLikesEnabled(bool $value)
 * @method $this setCommentThreadingEnabled(bool $value)
 * @method $this setHasMoreComments(bool $value)
 * @method $this setInlineComposerDisplayCondition(string $value)
 * @method $this setInlineComposerImpTriggerTime(int $value)
 * @method $this setMaxNumVisiblePreviewComments(int $value)
 * @method $this setPreviewComments(mixed $value)
 * @method $this unsetCanViewMorePreviewComments()
 * @method $this unsetCommentCount()
 * @method $this unsetCommentLikesEnabled()
 * @method $this unsetCommentThreadingEnabled()
 * @method $this unsetHasMoreComments()
 * @method $this unsetInlineComposerDisplayCondition()
 * @method $this unsetInlineComposerImpTriggerTime()
 * @method $this unsetMaxNumVisiblePreviewComments()
 * @method $this unsetPreviewComments()
 */
class CommentInfo extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'comment_likes_enabled'                            => 'bool',
        'comment_threading_enabled'                        => 'bool',
        'has_more_comments'                                => 'bool',
        'max_num_visible_preview_comments'                 => 'int',
        'preview_comments'                                 => '',
        'can_view_more_preview_comments'                   => 'bool',
        'comment_count'                                    => 'int',
        'inline_composer_display_condition'                => 'string',
        'inline_composer_imp_trigger_time'                 => 'int',
    ];
}

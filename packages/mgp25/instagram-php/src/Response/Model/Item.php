<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * Item.
 *
 * @method string getActorFbid()
 * @method string getAdAction()
 * @method int getAdHeaderStyle()
 * @method string getAdId()
 * @method int getAdLinkType()
 * @method AdMetadata[] getAdMetadata()
 * @method string getAlgorithm()
 * @method AndroidLinks[] getAndroidLinks()
 * @method Attribution getAttribution()
 * @method string getAudience()
 * @method AudioContext getAudio()
 * @method mixed getBoostUnavailableReason()
 * @method mixed getBoostedStatus()
 * @method bool getCanReply()
 * @method bool getCanReshare()
 * @method bool getCanSeeInsightsAsBrand()
 * @method bool getCanViewMorePreviewComments()
 * @method bool getCanViewerReshare()
 * @method bool getCanViewerSave()
 * @method Caption getCaption()
 * @method bool getCaptionIsEdited()
 * @method float getCaptionPosition()
 * @method CarouselMedia[] getCarouselMedia()
 * @method int getCarouselMediaCount()
 * @method mixed getCarouselMediaType()
 * @method Channel getChannel()
 * @method string getClientCacheKey()
 * @method string getCode()
 * @method bool getCollapseComments()
 * @method int getCommentCount()
 * @method bool getCommentLikesEnabled()
 * @method bool getCommentThreadingEnabled()
 * @method mixed getCommentingDisabledForViewer()
 * @method Comment[] getComments()
 * @method mixed getCommentsDisabled()
 * @method string getConnectionId()
 * @method CoverMedia getCoverMedia()
 * @method mixed getCreativeConfig()
 * @method string getDeviceTimestamp()
 * @method bool getDirectReplyToAuthorEnabled()
 * @method string getDominantColor()
 * @method int getDrAdType()
 * @method string getDynamicItemId()
 * @method string getExpiringAt()
 * @method Explore getExplore()
 * @method string getExploreContext()
 * @method bool getExploreHideComments()
 * @method string getExploreSourceToken()
 * @method User[] getFacepileTopLikers()
 * @method string getFbPageUrl()
 * @method Usertag getFbUserTags()
 * @method int getFilterType()
 * @method Hashtag getFollowHashtagInfo()
 * @method bool getFollowedBy()
 * @method int getFollowerCount()
 * @method bool getForceOverlay()
 * @method Gating getGating()
 * @method bool getHasAudio()
 * @method bool getHasLiked()
 * @method bool getHasMoreComments()
 * @method bool getHasSharedToFb()
 * @method bool getHasViewerSaved()
 * @method Headline getHeadline()
 * @method bool getHideNuxText()
 * @method string[] getHighlightReelIds()
 * @method mixed getITunesItem()
 * @method IabAutofillOptoutInfo getIabAutofillOptoutInfo()
 * @method mixed getIcon()
 * @method string getId()
 * @method Image_Versions2 getImageVersions2()
 * @method mixed getImportedTakenAt()
 * @method string getImpressionToken()
 * @method Injected getInjected()
 * @method string getInlineComposerDisplayCondition()
 * @method int getInlineComposerImpTriggerTime()
 * @method string getInventorySource()
 * @method IOSLinks[] getIosLinks()
 * @method mixed getIsAd4ad()
 * @method int getIsDashEligible()
 * @method bool getIsEof()
 * @method bool getIsNewSuggestion()
 * @method bool getIsPrideMedia()
 * @method bool getIsReelMedia()
 * @method mixed getIsSeen()
 * @method mixed getIsSidecarChild()
 * @method mixed getLargeUrls()
 * @method float getLat()
 * @method string getLeadGenFormId()
 * @method int getLikeCount()
 * @method User[] getLikers()
 * @method string getLink()
 * @method string getLinkHintText()
 * @method string getLinkText()
 * @method float getLng()
 * @method Location getLocation()
 * @method bool getMainFeedCarouselHasUnseenCoverMedia()
 * @method string getMainFeedCarouselStartingMediaId()
 * @method int getMaxNumVisiblePreviewComments()
 * @method Media getMedia()
 * @method MediaCroppingInfo getMediaCroppingInfo()
 * @method string getMediaId()
 * @method string[] getMediaIds()
 * @method mixed getMediaInfos()
 * @method int getMediaType()
 * @method mixed getMultiAuthorReelNames()
 * @method bool getNearlyCompleteCopyrightMatch()
 * @method string getNextMaxId()
 * @method int getNumberOfQualities()
 * @method string getOrganicPostId()
 * @method string getOrganicTrackingToken()
 * @method int getOriginalHeight()
 * @method int getOriginalWidth()
 * @method string getOverlaySubtitle()
 * @method string getOverlayText()
 * @method string getOverlayTitle()
 * @method bool getPhotoOfYou()
 * @method string getPk()
 * @method Placeholder getPlaceholder()
 * @method mixed getPlaybackDurationSecs()
 * @method int getPostCount()
 * @method string getPreview()
 * @method Comment[] getPreviewComments()
 * @method ProductTags getProductTags()
 * @method string getProductType()
 * @method ReelMention[] getReelMentions()
 * @method ReelShare getReelShare()
 * @method string[] getSavedCollectionIds()
 * @method mixed getScreenshotterUserIds()
 * @method bool getShowOneTapFbShareTooltip()
 * @method string getSocialContext()
 * @method User[] getSponsorTags()
 * @method Stories getStories()
 * @method StoryAppAttribution getStoryAppAttribution()
 * @method StoryCountdowns[] getStoryCountdowns()
 * @method StoryCta[] getStoryCta()
 * @method mixed getStoryEvents()
 * @method mixed getStoryFeedMedia()
 * @method mixed getStoryFriendLists()
 * @method StoryHashtag[] getStoryHashtags()
 * @method bool getStoryIsSavedToArchive()
 * @method StoryLocation[] getStoryLocations()
 * @method mixed getStoryMusicStickers()
 * @method mixed getStoryPollVoterInfos()
 * @method mixed getStoryPolls()
 * @method mixed getStoryProductItems()
 * @method StoryQuestionResponderInfos[] getStoryQuestionResponderInfos()
 * @method StoryQuestions[] getStoryQuestions()
 * @method StoryQuizParticipantInfo[] getStoryQuizParticipantInfos()
 * @method StoryQuizs[] getStoryQuizs()
 * @method mixed getStorySliders()
 * @method mixed getStorySoundOn()
 * @method SuggestedUsers getSuggestedUsers()
 * @method bool getSupportsReelReactions()
 * @method string getTakenAt()
 * @method mixed getThumbnailUrls()
 * @method Thumbnail getThumbnails()
 * @method int getTimezoneOffset()
 * @method string getTitle()
 * @method string[] getTopFollowers()
 * @method int getTopFollowersCount()
 * @method string[] getTopLikers()
 * @method int getTotalScreenshotCount()
 * @method int getTotalViewerCount()
 * @method mixed getUrlExpireAtSecs()
 * @method User getUser()
 * @method Usertag getUsertags()
 * @method float getValue()
 * @method string getVideoCodec()
 * @method string getVideoDashManifest()
 * @method float getVideoDuration()
 * @method string getVideoSubtitlesUri()
 * @method VideoVersions[] getVideoVersions()
 * @method int getViewCount()
 * @method int getViewerCount()
 * @method mixed getViewerCursor()
 * @method User[] getViewers()
 * @method mixed getVisibility()
 * @method string getXpostDenyReason()
 * @method bool isActorFbid()
 * @method bool isAdAction()
 * @method bool isAdHeaderStyle()
 * @method bool isAdId()
 * @method bool isAdLinkType()
 * @method bool isAdMetadata()
 * @method bool isAlgorithm()
 * @method bool isAndroidLinks()
 * @method bool isAttribution()
 * @method bool isAudience()
 * @method bool isAudio()
 * @method bool isBoostUnavailableReason()
 * @method bool isBoostedStatus()
 * @method bool isCanReply()
 * @method bool isCanReshare()
 * @method bool isCanSeeInsightsAsBrand()
 * @method bool isCanViewMorePreviewComments()
 * @method bool isCanViewerReshare()
 * @method bool isCanViewerSave()
 * @method bool isCaption()
 * @method bool isCaptionIsEdited()
 * @method bool isCaptionPosition()
 * @method bool isCarouselMedia()
 * @method bool isCarouselMediaCount()
 * @method bool isCarouselMediaType()
 * @method bool isChannel()
 * @method bool isClientCacheKey()
 * @method bool isCode()
 * @method bool isCollapseComments()
 * @method bool isCommentCount()
 * @method bool isCommentLikesEnabled()
 * @method bool isCommentThreadingEnabled()
 * @method bool isCommentingDisabledForViewer()
 * @method bool isComments()
 * @method bool isCommentsDisabled()
 * @method bool isConnectionId()
 * @method bool isCoverMedia()
 * @method bool isCreativeConfig()
 * @method bool isDeviceTimestamp()
 * @method bool isDirectReplyToAuthorEnabled()
 * @method bool isDominantColor()
 * @method bool isDrAdType()
 * @method bool isDynamicItemId()
 * @method bool isExpiringAt()
 * @method bool isExplore()
 * @method bool isExploreContext()
 * @method bool isExploreHideComments()
 * @method bool isExploreSourceToken()
 * @method bool isFacepileTopLikers()
 * @method bool isFbPageUrl()
 * @method bool isFbUserTags()
 * @method bool isFilterType()
 * @method bool isFollowHashtagInfo()
 * @method bool isFollowedBy()
 * @method bool isFollowerCount()
 * @method bool isForceOverlay()
 * @method bool isGating()
 * @method bool isHasAudio()
 * @method bool isHasLiked()
 * @method bool isHasMoreComments()
 * @method bool isHasSharedToFb()
 * @method bool isHasViewerSaved()
 * @method bool isHeadline()
 * @method bool isHideNuxText()
 * @method bool isHighlightReelIds()
 * @method bool isITunesItem()
 * @method bool isIabAutofillOptoutInfo()
 * @method bool isIcon()
 * @method bool isId()
 * @method bool isImageVersions2()
 * @method bool isImportedTakenAt()
 * @method bool isImpressionToken()
 * @method bool isInjected()
 * @method bool isInlineComposerDisplayCondition()
 * @method bool isInlineComposerImpTriggerTime()
 * @method bool isInventorySource()
 * @method bool isIosLinks()
 * @method bool isIsAd4ad()
 * @method bool isIsDashEligible()
 * @method bool isIsEof()
 * @method bool isIsNewSuggestion()
 * @method bool isIsPrideMedia()
 * @method bool isIsReelMedia()
 * @method bool isIsSeen()
 * @method bool isIsSidecarChild()
 * @method bool isLargeUrls()
 * @method bool isLat()
 * @method bool isLeadGenFormId()
 * @method bool isLikeCount()
 * @method bool isLikers()
 * @method bool isLink()
 * @method bool isLinkHintText()
 * @method bool isLinkText()
 * @method bool isLng()
 * @method bool isLocation()
 * @method bool isMainFeedCarouselHasUnseenCoverMedia()
 * @method bool isMainFeedCarouselStartingMediaId()
 * @method bool isMaxNumVisiblePreviewComments()
 * @method bool isMedia()
 * @method bool isMediaCroppingInfo()
 * @method bool isMediaId()
 * @method bool isMediaIds()
 * @method bool isMediaInfos()
 * @method bool isMediaType()
 * @method bool isMultiAuthorReelNames()
 * @method bool isNearlyCompleteCopyrightMatch()
 * @method bool isNextMaxId()
 * @method bool isNumberOfQualities()
 * @method bool isOrganicPostId()
 * @method bool isOrganicTrackingToken()
 * @method bool isOriginalHeight()
 * @method bool isOriginalWidth()
 * @method bool isOverlaySubtitle()
 * @method bool isOverlayText()
 * @method bool isOverlayTitle()
 * @method bool isPhotoOfYou()
 * @method bool isPk()
 * @method bool isPlaceholder()
 * @method bool isPlaybackDurationSecs()
 * @method bool isPostCount()
 * @method bool isPreview()
 * @method bool isPreviewComments()
 * @method bool isProductTags()
 * @method bool isProductType()
 * @method bool isReelMentions()
 * @method bool isReelShare()
 * @method bool isSavedCollectionIds()
 * @method bool isScreenshotterUserIds()
 * @method bool isShowOneTapFbShareTooltip()
 * @method bool isSocialContext()
 * @method bool isSponsorTags()
 * @method bool isStories()
 * @method bool isStoryAppAttribution()
 * @method bool isStoryCountdowns()
 * @method bool isStoryCta()
 * @method bool isStoryEvents()
 * @method bool isStoryFeedMedia()
 * @method bool isStoryFriendLists()
 * @method bool isStoryHashtags()
 * @method bool isStoryIsSavedToArchive()
 * @method bool isStoryLocations()
 * @method bool isStoryMusicStickers()
 * @method bool isStoryPollVoterInfos()
 * @method bool isStoryPolls()
 * @method bool isStoryProductItems()
 * @method bool isStoryQuestionResponderInfos()
 * @method bool isStoryQuestions()
 * @method bool isStoryQuizParticipantInfos()
 * @method bool isStoryQuizs()
 * @method bool isStorySliders()
 * @method bool isStorySoundOn()
 * @method bool isSuggestedUsers()
 * @method bool isSupportsReelReactions()
 * @method bool isTakenAt()
 * @method bool isThumbnailUrls()
 * @method bool isThumbnails()
 * @method bool isTimezoneOffset()
 * @method bool isTitle()
 * @method bool isTopFollowers()
 * @method bool isTopFollowersCount()
 * @method bool isTopLikers()
 * @method bool isTotalScreenshotCount()
 * @method bool isTotalViewerCount()
 * @method bool isUrlExpireAtSecs()
 * @method bool isUser()
 * @method bool isUsertags()
 * @method bool isValue()
 * @method bool isVideoCodec()
 * @method bool isVideoDashManifest()
 * @method bool isVideoDuration()
 * @method bool isVideoSubtitlesUri()
 * @method bool isVideoVersions()
 * @method bool isViewCount()
 * @method bool isViewerCount()
 * @method bool isViewerCursor()
 * @method bool isViewers()
 * @method bool isVisibility()
 * @method bool isXpostDenyReason()
 * @method $this setActorFbid(string $value)
 * @method $this setAdAction(string $value)
 * @method $this setAdHeaderStyle(int $value)
 * @method $this setAdId(string $value)
 * @method $this setAdLinkType(int $value)
 * @method $this setAdMetadata(AdMetadata[] $value)
 * @method $this setAlgorithm(string $value)
 * @method $this setAndroidLinks(AndroidLinks[] $value)
 * @method $this setAttribution(Attribution $value)
 * @method $this setAudience(string $value)
 * @method $this setAudio(AudioContext $value)
 * @method $this setBoostUnavailableReason(mixed $value)
 * @method $this setBoostedStatus(mixed $value)
 * @method $this setCanReply(bool $value)
 * @method $this setCanReshare(bool $value)
 * @method $this setCanSeeInsightsAsBrand(bool $value)
 * @method $this setCanViewMorePreviewComments(bool $value)
 * @method $this setCanViewerReshare(bool $value)
 * @method $this setCanViewerSave(bool $value)
 * @method $this setCaption(Caption $value)
 * @method $this setCaptionIsEdited(bool $value)
 * @method $this setCaptionPosition(float $value)
 * @method $this setCarouselMedia(CarouselMedia[] $value)
 * @method $this setCarouselMediaCount(int $value)
 * @method $this setCarouselMediaType(mixed $value)
 * @method $this setChannel(Channel $value)
 * @method $this setClientCacheKey(string $value)
 * @method $this setCode(string $value)
 * @method $this setCollapseComments(bool $value)
 * @method $this setCommentCount(int $value)
 * @method $this setCommentLikesEnabled(bool $value)
 * @method $this setCommentThreadingEnabled(bool $value)
 * @method $this setCommentingDisabledForViewer(mixed $value)
 * @method $this setComments(Comment[] $value)
 * @method $this setCommentsDisabled(mixed $value)
 * @method $this setConnectionId(string $value)
 * @method $this setCoverMedia(CoverMedia $value)
 * @method $this setCreativeConfig(mixed $value)
 * @method $this setDeviceTimestamp(string $value)
 * @method $this setDirectReplyToAuthorEnabled(bool $value)
 * @method $this setDominantColor(string $value)
 * @method $this setDrAdType(int $value)
 * @method $this setDynamicItemId(string $value)
 * @method $this setExpiringAt(string $value)
 * @method $this setExplore(Explore $value)
 * @method $this setExploreContext(string $value)
 * @method $this setExploreHideComments(bool $value)
 * @method $this setExploreSourceToken(string $value)
 * @method $this setFacepileTopLikers(User[] $value)
 * @method $this setFbPageUrl(string $value)
 * @method $this setFbUserTags(Usertag $value)
 * @method $this setFilterType(int $value)
 * @method $this setFollowHashtagInfo(Hashtag $value)
 * @method $this setFollowedBy(bool $value)
 * @method $this setFollowerCount(int $value)
 * @method $this setForceOverlay(bool $value)
 * @method $this setGating(Gating $value)
 * @method $this setHasAudio(bool $value)
 * @method $this setHasLiked(bool $value)
 * @method $this setHasMoreComments(bool $value)
 * @method $this setHasSharedToFb(bool $value)
 * @method $this setHasViewerSaved(bool $value)
 * @method $this setHeadline(Headline $value)
 * @method $this setHideNuxText(bool $value)
 * @method $this setHighlightReelIds(string[] $value)
 * @method $this setITunesItem(mixed $value)
 * @method $this setIabAutofillOptoutInfo(IabAutofillOptoutInfo $value)
 * @method $this setIcon(mixed $value)
 * @method $this setId(string $value)
 * @method $this setImageVersions2(Image_Versions2 $value)
 * @method $this setImportedTakenAt(mixed $value)
 * @method $this setImpressionToken(string $value)
 * @method $this setInjected(Injected $value)
 * @method $this setInlineComposerDisplayCondition(string $value)
 * @method $this setInlineComposerImpTriggerTime(int $value)
 * @method $this setInventorySource(string $value)
 * @method $this setIosLinks(IOSLinks[] $value)
 * @method $this setIsAd4ad(mixed $value)
 * @method $this setIsDashEligible(int $value)
 * @method $this setIsEof(bool $value)
 * @method $this setIsNewSuggestion(bool $value)
 * @method $this setIsPrideMedia(bool $value)
 * @method $this setIsReelMedia(bool $value)
 * @method $this setIsSeen(mixed $value)
 * @method $this setIsSidecarChild(mixed $value)
 * @method $this setLargeUrls(mixed $value)
 * @method $this setLat(float $value)
 * @method $this setLeadGenFormId(string $value)
 * @method $this setLikeCount(int $value)
 * @method $this setLikers(User[] $value)
 * @method $this setLink(string $value)
 * @method $this setLinkHintText(string $value)
 * @method $this setLinkText(string $value)
 * @method $this setLng(float $value)
 * @method $this setLocation(Location $value)
 * @method $this setMainFeedCarouselHasUnseenCoverMedia(bool $value)
 * @method $this setMainFeedCarouselStartingMediaId(string $value)
 * @method $this setMaxNumVisiblePreviewComments(int $value)
 * @method $this setMedia(Media $value)
 * @method $this setMediaCroppingInfo(MediaCroppingInfo $value)
 * @method $this setMediaId(string $value)
 * @method $this setMediaIds(string[] $value)
 * @method $this setMediaInfos(mixed $value)
 * @method $this setMediaType(int $value)
 * @method $this setMultiAuthorReelNames(mixed $value)
 * @method $this setNearlyCompleteCopyrightMatch(bool $value)
 * @method $this setNextMaxId(string $value)
 * @method $this setNumberOfQualities(int $value)
 * @method $this setOrganicPostId(string $value)
 * @method $this setOrganicTrackingToken(string $value)
 * @method $this setOriginalHeight(int $value)
 * @method $this setOriginalWidth(int $value)
 * @method $this setOverlaySubtitle(string $value)
 * @method $this setOverlayText(string $value)
 * @method $this setOverlayTitle(string $value)
 * @method $this setPhotoOfYou(bool $value)
 * @method $this setPk(string $value)
 * @method $this setPlaceholder(Placeholder $value)
 * @method $this setPlaybackDurationSecs(mixed $value)
 * @method $this setPostCount(int $value)
 * @method $this setPreview(string $value)
 * @method $this setPreviewComments(Comment[] $value)
 * @method $this setProductTags(ProductTags $value)
 * @method $this setProductType(string $value)
 * @method $this setReelMentions(ReelMention[] $value)
 * @method $this setReelShare(ReelShare $value)
 * @method $this setSavedCollectionIds(string[] $value)
 * @method $this setScreenshotterUserIds(mixed $value)
 * @method $this setShowOneTapFbShareTooltip(bool $value)
 * @method $this setSocialContext(string $value)
 * @method $this setSponsorTags(User[] $value)
 * @method $this setStories(Stories $value)
 * @method $this setStoryAppAttribution(StoryAppAttribution $value)
 * @method $this setStoryCountdowns(StoryCountdowns[] $value)
 * @method $this setStoryCta(StoryCta[] $value)
 * @method $this setStoryEvents(mixed $value)
 * @method $this setStoryFeedMedia(mixed $value)
 * @method $this setStoryFriendLists(mixed $value)
 * @method $this setStoryHashtags(StoryHashtag[] $value)
 * @method $this setStoryIsSavedToArchive(bool $value)
 * @method $this setStoryLocations(StoryLocation[] $value)
 * @method $this setStoryMusicStickers(mixed $value)
 * @method $this setStoryPollVoterInfos(mixed $value)
 * @method $this setStoryPolls(mixed $value)
 * @method $this setStoryProductItems(mixed $value)
 * @method $this setStoryQuestionResponderInfos(StoryQuestionResponderInfos[] $value)
 * @method $this setStoryQuestions(StoryQuestions[] $value)
 * @method $this setStoryQuizParticipantInfos(StoryQuizParticipantInfo[] $value)
 * @method $this setStoryQuizs(StoryQuizs[] $value)
 * @method $this setStorySliders(mixed $value)
 * @method $this setStorySoundOn(mixed $value)
 * @method $this setSuggestedUsers(SuggestedUsers $value)
 * @method $this setSupportsReelReactions(bool $value)
 * @method $this setTakenAt(string $value)
 * @method $this setThumbnailUrls(mixed $value)
 * @method $this setThumbnails(Thumbnail $value)
 * @method $this setTimezoneOffset(int $value)
 * @method $this setTitle(string $value)
 * @method $this setTopFollowers(string[] $value)
 * @method $this setTopFollowersCount(int $value)
 * @method $this setTopLikers(string[] $value)
 * @method $this setTotalScreenshotCount(int $value)
 * @method $this setTotalViewerCount(int $value)
 * @method $this setUrlExpireAtSecs(mixed $value)
 * @method $this setUser(User $value)
 * @method $this setUsertags(Usertag $value)
 * @method $this setValue(float $value)
 * @method $this setVideoCodec(string $value)
 * @method $this setVideoDashManifest(string $value)
 * @method $this setVideoDuration(float $value)
 * @method $this setVideoSubtitlesUri(string $value)
 * @method $this setVideoVersions(VideoVersions[] $value)
 * @method $this setViewCount(int $value)
 * @method $this setViewerCount(int $value)
 * @method $this setViewerCursor(mixed $value)
 * @method $this setViewers(User[] $value)
 * @method $this setVisibility(mixed $value)
 * @method $this setXpostDenyReason(string $value)
 * @method $this unsetActorFbid()
 * @method $this unsetAdAction()
 * @method $this unsetAdHeaderStyle()
 * @method $this unsetAdId()
 * @method $this unsetAdLinkType()
 * @method $this unsetAdMetadata()
 * @method $this unsetAlgorithm()
 * @method $this unsetAndroidLinks()
 * @method $this unsetAttribution()
 * @method $this unsetAudience()
 * @method $this unsetAudio()
 * @method $this unsetBoostUnavailableReason()
 * @method $this unsetBoostedStatus()
 * @method $this unsetCanReply()
 * @method $this unsetCanReshare()
 * @method $this unsetCanSeeInsightsAsBrand()
 * @method $this unsetCanViewMorePreviewComments()
 * @method $this unsetCanViewerReshare()
 * @method $this unsetCanViewerSave()
 * @method $this unsetCaption()
 * @method $this unsetCaptionIsEdited()
 * @method $this unsetCaptionPosition()
 * @method $this unsetCarouselMedia()
 * @method $this unsetCarouselMediaCount()
 * @method $this unsetCarouselMediaType()
 * @method $this unsetChannel()
 * @method $this unsetClientCacheKey()
 * @method $this unsetCode()
 * @method $this unsetCollapseComments()
 * @method $this unsetCommentCount()
 * @method $this unsetCommentLikesEnabled()
 * @method $this unsetCommentThreadingEnabled()
 * @method $this unsetCommentingDisabledForViewer()
 * @method $this unsetComments()
 * @method $this unsetCommentsDisabled()
 * @method $this unsetConnectionId()
 * @method $this unsetCoverMedia()
 * @method $this unsetCreativeConfig()
 * @method $this unsetDeviceTimestamp()
 * @method $this unsetDirectReplyToAuthorEnabled()
 * @method $this unsetDominantColor()
 * @method $this unsetDrAdType()
 * @method $this unsetDynamicItemId()
 * @method $this unsetExpiringAt()
 * @method $this unsetExplore()
 * @method $this unsetExploreContext()
 * @method $this unsetExploreHideComments()
 * @method $this unsetExploreSourceToken()
 * @method $this unsetFacepileTopLikers()
 * @method $this unsetFbPageUrl()
 * @method $this unsetFbUserTags()
 * @method $this unsetFilterType()
 * @method $this unsetFollowHashtagInfo()
 * @method $this unsetFollowedBy()
 * @method $this unsetFollowerCount()
 * @method $this unsetForceOverlay()
 * @method $this unsetGating()
 * @method $this unsetHasAudio()
 * @method $this unsetHasLiked()
 * @method $this unsetHasMoreComments()
 * @method $this unsetHasSharedToFb()
 * @method $this unsetHasViewerSaved()
 * @method $this unsetHeadline()
 * @method $this unsetHideNuxText()
 * @method $this unsetHighlightReelIds()
 * @method $this unsetITunesItem()
 * @method $this unsetIabAutofillOptoutInfo()
 * @method $this unsetIcon()
 * @method $this unsetId()
 * @method $this unsetImageVersions2()
 * @method $this unsetImportedTakenAt()
 * @method $this unsetImpressionToken()
 * @method $this unsetInjected()
 * @method $this unsetInlineComposerDisplayCondition()
 * @method $this unsetInlineComposerImpTriggerTime()
 * @method $this unsetInventorySource()
 * @method $this unsetIosLinks()
 * @method $this unsetIsAd4ad()
 * @method $this unsetIsDashEligible()
 * @method $this unsetIsEof()
 * @method $this unsetIsNewSuggestion()
 * @method $this unsetIsPrideMedia()
 * @method $this unsetIsReelMedia()
 * @method $this unsetIsSeen()
 * @method $this unsetIsSidecarChild()
 * @method $this unsetLargeUrls()
 * @method $this unsetLat()
 * @method $this unsetLeadGenFormId()
 * @method $this unsetLikeCount()
 * @method $this unsetLikers()
 * @method $this unsetLink()
 * @method $this unsetLinkHintText()
 * @method $this unsetLinkText()
 * @method $this unsetLng()
 * @method $this unsetLocation()
 * @method $this unsetMainFeedCarouselHasUnseenCoverMedia()
 * @method $this unsetMainFeedCarouselStartingMediaId()
 * @method $this unsetMaxNumVisiblePreviewComments()
 * @method $this unsetMedia()
 * @method $this unsetMediaCroppingInfo()
 * @method $this unsetMediaId()
 * @method $this unsetMediaIds()
 * @method $this unsetMediaInfos()
 * @method $this unsetMediaType()
 * @method $this unsetMultiAuthorReelNames()
 * @method $this unsetNearlyCompleteCopyrightMatch()
 * @method $this unsetNextMaxId()
 * @method $this unsetNumberOfQualities()
 * @method $this unsetOrganicPostId()
 * @method $this unsetOrganicTrackingToken()
 * @method $this unsetOriginalHeight()
 * @method $this unsetOriginalWidth()
 * @method $this unsetOverlaySubtitle()
 * @method $this unsetOverlayText()
 * @method $this unsetOverlayTitle()
 * @method $this unsetPhotoOfYou()
 * @method $this unsetPk()
 * @method $this unsetPlaceholder()
 * @method $this unsetPlaybackDurationSecs()
 * @method $this unsetPostCount()
 * @method $this unsetPreview()
 * @method $this unsetPreviewComments()
 * @method $this unsetProductTags()
 * @method $this unsetProductType()
 * @method $this unsetReelMentions()
 * @method $this unsetReelShare()
 * @method $this unsetSavedCollectionIds()
 * @method $this unsetScreenshotterUserIds()
 * @method $this unsetShowOneTapFbShareTooltip()
 * @method $this unsetSocialContext()
 * @method $this unsetSponsorTags()
 * @method $this unsetStories()
 * @method $this unsetStoryAppAttribution()
 * @method $this unsetStoryCountdowns()
 * @method $this unsetStoryCta()
 * @method $this unsetStoryEvents()
 * @method $this unsetStoryFeedMedia()
 * @method $this unsetStoryFriendLists()
 * @method $this unsetStoryHashtags()
 * @method $this unsetStoryIsSavedToArchive()
 * @method $this unsetStoryLocations()
 * @method $this unsetStoryMusicStickers()
 * @method $this unsetStoryPollVoterInfos()
 * @method $this unsetStoryPolls()
 * @method $this unsetStoryProductItems()
 * @method $this unsetStoryQuestionResponderInfos()
 * @method $this unsetStoryQuestions()
 * @method $this unsetStoryQuizParticipantInfos()
 * @method $this unsetStoryQuizs()
 * @method $this unsetStorySliders()
 * @method $this unsetStorySoundOn()
 * @method $this unsetSuggestedUsers()
 * @method $this unsetSupportsReelReactions()
 * @method $this unsetTakenAt()
 * @method $this unsetThumbnailUrls()
 * @method $this unsetThumbnails()
 * @method $this unsetTimezoneOffset()
 * @method $this unsetTitle()
 * @method $this unsetTopFollowers()
 * @method $this unsetTopFollowersCount()
 * @method $this unsetTopLikers()
 * @method $this unsetTotalScreenshotCount()
 * @method $this unsetTotalViewerCount()
 * @method $this unsetUrlExpireAtSecs()
 * @method $this unsetUser()
 * @method $this unsetUsertags()
 * @method $this unsetValue()
 * @method $this unsetVideoCodec()
 * @method $this unsetVideoDashManifest()
 * @method $this unsetVideoDuration()
 * @method $this unsetVideoSubtitlesUri()
 * @method $this unsetVideoVersions()
 * @method $this unsetViewCount()
 * @method $this unsetViewerCount()
 * @method $this unsetViewerCursor()
 * @method $this unsetViewers()
 * @method $this unsetVisibility()
 * @method $this unsetXpostDenyReason()
 */
class Item extends AutoPropertyMapper
{
    const PHOTO = 1;
    const VIDEO = 2;
    const CAROUSEL = 8;
    const AUDIO = 11;

    const JSON_PROPERTY_MAP = [
        /*
         * The Unix timestamp (UTC) of when the media was UPLOADED by the user.
         * It is NOT when the media was "taken". It's the upload time.
         */
        'taken_at'                         => 'string',
        'pk'                               => 'string',
        'id'                               => 'string',
        'device_timestamp'                 => 'string',
        /*
         * A number describing what type of media this is. Should be compared
         * against the `Item::PHOTO`, `Item::VIDEO` and `Item::CAROUSEL` constants!
         */
        'media_type'                               => 'int',
        'dynamic_item_id'                          => 'string',
        'code'                                     => 'string',
        'client_cache_key'                         => 'string',
        'filter_type'                              => 'int',
        'product_type'                             => 'string',
        'nearly_complete_copyright_match'          => 'bool',
        'media_cropping_info'                      => 'MediaCroppingInfo',
        'image_versions2'                          => 'Image_Versions2',
        'original_width'                           => 'int',
        'original_height'                          => 'int',
        'caption_position'                         => 'float',
        'is_reel_media'                            => 'bool',
        'video_versions'                           => 'VideoVersions[]',
        'has_audio'                                => 'bool',
        'video_duration'                           => 'float',
        'user'                                     => 'User',
        'can_see_insights_as_brand'                => 'bool',
        'caption'                                  => 'Caption',
        'headline'                                 => 'Headline',
        'title'                                    => 'string',
        'caption_is_edited'                        => 'bool',
        'photo_of_you'                             => 'bool',
        'fb_user_tags'                             => 'Usertag',
        'can_viewer_save'                          => 'bool',
        'has_viewer_saved'                         => 'bool',
        'organic_tracking_token'                   => 'string',
        'follow_hashtag_info'                      => 'Hashtag',
        'expiring_at'                              => 'string',
        'audience'                                 => 'string',
        'is_dash_eligible'                         => 'int',
        'video_dash_manifest'                      => 'string',
        'number_of_qualities'                      => 'int',
        'video_codec'                              => 'string',
        'thumbnails'                               => 'Thumbnail',
        'can_reshare'                              => 'bool',
        'can_reply'                                => 'bool',
        'is_pride_media'                           => 'bool',
        'can_viewer_reshare'                       => 'bool',
        'visibility'                               => '',
        'attribution'                              => 'Attribution',
        /*
         * This is actually a float in the reply, but is always `.0`, so we cast
         * it to an int instead to make the number easier to manage.
         */
        'view_count'                       => 'int',
        'viewer_count'                     => 'int',
        'comment_count'                    => 'int',
        'can_view_more_preview_comments'   => 'bool',
        'has_more_comments'                => 'bool',
        'max_num_visible_preview_comments' => 'int',
        /*
         * Preview of comments via feed replies.
         *
         * If "has_more_comments" is FALSE, then this has ALL of the comments.
         * Otherwise, you'll need to get all comments by querying the media.
         */
        'preview_comments'                 => 'Comment[]',
        /*
         * Comments for the item.
         *
         * TODO: As of mid-2017, this field seems to no longer be used for
         * timeline feed items? They now use "preview_comments" instead. But we
         * won't delete it, since some other feed MAY use this property for ITS
         * Item object.
         */
        'comments'                                    => 'Comment[]',
        'comments_disabled'                           => '',
        'reel_mentions'                               => 'ReelMention[]',
        'story_cta'                                   => 'StoryCta[]',
        'next_max_id'                                 => 'string',
        'carousel_media'                              => 'CarouselMedia[]',
        'carousel_media_type'                         => '',
        'carousel_media_count'                        => 'int',
        'likers'                                      => 'User[]',
        'facepile_top_likers'                         => 'User[]',
        'like_count'                                  => 'int',
        'preview'                                     => 'string',
        'has_liked'                                   => 'bool',
        'explore_context'                             => 'string',
        'explore_source_token'                        => 'string',
        'explore_hide_comments'                       => 'bool',
        'explore'                                     => 'Explore',
        'impression_token'                            => 'string',
        'usertags'                                    => 'Usertag',
        'media'                                       => 'Media',
        'stories'                                     => 'Stories',
        'top_likers'                                  => 'string[]',
        'direct_reply_to_author_enabled'              => 'bool',
        'suggested_users'                             => 'SuggestedUsers',
        'is_new_suggestion'                           => 'bool',
        'comment_likes_enabled'                       => 'bool',
        'location'                                    => 'Location',
        'lat'                                         => 'float',
        'lng'                                         => 'float',
        'channel'                                     => 'Channel',
        'gating'                                      => 'Gating',
        'injected'                                    => 'Injected',
        'placeholder'                                 => 'Placeholder',
        'algorithm'                                   => 'string',
        'connection_id'                               => 'string',
        'social_context'                              => 'string',
        'icon'                                        => '',
        'media_ids'                                   => 'string[]',
        'media_id'                                    => 'string',
        'thumbnail_urls'                              => '',
        'large_urls'                                  => '',
        'media_infos'                                 => '',
        'value'                                       => 'float',
        'followed_by'                                 => 'bool',
        'collapse_comments'                           => 'bool',
        'link'                                        => 'string',
        'link_text'                                   => 'string',
        'link_hint_text'                              => 'string',
        'iTunesItem'                                  => '',
        'ad_header_style'                             => 'int',
        'ad_metadata'                                 => 'AdMetadata[]',
        'ad_action'                                   => 'string',
        'ad_link_type'                                => 'int',
        'dr_ad_type'                                  => 'int',
        'android_links'                               => 'AndroidLinks[]',
        'ios_links'                                   => 'IOSLinks[]',
        'iab_autofill_optout_info'                    => 'IabAutofillOptoutInfo',
        'force_overlay'                               => 'bool',
        'hide_nux_text'                               => 'bool',
        'overlay_text'                                => 'string',
        'overlay_title'                               => 'string',
        'overlay_subtitle'                            => 'string',
        'fb_page_url'                                 => 'string',
        'playback_duration_secs'                      => '',
        'url_expire_at_secs'                          => '',
        'is_sidecar_child'                            => '',
        'comment_threading_enabled'                   => 'bool',
        'cover_media'                                 => 'CoverMedia',
        'saved_collection_ids'                        => 'string[]',
        'boosted_status'                              => '',
        'boost_unavailable_reason'                    => '',
        'viewers'                                     => 'User[]',
        'viewer_cursor'                               => '',
        'total_viewer_count'                          => 'int',
        'multi_author_reel_names'                     => '',
        'screenshotter_user_ids'                      => '',
        'reel_share'                                  => 'ReelShare',
        'organic_post_id'                             => 'string',
        'sponsor_tags'                                => 'User[]',
        'story_poll_voter_infos'                      => '',
        'imported_taken_at'                           => '',
        'lead_gen_form_id'                            => 'string',
        'ad_id'                                       => 'string',
        'actor_fbid'                                  => 'string',
        'is_ad4ad'                                    => '',
        'commenting_disabled_for_viewer'              => '',
        'is_seen'                                     => '',
        'story_events'                                => '',
        'story_hashtags'                              => 'StoryHashtag[]',
        'story_polls'                                 => '',
        'story_feed_media'                            => '',
        'story_sound_on'                              => '',
        'creative_config'                             => '',
        'story_app_attribution'                       => 'StoryAppAttribution',
        'story_locations'                             => 'StoryLocation[]',
        'story_sliders'                               => '',
        'story_friend_lists'                          => '',
        'story_product_items'                         => '',
        'story_questions'                             => 'StoryQuestions[]',
        'story_question_responder_infos'              => 'StoryQuestionResponderInfos[]',
        'story_countdowns'                            => 'StoryCountdowns[]',
        'story_music_stickers'                        => '',
        'supports_reel_reactions'                     => 'bool',
        'show_one_tap_fb_share_tooltip'               => 'bool',
        'has_shared_to_fb'                            => 'bool',
        'main_feed_carousel_starting_media_id'        => 'string',
        'main_feed_carousel_has_unseen_cover_media'   => 'bool',
        'inventory_source'                            => 'string',
        'is_eof'                                      => 'bool',
        'top_followers'                               => 'string[]',
        'top_followers_count'                         => 'int',
        'follower_count'                              => 'int',
        'post_count'                                  => 'int',
        'video_subtitles_uri'                         => 'string',
        'story_is_saved_to_archive'                   => 'bool',
        'timezone_offset'                             => 'int',
        'xpost_deny_reason'                           => 'string',
        'product_tags'                                => 'ProductTags',
        'inline_composer_display_condition'           => 'string',
        'inline_composer_imp_trigger_time'            => 'int',
        'highlight_reel_ids'                          => 'string[]',
        'total_screenshot_count'                      => 'int',
        /*
         * HTML color string such as "#812A2A".
         */
        'dominant_color'                              => 'string',
        'audio'                                       => 'AudioContext',
        'story_quizs'                                 => 'StoryQuizs[]',
        'story_quiz_participant_infos'                => 'StoryQuizParticipantInfo[]',
    ];

    /**
     * Get the web URL for this media item.
     *
     * @return string
     */
    public function getItemUrl()
    {
        return sprintf('https://www.instagram.com/p/%s/', $this->_getProperty('code'));
    }

    /**
     * Checks whether this media item is an advertisement.
     *
     * @return bool
     */
    public function isAd()
    {
        return $this->_getProperty('dr_ad_type') !== null;
    }
}

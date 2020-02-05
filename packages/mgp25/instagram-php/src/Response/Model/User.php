<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * User.
 *
 * @method int getAccountType()
 * @method string getAddressStreet()
 * @method mixed getAggregatePromoteEngagement()
 * @method mixed getAllowContactsSync()
 * @method string getAllowedCommenterType()
 * @method mixed getAutoExpandChaining()
 * @method int getBestiesCount()
 * @method string getBiography()
 * @method BiographyEntities getBiographyWithEntities()
 * @method mixed getBirthday()
 * @method mixed getBlockAt()
 * @method string getBusinessContactMethod()
 * @method mixed getByline()
 * @method bool getCanBeReportedAsFraud()
 * @method bool getCanBeTaggedAsSponsor()
 * @method mixed getCanBoostPost()
 * @method bool getCanClaimPage()
 * @method bool getCanConvertToBusiness()
 * @method mixed getCanCreateSponsorTags()
 * @method bool getCanCrosspostWithoutFbToken()
 * @method bool getCanFollowHashtag()
 * @method bool getCanHideCategory()
 * @method bool getCanHidePublicContacts()
 * @method bool getCanLinkEntitiesInBio()
 * @method bool getCanSeeOrganicInsights()
 * @method bool getCanTagProductsFromMerchants()
 * @method string getCategory()
 * @method ChainingSuggestion[] getChainingSuggestions()
 * @method string getCityId()
 * @method string getCityName()
 * @method mixed getCoeffWeight()
 * @method string getContactPhoneNumber()
 * @method mixed getConvertFromPages()
 * @method int getCountryCode()
 * @method string getDirectMessaging()
 * @method string[] getEligibleShoppingSignupEntrypoints()
 * @method string getEmail()
 * @method string getExternalLynxUrl()
 * @method string getExternalUrl()
 * @method string getFbPageCallToActionId()
 * @method int getFbPageCallToActionIxAppId()
 * @method mixed getFbPageCallToActionIxLabelBundle()
 * @method string getFbPageCallToActionIxPartner()
 * @method string getFbPageCallToActionIxUrl()
 * @method mixed getFbuid()
 * @method bool getFeedPostReshareDisabled()
 * @method int getFollowerCount()
 * @method int getFollowingCount()
 * @method int getFollowingTagCount()
 * @method FriendshipStatus getFriendshipStatus()
 * @method string getFullName()
 * @method int getGender()
 * @method int getGeoMediaCount()
 * @method bool getHasAnonymousProfilePicture()
 * @method bool getHasBiographyTranslation()
 * @method bool getHasBusinessPresenceNode()
 * @method bool getHasChaining()
 * @method bool getHasHighlightReels()
 * @method bool getHasPlacedOrders()
 * @method bool getHasProfileVideoFeed()
 * @method bool getHasRecommendAccounts()
 * @method bool getHasUnseenBestiesMedia()
 * @method ImageCandidate getHdProfilePicUrlInfo()
 * @method ImageCandidate[] getHdProfilePicVersions()
 * @method bool getHighlightReshareDisabled()
 * @method string getId()
 * @method mixed getIncludeDirectBlacklistStatus()
 * @method mixed getInstagramLocationId()
 * @method bool getIsActive()
 * @method bool getIsAttributeSyncEnabled()
 * @method bool getIsBestie()
 * @method bool getIsBusiness()
 * @method bool getIsCallToActionEnabled()
 * @method bool getIsCallToActionEnabledBySurface()
 * @method bool getIsDirectappInstalled()
 * @method bool getIsEligibleToShowFbCrossSharingNux()
 * @method bool getIsFavorite()
 * @method bool getIsFavoriteForHighlights()
 * @method bool getIsFavoriteForStories()
 * @method bool getIsInterestAccount()
 * @method bool getIsNeedy()
 * @method bool getIsPotentialBusiness()
 * @method bool getIsPrivate()
 * @method bool getIsProfileActionNeeded()
 * @method bool getIsUnpublished()
 * @method int getIsUsingUnifiedInboxForDirect()
 * @method bool getIsVerified()
 * @method bool getIsVideoCreator()
 * @method string getLatestReelMedia()
 * @method float getLatitude()
 * @method FacebookUser getLinkedFbUser()
 * @method string getLiveSubscriptionStatus()
 * @method float getLongitude()
 * @method int getMaxNumLinkedEntitiesInBio()
 * @method int getMediaCount()
 * @method int getMutualFollowersCount()
 * @method Nametag getNametag()
 * @method string getNationalNumber()
 * @method mixed getNeedsEmailConfirm()
 * @method int getNumOfAdminedPages()
 * @method string getPageId()
 * @method bool getPageIdForNewSumaBizAccount()
 * @method string getPageName()
 * @method bool getPermission()
 * @method string getPhoneNumber()
 * @method string getPk()
 * @method mixed getProfileContext()
 * @method Link[] getProfileContextLinksWithUserIds()
 * @method string[] getProfileContextMutualFollowIds()
 * @method string getProfilePicId()
 * @method string getProfilePicUrl()
 * @method int getProfileVisitsCount()
 * @method int getProfileVisitsNumDays()
 * @method string getPublicEmail()
 * @method string getPublicPhoneCountryCode()
 * @method string getPublicPhoneNumber()
 * @method int getRecentlyBestiedByCount()
 * @method string getReelAutoArchive()
 * @method mixed getSchool()
 * @method bool getScreenshotted()
 * @method mixed getSearchSocialContext()
 * @method string getSearchSubtitle()
 * @method int getShoppablePostsCount()
 * @method bool getShouldShowCategory()
 * @method bool getShouldShowPublicContacts()
 * @method bool getShowAccountTransparencyDetails()
 * @method bool getShowBestiesBadge()
 * @method bool getShowBusinessConversionIcon()
 * @method bool getShowConversionEditEntry()
 * @method mixed getShowFeedBizConversionIcon()
 * @method bool getShowInsightsTerms()
 * @method bool getShowShoppableFeed()
 * @method mixed getSocialContext()
 * @method int getTotalArEffects()
 * @method int getTotalIgtvVideos()
 * @method mixed getUnseenCount()
 * @method string getUserId()
 * @method string getUsername()
 * @method mixed getUsertagReviewEnabled()
 * @method int getUsertagsCount()
 * @method string getZip()
 * @method bool isAccountType()
 * @method bool isAddressStreet()
 * @method bool isAggregatePromoteEngagement()
 * @method bool isAllowContactsSync()
 * @method bool isAllowedCommenterType()
 * @method bool isAutoExpandChaining()
 * @method bool isBestiesCount()
 * @method bool isBiography()
 * @method bool isBiographyWithEntities()
 * @method bool isBirthday()
 * @method bool isBlockAt()
 * @method bool isBusinessContactMethod()
 * @method bool isByline()
 * @method bool isCanBeReportedAsFraud()
 * @method bool isCanBeTaggedAsSponsor()
 * @method bool isCanBoostPost()
 * @method bool isCanClaimPage()
 * @method bool isCanConvertToBusiness()
 * @method bool isCanCreateSponsorTags()
 * @method bool isCanCrosspostWithoutFbToken()
 * @method bool isCanFollowHashtag()
 * @method bool isCanHideCategory()
 * @method bool isCanHidePublicContacts()
 * @method bool isCanLinkEntitiesInBio()
 * @method bool isCanSeeOrganicInsights()
 * @method bool isCanTagProductsFromMerchants()
 * @method bool isCategory()
 * @method bool isChainingSuggestions()
 * @method bool isCityId()
 * @method bool isCityName()
 * @method bool isCoeffWeight()
 * @method bool isContactPhoneNumber()
 * @method bool isConvertFromPages()
 * @method bool isCountryCode()
 * @method bool isDirectMessaging()
 * @method bool isEligibleShoppingSignupEntrypoints()
 * @method bool isEmail()
 * @method bool isExternalLynxUrl()
 * @method bool isExternalUrl()
 * @method bool isFbPageCallToActionId()
 * @method bool isFbPageCallToActionIxAppId()
 * @method bool isFbPageCallToActionIxLabelBundle()
 * @method bool isFbPageCallToActionIxPartner()
 * @method bool isFbPageCallToActionIxUrl()
 * @method bool isFbuid()
 * @method bool isFeedPostReshareDisabled()
 * @method bool isFollowerCount()
 * @method bool isFollowingCount()
 * @method bool isFollowingTagCount()
 * @method bool isFriendshipStatus()
 * @method bool isFullName()
 * @method bool isGender()
 * @method bool isGeoMediaCount()
 * @method bool isHasAnonymousProfilePicture()
 * @method bool isHasBiographyTranslation()
 * @method bool isHasBusinessPresenceNode()
 * @method bool isHasChaining()
 * @method bool isHasHighlightReels()
 * @method bool isHasPlacedOrders()
 * @method bool isHasProfileVideoFeed()
 * @method bool isHasRecommendAccounts()
 * @method bool isHasUnseenBestiesMedia()
 * @method bool isHdProfilePicUrlInfo()
 * @method bool isHdProfilePicVersions()
 * @method bool isHighlightReshareDisabled()
 * @method bool isId()
 * @method bool isIncludeDirectBlacklistStatus()
 * @method bool isInstagramLocationId()
 * @method bool isIsActive()
 * @method bool isIsAttributeSyncEnabled()
 * @method bool isIsBestie()
 * @method bool isIsBusiness()
 * @method bool isIsCallToActionEnabled()
 * @method bool isIsCallToActionEnabledBySurface()
 * @method bool isIsDirectappInstalled()
 * @method bool isIsEligibleToShowFbCrossSharingNux()
 * @method bool isIsFavorite()
 * @method bool isIsFavoriteForHighlights()
 * @method bool isIsFavoriteForStories()
 * @method bool isIsInterestAccount()
 * @method bool isIsNeedy()
 * @method bool isIsPotentialBusiness()
 * @method bool isIsPrivate()
 * @method bool isIsProfileActionNeeded()
 * @method bool isIsUnpublished()
 * @method bool isIsUsingUnifiedInboxForDirect()
 * @method bool isIsVerified()
 * @method bool isIsVideoCreator()
 * @method bool isLatestReelMedia()
 * @method bool isLatitude()
 * @method bool isLinkedFbUser()
 * @method bool isLiveSubscriptionStatus()
 * @method bool isLongitude()
 * @method bool isMaxNumLinkedEntitiesInBio()
 * @method bool isMediaCount()
 * @method bool isMutualFollowersCount()
 * @method bool isNametag()
 * @method bool isNationalNumber()
 * @method bool isNeedsEmailConfirm()
 * @method bool isNumOfAdminedPages()
 * @method bool isPageId()
 * @method bool isPageIdForNewSumaBizAccount()
 * @method bool isPageName()
 * @method bool isPermission()
 * @method bool isPhoneNumber()
 * @method bool isPk()
 * @method bool isProfileContext()
 * @method bool isProfileContextLinksWithUserIds()
 * @method bool isProfileContextMutualFollowIds()
 * @method bool isProfilePicId()
 * @method bool isProfilePicUrl()
 * @method bool isProfileVisitsCount()
 * @method bool isProfileVisitsNumDays()
 * @method bool isPublicEmail()
 * @method bool isPublicPhoneCountryCode()
 * @method bool isPublicPhoneNumber()
 * @method bool isRecentlyBestiedByCount()
 * @method bool isReelAutoArchive()
 * @method bool isSchool()
 * @method bool isScreenshotted()
 * @method bool isSearchSocialContext()
 * @method bool isSearchSubtitle()
 * @method bool isShoppablePostsCount()
 * @method bool isShouldShowCategory()
 * @method bool isShouldShowPublicContacts()
 * @method bool isShowAccountTransparencyDetails()
 * @method bool isShowBestiesBadge()
 * @method bool isShowBusinessConversionIcon()
 * @method bool isShowConversionEditEntry()
 * @method bool isShowFeedBizConversionIcon()
 * @method bool isShowInsightsTerms()
 * @method bool isShowShoppableFeed()
 * @method bool isSocialContext()
 * @method bool isTotalArEffects()
 * @method bool isTotalIgtvVideos()
 * @method bool isUnseenCount()
 * @method bool isUserId()
 * @method bool isUsername()
 * @method bool isUsertagReviewEnabled()
 * @method bool isUsertagsCount()
 * @method bool isZip()
 * @method $this setAccountType(int $value)
 * @method $this setAddressStreet(string $value)
 * @method $this setAggregatePromoteEngagement(mixed $value)
 * @method $this setAllowContactsSync(mixed $value)
 * @method $this setAllowedCommenterType(string $value)
 * @method $this setAutoExpandChaining(mixed $value)
 * @method $this setBestiesCount(int $value)
 * @method $this setBiography(string $value)
 * @method $this setBiographyWithEntities(BiographyEntities $value)
 * @method $this setBirthday(mixed $value)
 * @method $this setBlockAt(mixed $value)
 * @method $this setBusinessContactMethod(string $value)
 * @method $this setByline(mixed $value)
 * @method $this setCanBeReportedAsFraud(bool $value)
 * @method $this setCanBeTaggedAsSponsor(bool $value)
 * @method $this setCanBoostPost(mixed $value)
 * @method $this setCanClaimPage(bool $value)
 * @method $this setCanConvertToBusiness(bool $value)
 * @method $this setCanCreateSponsorTags(mixed $value)
 * @method $this setCanCrosspostWithoutFbToken(bool $value)
 * @method $this setCanFollowHashtag(bool $value)
 * @method $this setCanHideCategory(bool $value)
 * @method $this setCanHidePublicContacts(bool $value)
 * @method $this setCanLinkEntitiesInBio(bool $value)
 * @method $this setCanSeeOrganicInsights(bool $value)
 * @method $this setCanTagProductsFromMerchants(bool $value)
 * @method $this setCategory(string $value)
 * @method $this setChainingSuggestions(ChainingSuggestion[] $value)
 * @method $this setCityId(string $value)
 * @method $this setCityName(string $value)
 * @method $this setCoeffWeight(mixed $value)
 * @method $this setContactPhoneNumber(string $value)
 * @method $this setConvertFromPages(mixed $value)
 * @method $this setCountryCode(int $value)
 * @method $this setDirectMessaging(string $value)
 * @method $this setEligibleShoppingSignupEntrypoints(string[] $value)
 * @method $this setEmail(string $value)
 * @method $this setExternalLynxUrl(string $value)
 * @method $this setExternalUrl(string $value)
 * @method $this setFbPageCallToActionId(string $value)
 * @method $this setFbPageCallToActionIxAppId(int $value)
 * @method $this setFbPageCallToActionIxLabelBundle(mixed $value)
 * @method $this setFbPageCallToActionIxPartner(string $value)
 * @method $this setFbPageCallToActionIxUrl(string $value)
 * @method $this setFbuid(mixed $value)
 * @method $this setFeedPostReshareDisabled(bool $value)
 * @method $this setFollowerCount(int $value)
 * @method $this setFollowingCount(int $value)
 * @method $this setFollowingTagCount(int $value)
 * @method $this setFriendshipStatus(FriendshipStatus $value)
 * @method $this setFullName(string $value)
 * @method $this setGender(int $value)
 * @method $this setGeoMediaCount(int $value)
 * @method $this setHasAnonymousProfilePicture(bool $value)
 * @method $this setHasBiographyTranslation(bool $value)
 * @method $this setHasBusinessPresenceNode(bool $value)
 * @method $this setHasChaining(bool $value)
 * @method $this setHasHighlightReels(bool $value)
 * @method $this setHasPlacedOrders(bool $value)
 * @method $this setHasProfileVideoFeed(bool $value)
 * @method $this setHasRecommendAccounts(bool $value)
 * @method $this setHasUnseenBestiesMedia(bool $value)
 * @method $this setHdProfilePicUrlInfo(ImageCandidate $value)
 * @method $this setHdProfilePicVersions(ImageCandidate[] $value)
 * @method $this setHighlightReshareDisabled(bool $value)
 * @method $this setId(string $value)
 * @method $this setIncludeDirectBlacklistStatus(mixed $value)
 * @method $this setInstagramLocationId(mixed $value)
 * @method $this setIsActive(bool $value)
 * @method $this setIsAttributeSyncEnabled(bool $value)
 * @method $this setIsBestie(bool $value)
 * @method $this setIsBusiness(bool $value)
 * @method $this setIsCallToActionEnabled(bool $value)
 * @method $this setIsCallToActionEnabledBySurface(bool $value)
 * @method $this setIsDirectappInstalled(bool $value)
 * @method $this setIsEligibleToShowFbCrossSharingNux(bool $value)
 * @method $this setIsFavorite(bool $value)
 * @method $this setIsFavoriteForHighlights(bool $value)
 * @method $this setIsFavoriteForStories(bool $value)
 * @method $this setIsInterestAccount(bool $value)
 * @method $this setIsNeedy(bool $value)
 * @method $this setIsPotentialBusiness(bool $value)
 * @method $this setIsPrivate(bool $value)
 * @method $this setIsProfileActionNeeded(bool $value)
 * @method $this setIsUnpublished(bool $value)
 * @method $this setIsUsingUnifiedInboxForDirect(int $value)
 * @method $this setIsVerified(bool $value)
 * @method $this setIsVideoCreator(bool $value)
 * @method $this setLatestReelMedia(string $value)
 * @method $this setLatitude(float $value)
 * @method $this setLinkedFbUser(FacebookUser $value)
 * @method $this setLiveSubscriptionStatus(string $value)
 * @method $this setLongitude(float $value)
 * @method $this setMaxNumLinkedEntitiesInBio(int $value)
 * @method $this setMediaCount(int $value)
 * @method $this setMutualFollowersCount(int $value)
 * @method $this setNametag(Nametag $value)
 * @method $this setNationalNumber(string $value)
 * @method $this setNeedsEmailConfirm(mixed $value)
 * @method $this setNumOfAdminedPages(int $value)
 * @method $this setPageId(string $value)
 * @method $this setPageIdForNewSumaBizAccount(bool $value)
 * @method $this setPageName(string $value)
 * @method $this setPermission(bool $value)
 * @method $this setPhoneNumber(string $value)
 * @method $this setPk(string $value)
 * @method $this setProfileContext(mixed $value)
 * @method $this setProfileContextLinksWithUserIds(Link[] $value)
 * @method $this setProfileContextMutualFollowIds(string[] $value)
 * @method $this setProfilePicId(string $value)
 * @method $this setProfilePicUrl(string $value)
 * @method $this setProfileVisitsCount(int $value)
 * @method $this setProfileVisitsNumDays(int $value)
 * @method $this setPublicEmail(string $value)
 * @method $this setPublicPhoneCountryCode(string $value)
 * @method $this setPublicPhoneNumber(string $value)
 * @method $this setRecentlyBestiedByCount(int $value)
 * @method $this setReelAutoArchive(string $value)
 * @method $this setSchool(mixed $value)
 * @method $this setScreenshotted(bool $value)
 * @method $this setSearchSocialContext(mixed $value)
 * @method $this setSearchSubtitle(string $value)
 * @method $this setShoppablePostsCount(int $value)
 * @method $this setShouldShowCategory(bool $value)
 * @method $this setShouldShowPublicContacts(bool $value)
 * @method $this setShowAccountTransparencyDetails(bool $value)
 * @method $this setShowBestiesBadge(bool $value)
 * @method $this setShowBusinessConversionIcon(bool $value)
 * @method $this setShowConversionEditEntry(bool $value)
 * @method $this setShowFeedBizConversionIcon(mixed $value)
 * @method $this setShowInsightsTerms(bool $value)
 * @method $this setShowShoppableFeed(bool $value)
 * @method $this setSocialContext(mixed $value)
 * @method $this setTotalArEffects(int $value)
 * @method $this setTotalIgtvVideos(int $value)
 * @method $this setUnseenCount(mixed $value)
 * @method $this setUserId(string $value)
 * @method $this setUsername(string $value)
 * @method $this setUsertagReviewEnabled(mixed $value)
 * @method $this setUsertagsCount(int $value)
 * @method $this setZip(string $value)
 * @method $this unsetAccountType()
 * @method $this unsetAddressStreet()
 * @method $this unsetAggregatePromoteEngagement()
 * @method $this unsetAllowContactsSync()
 * @method $this unsetAllowedCommenterType()
 * @method $this unsetAutoExpandChaining()
 * @method $this unsetBestiesCount()
 * @method $this unsetBiography()
 * @method $this unsetBiographyWithEntities()
 * @method $this unsetBirthday()
 * @method $this unsetBlockAt()
 * @method $this unsetBusinessContactMethod()
 * @method $this unsetByline()
 * @method $this unsetCanBeReportedAsFraud()
 * @method $this unsetCanBeTaggedAsSponsor()
 * @method $this unsetCanBoostPost()
 * @method $this unsetCanClaimPage()
 * @method $this unsetCanConvertToBusiness()
 * @method $this unsetCanCreateSponsorTags()
 * @method $this unsetCanCrosspostWithoutFbToken()
 * @method $this unsetCanFollowHashtag()
 * @method $this unsetCanHideCategory()
 * @method $this unsetCanHidePublicContacts()
 * @method $this unsetCanLinkEntitiesInBio()
 * @method $this unsetCanSeeOrganicInsights()
 * @method $this unsetCanTagProductsFromMerchants()
 * @method $this unsetCategory()
 * @method $this unsetChainingSuggestions()
 * @method $this unsetCityId()
 * @method $this unsetCityName()
 * @method $this unsetCoeffWeight()
 * @method $this unsetContactPhoneNumber()
 * @method $this unsetConvertFromPages()
 * @method $this unsetCountryCode()
 * @method $this unsetDirectMessaging()
 * @method $this unsetEligibleShoppingSignupEntrypoints()
 * @method $this unsetEmail()
 * @method $this unsetExternalLynxUrl()
 * @method $this unsetExternalUrl()
 * @method $this unsetFbPageCallToActionId()
 * @method $this unsetFbPageCallToActionIxAppId()
 * @method $this unsetFbPageCallToActionIxLabelBundle()
 * @method $this unsetFbPageCallToActionIxPartner()
 * @method $this unsetFbPageCallToActionIxUrl()
 * @method $this unsetFbuid()
 * @method $this unsetFeedPostReshareDisabled()
 * @method $this unsetFollowerCount()
 * @method $this unsetFollowingCount()
 * @method $this unsetFollowingTagCount()
 * @method $this unsetFriendshipStatus()
 * @method $this unsetFullName()
 * @method $this unsetGender()
 * @method $this unsetGeoMediaCount()
 * @method $this unsetHasAnonymousProfilePicture()
 * @method $this unsetHasBiographyTranslation()
 * @method $this unsetHasBusinessPresenceNode()
 * @method $this unsetHasChaining()
 * @method $this unsetHasHighlightReels()
 * @method $this unsetHasPlacedOrders()
 * @method $this unsetHasProfileVideoFeed()
 * @method $this unsetHasRecommendAccounts()
 * @method $this unsetHasUnseenBestiesMedia()
 * @method $this unsetHdProfilePicUrlInfo()
 * @method $this unsetHdProfilePicVersions()
 * @method $this unsetHighlightReshareDisabled()
 * @method $this unsetId()
 * @method $this unsetIncludeDirectBlacklistStatus()
 * @method $this unsetInstagramLocationId()
 * @method $this unsetIsActive()
 * @method $this unsetIsAttributeSyncEnabled()
 * @method $this unsetIsBestie()
 * @method $this unsetIsBusiness()
 * @method $this unsetIsCallToActionEnabled()
 * @method $this unsetIsCallToActionEnabledBySurface()
 * @method $this unsetIsDirectappInstalled()
 * @method $this unsetIsEligibleToShowFbCrossSharingNux()
 * @method $this unsetIsFavorite()
 * @method $this unsetIsFavoriteForHighlights()
 * @method $this unsetIsFavoriteForStories()
 * @method $this unsetIsInterestAccount()
 * @method $this unsetIsNeedy()
 * @method $this unsetIsPotentialBusiness()
 * @method $this unsetIsPrivate()
 * @method $this unsetIsProfileActionNeeded()
 * @method $this unsetIsUnpublished()
 * @method $this unsetIsUsingUnifiedInboxForDirect()
 * @method $this unsetIsVerified()
 * @method $this unsetIsVideoCreator()
 * @method $this unsetLatestReelMedia()
 * @method $this unsetLatitude()
 * @method $this unsetLinkedFbUser()
 * @method $this unsetLiveSubscriptionStatus()
 * @method $this unsetLongitude()
 * @method $this unsetMaxNumLinkedEntitiesInBio()
 * @method $this unsetMediaCount()
 * @method $this unsetMutualFollowersCount()
 * @method $this unsetNametag()
 * @method $this unsetNationalNumber()
 * @method $this unsetNeedsEmailConfirm()
 * @method $this unsetNumOfAdminedPages()
 * @method $this unsetPageId()
 * @method $this unsetPageIdForNewSumaBizAccount()
 * @method $this unsetPageName()
 * @method $this unsetPermission()
 * @method $this unsetPhoneNumber()
 * @method $this unsetPk()
 * @method $this unsetProfileContext()
 * @method $this unsetProfileContextLinksWithUserIds()
 * @method $this unsetProfileContextMutualFollowIds()
 * @method $this unsetProfilePicId()
 * @method $this unsetProfilePicUrl()
 * @method $this unsetProfileVisitsCount()
 * @method $this unsetProfileVisitsNumDays()
 * @method $this unsetPublicEmail()
 * @method $this unsetPublicPhoneCountryCode()
 * @method $this unsetPublicPhoneNumber()
 * @method $this unsetRecentlyBestiedByCount()
 * @method $this unsetReelAutoArchive()
 * @method $this unsetSchool()
 * @method $this unsetScreenshotted()
 * @method $this unsetSearchSocialContext()
 * @method $this unsetSearchSubtitle()
 * @method $this unsetShoppablePostsCount()
 * @method $this unsetShouldShowCategory()
 * @method $this unsetShouldShowPublicContacts()
 * @method $this unsetShowAccountTransparencyDetails()
 * @method $this unsetShowBestiesBadge()
 * @method $this unsetShowBusinessConversionIcon()
 * @method $this unsetShowConversionEditEntry()
 * @method $this unsetShowFeedBizConversionIcon()
 * @method $this unsetShowInsightsTerms()
 * @method $this unsetShowShoppableFeed()
 * @method $this unsetSocialContext()
 * @method $this unsetTotalArEffects()
 * @method $this unsetTotalIgtvVideos()
 * @method $this unsetUnseenCount()
 * @method $this unsetUserId()
 * @method $this unsetUsername()
 * @method $this unsetUsertagReviewEnabled()
 * @method $this unsetUsertagsCount()
 * @method $this unsetZip()
 */
class User extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'username'                                  => 'string',
        'has_anonymous_profile_picture'             => 'bool',
        'has_highlight_reels'                       => 'bool',
        'is_eligible_to_show_fb_cross_sharing_nux'  => 'bool',
        'page_id_for_new_suma_biz_account'          => 'bool',
        'eligible_shopping_signup_entrypoints'      => 'string[]',
        'is_favorite'                               => 'bool',
        'is_favorite_for_stories'                   => 'bool',
        'is_favorite_for_highlights'                => 'bool',
        'is_interest_account'                       => 'bool',
        'can_be_reported_as_fraud'                  => 'bool',
        'profile_pic_url'                           => 'string',
        'profile_pic_id'                            => 'string',
        'permission'                                => 'bool',
        'full_name'                                 => 'string',
        'user_id'                                   => 'string',
        'pk'                                        => 'string',
        'id'                                        => 'string',
        'is_verified'                               => 'bool',
        'is_private'                                => 'bool',
        'coeff_weight'                              => '',
        'friendship_status'                         => 'FriendshipStatus',
        'hd_profile_pic_versions'                   => 'ImageCandidate[]',
        'byline'                                    => '',
        'search_social_context'                     => '',
        'unseen_count'                              => '',
        'mutual_followers_count'                    => 'int',
        'follower_count'                            => 'int',
        'search_subtitle'                           => 'string',
        'social_context'                            => '',
        'media_count'                               => 'int',
        'following_count'                           => 'int',
        'following_tag_count'                       => 'int',
        'instagram_location_id'                     => '',
        'is_business'                               => 'bool',
        'usertags_count'                            => 'int',
        'profile_context'                           => '',
        'biography'                                 => 'string',
        'geo_media_count'                           => 'int',
        'is_unpublished'                            => 'bool',
        'allow_contacts_sync'                       => '',
        'show_feed_biz_conversion_icon'             => '',
        'auto_expand_chaining'                      => '',
        'can_boost_post'                            => '',
        'is_profile_action_needed'                  => 'bool',
        'has_chaining'                              => 'bool',
        'has_recommend_accounts'                    => 'bool',
        'chaining_suggestions'                      => 'ChainingSuggestion[]',
        'include_direct_blacklist_status'           => '',
        'can_see_organic_insights'                  => 'bool',
        'has_placed_orders'                         => 'bool',
        'can_convert_to_business'                   => 'bool',
        'convert_from_pages'                        => '',
        'show_business_conversion_icon'             => 'bool',
        'show_conversion_edit_entry'                => 'bool',
        'show_insights_terms'                       => 'bool',
        'can_create_sponsor_tags'                   => '',
        'hd_profile_pic_url_info'                   => 'ImageCandidate',
        'usertag_review_enabled'                    => '',
        'profile_context_mutual_follow_ids'         => 'string[]',
        'profile_context_links_with_user_ids'       => 'Link[]',
        'has_biography_translation'                 => 'bool',
        'total_igtv_videos'                         => 'int',
        'total_ar_effects'                          => 'int',
        'can_link_entities_in_bio'                  => 'bool',
        'biography_with_entities'                   => 'BiographyEntities',
        'max_num_linked_entities_in_bio'            => 'int',
        'business_contact_method'                   => 'string',
        'highlight_reshare_disabled'                => 'bool',
        /*
         * Business category.
         */
        'category'                               => 'string',
        'direct_messaging'                       => 'string',
        'page_name'                              => 'string',
        'is_attribute_sync_enabled'              => 'bool',
        'has_business_presence_node'             => 'bool',
        'profile_visits_count'                   => 'int',
        'profile_visits_num_days'                => 'int',
        'is_call_to_action_enabled'              => 'bool',
        'linked_fb_user'                         => 'FacebookUser',
        'account_type'                           => 'int',
        'should_show_category'                   => 'bool',
        'should_show_public_contacts'            => 'bool',
        'can_hide_category'                      => 'bool',
        'can_hide_public_contacts'               => 'bool',
        'can_tag_products_from_merchants'        => 'bool',
        'public_phone_country_code'              => 'string',
        'public_phone_number'                    => 'string',
        'contact_phone_number'                   => 'string',
        'latitude'                               => 'float',
        'longitude'                              => 'float',
        'address_street'                         => 'string',
        'zip'                                    => 'string',
        'city_id'                                => 'string', // 64-bit number.
        'city_name'                              => 'string',
        'public_email'                           => 'string',
        'is_needy'                               => 'bool',
        'external_url'                           => 'string',
        'external_lynx_url'                      => 'string',
        'email'                                  => 'string',
        'country_code'                           => 'int',
        'birthday'                               => '',
        'national_number'                        => 'string', // Really int, but may be >32bit.
        'gender'                                 => 'int',
        'phone_number'                           => 'string',
        'needs_email_confirm'                    => '',
        'is_active'                              => 'bool',
        'block_at'                               => '',
        'aggregate_promote_engagement'           => '',
        'fbuid'                                  => '',
        'page_id'                                => 'string',
        'can_claim_page'                         => 'bool',
        'fb_page_call_to_action_id'              => 'string',
        'fb_page_call_to_action_ix_app_id'       => 'int',
        'fb_page_call_to_action_ix_label_bundle' => '',
        'fb_page_call_to_action_ix_url'          => 'string',
        'fb_page_call_to_action_ix_partner'      => 'string',
        'is_call_to_action_enabled_by_surface'   => 'bool',
        'can_crosspost_without_fb_token'         => 'bool',
        'num_of_admined_pages'                   => 'int',
        'shoppable_posts_count'                  => 'int',
        'show_shoppable_feed'                    => 'bool',
        'show_account_transparency_details'      => 'bool',
        /*
         * Unix "taken_at" timestamp of the newest item in their story reel.
         */
        'latest_reel_media'                   => 'string',
        'has_unseen_besties_media'            => 'bool',
        'allowed_commenter_type'              => 'string',
        'reel_auto_archive'                   => 'string',
        'is_directapp_installed'              => 'bool',
        'is_using_unified_inbox_for_direct'   => 'int',
        'feed_post_reshare_disabled'          => 'bool',
        'besties_count'                       => 'int',
        'can_be_tagged_as_sponsor'            => 'bool',
        'can_follow_hashtag'                  => 'bool',
        'is_potential_business'               => 'bool',
        'has_profile_video_feed'              => 'bool',
        'is_video_creator'                    => 'bool',
        'show_besties_badge'                  => 'bool',
        'recently_bestied_by_count'           => 'int',
        'screenshotted'                       => 'bool',
        'nametag'                             => 'Nametag',
        'school'                              => '',
        'is_bestie'                           => 'bool',
        'live_subscription_status'            => 'string',
    ];
}

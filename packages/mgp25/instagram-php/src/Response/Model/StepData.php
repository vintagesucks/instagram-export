<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * StepData.
 *
 * @method string getBigBlueToken()
 * @method string getChoice()
 * @method string getContactPoint()
 * @method string getEmail()
 * @method string getFbAccessToken()
 * @method string getFormType()
 * @method string getGoogleOauthToken()
 * @method string getPhoneNumber()
 * @method string getPhoneNumberFormatted()
 * @method string getPhoneNumberPreview()
 * @method int getResendDelay()
 * @method string getSecurityCode()
 * @method int getSmsResendDelay()
 * @method bool isBigBlueToken()
 * @method bool isChoice()
 * @method bool isContactPoint()
 * @method bool isEmail()
 * @method bool isFbAccessToken()
 * @method bool isFormType()
 * @method bool isGoogleOauthToken()
 * @method bool isPhoneNumber()
 * @method bool isPhoneNumberFormatted()
 * @method bool isPhoneNumberPreview()
 * @method bool isResendDelay()
 * @method bool isSecurityCode()
 * @method bool isSmsResendDelay()
 * @method $this setBigBlueToken(string $value)
 * @method $this setChoice(string $value)
 * @method $this setContactPoint(string $value)
 * @method $this setEmail(string $value)
 * @method $this setFbAccessToken(string $value)
 * @method $this setFormType(string $value)
 * @method $this setGoogleOauthToken(string $value)
 * @method $this setPhoneNumber(string $value)
 * @method $this setPhoneNumberFormatted(string $value)
 * @method $this setPhoneNumberPreview(string $value)
 * @method $this setResendDelay(int $value)
 * @method $this setSecurityCode(string $value)
 * @method $this setSmsResendDelay(int $value)
 * @method $this unsetBigBlueToken()
 * @method $this unsetChoice()
 * @method $this unsetContactPoint()
 * @method $this unsetEmail()
 * @method $this unsetFbAccessToken()
 * @method $this unsetFormType()
 * @method $this unsetGoogleOauthToken()
 * @method $this unsetPhoneNumber()
 * @method $this unsetPhoneNumberFormatted()
 * @method $this unsetPhoneNumberPreview()
 * @method $this unsetResendDelay()
 * @method $this unsetSecurityCode()
 * @method $this unsetSmsResendDelay()
 */
class StepData extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'choice'                    => 'string',
        'phone_number'              => 'string',
        'phone_number_formatted'    => 'string',
        'email'                     => 'string',
        'fb_access_token'           => 'string',
        'big_blue_token'            => 'string',
        'google_oauth_token'        => 'string',
        'security_code'             => 'string',
        'sms_resend_delay'          => 'int',
        'resend_delay'              => 'int',
        'contact_point'             => 'string',
        'form_type'                 => 'string',
        'phone_number_preview'      => 'string',
    ];
}

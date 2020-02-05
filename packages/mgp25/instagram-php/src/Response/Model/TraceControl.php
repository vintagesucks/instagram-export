<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * TraceControl.
 *
 * @method mixed getColdStart()
 * @method int getMaxTraceTimeoutMs()
 * @method mixed getQpl()
 * @method int getTimedOutUploadSampleRate()
 * @method bool isColdStart()
 * @method bool isMaxTraceTimeoutMs()
 * @method bool isQpl()
 * @method bool isTimedOutUploadSampleRate()
 * @method $this setColdStart(mixed $value)
 * @method $this setMaxTraceTimeoutMs(int $value)
 * @method $this setQpl(mixed $value)
 * @method $this setTimedOutUploadSampleRate(int $value)
 * @method $this unsetColdStart()
 * @method $this unsetMaxTraceTimeoutMs()
 * @method $this unsetQpl()
 * @method $this unsetTimedOutUploadSampleRate()
 */
class TraceControl extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'max_trace_timeout_ms'             => 'int',
        'cold_start'                       => '',
        'timed_out_upload_sample_rate'     => 'int',
        'qpl'                              => '',
    ];
}

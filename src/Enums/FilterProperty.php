<?php

namespace Based\Fathom\Enums;

class FilterProperty extends Enum
{
    public const HOSTNAME = 'hostname';
    public const PATHNAME = 'pathname';
    public const REFERRER_HOSTNAME = 'referrer_hostname';
    public const REFERRER_PATHNAME = 'referrer_pathname';
    public const REF = 'ref';
    public const DEVICE_TYPE = 'device_type';
    public const DEVICE = 'device';
    public const BROWSER = 'browser';
    public const COUNTRY_CODE = 'country_code';
    public const UTM_CAMPAIGN = 'utm_campaign';
    public const UTM_SOURCE = 'utm_source';
    public const UTM_MEDIUM = 'utm_medium';
    public const UTM_CONTENT = 'utm_content';
    public const UTM_TERM = 'utm_term';
}

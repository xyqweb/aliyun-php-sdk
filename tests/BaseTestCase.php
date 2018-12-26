<?php

/*
 * This file is part of the /emmetltd/aliyun-php-sdk.
 *
 * (c) Emmetltd <115376835@qq.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace UnitTest;

use Emmetltd\AliyunCore\DefaultAcsClient;
use Emmetltd\AliyunCore\Profile\DefaultProfile;
use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    public $client = null;

    public function setUp()
    {
        $iClientProfile = DefaultProfile::getProfile("cn-hangzhou", "AccessKey", "AccessSecret");
        $this->client = new DefaultAcsClient($iClientProfile);
    }

    public function getProperty()
    {
        return DefaultProfile::getProfile("cn-hangzhou", "AccessKey", "AccessSecret");
    }
}

<?php

/**
 * This file is part of identifier/identifier
 *
 * identifier/identifier is open source software: you can distribute
 * it and/or modify it under the terms of the MIT License
 * (the "License"). You may not use this file except in
 * compliance with the License.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or
 * implied. See the License for the specific language governing
 * permissions and limitations under the License.
 *
 * @copyright Copyright (c) Ben Ramsey <ben@benramsey.com>
 * @license https://opensource.org/licenses/MIT MIT License
 */

declare(strict_types=1);

namespace Identifier\Uuid;

/**
 * The version number describes how the UUID was generated
 *
 * @link https://datatracker.ietf.org/doc/html/rfc4122#section-4.1.3 RFC 4122, § 4.1.3
 * @link https://datatracker.ietf.org/doc/html/draft-peabody-dispatch-new-uuid-format-04#section-4 New UUID Formats, § 4
 */
enum Version: int
{
    /**
     * Gregorian time-based UUID
     */
    case GregorianTime = 1;

    /**
     * DCE Security version UUID
     */
    case DceSecurity = 2;

    /**
     * Name-based UUID that uses MD5 hashing
     */
    case HashMd5 = 3;

    /**
     * Randomly or pseudo-randomly generated UUID
     */
    case Random = 4;

    /**
     * Name-based UUID that uses SHA-1 hashing
     */
    case HashSha1 = 5;

    /**
     * Reordered Gregorian time-based UUID
     */
    case ReorderedGregorianTime = 6;

    /**
     * Unix Epoch time-based UUID
     */
    case UnixTime = 7;

    /**
     * Reserved for custom UUID formats
     */
    case Custom = 8;

    /**
     * Alias for {@see self::GregorianTime}
     */
    public const V1 = self::GregorianTime;

    /**
     * Alias for {@see self::DceSecurity}
     */
    public const V2 = self::DceSecurity;

    /**
     * Alias for {@see self::HashMd5}
     */
    public const V3 = self::HashMd5;

    /**
     * Alias for {@see self::Random}
     */
    public const V4 = self::Random;

    /**
     * Alias for {@see self::HashSha1}
     */
    public const V5 = self::HashSha1;

    /**
     * Alias for {@see self::ReorderedGregorianTime}
     */
    public const V6 = self::ReorderedGregorianTime;

    /**
     * Alias for {@see self::UnixTime}
     */
    public const V7 = self::UnixTime;

    /**
     * Alias for {@see self::Custom}
     */
    public const V8 = self::Custom;
}

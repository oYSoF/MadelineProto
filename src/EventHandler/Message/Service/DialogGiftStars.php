<?php declare(strict_types=1);

/**
 * This file is part of MadelineProto.
 * MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 * You should have received a copy of the GNU General Public License along with MadelineProto.
 * If not, see <http://www.gnu.org/licenses/>.
 *
 * @author    Mahdi <mahdi.talaee1379@gmail.com>
 * @copyright 2016-2023 Mahdi <mahdi.talaee1379@gmail.com>
 * @license   https://opensource.org/licenses/AGPL-3.0 AGPLv3
 * @link https://docs.madelineproto.xyz MadelineProto documentation
 */

use danog\MadelineProto\EventHandler\Message\ServiceMessage;
use danog\MadelineProto\MTProto;

/**
 * Info about a gifted Telegram Stars.
 */
class DialogGiftStars extends ServiceMessage
{
    /** @internal */
    public function __construct(
        MTProto $API,
        array $rawMessage,
        array $info,
        /** Three-letter ISO 4217 currency code */
        public string $currency,
        /** Price of the gift in the smallest units of the currency (integer, not float/double). */
        public int $amount,
        /** Amount of gifted stars */
        public int $stars,
        /** If the gift was bought using a cryptocurrency, the cryptocurrency name. */
        public ?string $cryptoCurrency,
        /** If the gift was bought using a cryptocurrency, price of the gift in the smallest units of a cryptocurrency. */
        public ?int $cryptoAmount,
        /** Identifier of the transaction, only visible to the receiver of the gift. */
        public string $transactionId,
    ) {
        parent::__construct($API, $rawMessage, $info);
    }
}

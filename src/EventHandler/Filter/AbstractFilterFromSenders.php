<?php declare(strict_types=1);

/**
 * This file is part of MadelineProto.
 * MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 * You should have received a copy of the GNU General Public License along with MadelineProto.
 * If not, see <http://www.gnu.org/licenses/>.
 *
 * @author    Daniil Gentili <daniil@daniil.it>
 * @copyright 2016-2023 Daniil Gentili <daniil@daniil.it>
 * @license   https://opensource.org/licenses/AGPL-3.0 AGPLv3
 * @link https://docs.madelineproto.xyz MadelineProto documentation
 */

namespace danog\MadelineProto\EventHandler\Filter;

use Attribute;
use danog\MadelineProto\EventHandler;
use danog\MadelineProto\EventHandler\Message\GroupMessage;
use danog\MadelineProto\EventHandler\Update;

/**
 * Allow incoming or outgoing group messages made by a certain list of senders.
 * 
 * @internal
 */
abstract class AbstractFilterFromSenders extends Filter
{
    /** @var array<string|int> */
    private readonly array $peers;
    /** @var list<int> */
    private readonly array $peersResolved;
    public function __construct(string|int ...$idOrUsername)
    {
        $this->peers = \array_unique($idOrUsername);
    }
    public function initialize(EventHandler $API): Filter
    {
        if (\count($this->peers) === 1) {
            return (new FilterFromSender(\array_values($this->peers)[0]))->initialize($API);
        }
        $res = [];
        foreach ($this->peers as $peer) {
            $res []= $API->getId($peer);
        }
        /** @psalm-suppress InaccessibleProperty */
        $this->peersResolved = $res;
        return $this;
    }
    public function apply(Update $update): bool
    {
        return $update instanceof GroupMessage && \in_array($update->senderId, $this->peersResolved, true);
    }
}
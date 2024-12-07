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

namespace danog\MadelineProto\EventHandler\Filter;

use Attribute;
use danog\MadelineProto\EventHandler;
use danog\MadelineProto\EventHandler\CommandType;
use danog\MadelineProto\EventHandler\Message;
use danog\MadelineProto\EventHandler\Update;
use Webmozart\Assert\Assert;

/**
 * Allow only messages containing the specified command.
 */
#[Attribute(Attribute::TARGET_METHOD)]
class FilterSingleCommand extends Filter
{
    private readonly array $usernames;
    public function initialize(EventHandler $API): Filter
    {
        $info = $API->getSelf();
        Assert::true($info['bot'],'This filter can only be used by bots!');
        $this->usernames = $info['usernames'] ?? [$info['username']] ?? [];
        return $this;
    }
    public function __construct(private readonly string $command)
    {
    }

    public function apply(Update $update): bool
    {
        if($update instanceof Message){
            Assert::true(preg_match("/^\/(\w+)@([a-zA-Z](?:[a-zA-Z0-9]*(?:_[a-zA-Z0-9]+)?)*)$/", $update->message,$matches) === 1, "An invalid command was specified!");
            Assert::true($matches[2] >= 3 && $matches[2] <= 32, "Username must contain between 3 and 32 characters!");
            if(in_array($matches[2], $this->usernames, true)){
                return (new FilterCommand($this->command,[CommandType::SLASH]))->apply($update);
            }
            return false;
        }
        return false;
    }
}
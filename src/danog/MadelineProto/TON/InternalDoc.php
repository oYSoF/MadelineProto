<?php
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\TON;

interface liteServer
{
    /**
     *
     *
     * @return liteServer.MasterchainInfo
     */
    public function getMasterchainInfo();

    /**
     *
     *
     * Parameters:
     * * `#` **mode** -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.MasterchainInfoExt
     */
    public function getMasterchainInfoExt($params);

    /**
     *
     *
     * @return liteServer.CurrentTime
     */
    public function getTime();

    /**
     *
     *
     * @return liteServer.Version
     */
    public function getVersion();

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **id** -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.BlockData
     */
    public function getBlock($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **id** -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.BlockState
     */
    public function getState($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **id**   -
     * * `#`                  **mode** -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.BlockHeader
     */
    public function getBlockHeader($params);

    /**
     *
     *
     * Parameters:
     * * `bytes` **body** -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.SendMsgStatus
     */
    public function sendMessage($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt`   **id**      -
     * * `liteServer.accountId` **account** -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.AccountState
     */
    public function getAccountState($params);

    /**
     *
     *
     * Parameters:
     * * `#`                    **mode**      -
     * * `tonNode.blockIdExt`   **id**        -
     * * `liteServer.accountId` **account**   -
     * * `long`                 **method_id** -
     * * `bytes`                **params**    -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.RunMethodResult
     */
    public function runSmcMethod($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **id**        -
     * * `int`                **workchain** -
     * * `long`               **shard**     -
     * * `Bool`               **exact**     -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.ShardInfo
     */
    public function getShardInfo($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **id** -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.AllShardsInfo
     */
    public function getAllShardsInfo($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt`   **id**      -
     * * `liteServer.accountId` **account** -
     * * `long`                 **lt**      -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.TransactionInfo
     */
    public function getOneTransaction($params);

    /**
     *
     *
     * Parameters:
     * * `#`                    **count**   -
     * * `liteServer.accountId` **account** -
     * * `long`                 **lt**      -
     * * `int256`               **hash**    -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.TransactionList
     */
    public function getTransactions($params);

    /**
     *
     *
     * Parameters:
     * * `#`               **mode**  -
     * * `tonNode.blockId` **id**    -
     * * `long`            **lt**    - Optional:
     * * `int`             **utime** - Optional:.
     *
     * @param array $params Parameters
     *
     * @return liteServer.BlockHeader
     */
    public function lookupBlock($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt`        **id**            -
     * * `#`                         **mode**          -
     * * `#`                         **count**         -
     * * `liteServer.transactionId3` **after**         - Optional:
     * * `boolean`                   **reverse_order** - Optional:
     * * `boolean`                   **want_proof**    - Optional:.
     *
     * @param array $params Parameters
     *
     * @return liteServer.BlockTransactions
     */
    public function listBlockTransactions($params);

    /**
     *
     *
     * Parameters:
     * * `#`                  **mode**         -
     * * `tonNode.blockIdExt` **known_block**  -
     * * `tonNode.blockIdExt` **target_block** - Optional:.
     *
     * @param array $params Parameters
     *
     * @return liteServer.PartialBlockProof
     */
    public function getBlockProof($params);

    /**
     *
     *
     * Parameters:
     * * `#`                  **mode** -
     * * `tonNode.blockIdExt` **id**   -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.ConfigInfo
     */
    public function getConfigAll($params);

    /**
     *
     *
     * Parameters:
     * * `#`                  **mode**       -
     * * `tonNode.blockIdExt` **id**         -
     * * `[int]`              **param_list** -.
     *
     * @param array $params Parameters
     *
     * @return liteServer.ConfigInfo
     */
    public function getConfigParams($params);

    /**
     *
     *
     * Parameters:
     * * `#`                  **mode**           -
     * * `tonNode.blockIdExt` **id**             -
     * * `int`                **limit**          -
     * * `int256`             **start_after**    - Optional:
     * * `int`                **modified_after** - Optional:.
     *
     * @param array $params Parameters
     *
     * @return liteServer.ValidatorStats
     */
    public function getValidatorStats($params);

    /**
     *
     *
     * @return object
     */
    public function queryPrefix();

    /**
     *
     *
     * Parameters:
     * * `bytes` **data** -.
     *
     * @param array $params Parameters
     *
     * @return object
     */
    public function query($params);

    /**
     *
     *
     * Parameters:
     * * `int` **seqno**      -
     * * `int` **timeout_ms** -.
     *
     * @param array $params Parameters
     *
     * @return object
     */
    public function waitMasterchainSeqno($params);
}

interface tcp
{
    /**
     *
     *
     * @return tcp.Pong
     */
    public function ping();
}

interface dht
{
    /**
     *
     *
     * @return dht.Pong
     */
    public function ping();

    /**
     *
     *
     * Parameters:
     * * `dht.value` **value** -.
     *
     * @param array $params Parameters
     *
     * @return dht.Stored
     */
    public function store($params);

    /**
     *
     *
     * Parameters:
     * * `int256` **key** -
     * * `int`    **k**   -.
     *
     * @param array $params Parameters
     *
     * @return dht.Nodes
     */
    public function findNode($params);

    /**
     *
     *
     * Parameters:
     * * `int256` **key** -
     * * `int`    **k**   -.
     *
     * @param array $params Parameters
     *
     * @return dht.ValueResult
     */
    public function findValue($params);

    /**
     *
     *
     * @return dht.Node
     */
    public function getSignedAddressList();

    /**
     *
     *
     * Parameters:
     * * `dht.node` **node** -.
     *
     * @param array $params Parameters
     *
     * @return true
     */
    public function query($params);
}

interface overlay
{
    /**
     *
     *
     * Parameters:
     * * `overlay.nodes` **peers** -.
     *
     * @param array $params Parameters
     *
     * @return overlay.Nodes
     */
    public function getRandomPeers($params);

    /**
     *
     *
     * Parameters:
     * * `int256` **overlay** -.
     *
     * @param array $params Parameters
     *
     * @return true
     */
    public function query($params);

    /**
     *
     *
     * Parameters:
     * * `int256` **hash** -.
     *
     * @param array $params Parameters
     *
     * @return overlay.Broadcast
     */
    public function getBroadcast($params);

    /**
     *
     *
     * Parameters:
     * * `overlay.broadcastList` **list** -.
     *
     * @param array $params Parameters
     *
     * @return overlay.BroadcastList
     */
    public function getBroadcastList($params);
}

interface catchain
{
    /**
     *
     *
     * Parameters:
     * * `int256` **block** -.
     *
     * @param array $params Parameters
     *
     * @return catchain.BlockResult
     */
    public function getBlock($params);

    /**
     *
     *
     * Parameters:
     * * `[int256]` **blocks** -.
     *
     * @param array $params Parameters
     *
     * @return catchain.Sent
     */
    public function getBlocks($params);

    /**
     *
     *
     * Parameters:
     * * `[int]` **rt** -.
     *
     * @param array $params Parameters
     *
     * @return catchain.Difference
     */
    public function getDifference($params);

    /**
     *
     *
     * Parameters:
     * * `int256`   **block**   -
     * * `long`     **height**  -
     * * `[int256]` **stop_if** -.
     *
     * @param array $params Parameters
     *
     * @return catchain.Sent
     */
    public function getBlockHistory($params);
}

interface validatorSession
{
    /**
     *
     *
     * Parameters:
     * * `long` **hash** -.
     *
     * @param array $params Parameters
     *
     * @return validatorSession.Pong
     */
    public function ping($params);

    /**
     *
     *
     * Parameters:
     * * `int`                          **round** -
     * * `validatorSession.candidateId` **id**    -.
     *
     * @param array $params Parameters
     *
     * @return validatorSession.Candidate
     */
    public function downloadCandidate($params);
}

interface tonNode
{
    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **prev_block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.BlockDescription
     */
    public function getNextBlockDescription($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **prev_block** -
     * * `int`                **limit**      -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.BlocksDescription
     */
    public function getNextBlocksDescription($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **next_block**   -
     * * `int`                **limit**        -
     * * `int`                **cutoff_seqno** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.BlocksDescription
     */
    public function getPrevBlocksDescription($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block**         -
     * * `Bool`               **allow_partial** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.PreparedProof
     */
    public function prepareBlockProof($params);

    /**
     *
     *
     * Parameters:
     * * `[tonNode.blockIdExt]` **blocks**        -
     * * `Bool`                 **allow_partial** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.PreparedProof
     */
    public function prepareBlockProofs($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.Prepared
     */
    public function prepareBlock($params);

    /**
     *
     *
     * Parameters:
     * * `[tonNode.blockIdExt]` **blocks** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.Prepared
     */
    public function prepareBlocks($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block**             -
     * * `tonNode.blockIdExt` **masterchain_block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.PreparedState
     */
    public function preparePersistentState($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.PreparedState
     */
    public function prepareZeroState($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block**    -
     * * `int`                **max_size** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.KeyBlocks
     */
    public function getNextKeyBlockIds($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **prev_block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.DataFull
     */
    public function downloadNextBlockFull($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.DataFull
     */
    public function downloadBlockFull($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.Data
     */
    public function downloadBlock($params);

    /**
     *
     *
     * Parameters:
     * * `[tonNode.blockIdExt]` **blocks** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.DataList
     */
    public function downloadBlocks($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block**             -
     * * `tonNode.blockIdExt` **masterchain_block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.Data
     */
    public function downloadPersistentState($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block**             -
     * * `tonNode.blockIdExt` **masterchain_block** -
     * * `long`               **offset**            -
     * * `long`               **max_size**          -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.Data
     */
    public function downloadPersistentStateSlice($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.Data
     */
    public function downloadZeroState($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.Data
     */
    public function downloadBlockProof($params);

    /**
     *
     *
     * Parameters:
     * * `[tonNode.blockIdExt]` **blocks** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.DataList
     */
    public function downloadBlockProofs($params);

    /**
     *
     *
     * Parameters:
     * * `tonNode.blockIdExt` **block** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.Data
     */
    public function downloadBlockProofLink($params);

    /**
     *
     *
     * Parameters:
     * * `[tonNode.blockIdExt]` **blocks** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.DataList
     */
    public function downloadBlockProofLinks($params);

    /**
     *
     *
     * Parameters:
     * * `int` **masterchain_seqno** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.ArchiveInfo
     */
    public function getArchiveInfo($params);

    /**
     *
     *
     * Parameters:
     * * `long` **archive_id** -
     * * `long` **offset**     -
     * * `int`  **max_size**   -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.Data
     */
    public function getArchiveSlice($params);

    /**
     *
     *
     * @return tonNode.Capabilities
     */
    public function getCapabilities();

    /**
     *
     *
     * Parameters:
     * * `tonNode.externalMessage` **message** -.
     *
     * @param array $params Parameters
     *
     * @return tonNode.Success
     */
    public function slave($params);

    /**
     *
     *
     * @return object
     */
    public function query();
}

interface adnl
{
    /**
     *
     *
     * Parameters:
     * * `long` **value** -.
     *
     * @param array $params Parameters
     *
     * @return adnl.Pong
     */
    public function ping($params);
}

interface engine
{
    /**
     *
     *
     * Parameters:
     * * `PrivateKey` **key**                 -
     * * `int256`     **key_hash**            -
     * * `int`        **category**            -
     * * `int`        **election_date**       -
     * * `int`        **ttl**                 -
     * * `int256`     **permanent_key_hash**  -
     * * `int256`     **adnl_id**             -
     * * `int`        **port**                -
     * * `int256`     **peer_key**            -
     * * `int`        **permissions**         -
     * * `int`        **ip**                  -
     * * `[int]`      **categories**          -
     * * `[int]`      **priority_categories** -
     * * `int`        **in_ip**               -
     * * `int`        **in_port**             -
     * * `int`        **out_ip**              -
     * * `int`        **out_port**            -
     * * `adnl.Proxy` **proxy**               -
     * * `bytes`      **data**                -
     * * `int`        **verbosity**           -
     * * `string`     **election_addr**       -
     * * `string`     **wallet**              -
     * * `int256`     **id**                  -.
     *
     * @param array $params Parameters
     *
     * @return object
     */
    public function validator($params);
}

interface http
{
    /**
     *
     *
     * Parameters:
     * * `int256`        **id**           -
     * * `string`        **method**       -
     * * `string`        **url**          -
     * * `string`        **http_version** -
     * * `[http.header]` **headers**      -.
     *
     * @param array $params Parameters
     *
     * @return http.Response
     */
    public function request($params);

    /**
     *
     *
     * Parameters:
     * * `int256` **id**             -
     * * `int`    **seqno**          -
     * * `int`    **max_chunk_size** -.
     *
     * @param array $params Parameters
     *
     * @return http.PayloadPart
     */
    public function getNextPayloadPart($params);
}

class InternalDoc extends APIFactory
{
    /**
         * Call promise $b after promise $a.
         *
         * @param \Generator|Promise $a Promise A
         * @param \Generator|Promise $b Promise B
         *
         * @psalm-suppress InvalidScope
         *
         * @return Promise
         */
    public function after($a, $b)
    {
        return \danog\MadelineProto\Tools::after($a, $b);
    }
    /**
     * Returns a promise that succeeds when all promises succeed, and fails if any promise fails.
     * Returned promise succeeds with an array of values used to succeed each contained promise, with keys corresponding to the array of promises.
     *
     * @param array<\Generator|Promise> $promises Promises
     *
     * @return Promise
     */
    public function all(array $promises)
    {
        return \danog\MadelineProto\Tools::all($promises);
    }
    /**
     * Returns a promise that is resolved when all promises are resolved. The returned promise will not fail.
     *
     * @param array<Promise|\Generator> $promises Promises
     *
     * @return Promise
     */
    public function any(array $promises)
    {
        return \danog\MadelineProto\Tools::any($promises);
    }
    /**
     * Create array.
     *
     * @param mixed ...$params Params
     *
     * @return array
     */
    public function arr(...$params): array
    {
        return \danog\MadelineProto\Tools::arr(...$params);
    }
    /**
     * base64URL decode.
     *
     * @param string $data Data to decode
     *
     * @return string
     */
    public function base64urlDecode(string $data): string
    {
        return \danog\MadelineProto\Tools::base64urlDecode($data);
    }
    /**
     * Base64URL encode.
     *
     * @param string $data Data to encode
     *
     * @return string
     */
    public function base64urlEncode(string $data): string
    {
        return \danog\MadelineProto\Tools::base64urlEncode($data);
    }
    /**
     * Convert parameters.
     *
     * @param array $parameters Parameters
     *
     * @return \Generator
     */
    public function botAPItoMTProto(array $parameters, array $extra = [])
    {
        return $this->__call(__FUNCTION__, [$parameters, $extra]);
    }
    /**
     * Convert generator, promise or any other value to a promise.
     *
     * @param \Generator|Promise|mixed $promise
     *
     * @return Promise
     */
    public function call($promise)
    {
        return \danog\MadelineProto\Tools::call($promise);
    }
    /**
     * Call promise in background.
     *
     * @param \Generator|Promise  $promise Promise to resolve
     * @param ?\Generator|Promise $actual  Promise to resolve instead of $promise
     * @param string              $file    File
     *
     * @psalm-suppress InvalidScope
     *
     * @return Promise|mixed
     */
    public function callFork($promise, $actual = null, $file = '')
    {
        return \danog\MadelineProto\Tools::callFork($promise, $actual, $file);
    }
    /**
     * Call promise in background, deferring execution.
     *
     * @param \Generator|Promise $promise Promise to resolve
     *
     * @return void
     */
    public function callForkDefer($promise): void
    {
        \danog\MadelineProto\Tools::callForkDefer($promise);
    }
    /**
     * Connect to the lite endpoints specified in the config file.
     *
     * @param string $config Path to config file
     *
     * @return \Generator
     */
    public function connect(string $config, array $extra = [])
    {
        return $this->__call(__FUNCTION__, [$config, $extra]);
    }
    /**
     * Asynchronously write to stdout/browser.
     *
     * @param string $string Message to echo
     *
     * @return Promise
     */
    public function echo(string $string)
    {
        return \danog\MadelineProto\Tools::echo($string);
    }
    /**
     * Get final element of array.
     *
     * @param array $what Array
     *
     * @return mixed
     */
    public function end(array $what)
    {
        return \danog\MadelineProto\Tools::end($what);
    }
    /**
     * Returns a promise that succeeds when the first promise succeeds, and fails only if all promises fail.
     *
     * @param array<Promise|\Generator> $promises Promises
     *
     * @return Promise
     */
    public function first(array $promises)
    {
        return \danog\MadelineProto\Tools::first($promises);
    }
    /**
     * Asynchronously lock a file
     * Resolves with a callbable that MUST eventually be called in order to release the lock.
     *
     * @param string  $file      File to lock
     * @param integer $operation Locking mode
     * @param float  $polling   Polling interval
     *
     * @return Promise<callable>
     */
    public function flock(string $file, int $operation, float $polling = 0.1)
    {
        return \danog\MadelineProto\Tools::flock($file, $operation, $polling);
    }
    /**
     * Generate MTProto vector hash.
     *
     * @param array $ints IDs
     *
     * @return int Vector hash
     */
    public function genVectorHash(array $ints): int
    {
        return \danog\MadelineProto\Tools::genVectorHash($ints);
    }
    /**
     * Get TL method namespaces.
     *
     * @return array
     */
    public function getMethodNamespaces(): array
    {
        return $this->API->getMethodNamespaces();
    }
    /**
     * Accesses a private variable from an object.
     *
     * @param object $obj Object
     * @param string $var Attribute name
     *
     * @psalm-suppress InvalidScope
     *
     * @return mixed
     * @access public
     */
    public function getVar($obj, string $var)
    {
        return \danog\MadelineProto\Tools::getVar($obj, $var);
    }
    /**
     * Inflate stripped photosize to full JPG payload.
     *
     * @param string $stripped Stripped photosize
     *
     * @return string JPG payload
     */
    public function inflateStripped(string $stripped): string
    {
        return \danog\MadelineProto\Tools::inflateStripped($stripped);
    }
    /**
     * Whether this is altervista.
     *
     * @return boolean
     */
    public function isAltervista(): bool
    {
        return \danog\MadelineProto\Tools::isAltervista();
    }
    /**
     * Check if is array or similar (traversable && countable && arrayAccess).
     *
     * @param mixed $var Value to check
     *
     * @return boolean
     */
    public function isArrayOrAlike($var): bool
    {
        return \danog\MadelineProto\Tools::isArrayOrAlike($var);
    }
    /**
     * Logger.
     *
     * @param string $param Parameter
     * @param int    $level Logging level
     * @param string $file  File where the message originated
     *
     * @return void
     */
    public function logger($param, int $level = \danog\MadelineProto\Logger::NOTICE, string $file = ''): void
    {
        $this->API->logger($param, $level, $file);
    }
    /**
     * Asynchronously run async callable.
     *
     * @param callable $func Function
     *
     * @return \Generator
     */
    public function loop(callable $func, array $extra = [])
    {
        return $this->__call(__FUNCTION__, [$func, $extra]);
    }
    /**
     * Escape string for markdown.
     *
     * @param string $hwat String to escape
     *
     * @return string
     */
    public function markdownEscape(string $hwat): string
    {
        return \danog\MadelineProto\StrTools::markdownEscape($hwat);
    }
    /**
     * Call lite method.
     *
     * @param string $methodName Method name
     * @param array  $args       Arguments
     *
     * @return \Generator
     */
    public function methodCall(string $methodName, array $args = [
    ], array $aargs = [
    ], array $extra = [])
    {
        return $this->__call(__FUNCTION__, [$methodName, $args, $aargs, $extra]);
    }
    /**
     * Escape method name.
     *
     * @param string $method Method name
     *
     * @return string
     */
    public function methodEscape(string $method): string
    {
        return \danog\MadelineProto\StrTools::methodEscape($method);
    }
    /**
     * Convert double to binary version.
     *
     * @param float $value Value to convert
     *
     * @return string
     */
    public function packDouble(float $value): string
    {
        return \danog\MadelineProto\Tools::packDouble($value);
    }
    /**
     * Convert integer to base256 signed int.
     *
     * @param integer $value Value to convert
     *
     * @return string
     */
    public function packSignedInt(int $value): string
    {
        return \danog\MadelineProto\Tools::packSignedInt($value);
    }
    /**
     * Convert integer to base256 long.
     *
     * @param int $value Value to convert
     *
     * @return string
     */
    public function packSignedLong(int $value): string
    {
        return \danog\MadelineProto\Tools::packSignedLong($value);
    }
    /**
     * Convert value to unsigned base256 int.
     *
     * @param int $value Value
     *
     * @return string
     */
    public function packUnsignedInt(int $value): string
    {
        return \danog\MadelineProto\Tools::packUnsignedInt($value);
    }
    /**
     * Positive modulo
     * Works just like the % (modulus) operator, only returns always a postive number.
     *
     * @param int $a A
     * @param int $b B
     *
     * @return int Modulo
     */
    public function posmod(int $a, int $b): int
    {
        return \danog\MadelineProto\Tools::posmod($a, $b);
    }
    /**
     * Get random string of specified length.
     *
     * @param integer $length Length
     *
     * @return string Random string
     */
    public function random(int $length): string
    {
        return \danog\MadelineProto\Tools::random($length);
    }
    /**
     * Get random integer.
     *
     * @param integer $modulus Modulus
     *
     * @return int
     */
    public function randomInt(int $modulus = 0): int
    {
        return \danog\MadelineProto\Tools::randomInt($modulus);
    }
    /**
     * Asynchronously read line.
     *
     * @param string $prompt Prompt
     *
     * @return Promise<string>
     */
    public function readLine(string $prompt = '')
    {
        return \danog\MadelineProto\Tools::readLine($prompt);
    }
    /**
     * Rethrow error catched in strand.
     *
     * @param \Throwable $e    Exception
     * @param string     $file File where the strand started
     *
     * @psalm-suppress InvalidScope
     *
     * @return void
     */
    public function rethrow(\Throwable $e, $file = ''): void
    {
        \danog\MadelineProto\Tools::rethrow($e, $file);
    }
    /**
     * null-byte RLE decode.
     *
     * @param string $string Data to decode
     *
     * @return string
     */
    public function rleDecode(string $string): string
    {
        return \danog\MadelineProto\Tools::rleDecode($string);
    }
    /**
     * null-byte RLE encode.
     *
     * @param string $string Data to encode
     *
     * @return string
     */
    public function rleEncode(string $string): string
    {
        return \danog\MadelineProto\Tools::rleEncode($string);
    }
    /**
     * Sets a private variable in an object.
     *
     * @param object $obj Object
     * @param string $var Attribute name
     * @param mixed  $val Attribute value
     *
     * @psalm-suppress InvalidScope
     *
     * @return mixed
     * @access public
     */
    public function setVar($obj, string $var, &$val): void
    {
        \danog\MadelineProto\Tools::setVar($obj, $var, $val);
    }
    /**
     * Asynchronously sleep.
     *
     * @param int $time Number of seconds to sleep for
     *
     * @return Promise
     */
    public function sleep(int $time)
    {
        return \danog\MadelineProto\Tools::sleep($time);
    }
    /**
     * Resolves with a two-item array delineating successful and failed Promise results.
     * The returned promise will only fail if the given number of required promises fail.
     *
     * @param array<Promise|\Generator> $promises Promises
     *
     * @return Promise
     */
    public function some(array $promises)
    {
        return \danog\MadelineProto\Tools::some($promises);
    }
    /**
     * Create an artificial timeout for any \Generator or Promise.
     *
     * @param \Generator|Promise $promise
     * @param integer $timeout
     *
     * @return Promise
     */
    public function timeout($promise, int $timeout)
    {
        return \danog\MadelineProto\Tools::timeout($promise, $timeout);
    }
    /**
     * Convert to camelCase.
     *
     * @param string $input String
     *
     * @return string
     */
    public function toCamelCase(string $input): string
    {
        return \danog\MadelineProto\StrTools::toCamelCase($input);
    }
    /**
     * Convert to snake_case.
     *
     * @param string $input String
     *
     * @return string
     */
    public function toSnakeCase(string $input): string
    {
        return \danog\MadelineProto\StrTools::toSnakeCase($input);
    }
    /**
     * Escape type name.
     *
     * @param string $type String to escape
     *
     * @return string
     */
    public function typeEscape(string $type): string
    {
        return \danog\MadelineProto\StrTools::typeEscape($type);
    }
    /**
     * Unpack binary double.
     *
     * @param string $value Value to unpack
     *
     * @return float
     */
    public function unpackDouble(string $value): float
    {
        return \danog\MadelineProto\Tools::unpackDouble($value);
    }
    /**
     * Unpack base256 signed int.
     *
     * @param string $value base256 int
     *
     * @return integer
     */
    public function unpackSignedInt(string $value): int
    {
        return \danog\MadelineProto\Tools::unpackSignedInt($value);
    }
    /**
     * Unpack base256 signed long.
     *
     * @param string $value base256 long
     *
     * @return integer
     */
    public function unpackSignedLong(string $value): int
    {
        return \danog\MadelineProto\Tools::unpackSignedLong($value);
    }
    /**
     * Unpack base256 signed long to string.
     *
     * @param string $value base256 long
     *
     * @return string
     */
    public function unpackSignedLongString($value): string
    {
        return \danog\MadelineProto\Tools::unpackSignedLongString($value);
    }
    /**
     * Synchronously wait for a promise|generator.
     *
     * @param \Generator|Promise $promise      The promise to wait for
     * @param boolean            $ignoreSignal Whether to ignore shutdown signals
     *
     * @return mixed
     */
    public function wait($promise, $ignoreSignal = false)
    {
        return \danog\MadelineProto\Tools::wait($promise, $ignoreSignal);
    }
}

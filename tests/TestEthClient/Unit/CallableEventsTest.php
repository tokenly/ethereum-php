<?php
namespace Ethereum;

use Ethereum\DataType\EthD32;

/**
 * The used contract is referenced by its name
 *
 * "class CallableEvents" ==> ../test_contracts/build/CallableEvents.json
 *
 * Truffle builds the json file when running
 *
 *      truffle compile && truffle migrate
 *
 * The source file is ../test_contracts/contracts/CallableEvents.sol
 *
 * @ingroup ethereumTests
 */
class CallableEvents extends TestEthContract
{

    /*
     * I created a TruffleBox based react app you may use to evaluate this contract
     * https://github.com/digitaldonkey/react-box-event-handling
     *
     * There is also a docker containing deployed data to spin up ganache-cli
     * including this Transactions.
     * https://github.com/digitaldonkey/ganache-cli-docker-compose/tree/EthereumPhpCallableEvents
     *
     */

    /**
     * @return array
     */
    public function eventCallingDataProvider() {

        // [EventName => JSON.stringify(result)]
        //
        // In Web3Js you would do:
        //
        // this.state.contract[method]().then((receipt) => {
        //    console.log('Call to ' + method + '()');
        //    console.log('result.logs contains all emitted events', JSON.stringify(receipt));
        // })
        //

        return [
          ['triggerEvent1', ['0xa508dd875f10c33c52a8abb20e16fc68e981f186'], '{"tx":"0x9e1c1267dcde54ab2c7a77d8125c9c18df7afde87fd876ac59ef31ffdabbb60b","receipt":{"transactionHash":"0x9e1c1267dcde54ab2c7a77d8125c9c18df7afde87fd876ac59ef31ffdabbb60b","transactionIndex":0,"blockHash":"0xb8d3d76d906e82f9af3852cdae7547b2b306ace3461834f4fd335270243a5b42","blockNumber":8,"gasUsed":22609,"cumulativeGasUsed":22609,"contractAddress":null,"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0x9e1c1267dcde54ab2c7a77d8125c9c18df7afde87fd876ac59ef31ffdabbb60b","blockHash":"0xb8d3d76d906e82f9af3852cdae7547b2b306ace3461834f4fd335270243a5b42","blockNumber":8,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","data":"0x00","topics":["0xf1bcc9b38e5032bb337b23b2b8aeec7c9892fdcea5957297e659dbe2c99e16e3","0x000000000000000000000000a508dd875f10c33c52a8abb20e16fc68e981f186"],"type":"mined"}],"status":"0x1","logsBloom":"0x00000000000000800000000000000000000000000000000000000000000000000000240000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000008000000000000000000000000000000000000010000000001000000000000000000000000000000000000000000000000000000000000000000000040000000000000000000000000000000000000000000000001000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000004000000000000000000000000000000000000000000000000000000000000000000000"},"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0x9e1c1267dcde54ab2c7a77d8125c9c18df7afde87fd876ac59ef31ffdabbb60b","blockHash":"0xb8d3d76d906e82f9af3852cdae7547b2b306ace3461834f4fd335270243a5b42","blockNumber":8,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","type":"mined","event":"CalledTrigger1","args":{"from":"0xa508dd875f10c33c52a8abb20e16fc68e981f186"}}]}'],
          ['triggerEvent2', ['0xa508dd875f10c33c52a8abb20e16fc68e981f186', '0x000000000000000000000000000000000000000000000000000000000000270f'], '{"tx":"0xf4d81fdf78afe26b525f01a2b3ca3170113b1622b9a5768a515b6fcf1f855502","receipt":{"transactionHash":"0xf4d81fdf78afe26b525f01a2b3ca3170113b1622b9a5768a515b6fcf1f855502","transactionIndex":0,"blockHash":"0xcb0d676f3a02f91b7399ee6fe3b778618c38f0e58e33554d1bbb5f741ea20dee","blockNumber":9,"gasUsed":23000,"cumulativeGasUsed":23000,"contractAddress":null,"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0xf4d81fdf78afe26b525f01a2b3ca3170113b1622b9a5768a515b6fcf1f855502","blockHash":"0xcb0d676f3a02f91b7399ee6fe3b778618c38f0e58e33554d1bbb5f741ea20dee","blockNumber":9,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","data":"0x000000000000000000000000000000000000000000000000000000000000270f","topics":["0xea677e60e8b8b74e6ac7fc18830a7fe4300f1d020f0229ddc728dab0942a6cca","0x000000000000000000000000a508dd875f10c33c52a8abb20e16fc68e981f186"],"type":"mined"}],"status":"0x1","logsBloom":"0x00000000000000000000000000000000000000000000000000000000000000000000040000000000000000000000000000000000000000000000000000000040000000000000000000000000000000000000000000000008000000000000000000000000000000000000010000000001000000000000000000000000000000000000000000000000000000000004000000000040000000000000000000000000000000000000000000000001000000000000000000000000000000000000000000000000000000000000000000000000000000000000000008000000000000000000000000000000000000000000000000000000000000000000000000000000"},"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0xf4d81fdf78afe26b525f01a2b3ca3170113b1622b9a5768a515b6fcf1f855502","blockHash":"0xcb0d676f3a02f91b7399ee6fe3b778618c38f0e58e33554d1bbb5f741ea20dee","blockNumber":9,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","type":"mined","event":"CalledTrigger2","args":{"from":"0xa508dd875f10c33c52a8abb20e16fc68e981f186","value":"9999"}}]}'],
          ['triggerEvent3', ['0xa508dd875f10c33c52a8abb20e16fc68e981f186', '0x000000000000000000000000000000000000000000000000000000000000270f', '0x000000000000000000000000000000000000000000000000000000000000270f'], '{"tx":"0x3c0cfa50eb6264b393f70ea03925418df7c3e3f18bb04618641935a41b75305d","receipt":{"transactionHash":"0x3c0cfa50eb6264b393f70ea03925418df7c3e3f18bb04618641935a41b75305d","transactionIndex":0,"blockHash":"0x30ea761ab2d4883307d857f094f4ce3f233a7294fe10440cce525a10767b58fb","blockNumber":10,"gasUsed":23213,"cumulativeGasUsed":23213,"contractAddress":null,"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0x3c0cfa50eb6264b393f70ea03925418df7c3e3f18bb04618641935a41b75305d","blockHash":"0x30ea761ab2d4883307d857f094f4ce3f233a7294fe10440cce525a10767b58fb","blockNumber":10,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","data":"0x000000000000000000000000000000000000000000000000000000000000270f000000000000000000000000000000000000000000000000000000000000270f","topics":["0xd320a9ab3e25a9129a0f94cd03a17b8ee0705e6d135041c069e7515e7788a325","0x000000000000000000000000a508dd875f10c33c52a8abb20e16fc68e981f186"],"type":"mined"}],"status":"0x1","logsBloom":"0x00000000000000000000000000000000000000000000000000000000000000000000040000000000000000000000000001000000000000000000000000000000000000000000000000000000000000000000000000000008000000000000000000000000000000000000010000000001000000000000000000000000000000000000000000000002000000000000000000000040000000000000000000000000000000000000000000000001000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000004000000000000000000000000000000000000000000"},"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0x3c0cfa50eb6264b393f70ea03925418df7c3e3f18bb04618641935a41b75305d","blockHash":"0x30ea761ab2d4883307d857f094f4ce3f233a7294fe10440cce525a10767b58fb","blockNumber":10,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","type":"mined","event":"CalledTrigger3","args":{"from":"0xa508dd875f10c33c52a8abb20e16fc68e981f186","val1":"9999","val2":"9999"}}]}'],
          ['triggerEvent4', ['0x000000000000000000000000000000000000000000000000000000000000270f', '0x000000000000000000000000000000000000000000000000000000000000270f'], '{"tx":"0x038a6a87c8d97c60fb93834aaebeaad1aa31898cbbb0ccf4ed0e1e0ad63fe739","receipt":{"transactionHash":"0x038a6a87c8d97c60fb93834aaebeaad1aa31898cbbb0ccf4ed0e1e0ad63fe739","transactionIndex":0,"blockHash":"0x02834b0eb3ee7d8cf9df36750099cb2a16555224bbf192440233122b34d5ed06","blockNumber":11,"gasUsed":22852,"cumulativeGasUsed":22852,"contractAddress":null,"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0x038a6a87c8d97c60fb93834aaebeaad1aa31898cbbb0ccf4ed0e1e0ad63fe739","blockHash":"0x02834b0eb3ee7d8cf9df36750099cb2a16555224bbf192440233122b34d5ed06","blockNumber":11,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","data":"0x000000000000000000000000000000000000000000000000000000000000270f000000000000000000000000000000000000000000000000000000000000270f","topics":["0xe8dd66fef5701b72851ca2c0bc6859fc1b15968ba8be5c4075c2330231b38ea3"],"type":"mined"}],"status":"0x1","logsBloom":"0x00000000000000000000000000000000000000000000000000000000000000000000040000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000080000000001000000000000000000000000000000000000000000000000000000000000200000000000000000000000000000000000000000000000000000000001000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000002000000000"},"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0x038a6a87c8d97c60fb93834aaebeaad1aa31898cbbb0ccf4ed0e1e0ad63fe739","blockHash":"0x02834b0eb3ee7d8cf9df36750099cb2a16555224bbf192440233122b34d5ed06","blockNumber":11,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","type":"mined","event":"CalledTrigger4","args":{"val1":"9999","val2":"9999"}}]}'],
          ['triggerEvent5', ['0x000000000000000000000000000000000000000000000000000000000000270f', '0x000000000000000000000000000000000000000000000000000000000000270f'], '{"tx":"0x8e35ca3a3c54b34edc3a1b5385ee21a021d0d9343ef4c8783ab6576b74137c09","receipt":{"transactionHash":"0x8e35ca3a3c54b34edc3a1b5385ee21a021d0d9343ef4c8783ab6576b74137c09","transactionIndex":0,"blockHash":"0xcc29260582408eed58cf24654548a5b60ed590cc42867e2fbdf2c018db3048b1","blockNumber":12,"gasUsed":23061,"cumulativeGasUsed":23061,"contractAddress":null,"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0x8e35ca3a3c54b34edc3a1b5385ee21a021d0d9343ef4c8783ab6576b74137c09","blockHash":"0xcc29260582408eed58cf24654548a5b60ed590cc42867e2fbdf2c018db3048b1","blockNumber":12,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","data":"0x00","topics":["0x1713a546df5ad374a19e3792551f4bd595019648e5d4f360e86d530f8ee2fbce","0x000000000000000000000000000000000000000000000000000000000000270f","0x000000000000000000000000000000000000000000000000000000000000270f"],"type":"mined"}],"status":"0x1","logsBloom":"0x00000000000000000000001000000000000000000000000000000000000000000000040000000000004000000000000000000000000000000000000000000000000000000000000000000000000000002000000000040000000000000000000000000000000000000000000000400001000000000000000000000000000000000000000000000000000000000000000000000000000000000000000200000000000000000000000000000001000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000"},"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0x8e35ca3a3c54b34edc3a1b5385ee21a021d0d9343ef4c8783ab6576b74137c09","blockHash":"0xcc29260582408eed58cf24654548a5b60ed590cc42867e2fbdf2c018db3048b1","blockNumber":12,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","type":"mined","event":"CalledTrigger5","args":{"val1":"9999","val2":"9999"}}]}'],
          ['triggerEvent6', ['0xa508dd875f10c33c52a8abb20e16fc68e981f186', '0x000000000000000000000000000000000000000000000000000000005b5867df', '0x000000000000000000000000000000000000000000000000000000000000000d'],'{"tx":"0x9a1443c1ab8bbe9c617172c99ec6b49a39ca0e1bb59ac76d174e115f372c7794","receipt":{"transactionHash":"0x9a1443c1ab8bbe9c617172c99ec6b49a39ca0e1bb59ac76d174e115f372c7794","transactionIndex":0,"blockHash":"0xb13aee1c2c7f1c8d33c131d662e13e16873b5b2768031a34defe043af09a3fff","blockNumber":13,"gasUsed":23228,"cumulativeGasUsed":23228,"contractAddress":null,"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0x9a1443c1ab8bbe9c617172c99ec6b49a39ca0e1bb59ac76d174e115f372c7794","blockHash":"0xb13aee1c2c7f1c8d33c131d662e13e16873b5b2768031a34defe043af09a3fff","blockNumber":13,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","data":"0x000000000000000000000000a508dd875f10c33c52a8abb20e16fc68e981f186000000000000000000000000000000000000000000000000000000005b5867df000000000000000000000000000000000000000000000000000000000000000d","topics":["0xd574453bc7514229ed2aa4f0e20aadfa6df86e63b21bf7e78aae08f008740c48"],"type":"mined"}],"status":"0x1","logsBloom":"0x00000000000000000000000000000000000000000000000000000000000000001000040000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001000000000000000000000000000000000000100000000000000000000000000000000000000000000200000000000000000000000000000000000000000000000000000000000000000000000000000000000000"},"logs":[{"logIndex":0,"transactionIndex":0,"transactionHash":"0x9a1443c1ab8bbe9c617172c99ec6b49a39ca0e1bb59ac76d174e115f372c7794","blockHash":"0xb13aee1c2c7f1c8d33c131d662e13e16873b5b2768031a34defe043af09a3fff","blockNumber":13,"address":"0xa25b1c8d99a9f43a71a7873ae29587e9ebb9dade","type":"mined","event":"CalledTrigger6","args":{"from":"0xa508dd875f10c33c52a8abb20e16fc68e981f186","timestamp":"1532520415","blockNumber":"13"}}]}'],
            // ['MoneyReceived' => ''],
        ];
    }


    /**
     * @dataProvider eventCallingDataProvider
     *
     * @param $eventName
     * @param $eventData
     * @param $tx
     *
     * @throws \Exception
     */
    public function testSimpleContract($eventName, $eventData, $tx)
    {
        $tx = json_decode($tx);
        $web3 = new Ethereum(SERVER_URL);
        $receipt = $web3->eth_getTransactionReceipt(new EthD32($tx->tx));

        if (is_null($receipt)) {
            throw new \Exception('Your chain data might not match the source data in this test for event ' . $eventName);
        }

        foreach($receipt->logs as $filterChange) {
            /* @var \Ethereum\EmittedEvent $event */
            $event = $this->contract->processLog($filterChange);
            $this->assertSame($eventData, $event->getRawData());
        }
    }


}


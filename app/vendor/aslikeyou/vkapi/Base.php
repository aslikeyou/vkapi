<?php
namespace Aslikeyou\VkApi;

class Base
{
    public function getClient() {
        $client = new \GuzzleHttp\Client(
            [
                'base_uri' => 'https://api.vk.com/method/',
                'query' => [
                    'access_token' => "6c3802291e4021845404a717c1eab38ca6ffe6d99e1175aaf0417a1de79872a3ff7751506f84b30503d34"
                ]
            ]
        );

        return $client;
    }

}
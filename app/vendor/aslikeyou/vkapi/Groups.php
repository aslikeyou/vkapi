<?php
/**
 * Created by PhpStorm.
 * User: aslikeyou
 * Date: 8/23/16
 * Time: 01:04
 */

namespace Aslikeyou\VkApi;


class Groups extends Base
{
    public static function i() {
        return new static;
    }
    public function removeUser($groupId, $userId) {
        $client = $this->getClient();

        return \GuzzleHttp\json_decode($client->post('groups.removeUser', [
            'form_params' => [
                'group_id' => abs($groupId),
                'user_id' => $userId
            ]
        ])->getBody()->getContents(), true);
    }
}
<?php

namespace GisoStallenberg\CorrectHorseBatteryStapleClient;

use GuzzleHttp\Client;

class CorrectHorseBatteryStapleClient {
    /**
     * Checks the password using the service
     *
     * @param string $password
     * @param string $service
     * @return array
     */
    public static function check($password, $service) {
        $client = new Client(['base_uri' => $service]);
        return json_decode($client->post($service, [
            'body' => $password
        ])->getBody(), true);
    }
}
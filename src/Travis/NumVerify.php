<?php

namespace Travis;

class NumVerify
{
    /**
     * Make the request.
     *
     * @param   string  $apikey
     * @param   string  $number
     * @return  object
     */
    public static function run($apikey, $number)
    {
        // set endpoint
        $endpoint = 'http://apilayer.net/api/validate?access_key='.$apikey.'&number='.$number;

        // connect to api
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        // catch errors...
        if (curl_errno($ch))
        {
            #$errors = curl_error($ch);

            $result = false;
        }
        else
        {
            $result = json_decode($response);
        }

        // close
        curl_close($ch);

        // return
        return $result;
    }
}
<?php

class apiRemove
{
    public static function onApi()
    {
        $ch = curl_init("https://api.remove.bg");
        
        curl_setopt($ch, CURLOPT_HEADER, 'X-API-Key: 8gZk5GkjMrJV6nn5K6CTLRo9');
        curl_setopt($ch, CURLOPT_PUT, 'C:\xampp\htdocs\projetoPhp\fotos\logoLink.png');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $exec = curl_exec($ch);

    }
}

apiRemove::onApi();

?>
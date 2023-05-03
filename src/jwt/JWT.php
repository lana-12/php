<?php

class JWT
{
    public function generate(array $header, array $payload, string $secret, int $validity = 86400): string
    {
        //Vérifier $validity
        if ($validity > 0) {
            //Récupérer le "Maintenant"
            $now = new DateTime();
            // Date d'expiration
            $expiration = $now->getTimestamp() + $validity;
            $payload['iat']= $now->getTimestamp();
            $payload['exp']= $expiration;
        }

        //Encoder en base64
        $base64Header = base64_encode(json_encode($header));
        $base64Payload = base64_encode(json_encode($payload));

        $base64Header = str_replace(['+', '/', '='],['-', '_', ''], $base64Header );
        $base64Payload = str_replace(['+', '/', '='], ['-', '_', ''], $base64Payload);

        //Génèrer et encodage la signature
        $secret = base64_encode(SECRET);
        $signature = hash_hmac('sha256', $base64Header . '.' . $base64Payload, $secret, true);

        $base64Signature = base64_encode($signature);
        $signature = str_replace(['+', '/', '='], ['-', '_', ''], $base64Signature);


        // Create the token
        $jwt = $base64Header . '.' . $base64Payload . '.' . $signature;

        return $jwt;

    }

    /**
     * Vérifier si token est bon, valide
     *
     * @param string $token
     * @param string $secret
     * @return void
     */
    public function check(string $token, string $secret): bool
    {
        //Récupère le header + playload du token
        $header = $this->getHeader($token);
        $payload = $this->getPayload($token);

        //On regénère un token de vérification
        //Mettre à 0 les dates
        $verifToken = $this->generate($header, $payload, $secret, 0);

        return $token === $verifToken;
    }

    public function getHeader(string $token)
    {
        // Démontage du token
        $array = explode('.', $token);

        //Décoder le header
        $header = json_decode(base64_decode($array[0]), true);
        return $header;
    }

    public function getPayload(string $token)
    {
        // Démontage du token
        $array = explode('.', $token);

        //Décoder le payload
        $payload = json_decode(base64_decode($array[1]), true);
        return $payload;
    }

    public function isExpired(string $token): bool
    {
        $payload = $this->getPayload($token);

        $now = new DateTime();

        // Est-il encore valide
        return $payload['exp'] < $now->getTimestamp();
    }

    public function isValid(string $token): bool
    {
        return preg_match(
            '/^[a-zA-Z0-9\-\_\=]+\.[a-zA-Z0-9\-\_\=]+\.[a-zA-Z0-9\-\_\=]+$/', $token
        ) === 1;
    }
}
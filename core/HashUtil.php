<?php

/**
 * Hash utility
 *
 * @author satriaprayoga
 */
class HashUtil {

    /**
     * hash the string declared in $data
     * @param string $algo the has algorithm name ('md5','sha256',etc)
     * @param string $data the string data to be hashed
     * @param string $key the salt string
     */
    public static function hash($algo, $data, $key) {
        $context = hash_init($algo, HASH_HMAC, $key);
        hash_update($context, $data);
        return hash_final($context);
    }

}


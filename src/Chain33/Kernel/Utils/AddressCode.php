<?php

namespace Jason\Chain33\Kernel\Utils;

use Exception;

class AddressCode
{
    /***
     * returns the Uncompressed DER encoded public key.
     *
     * @return String Hex
     */
    public static function Hex(array $point): string
    {
        return '04'.$point['x'].$point['y'];
    }

    /**
     * returns the public key coordinates as an array.
     * Input can be compressed or uncompressed DER Encoded Pubkey.
     *
     * @param $derPubKey
     *
     * @return array
     * @throws Exception
     */
    public static function Point($derPubKey): array
    {
        if (substr($derPubKey, 0, 2) == '04' && strlen($derPubKey) == 130) {
            //uncompressed der encoded public key
            $x = substr($derPubKey, 2, 64);
            $y = substr($derPubKey, 66, 64);

            return ['x' => $x, 'y' => $y];
        } elseif ((substr($derPubKey, 0, 2) == '02' || substr($derPubKey, 0, 2) == '03') && strlen($derPubKey) == 66) {
            return self::Decompress($derPubKey);
        } else {
            throw new Exception('Invalid derPubKey format :  $compressedDerPubKey');
        }
    }

    /**
     * returns the public key coordinates as an array.
     * Input can be compressed or uncompressed DER Encoded Pubkey.
     *
     * @param $compressedDerPubKey
     *
     * @return array
     * @throws Exception
     */
    public static function Decompress($compressedDerPubKey): array
    {
        if ((substr($compressedDerPubKey, 0, 2) == '02' || substr($compressedDerPubKey, 0,
                    2) == '03') && strlen($compressedDerPubKey) == 66) {
            //compressed der encoded public key
            $x = substr($compressedDerPubKey, 2, 64);
            // secp256k1
            $secp256k1 = new SECp256k1();
            $a = $secp256k1->a;
            $b = $secp256k1->b;
            $p = $secp256k1->p;
            // This is where the magic happens
            $y = PointMathGMP::calculateYWithX($x, $a, $b, $p, substr($compressedDerPubKey, 0, 2));

            return ['x' => $x, 'y' => $y];
        } elseif (substr($compressedDerPubKey, 0, 2) == '04' && strlen($compressedDerPubKey) == 130) {
            return self::Point($compressedDerPubKey);
        } else {
            throw new Exception('Invalid compressedDerPubKey format : '.$compressedDerPubKey);
        }
    }

    /***
     * returns the compressed DER encoded public key.
     *
     * @return String Hex
     */
    public static function Compress($pubKey): string
    {
        if (gmp_strval(gmp_mod(gmp_init($pubKey['y'], 16), gmp_init(2, 10))) == 0) {
            $compressedDerPubKey = '02'.$pubKey['x'];
        }    //if $pubKey['y'] is even
        else {
            $compressedDerPubKey = '03'.$pubKey['x'];
        }    //if $pubKey['y'] is odd

        return $compressedDerPubKey;
    }

    /***
     * returns the HASH160 version of the Publick Key
     * .
     *
     * @param  string  $derPubKey
     *
     * @return String Hash160
     * @throws Exception
     */
    public static function Hash(string $derPubKey): string
    {
        $sha256 = hash('sha256', hex2bin($derPubKey));

        return hash('ripemd160', hex2bin($sha256));
    }

    /**
     * returns the private key under the Wallet Import Format.
     *
     * @return string Base58
     * @throws Exception
     */
    public static function WIF($private_key, $prefix = '80', $compressed = true): string
    {
        if ($compressed) {
            $private_key = $private_key.'01';
        }

        return strrev(self::Encode($private_key, $prefix));
    }

    /***
     * returns the Bitcoin address version of the Publick Key
     * .
     *
     * @param  string  $hex
     *
     * @return String Base58
     * @throws Exception
     */
    public static function Encode($hex, $prefix = '00'): string
    {
        // The magical prefix
        $hex_with_prefix = $prefix.$hex;

        //checksum
        $sha256 = hash('sha256', hex2bin($hex_with_prefix));
        $checksum = hash('sha256', hex2bin($sha256));

        // Encode
        $address = $hex_with_prefix.substr($checksum, 0, 8);

        return Base58::encode($address);
    }

    public static function DeWIF($wif, $compressed = true)
    {
        $base58 = strrev($wif);
        $hex = self::Decode($base58);
        if ($compressed) {
            $hex = substr($hex, 0, -2);
        }

        return $hex;
    }

    public static function Decode($address)
    {
        $hex_with_prefix_and_check = Base58::decode($address);
        $prefix = substr($hex_with_prefix_and_check, 0, 2);
        $checksum = substr($hex_with_prefix_and_check, -8);

        return substr($hex_with_prefix_and_check, 2, -8);
    }
}

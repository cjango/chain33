<?php

namespace Jason\Chain33\Kernel\Utils;

class AddressValidation
{

    /***
     * Tests if the address is valid or not.
     * @param  String Base58 $address
     * @return bool
     */
    public static function validateAddress($address): bool
    {
        $address = hex2bin(Base58::Decode($address));

        if (strlen($address) != 25) {
            return false;
        }
        $checksum   = substr($address, 21, 4);
        $rawAddress = substr($address, 0, 21);
        $sha256     = hash('sha256', $rawAddress);
        $sha256     = hash('sha256', hex2bin($sha256));

        if (substr(hex2bin($sha256), 0, 4) == $checksum) {
            return true;
        } else {
            return false;
        }
    }

    /***
     * Tests if the Wif key (Wallet Import Format) is valid or not.
     * @param  String Base58 $wif
     * @return bool
     */
    public static function validateWifKey($wif): bool
    {
        $key          = Base58::Decode($wif, false);
        $length       = strlen($key);
        $firstSha256  = hash('sha256', hex2bin(substr($key, 0, $length - 8)));
        $secondSha256 = hash('sha256', hex2bin($firstSha256));
        if (substr($secondSha256, 0, 8) == substr($key, $length - 8, 8)) {
            return true;
        } else {
            return false;
        }
    }

}

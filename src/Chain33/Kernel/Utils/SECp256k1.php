<?php

namespace Jason\Chain33\Kernel\Utils;

use GMP;

class SECp256k1
{
    public GMP $a;

    public GMP $b;

    public GMP $p;

    public GMP $n;

    public array $G;

    public function __construct()
    {
        $this->a = gmp_init('0', 10);
        $this->b = gmp_init('7', 10);
        $this->p = gmp_init('FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFEFFFFFC2F', 16);
        $this->n = gmp_init('FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFEBAAEDCE6AF48A03BBFD25E8CD0364141', 16);

        $this->G = [
            'x' => gmp_init('55066263022277343669578718895168534326250603453777594175500187360389116729240'),
            'y' => gmp_init('32670510020758816978083085130507043184471273380659243275938904335757337482424'),
        ];
    }
}

<?php

/**
 * User: glowdan
 * Date: 2021/4/15
 * Time: 15:44
 */
class AssignTest {
    public function BitwiseAnd() {
        $a = 0b11;
        $b = 0b10;
        $b &= $a;
        return $b;
    }

    public function BitwiseOr() {
        $a = 0b11;
        $b = 0b10;
        $b |= $a;
        return $b;
    }

    public function BitwiseXor() {
        $a = 0b11;
        $b = 0b10;
        $b ^= $a;
        return $b;
    }

    public function Coalesce() {
        //PHP7.4特性，暂不支持
    }

    public function Concat() {
        $a = "a";
        $a .= "b";
        echo $a;
    }

    public function Div() {
        $a = 100;
        $a /= 10;
        return $a;
    }

    public function Minus() {
        $a = 100;
        $a -= 10;
        return $a;
    }

    public function Mod() {
        $a = 10;
        $a %= 3;
        return $a;
    }

    public function Mul() {
        $a = 5;
        $a *= 8;
        return $a;
    }

    public function Plus() {
        $a = 5;
        $a += 9;

        return $a;
    }

    public function Pow() {
        $a = 2;
        $a **= 3;
        return $a;
    }

    public function ShiftLeft() {
        $a = 8;
        $a <<= 1;
        echo $a;
    }

    public function ShiftRight() {
        $a = 2;
        $a >>= 3;
        echo $a;
    }
}
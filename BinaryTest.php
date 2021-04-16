<?php
/**
 * User: glowdan
 * Date: 2021/4/15
 * Time: 14:08
 */

class BinaryTest {

    public function BitwiseAnd() {
        $a = 1 & 2;
        return $a;
    }

    public function BitwiseOr() {
        return 1 | 2;
    }

    public function BitwiseXor() {
        return 0b11 ^ 0b10;
    }

    public function BooleanAnd() {
        $a = true;
        $b = false;
        return $a && $b;
    }

    public function BooleanOr() {
        $a = true;
        $b = false;
        return $a || $b;
    }

    public function Coalesce() {
        $a = true;
        return $a ?? 3;
    }

    public function Concat() {
        $a = "A";
        $b = "B";
        return $a . $b;
    }

    public function Div() {
        $a = 4;
        $b = 2;
        return $a / $b;
    }

    public function Equal() {
        return 1 == 3;
    }

    public function Greater() {
        return 1 > 3;
    }

    public function GreaterOrEqual() {
        return 1 >= 3;
    }

    public function Identical() {
        return 1 === "1";
    }

    public function LogicalAnd() {
        $a = true;
        $b = false;
        return $a and $b;
    }

    public function LogicalOr() {
        $a = true;
        $b = false;
        return $a or $b;
    }

    public function LogicalXor() {
        $a = true;
        $b = false;
        return $a xor $b;
    }

    public function Minus() {
        return 3 - 4;
    }

    public function Mod() {
        return 34 % 6;
    }

    public function Mul() {
        return 4 * 3;
    }

    public function NotEqual() {
        return 1 != 3;
    }

    public function NotIdentical() {
        return 1 !== (2 - 1);
    }

    public function Plus() {
        $a = 1 + 3;
        return $a;
    }

    public function Pow() {
        $a = 2 ** 3;
        return $a;
    }

    public function ShiftLeft() {
        $a = 1 << 3;
        return $a;
    }

    public function ShiftRight() {
        $a = 100 >> 2;
        return $a;
    }

    public function Smaller() {
        $a = 8 > 3;
        return $a;
    }

    public function SmallerOrEqual() {
        $a = 8 >= 3;
        return $a;
    }

    public function Spaceship() {
        $a = 3;
        $b = 2;
        return $a <=> $b;
    }

}
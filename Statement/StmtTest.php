<?php

/**
 * User: glowdan
 * Date: 2021/4/15
 * Time: 16:40
 */
class StmtTest {
    const NAME = "name";
    protected $property;

    /**
     * Stmt_Break
     */
    public function Break_($a) {
        switch ($a) {
            case "a":
                $a .= "b";
                break;
            default:
                return;
        }

        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                if ($i == $j - 4) {
                    break 2;
                }
            }
        }
    }

    /**
     * Stmt_Case
     */
    public function Case_($a) {
        switch ($a) {
            case "a":
                $a .= "b";
                break;
            default:
                return;
        }
    }

    /**
     * Stmt_Catch
     */
    public function Catch_() {
        try {
            file_get_contents("/etc/hosts");
        } catch (Exception $exception) {
            var_dump($exception);
        }
    }

    /**
     * Stmt_Class
     */
    public function Class_() {

    }

    /**
     * Stmt_ClassConst
     */
    public function ClassConst() {

    }

    /**
     * Stmt_ClassMethod
     */
    public function ClassMethod() {

    }

    /**
     * Stmt_Const
     */
    public function Const_() {
//todo
    }

    /**
     * Stmt_Continue
     */
    public function Continue_() {
        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 == 0) {
                continue;
            }
            echo $i;
        }
    }

    /**
     * Stmt_Declare
     */
    public function Declare_() {
//todo
    }

    /**
     * Stmt_DeclareDeclare
     */
    public function DeclareDeclare() {
//todo
    }

    /**
     * Stmt_Do
     */
    public function Do_() {
        $i = 0;
        do {
            $i++;
        } while ($i < 10);
    }

    /**
     * Stmt_Echo
     */
    public function Echo_() {
        echo "1";
    }

    /**
     * Stmt_Else
     */
    public function Else_() {
        if (1 == 2) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Stmt_ElseIf
     */
    public function ElseIf_() {
        if (1 == 2) {
            return true;
        } elseif (2 == 3) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Stmt_Expression
     */
    public function Expression() {
        $a = 1 + 1;
    }

    /**
     * Stmt_Finally
     */
    public function Finally_() {
//todo
    }

    /**
     * Stmt_For
     */
    public function For_() {
        $j = 0;
        for ($i = 0; $i < 10; $i++) {
            $j += $i;
        }
    }

    /**
     * Stmt_Foreach
     */
    public function Foreach_() {
        $a = [];
        foreach ($a as $item) {

        }
        foreach ($a as $key => $value) {

        }
    }

    /**
     * Stmt_Function
     */
    public function Function_() {
        $a = function () {
        };
    }

    /**
     * Stmt_Global
     */
    public function Global_() {
        global $global_a;
    }

    /**
     * Stmt_Goto
     */
    public function Goto_() {

        //todo
    }

    /**
     * Stmt_GroupUse
     */
    public function GroupUse() {
//todo
    }

    /**
     * Stmt_HaltCompiler
     */
    public function HaltCompiler() {
//todo
    }

    /**
     * Stmt_If
     */
    public function If_() {
        if (true) {
            return 1;
        }
    }

    /**
     * Stmt_InlineHTML
     */
    public function InlineHTML() {
//todo
    }

    /**
     * Stmt_Interface
     */
    public function Interface_() {

    }

    /**
     * Stmt_Label
     */
    public function Label() {
//todo
    }

    /**
     * Stmt_Namespace
     */
    public function Namespace_() {

    }

    /**
     * Stmt_Nop
     */
    public function Nop() {
        $a = ~E_NOTICE;
    }

    /**
     * Stmt_Property
     */
    public function Property() {

    }

    /**
     * Stmt_PropertyProperty
     */
    public function PropertyProperty() {

    }

    /**
     * Stmt_Return
     */
    public function Return_() {
        return 1;
    }

    /**
     * Stmt_Static
     */
    public function Static_() {
        //todo
        static $stat = 1;
    }

    /**
     * Stmt_StaticVar
     */
    public function StaticVar() {
        //todo
    }

    /**
     * Stmt_Switch
     */
    public function Switch_($a) {
        switch ($a) {
            case "a":
                $a .= "c";
                break;
            default:
                return;
        }
    }

    /**
     * Stmt_Throw
     * @throws Exception
     */
    public function Throw_() {
        //todo
        throw new Exception("a demo");
    }

    /**
     * Stmt_Trait
     */
    public function Trait_() {
//todo
    }

    /**
     * Stmt_TryCatch
     */
    public function TryCatch() {
        try {
            file_get_contents("/etc/hosts");
        } catch (Exception $exception) {
            var_dump($exception);
        }
    }

    /**
     * Stmt_Unset
     */
    public function Unset_() {
        $a = ["a" => "a"];
        unset($a["a"]);
    }

    /**
     * Stmt_Use
     */
    public function Use_() {
        //todo
    }

    /**
     * Stmt_UseUse
     */
    public function UseUse() {
        //todo
    }

    /**
     * Stmt_While
     */
    public function While_() {
        $i = 0;
        while ($i < 10) {
            $i++;
        }
    }
}
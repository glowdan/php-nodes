<?php
/**
 * User: glowdan
 * Date: 2021/4/15
 * Time: 16:38
 */

const NAME = "name";

class ExprTest {
    public $var;
    const ClassConst = "cname";
    public static $instance;

    /**
     * Expr_Array
     * 'items'
     */
    public function Array_() {
        $a = [];
    }

    /**
     * Expr_ArrayDimFetch
     * 'var', 'dim'
     */
    public function ArrayDimFetch() {
        $a = [];
        $a['a'] = "b";
    }

    /**
     * Expr_ArrayItem
     * 'key', 'value', 'byRef', 'unpack'
     */
    public function ArrayItem() {
        $a = [];
        $b = in_array('1', $a);
    }

    /**
     * todo
     * Expr_ArrowFunction
     * 'attrGroups', 'static', 'byRef', 'params', 'returnType', 'expr'
     */
    public function ArrowFunction() {

    }

    /**
     * Expr_Assign
     * 'var', 'expr'
     */
    public function Assign() {

    }

    /**
     * todo
     * Expr_AssignRef
     * 'var', 'expr'
     */
    public function AssignRef() {

    }

    /**
     * Expr_BitwiseNot
     * 'expr'
     */
    public function BitwiseNot() {
        $a = 0b111;
        $b = ~$a;
    }

    /**
     * Expr_BooleanNot
     * 'expr'
     */
    public function BooleanNot() {
        if (!defined('ROOT')) {
            return true;
        }
        return false;
    }

    /**
     * Expr_ClassConstFetch
     * 'class', 'name'
     */
    public function ClassConstFetch() {
        return ExprTest::ClassConst;
    }

    /**
     * Expr_Clone
     * 'expr'
     */
    public function Clone_() {

    }

    /**
     * todo
     * Expr_Closure
     * 'attrGroups', 'static', 'byRef', 'params', 'uses', 'returnType', 'stmts'
     */
    public function Closure() {

    }

    /**
     * todo
     * Expr_ClosureUse
     * 'var', 'byRef'
     */
    public function ClosureUse() {

    }

    /**
     * Expr_ConstFetch
     * 'name'
     */
    public function ConstFetch() {
        echo NAME;
    }

    /**
     * Expr_Empty
     * 'expr'
     */
    public function Empty_() {
        $a = [];
        $b = empty($a);
    }

    /**
     * todo
     * Expr_Error
     *
     */
    public function Error() {

    }

    /**
     * Expr_ErrorSuppress
     * 'expr'
     */
    public function ErrorSuppress() {
        @json_decode("[");
    }

    /**
     * Expr_Eval
     * 'expr'
     */
    public function Eval_() {
        $a = 1;
        eval("$a=2;");
    }

    /**
     * Expr_Exit
     * 'expr'
     */
    public function Exit_() {
        exit;
        exit();
        exit(0);
    }

    /**
     * Expr_FuncCall
     * 'name', 'args'
     */
    public function FuncCall() {
        header('Content-Type: text/html; charset=utf-8');
    }

    /**
     * Expr_Include
     * 'expr', 'type'
     */
    public function Include_() {
        include "../../src/main.php";
    }

    /**
     * todo
     * Expr_Instanceof
     * 'expr', 'class'
     */
    public function Instanceof_() {

    }

    /**
     * Expr_Isset
     * 'vars'
     */
    public function Isset_() {
        $a = [];
        return isset($a["a"]);
    }

    /**
     * Expr_List
     * 'items'
     */
    public function List_() {
        $a = ["a", "b"];
        list($b, $c) = $a;
    }

    /**
     * todo
     * Expr_Match
     * 'cond', 'arms'
     */
    public function Match_() {

    }

    /**
     * Expr_MethodCall
     * 'var', 'name', 'args'
     */
    public function MethodCall() {
        $this->Match_();
    }

    /**
     * Expr_New
     * 'class', 'args'
     */
    public function New_() {
        $c = new StaticClass();
    }

    /**
     * todo
     * Expr_NullsafeMethodCall
     * 'var', 'name', 'args'
     */
    public function NullsafeMethodCall() {

    }

    /**
     * todo
     * Expr_NullsafePropertyFetch
     * 'var', 'name'
     */
    public function NullsafePropertyFetch() {

    }

    /**
     * Expr_PostDec
     * 'var'
     */
    public function PostDec() {
        $a = 10;
        $a--;
    }

    /**
     * Expr_PostInc
     * 'var'
     */
    public function PostInc() {
        $a = 9;
        $a++;
    }

    /**
     * Expr_PreDec
     * 'var'
     */
    public function PreDec() {
        $a = 8;
        --$a;
    }

    /**
     * Expr_PreInc
     * 'var'
     */
    public function PreInc() {
        $a = 9;
        ++$a;
    }

    /**
     * todo
     * Expr_Print
     * 'expr'
     */
    public function Print_() {

    }

    /**
     * Expr_PropertyFetch
     * 'var', 'name'
     */
    public function PropertyFetch() {
        return $this->var;
    }

    /**
     * todo
     * Expr_ShellExec
     * 'parts'
     */
    public function ShellExec() {

    }

    /**
     * Expr_StaticCall
     * 'class', 'name', 'args'
     */
    public function StaticCall() {
        StaticClass::Run();
    }

    /**
     * Expr_StaticPropertyFetch
     * 'class', 'name'
     */
    public function StaticPropertyFetch() {
        echo self::$instance;
    }

    /**
     * Expr_Ternary
     * 'cond', 'if', 'else'
     */
    public function Ternary() {
        $a = 5;
        $b = $a ? $a : '6';
        return $b;
    }

    /**
     * todo
     * Expr_Throw
     * 'expr'
     */
    public function Throw_() {

    }

    /**
     * Expr_UnaryMinus
     * 'expr'
     */
    public function UnaryMinus() {
        $a = 1;
        $b = -$a;
    }

    /**
     * todo
     * Expr_UnaryPlus
     * 'expr'
     */
    public function UnaryPlus() {

    }

    /**
     * Expr_Variable
     * 'name'
     */
    public function Variable() {

    }

    /**
     * todo
     * Expr_Yield
     * 'key', 'value'
     */
    public function Yield_() {

    }

    /**
     * todo
     * Expr_YieldFrom
     * 'expr'
     */
    public function YieldFrom() {

    }
}
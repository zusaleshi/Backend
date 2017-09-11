<?php namespace App\Traits;

use Exception;

trait Errorable
{   
    /**
     * Error Storage
     *
     * @var array
     */
    private static $_errors = [];

    public function __construct()
    {

    }


    /**
     * Push Error into end of storage
     *
     * @param string $msg
     * @return void
     */
    protected function addError($msg)
    {
        if(!is_string($msg)) throw Exception("Trait:Errorable->addError() expects parameter as string type");
        self::$_errors[] = $msg;
    }


    /**
     * Push Error into front of storage
     *
     * @param [type] $msg
     * @return void
     */
    protected function prependError($msg)
    {
        if(!is_string($msg)) throw Exception("Trait:Errorable->addError() expects parameter as string type");
        self::$_errors[] = $msg;
    }

    
    /**
     * Reset Error Storage
     *
     * @return void
     */
    protected function resetError()
    {
        self::$_errors = [];
    }

    
    /**
     * Check if has Error
     *
     * @return boolean
     */
    public function hasError()
    {
        return !empty(self::$_errors);
    }


    public function getErrorMsg($glue = ', ')
    {
        return implode($glue, self::$_errors);
    }


    public function getError()
    {
        return self::$_errors;
    }

    public function popError()
    {
        if($this->hasError()) return null;
        $poped = array_pop(self::$_errors);
        return $poped;
    }
}
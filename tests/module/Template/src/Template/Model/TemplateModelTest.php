<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace {$module}\Model;

use PHPUnit_Framework_TestCase;
/**
 * Description of FamiliaTest
 *
 * @author brayan
 */
class {$module}ModelTest extends PHPUnit_Framework_TestCase{
    
    public function testInstanceOf{$module}Model()
    {
        ${$module} = new {$module}();

        $this->assertInstanceOf("{$module}Model", ${$module});
    }
    
}
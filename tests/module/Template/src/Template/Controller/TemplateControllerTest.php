<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace {$module}\Controller;

use PHPUnit_Framework_TestCase;
/**
 * Description of FamiliaTest
 *
 * @author brayan
 */
class {$module}ControllerTest extends PHPUnit_Framework_TestCase{
    
    public function testInstanceOf{$module}Controller()
    {
        ${$module} = new {$module}Controller();

        $this->assertInstanceOf("{$module}Controller", ${$module});
    }
    
}
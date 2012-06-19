<?php

/**
 * BasePaypal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $paypal_account
 * 
 * @method string getPaypalAccount()  Returns the current record's "paypal_account" value
 * @method Paypal setPaypalAccount()  Sets the current record's "paypal_account" value
 * 
 * @package    yfoodnet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePaypal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('paypal');
        $this->hasColumn('paypal_account', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}
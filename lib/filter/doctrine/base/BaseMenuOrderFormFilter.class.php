<?php

/**
 * MenuOrder filter form base class.
 *
 * @package    yfoodnet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMenuOrderFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'quantity'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_in_progress'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_ready'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_finished'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'using_paypal'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'menu_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Menu'), 'add_empty' => true)),
      'dining_table_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DiningTable'), 'add_empty' => true)),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'quantity'        => new sfValidatorPass(array('required' => false)),
      'is_in_progress'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_ready'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_finished'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'using_paypal'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'menu_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Menu'), 'column' => 'id')),
      'dining_table_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DiningTable'), 'column' => 'id')),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('menu_order_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MenuOrder';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'quantity'        => 'Text',
      'is_in_progress'  => 'Boolean',
      'is_ready'        => 'Boolean',
      'is_finished'     => 'Boolean',
      'using_paypal'    => 'Boolean',
      'menu_id'         => 'ForeignKey',
      'dining_table_id' => 'ForeignKey',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}

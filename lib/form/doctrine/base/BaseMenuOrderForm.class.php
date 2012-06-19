<?php

/**
 * MenuOrder form base class.
 *
 * @method MenuOrder getObject() Returns the current form's model object
 *
 * @package    yfoodnet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMenuOrderForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'quantity'        => new sfWidgetFormInputText(),
      'is_in_progress'  => new sfWidgetFormInputCheckbox(),
      'is_ready'        => new sfWidgetFormInputCheckbox(),
      'is_finished'     => new sfWidgetFormInputCheckbox(),
      'using_paypal'    => new sfWidgetFormInputCheckbox(),
      'menu_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Menu'), 'add_empty' => false)),
      'dining_table_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DiningTable'), 'add_empty' => false)),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'quantity'        => new sfValidatorPass(),
      'is_in_progress'  => new sfValidatorBoolean(array('required' => false)),
      'is_ready'        => new sfValidatorBoolean(array('required' => false)),
      'is_finished'     => new sfValidatorBoolean(array('required' => false)),
      'using_paypal'    => new sfValidatorBoolean(array('required' => false)),
      'menu_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Menu'))),
      'dining_table_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DiningTable'))),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('menu_order[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MenuOrder';
  }

}

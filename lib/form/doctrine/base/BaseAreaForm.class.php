<?php

/**
 * Area form base class.
 *
 * @method Area getObject() Returns the current form's model object
 *
 * @package    yfoodnet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAreaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'seats'         => new sfWidgetFormInputText(),
      'waiter_id'     => new sfWidgetFormInputText(),
      'restaurant_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Restaurant'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 255)),
      'seats'         => new sfValidatorPass(),
      'waiter_id'     => new sfValidatorPass(),
      'restaurant_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Restaurant'))),
    ));

    $this->widgetSchema->setNameFormat('area[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Area';
  }

}
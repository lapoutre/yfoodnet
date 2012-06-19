<?php

/**
 * Area filter form base class.
 *
 * @package    yfoodnet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAreaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'seats'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'waiter_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'restaurant_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Restaurant'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'seats'         => new sfValidatorPass(array('required' => false)),
      'waiter_id'     => new sfValidatorPass(array('required' => false)),
      'restaurant_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Restaurant'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('area_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Area';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'name'          => 'Text',
      'seats'         => 'Text',
      'waiter_id'     => 'Text',
      'restaurant_id' => 'ForeignKey',
    );
  }
}

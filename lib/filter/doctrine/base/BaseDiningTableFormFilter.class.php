<?php

/**
 * DiningTable filter form base class.
 *
 * @package    yfoodnet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDiningTableFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sf_guard_user_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'name'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'area_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Area'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'sf_guard_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'name'             => new sfValidatorPass(array('required' => false)),
      'area_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Area'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('dining_table_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DiningTable';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'sf_guard_user_id' => 'ForeignKey',
      'name'             => 'Text',
      'area_id'          => 'ForeignKey',
    );
  }
}

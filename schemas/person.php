<?php
/**
 * ScaleUp schema a person (alive, dead, undead, or fictional).
 *
 * @see http://schema.org/Person
 */
class ScaleUp_Person_Schema extends ScaleUp_Thing_Schema {

  /**
   * An additional name for a Person, can be used for a middle name.
   *
   * @var string
   */
  var $additionalName;

  /**
   * Physical address of the item.
   *
   * @var ScaleUp_PostalAddress_Schema
   */
  var $address;

  /**
   * An organization that this person is affiliated with. For example, a school/university, a club, or a team.
   *
   * @var ScaleUp_Organization_Schema
   */
  var $affiliation;

  /**
   * An educational organizations that the person is an alumni of.
   *
   * @var ScaleUp_EducationalOrganization_Schema
   */
  var $alumniOf;

  /**
   * An award won by this person or for this creative work.
   *
   * @var string
   */
  var $award;

  /**
   *
   */

}
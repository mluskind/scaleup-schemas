<?php
/**
 * ScaleUp schema for ContacPoint
 *
 * @see http://schema.org/ContactPoint
 */
class ScaleUp_ContactPoint_Schema extends ScaleUp_Thing_Schema {

  /**
   * A person or organization can have different contact points, for different purposes.
   * For example, a sales contact point, a PR contact point and so on.
   * This property is used to specify the kind of contact point.
   *
   * @var string
   */
  var $contactType;

  /**
   * Email address.
   *
   * @var string
   */
  var $email;

  /**
   * The fax number.
   *
   * @var string
   */
  var $faxNumber;

  /**
   * The telephone number.
   *
   * @var string
   */
  var $telephone;

}
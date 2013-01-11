<?php
/**
 * ScaleUp schema for the mailing address.
 *
 * @see http://schema.org/PostalAddress
 */
class ScaleUp_PostalAddress_Schema extends ScaleUp_Thing_Schema {

  /**
   * The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
   *
   * @see http://en.wikipedia.org/wiki/ISO_3166-1 List of ISO 3166-1 alpha-2 country codes
   *
   * @var Country
   */
  var $addressCountry;

  /**
   * The locality. For example, Mountain View.
   *
   * @var string
   */
  var $addressLocality;

  /**
   * The region. For example, CA.
   *
   * @var string
   */
  var $addressRegion;

  /**
   * The postal code. For example, 94043.
   *
   * @var string
   */
  var $postalCode;

  /**
   * The post office box number for PO box addresses.
   *
   * @var string
   */
  var $postOfficeBoxNumber;

  /**
   * The street address. For example, 1600 Amphitheatre Pkwy.
   *
   * @var string
   */
  var $streetAddress;

  /* Properties from ContactPoint */

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
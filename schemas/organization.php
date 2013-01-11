<?php
/**
 * ScaleUp schema for an organization such as a school, NGO, corporation, club, etc
 *
 * @see http://schema.org/Organization
 */
class ScaleUp_Organization_Schema extends ScaleUp_Thing_Schema {

  /**
   * Physical address of the item.
   *
   * @var ScaleUp_PostalAddress_Schema
   */
  var $address;

  /**
   * The overall rating, based on a collection of reviews or ratings, of the item.
   *
   * @var ScaleUp_AggregateRating_Schema
   */
  var $aggregateRating;

  /**
   * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
   *
   * @var ScaleUp_Brand_Schema|ScaleUp_Organization_Schema
   */
  var $brand;

  /**
   * A contact point for a person or organization.
   *
   * @var ScaleUp_ContactPoint_Schema
   */
  var $contactPoint;

  /**
   * A contact point for a person or organization (legacy spelling; see singular form, contactPoint).
   *
   * @var ScaleUp_ContactPoint_Schema
   */
  var $contactPoints;

  /**
   * The Dun & Bradstreet DUNS number for identifying an organization or business person.
   *
   * @var string
   */
  var $duns;

  /**
   * Email address.
   *
   * @var string
   */
  var $email;

  /**
   * Someone working for this organization.
   *
   * @var ScaleUp_Person_Schema
   */
  var $employee;

  /**
   * People working for this organization. (legacy spelling; see singular form, employee)
   *
   * @var ScaleUp_Person_Schema
   */
  var $employees;

  /**
   * Upcoming or past event associated with this place or organization.
   *
   * @var ScaleUp_Event_Schema
   */
  var $event;

  /**
   * Upcoming or past events associated with this place or organization (legacy spelling; see singular form, event).
   *
   * @var ScaleUp_Event_Schema
   */
  var $events;

  /**
   * The fax number.
   *
   * @var string
   */
  var $faxNumber;

  /**
   * A person who founded this organization.
   *
   * @var ScaleUp_Person_Schema
   */
  var $founder;

  /**
   * A person who founded this organization (legacy spelling; see singular form, founder).
   *
   * @var ScaleUp_Person_Schema
   */
  var $founders;

  /**
   * The date that this organization was founded.
   *
   * @var string
   */
  var $foundingDate;

  /**
   * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the
   * respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
   *
   * @var string
   */
  var $globalLocationNumber;

  /**
   * Points-of-Sales operated by the organization or person.
   *
   * @var ScaleUp_Place_Schema
   */
  var $hasPos;

  /**
   * A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads.
   * The user interaction type should be one of the sub types of UserInteraction.
   *
   * @var string
   */
  var $interactionCount;

  /**
   * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a
   * particular organization, business person, or place.
   *
   * @var string
   */
  var $isicV4;

  /**
   * The official name of the organization, e.g. the registered company name.
   *
   * @var string
   */
  var $legalName;

  /**
   * The location of the event or organization.
   *
   * @var ScaleUp_Place_Schema|ScaleUp_PostalAddress_Schema
   */
  var $location;

  /**
   * URL of an image for the logo of the item.
   *
   * @var ScaleUp_ImageObject_Schema|string
   */
  var $logo;

  /**
   * A pointer to products or services offered by the organization or person.
   *
   * @var ScaleUp_Offer_Schema
   */
  var $makesOffer;

  /**
   * A member of this organization.
   *
   * @var ScaleUp_Organization_Schema|ScaleUp_Person_Schema
   */
  var $member;

  /**
   * A member of this organization (legacy spelling; see singular form, member).
   *
   * @var ScaleUp_Organization_Schema|ScaleUp_Person_Schema
   */
  var $members;

  /**
   * The North American Industry Classification System (NAICS) code for a particular organization or business person.
   *
   * @var string
   */
  var $naics;

  /**
   * Products owned by the organization or person.
   *
   * @var ScaleUp_OwnershipInfo_Schema|ScaleUp_Product_Schema
   */
  var $owns;

  /**
   * A review of the item.
   *
   * @var ScaleUp_Review_Schema
   */
  var $review;

  /**
   * Review of the item (legacy spelling; see singular form, review).
   *
   * @var ScaleUp_Review_Schema
   */
  var $reviews;

  /**
   * A pointer to products or services sought by the organization or person (demand).
   *
   * @var ScaleUp_Demand_Schema
   */
  var $seeks;

  /**
   * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
   *
   * @var string
   */
  var $taxID;

  /**
   * The telephone number.
   *
   * @var string
   */
  var $telephone;

  /**
   * The Value-added Tax ID of the organization or person.
   *
   * @var string
   */
  var $vatID;

}


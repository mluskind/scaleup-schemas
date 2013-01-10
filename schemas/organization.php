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

}
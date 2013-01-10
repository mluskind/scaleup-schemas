<?php
/**
 * ScaleUp schema for average rating based on multiple ratings or reviews.
 *
 * @see http://schema.org/AggregateRating
 */
class ScaleUp_AggregateRating_Schema extends ScaleUp_Thing_Schema {

  /**
   * The item that is being reviewed/rated.
   *
   * @var ScaleUp_Thing_Schema
   */
  var $itemReviewed;

  /**
   * The count of total number of ratings.
   *
   * @var int
   */
  var $ratingCount;

  /**
   * The count of total number of reviews.
   *
   * @var int;
   */
  var $reviewCount;

  /* Properties of Rating schema */

  /**
   * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
   *
   * @var int|string
   */
  var $bestRating;

  /**
   * The rating for the content.
   *
   * @var int|string
   */
  var $ratingValue;

  /**
   * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
   *
   * @var int|string
   */
  var $worstRating;

}
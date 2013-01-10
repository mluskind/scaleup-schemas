<?php
/**
 * ScaleUp schema for a rating of thing.
 *
 * @see http://schema.org/Rating
 */
class ScaleUp_Rating_Schema extends ScaleUp_Thing_Schema {

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
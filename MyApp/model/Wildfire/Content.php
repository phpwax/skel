<?php
namespace Wildfire;

/** @Entity */
class Content {
  
  /** @Id @Column(type="integer") @GeneratedValue */
  private $id;

  /** @Column(type="string") */
  protected $title;
  protected $content;
  protected $date_start;
  protected $date_end;
  
  /** @Column(type="string") */
  protected $permalink;
  protected $excerpt;
  
  /** @Column(type="string") */
  protected $meta_description;
  
  /** @Column(type="string") */
  protected $meta_keywords;

  protected $date_modified;
  protected $date_created;
  
  /** @Column(type="integer") */
  protected $revision;
  
  /** @Column(type="integer") */
  protected $language;
  
  /** @Column(type="integer") */
  protected $status;

  /** @Column(type="string") */
  protected $page_type;
  
  // Joins
  
  /** @OneToMany(targetEntity="Media", mappedBy="media") */
  protected $media;

  /** @OneToMany(targetEntity="Category", mappedBy="category") */
  protected $categories;

  /** @OneToOne(targetEntity="Author") */
  protected $author;
  




}

?>
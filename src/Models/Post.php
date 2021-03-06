<?php

namespace DUT\Models;


use DateTime;

class Post
{
    protected $idPost;
    protected $title;
    protected $content;
    protected $postDate;
    protected $image;

    /**
     * Post constructor.
     *
     * @param $idPost
     * @param $title
     * @param $content
     * @param $postDate
     * @param $image
     */
    public function __construct($idPost, $title, $content, $postDate, $image)
    {
        $this->idPost = $idPost;
        $this->title = $title;
        $this->content = $content;
        $this->postDate = $postDate;
        $this->image = $image;
    }

    /**
     * @return integer
     */
    public function getIdPost()
    {
        return $this->idPost;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Get image id.
     *
     * @return string
     */
    public function getImage()
    {
        return  $this->image;
    }

}
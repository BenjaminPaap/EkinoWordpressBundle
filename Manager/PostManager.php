<?php
/*
 * This file is part of the Ekino Wordpress package.
 *
 * (c) 2013 Ekino
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ekino\WordpressBundle\Manager;

use Ekino\WordpressBundle\Manager\BaseManager;

/**
 * Class PostManager
 *
 * This is the Post entity manager
 *
 * @author Vincent Composieux <composieux@ekino.com>
 */
class PostManager extends BaseManager
{

    /**
     * @return mixed
     */
    public function findAllPublished()
    {
        return $this->repository->findAllPublished();
    }

    /**
     * @return mixed
     */
    public function findAllPublishedPosts()
    {
        return $this->repository->findAllPublishedPosts();
    }

    /**
     * @param string $slug
     *
     * @return object
     */
    public function findOneBySlug($slug)
    {
        return $this->repository->findOneBy(array(
            'name' => $slug
        ));
    }

}
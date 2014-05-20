<?php
/*
 * This file is part of the Ekino Wordpress package.
 *
 * (c) 2013 Ekino
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ekino\WordpressBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Ekino\WordpressBundle\Entity\Post;

/**
 * Class PostRepository
 *
 * This is the repository of the Post entity
 *
 * @author Vincent Composieux <composieux@ekino.com>
 */
class PostRepository extends EntityRepository
{

    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getAllPublishedQueryBuilder()
    {
        $qb = $this->createQueryBuilder('p');

        $qb->andWhere('p.status = :status')
           ->setParameter('status', 'publish');

        return $qb;
    }

    /**
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getAllPublishedPostsQueryBuilder()
    {
        $qb = $this->getAllPublishedQueryBuilder();

        $qb->andWhere('p.type = :type')
           ->setParameter('type', 'post');

        return $qb;
    }

    /**
     * @return array
     */
    public function findAllPublished()
    {
        return $this->getAllPublishedQueryBuilder()->getQuery()->getResult();
    }

    /**
     * @return array
     */
    public function findAllPublishedPosts()
    {
        return $this->getAllPublishedPostsQueryBuilder()->getQuery()->getResult();
    }

}
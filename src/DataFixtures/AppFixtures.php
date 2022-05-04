<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Blog;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        
        for ($i=1; $i < 6; $i++) { 
            $blog= new Blog;
            $blog->setTitle('Post '.$i);
            $blog->setShortDescription('Short descr for post number '.$i);
            $blog->setBody("Lorem Ipsum is simply dummy text of the 
            printing and typesetting industry. Lorem Ipsum has been 
            the industry's standard dummy text ever since the 1500s,
             when an unknown printer took a galley of type and scrambled
              it to make a type specimen book.") ;
              $manager->persist($blog);
        }

        $manager->flush();
    }
}

<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\PostLike;
use App\Repository\PostRepository;
use App\Repository\PostLikeRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(PostRepository $repo)
    {
        return $this->render('post/index.html.twig', [
            'posts' => $repo->findAll(),
        ]);
    }

    /**
     * @Route("like{id}", name="like")
     */
    public function like(Post $post, PostRepository $repo, ObjectManager $manager, PostLikeRepository $repo1)
    {
        if ($this->getUser()){
            if ($post->isLikedByUser($this->getUser())){
                $postLike=$repo1->findOneBy([
                    'post'=>$post,
                    'user'=>$this->getUser()
                ]);
                $manager->remove($postLike);
                $manager->flush();
                return $this->json(['message'=>'un like supprimé', 'user' => true,'count'=>$repo1->count(['post'=>$post])]);
            }
            else{
                $postLike=new PostLike();
                $postLike->setPost($post)
                         ->setUser($this->getUser());
                $manager->persist($postLike);
                $manager->flush();
                return $this->json(['message' =>'un like ajouté', 'user' => true, 'count' => $repo1->count(['post' => $post])]);
            }
            
        }
        return $this->Json(['message'=>"Vous n'êtes pas connectés!",'user'=>false]);
    }
}

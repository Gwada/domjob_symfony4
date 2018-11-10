<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Common\Persistence\ObjectManager;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function     login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error          = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername   = $authenticationUtils->getLastUsername();
        return $this->render('Security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/registration", name="registration")
     */
    public function     registration(User $user = null, Request $request, UserPasswordEncoderInterface $passwrdEncoder, ObjectManager $om): Response
    {
        !$user ? $user = new User() : 0;
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        //dump($request->request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $user->setPassword($passwrdEncoder->encodePassword($user, $user->getPassword()));
            $om->persist($user);
            $om->flush();
            return ($this->redirectToRoute('domjob_homepage'));
        }
        return $this->render('Security/registration.html.twig', ['registration_form' => $form->createView(),]);
    }
}

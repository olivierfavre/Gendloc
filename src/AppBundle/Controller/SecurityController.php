<?php

// Définition du SecurityController qui gère les actions de sécurité

namespace AppBundle\Controller;

use AppBundle\Entity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class SecurityController extends Controller
{

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'security/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    /**
     * @Route("/admin",name="security_admin")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function adminAction(Request $request)
    {

        //chargement des coordonnées de l'unité de l'utilisateur courant dans la variable $rows.
        require __DIR__.'/../Services/coordinates.php';
        
        //redirection vers admin.html.twig avec les paramètres lng et lat pour centrer la carte sur l'unité
        return $this->render('admin/admin.html.twig', array( 'lng'=> $rows[0]['lng'], 'lat'=>$rows[0]['lat'] ));
    }



    
    /**
     * @Route("/createUser",name="security_createuser")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function createuserAction(Request $request)
    {
        // création d'un entité utilisateur
        $user = new \AppBundle\Entity\User();

        // définition du formulaire pour créer un nouvel utilisateur
        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class)
            ->add('password', PasswordType::class)
            ->add('unite', IntegerType::class)
            ->add('email', EmailType::class)
            ->add('role', TextType::class)
            ->add('isActive',CheckboxType::class)
            ->add('submit', SubmitType::class, array('label' => 'Create User'))
            ->getForm();

        $form->handleRequest($request);

        // si le fromulaire est soumis et est valide le mot de passe est encodé pour être stocké dans la table
        if ($form->isSubmitted() && $form->isValid()) {
            
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($encoded);

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();
            
            // redirection vers la page index
            return $this->redirectToRoute('index');
        }

        // redirection vers creatUser.html.twig avec le paramètre form pour avoir le formulaire à remplir
        return $this->render('admin/createUser.html.twig', array('form' => $form->createView()));
    }
}

?>
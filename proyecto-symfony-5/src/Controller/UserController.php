<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    /**
     * @Route("/registro", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        //Crear el formulario
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);
        $em = $this->getDoctrine()->getManager();

        //Rellenar el objeto con los datos del formulario
        $form->handleRequest($request);//Vincular el formulario con el objeto

        //Comprobar si el formulario se ha enviado
        if($form->isSubmitted() && $form->isValid()){
            //Modificar el objeto para guardarlo
            $user->setRole('ROLE_USER');

            //Cifrar contraseña
            $encoded = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($encoded);
            $user->setCreatedAt(new \DateTime());

            //Guardar usuario
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('task');
        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();//Cargar para poder usar la libreria de autenticacion

        $lastUserName = $authenticationUtils->getLastUsername();//Guardar el nombre de usuario que ha intentado autenticarse y ha fallado

        return $this->render('user/login.html.twig', [
            'error' => $error,
            'last_username' => $lastUserName
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(){}
}

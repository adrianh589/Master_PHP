<?php

namespace App\Controller;

use App\Form\AnimalType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MakerBundle\Validator;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Animal;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Email;

class AnimalController extends AbstractController
{

    /**
     * @Route("/validar-email/{email}", name="validar_email")
     * @param $email
     */
    public function validarEmail($email)
    {
        $validator = Validation::createValidator();
        $errores   = $validator->validate($email, [new Email()]);

        if(count($errores) != 0){
            echo "El email NO se ha validado correctamente";
        }else{
            echo "El email SI se ha validado correctamente";
        }

        die();
    }

    public function crearAnimal(Request $request)
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);

        $form->handleRequest($request);//Esto recoge los datos del formulario y los adjunta al objeto que esta dentro de createFormBuilder()
        if($form->isSubmitted() && $form->isValid()){//En caso de que el formulario ya ha sido enviado
            $em = $this->getDoctrine()->getManager();
            $em->persist($animal);
            $em->flush();

            //Session flash
            $session = new Session();
            $session->getFlashBag()->add('message', 'Animal Creado');

            return $this->redirectToRoute('crear_animal');
        }

        return $this->render('animal/crear-animal.html.twig', [
            'form' => $form->createView()//Crear la vista del formulario
        ]);
    }

    public function index()
    {

        $animalRepo = $this->getDoctrine()->getRepository(Animal::class);
        $animales = $animalRepo->findAll();//Obtener todos

        $animal = $animalRepo->findOneBy([//Obtener 1 mediante una condicion == SELECT * FROM animales WHERE color = 'rojo' LIMIT 1
            'color' => 'rojo'
        ]);

        $ani = $animalRepo->findBy([//Obtener todos que cumplan la condicion == SELECT * FROM animales WHERE raza = 'Dobberman'
            'raza' => 'Dobberman'
        ]);

        $anim = $animalRepo->findBy([
            'color' => 'Gris'
        ], [
            'id' => 'DESC'  //Order By id DESC
        ]);

        var_dump($anim);

        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales
        ]);
    }

    public function save(Request $request)
    {
        var_dump($request->get('form[tipo]'));

        /*
        //Guardar en una tabla de la BD

        //Cargo el entity manager
        $entityManager = $this->getDoctrine()->getManager(); //Esto me permite trabajar con las entidades y posteriormente guardar cosas en la base de datos

        //Creo el objeto y le doy valores
        $animal = new Animal();
        $animal->setTipo('Avestruz');
        $animal->setColor('Negro');
        $animal->setRaza('Africano');


//            Guardar objeto en doctrine = Persistir, que lo guardo temporalmente
//            en doctrine, por ejemplo, guardo 80mil avestruces en la memoria temporal
//            de doctrine para luego subirlos de golpe a la base de datos, para eso
//            es la persistencia


        $entityManager->persist($animal);

        //Guardar o Volcar datos en la tabla
        $entityManager->flush();


        return new Response('El animal guardado tiene el nombre '.$animal->getTipo());

        */

    return new Response("", 200);


    }

    public function animal(Animal $animal)//Esto es para obtener de manera automatica, sirve para obtener 1 objeto mediante la propiedad indicada en la ruta
    {
        /*
        //Cargar repositorio -> Es lo que nos va a permitir hacer consultas con doctrine utilizando nuestro modelo
        $animalRepo = $this->getDoctrine()->getRepository(Animal::class);

        //Consulta
        $animal = $animalRepo->find($id);
        */

        //Obtener de manera automatica un objeto de la base de datos

        //Comprobar si el resultado es correcto
        if(!$animal){
            $message = "El animal con id $id no existe";
        }else{
            $message = $animal;
        }

        return $this->json($message, 200);
    }

    public function qb()
    {
        $entityManager= $this->getDoctrine()->getManager();
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        $user = $this->getDoctrine()->getRepository(Animal::class);

        //Query builder ESTE SOLO ES RECOMNDABLE crearlo en los repositorios de cada entidad
//        $qb = $animal_repo->createQueryBuilder('a')
//            ->andWhere('a.raza = :raza')
//            ->setParameter('raza', 'americana')
//            ->getQuery();

        //DQL
//        $dql = "SELECT a FROM App\Entity\Animal a ORDER BY a.id DESC";
//        $query = $entityManager->createQuery($dql);
//        //$resultset = $query->execute();
//        //return new Response("hola", 200);
//
//        //Sentencias SQL comunes y corrientes
//        $connection = $this->getDoctrine()->getConnection();
//        $sql = "SELECT * FROM animales ORDER BY id DESC; ";
//        $prepare = $connection->prepare($sql);
//        $prepare->execute();
//        $resultset = $prepare->fetchAll();



        //Repositorio
        $animals = $animal_repo->findAllAnimals('DESC');

        var_dump($animals);

        return new Response("hola", 200);
    }

    public function update($id)
    {
        //Doctrine
        $doctrine = $this->getDoctrine();

        //Entity Manager
        $entityManager = $doctrine->getManager();

        //Repositorio
        $animalRepo = $doctrine->getRepository(Animal::class);

        //Find para conseguir el objeto
         $animal = $animalRepo->find($id);

        //Comprobar si el objeto me llega
        if(!$animal){
            $message = "El animal no existe en la base de datos";
        }else {

            //Asignarle valores al objeto
            $animal->setTipo('Cangrejo');
            $animal->setRaza('Amazonica');
            $animal->setColor('Verde');

            //Persistir en doctrine
            $entityManager->persist($animal);

            //Guardar en la bd
            $entityManager->flush();

            $message = "Animal ".$animal->getTipo()." Actualizado correctamente";
        }

        //Respuesta

        return new Response($message, 200);
    }

    /**
     * @Route("/animal/delete/{id}", name="animal_delete")
     * @param $id
     * @return Response
     */
    public function delete($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $animal = $this->getDoctrine()->getRepository(Animal::class)->find($id);

        if($animal && is_object($animal)){
            $entityManager->remove($animal);
            $entityManager->flush();
            $message = "El animal ha sido borrado correctamente";
        }else{
            $message = "No existe un animal con este id";
        }

        return new Response($message, 200);
    }
}

<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\User;
use App\Form\TaskType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class TaskController extends AbstractController
{
    /**
     * @Route("/tareas", name="task")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $user_repo = $this->getDoctrine()->getRepository(User::class);
        $users = $user_repo->findAll();


        //Prueba de entidades y relaciones

        $em = $this->getDoctrine()->getManager();
        $task_repo = $this->getDoctrine()->getRepository(Task::class);
        $tasks = $task_repo->findBy([], ['id' => 'desc']);

        /*
        foreach ($tasks as $task){
            echo $task->getTitle();
            echo $task->getUser()->getEmail()."<br>";
        }

        //Sacar toos los usuarios y luego sacar todas las tareas que hay adjuntas a cada usuario
        foreach ($users as $user){
            echo "Usuario: ".$user->getName()."<br>";
            echo "Tareas: ";
            echo "<ul>";
            foreach ($user->getTasks() as $task){
                echo "<li>{$task->getTitle()}</li>";
            }
            echo "</ul>";
        }*/


        return $this->render('task/index.html.twig', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * @Route("/detail/{id}", name="task_detail")
     * @param $id
     */
    public function detail($id)
    {
        $task_user = $this->getDoctrine()->getRepository(Task::class)->find($id);

        return $this->render('task/detail.html.twig', [
            'task_user' => $task_user
        ]);
    }

    /**
     * @Route("/crear-tarea", name="task_creation")
     */
    public function creation(Request $request, UserInterface $user)//UserInterface es para recuperar el usuario que esta identificado
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task->setCreatedAt(new \DateTime());
            $task->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirect($this->generateUrl('task_detail', ['id' => $task->getId()]));
        }

        return $this->render('task/creation.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/mis-tareas", name="my_tasks")
     */
    public function myTasks(UserInterface $user)
    {
        $tasks = $user->getTasks();

        return $this->render('task/my-tasks.html.twig', [
            'tasks' => $tasks
        ]);
    }

    /**
     * @Route("/editar-tarea/{id}", name="task_edit")
     */
    public function edit(Request $request, Task $task, UserInterface $user)
    {
        if(!$user || $user->getId() != $task->getUser()->getId()){
            return $this->redirectToRoute('task');
        }

        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$task->setCreatedAt(new \DateTime()); -> De esta manera creariamos el updated_at
            //$task->setUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirect($this->generateUrl('task_detail', ['id' => $task->getId()]));
        }

        return $this->render('task/creation.html.twig', [
            'edit' => true,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/borrar-tarea/{id}", name="task_delete")
     */
    public function delete(Task $task, UserInterface $user)
    {
        $entityManager = $this->getDoctrine()->getManager();

        if(!$user || $user->getId() != $task->getUser()->getId()){
            return $this->redirectToRoute('task');
        }

        if(!$task){
            return $this->redirectToRoute('task');
        }

        $entityManager->remove($task);
        $entityManager->flush();

        return $this->redirectToRoute('task');
    }
}

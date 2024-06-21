<?php
declare(strict_types=1);

namespace App\Controller;

use App\Infrastructure\Database\ConnectionProvider;
use App\Model\User;
use App\Model\UserTable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    private UserTable $userTable;

    public function __construct()
    {
        $connection = ConnectionProvider::connectDatabase();
        $this->userTable = new UserTable($connection);
    }
    public function index():Response
    {
        return $this->render('/register/loginform.php');
    }



    public function registerUser(Request $request): Response
    {
        try {
            $this->userTable->addUserInDB($this->createUserFromRow($request));
        }catch(\Exception $exception){
            return new Response($exception->getMessage());
        }
        return $this->redirectToRoute('catalog');
    }


    private function createUserFromRow(Request $data): User
    {
        return new User(null, $data->get('first_name'), $data->get('last_name'), $data->get('email'), $data->get('phone'));
    }
}
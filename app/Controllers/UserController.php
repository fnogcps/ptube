<?php

declare(strict_types=1);

namespace fnogcps\Ptube\Controllers;

use fnogcps\Ptube\Models\User;
use Throwable;

class UserController
{
    private object $model;
    public function __construct(User $model = new User())
    {
        $this->model = $model;
    }

    public function createUser(array $req)
    {
        // sanatize filters
        // sanatize operations
        // ...

        $pwd = password_hash($req['password'], PASSWORD_DEFAULT);

        try {
            $target = $this->model->create($req['user'], $req['name'], $pwd);
        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    public function deleteUser(string $user)
    {
        try {
            $target = $this->model->delete($user);
        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }

    public function getUser(array $req)
    {
        // sanatize filters
        // sanatize operations
        // ...

        try {
            // get user data
            $target = $this->model->get($req['user']);
            if (password_verify($req['password'], $target[0]->password)) {
                echo json_encode($target);
            } else {
                $err = array("error" => "Login inválido");
                echo json_encode($err);
            }
        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }
}

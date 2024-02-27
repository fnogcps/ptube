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

    public function createUser(string $user, string $name, string $pwd)
    {
        try {
            $target = $this->model->create($user, $name, $pwd);
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
    public function getUser(string $user)
    {
        try {
            $target = $this->model->get($user);
            echo json_encode($target);
        } catch (Throwable $e) {
            echo $e->getMessage();
        }
    }
}

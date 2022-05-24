<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use Psr\Http\Message\ResponseInterface as Response;

class ListUsersAction extends UserAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $params = $this->request->getQueryParams();
        $users = $this->userRepository->findAll();

        $result = [];
        foreach ($users as $user){
            $user->setphotoempty();
            $result[] = $user;
        }
        print_r ($result);


        $this->logger->info("Users list was viewed.");

        return $this->respondWithData($result );
    }
}

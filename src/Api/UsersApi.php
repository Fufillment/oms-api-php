<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 8/17/15
 * Time: 3:47 PM
 */

namespace Fulfillment\OMS\Api;
use Fulfillment\OMS\Models\Request\Contracts\User;


/**
 * Class UsersApi
 * @package Fulfillment\OMS\Api
 */
class UsersApi extends ApiRequestBase
{
    /**
     * Get an array of Users
     *
     * Will only returns users from the merchant authorizing the request
     *
     * @param $queryString
     * @return array|User[]
     * @throws \Exception
     */
    public function getUsers($queryString)
    {
        $json = $this->apiClient->get('users', $queryString);

        if ($this->jsonOnly) {
            $users = $json;
        } else {
            $users = $this->jsonMapper->mapArray($json, [], get_class($this->container->get(User::class)));
        }
        return $users;
    }

    /**
     * Get a user with the specified Id
     *
     * @param $userId
     * @return array|User
     * @throws \Exception
     * @throws \JsonMapper_Exception
     */
    public function getUser($userId)
    {
        $json = $this->apiClient->get('users/' . $userId);

        if ($this->jsonOnly) {
            $user = $json;
        } else {
            $user = $this->jsonMapper->map($json, $this->container->get(User::class));
        }

        return $user;
    }

    /**
     * Create a new user in the Fulfillment system
     *
     * @param array|\Fulfillment\OMS\Models\Request\User $user
     * @return array|User
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     * @throws \JsonMapper_Exception
     */
    public function createUser($user)
    {
        if ($user instanceof \Fulfillment\OMS\Models\Request\User && $this->validateRequests) {
            $user->validate();
        }
        $json = $this->apiClient->post('users/', $user);

        if ($this->jsonOnly) {
            $returnUser = $json;
        } else {
            $returnUser = $this->jsonMapper->map($json, $this->container->get(User::class));
        }
        return $returnUser;
    }

    /**
     * Update an existing user
     *
     * @param $userId
     * @param array|\Fulfillment\OMS\Models\Request\User $user
     * @throws \Exception
     * @throws \Fulfillment\OMS\Exceptions\ValidationFailureException
     */
    public function updateUser($userId, $user)
    {
        if ($user instanceof \Fulfillment\OMS\Models\Request\User && $this->validateRequests) {
            $user->validate();
        }

        $this->apiClient->put('users/' . $userId, $user);
    }

    /**
     * Delete the user with the specified Id
     *
     * @param $userId
     * @throws \Exception
     */
    public function deleteUser($userId)
    {
        $this->apiClient->delete('users/' . $userId);
    }

    /**
     * Change a User's password
     *
     * Must provide the current password for this to work
     *
     * @param $userId
     * @param $currentPassword
     * @param $newPassword
     * @throws \Exception
     */
    public function changeUserPassword($userId, $currentPassword, $newPassword)
    {
        $this->apiClient->put('users/' . $userId . '/password', ['currentPassword' => $currentPassword, 'newPassword' => $newPassword]);
    }

    /**
     * Generate a password token for the specified user and notifies them via email associated with their account
     *
     * Note: Generating a new token will invalidate a previous token
     *
     * @param $userId
     * @throws \Exception
     */
    public function resetUserPassword($userId)
    {
        $this->apiClient->get('users/' . $userId . '/password/reset');
    }

    /**
     * Add an array of roles to a User
     *
     * @param $userId int
     * @param $rolesArray array
     * @throws \Exception
     */
    public function addRoles($userId, $rolesArray)
    {
        $this->apiClient->put('users/' . $userId, $rolesArray);
    }

    /**
     * Delete an array of roles from a User
     *
     * @param $userId int
     * @param $rolesArray array
     * @throws \Exception
     */
    public function deleteRoles($userId, $rolesArray)
    {
        $this->apiClient->delete('users/' . $userId, $rolesArray);
    }

    /**
     * Generate a password token for the user associated with this email address and notify them.
     *
     * Note: Generating a token will invalidate any previous tokens
     *
     * @param $email
     * @throws \Exception
     */
    public function generatePasswordToken($email)
    {
        $this->apiClient->post('generatePasswordToken', ['email' => $email]);
    }

    /**
     * Reset the password for a user using their password token and a new password
     *
     * @param $token string
     * @param $newPassword string
     * @throws \Exception
     */
    public function resetPassword($token, $newPassword)
    {
        $this->apiClient->post('resetPassword', ['token' => $token, 'newPassword' => $newPassword]);
    }
}
<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\User\Communication\Form\Constraints;

use Spryker\Zed\User\Business\UserFacade;
use Symfony\Component\Validator\Constraint;

class CurrentPassword extends Constraint
{

    /**
     * @var string
     */
    protected $message = 'Incorrect current password provided.';

    /**
     * @var UserFacade
     */
    protected $facadeUser;

    /**
     * @return UserFacade
     */
    public function getFacadeUser()
    {
        return $this->facadeUser;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

}

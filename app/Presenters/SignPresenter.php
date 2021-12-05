<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Forms;
use Nette\Application\UI\Form;
use Nette\Security\User;

final class SignPresenter extends BasePresenter
{

    /** @persistent */

    public $backlink = '';

    /** @var Forms\SignInFormFactory */

    private $signInFactory;

    /** @var Forms\SignUpFormFactory */

    private $signUpFactory;


    public function __construct(Forms\SignInFormFactory $signInFactory, Forms\SignUpFormFactory $signUpFactory)
    {

        $this->signInFactory = $signInFactory;

        $this->signUpFactory = $signUpFactory;
    }

    public function actionOut(): void
    {

        $this->getUser()->logout(true);

        $this->redirect(':Sign:in');

    }

    protected function createComponentSignInForm(): Form
    {

        return $this->signInFactory->create(function (User $user): void {

            $this->restoreRequest($this->backlink);

            if ($user->isInRole('admin')) {
                $this->redirect(':Admin:Homepage:');
            } elseif ($user->isInRole('cliente')) {
                $this->redirect('Averias:default');
            } elseif ($user->isInRole('encargado')) {
                $this->redirect(':Averias:default');
            }


            $this->redirect('Homepage:');

        });
    }

    protected function createComponentSignUpForm(): Form
    {

        return $this->signUpFactory->create(function (): void {

            $this->redirect('Homepage:default');

        });
    }
}

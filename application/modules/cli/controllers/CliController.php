<?php

/**
 * @author Benny Van der Stee
 *
 * Class CliController
 */
class CliController extends ZFCli_Controller_Action
{
    /**
     * Cli index action
     */
    public function indexAction()
    {
        $this->output->message("success \n", ZFCli_Output::SUCCESS);
    }
}

<?php

/**
 * @author Benny Van der Stee
 *
 * Class CliController
 */
class CliController extends App_Controller_Action
{
    /**
     * Cli index action
     */
    public function indexAction()
    {
        print $this->output->success("success \n");
    }
}

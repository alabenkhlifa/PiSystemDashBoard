<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Unirest;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@User/Default/layout.html.twig');
    }

    public function mailAction()
    {
        return $this->render('@User/Default/mail.html.twig');
    }

    public function remoteAction()
    {
        return $this->render('@User/Default/remoteControl.html.twig');
    }

    public function ftpAction()
    {
        return $this->redirect("http://127.0.0.1:4340/");
    }

    public function dashboardAction()
    {
        $headers = array('Accept' => 'application/json');
        Unirest\Request::auth('nagiosadmin', '0000');
        $response = Unirest\Request::get('http://192.168.88.135/nagios/cgi-bin/statusjson.cgi?query=service&hostname=localhost&servicedescription=PING',$headers);
        $status = array();
        if(strpos($response->body->{'data'}->{'service'}->{'plugin_output'},'OK')!=false)
            $status['ping']='OK';
        elseif (strpos($response->body->{'data'}->{'service'}->{'plugin_output'},'WARNING')!=false)
            $status['ping']='WARNING';
        else
            $status['ping']='CRITICAL';
        //var_dump($sucess);
        return $this->render('@User/Default/dashboard.html.twig',array('table'=>$status));
    }
}

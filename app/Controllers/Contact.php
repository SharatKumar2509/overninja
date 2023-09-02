<?php

namespace App\Controllers;

class Contact extends BaseController
{

    public function index()
    {
        $data['meta_title'] = "Reach out to us for solutions";
        $data['meta_desc'] = "";

        $client = \Config\Services::curlrequest();

        $response = $client->post('https://ipapi.co/'.$_SERVER['REMOTE_ADDR'].'/country_calling_code');

        if($response->getStatusCode() == 200) {
            $data['country_code'] = $response->getBody();
        }
        else {
            $data['country_code'] = "+1";
        }

        return view('contact', $data);
    }

    public function contact()
    {
        $row = [
            "fullname"      =>  $this->request->getPost('fullname'),
            "email"         =>  $this->request->getPost('email'),
            "code"          =>  $this->request->getPost('code'),
            "mobile"        =>  $this->request->getPost('mobile'),
            "codew"         =>  $this->request->getPost('codew'),
            "whatsapp"      =>  $this->request->getPost('whatsapp'),
            "skype"         =>  $this->request->getPost('skype'),
            "service"       =>  $this->request->getPost('service'),
            "budget"        =>  $this->request->getPost('budget'),
            "description"   =>  $this->request->getPost('description')
        ];

        date_default_timezone_set('Asia/Kolkata');

        $msg = "
            <div style=\"display: flex; align-items: center; justify-content: center\">
                <table border=\"1\" bordercolor=\"#999\" cellpadding=\"5\" cellspacing=\"0\" style=\"text-align: left; font-family: calibri; width: 100%; max-width: 450px;\">
                    <tr>
                        <td colspan=\"2\" style=\"text-align: center; background: #6366f1; color: white; font-size: 1.2em; font-weight: bold; padding: 10px;\">
                            New Enquiry Received
                        </td>
                    </tr>
                    <tr>
                        <th>Received On</th>
                        <td>".date('d-m-Y H:i:s')."</td>
                    </tr>
                    <tr>
                        <th>Fullname</th>
                        <td>".$row['fullname']."</td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td>".$row['code']." - ".$row['mobile']."</td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>".$row['email']."</td>
                    </tr>
                    <tr>
                        <th>Whatsapp</th>
                        <td>".$row['codew']." - ".$row['whatsapp']."</td>
                    </tr>
                    <tr>
                        <th>Skype</th>
                        <td>".$row['skype']."</td>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <td>".$row['service']."</td>
                    </tr>
                    <tr>
                        <th>Project Budget</th>
                        <td>".$row['budget']."</td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td>".$row['description']."</td>
                    </tr>
                </table>
            </div>
        ";

        $email = \Config\Services::email();

        $email->setFrom("over1ninja@gmail.com", "Mail Server");
        $email->setTo('sales@overninja.com');
        $email->setSubject('New Enquiry Received at overninja.com');
        $email->setMessage($msg);
        
        $email->send();

        $this->session->setFlashdata('result', 'success');

        return redirect()->to(base_url()."contact");
    }

    public function subscribe()
    {
        
        $row = [
            "email" =>  $this->request->getPost('email')
        ];

        date_default_timezone_set('Asia/Kolkata');

        $msg = "
            <div style=\"display: flex; align-items: center; justify-content: center\">
                <table border=\"1\" bordercolor=\"#999\" cellpadding=\"5\" cellspacing=\"0\" style=\"text-align: left; font-family: calibri; width: 100%; max-width: 450px;\">
                    <tr>
                        <td colspan=\"2\" style=\"text-align: center; background: #6366f1; color: white; font-size: 1.2em; font-weight: bold; padding: 10px;\">
                            New Subscriber Joined
                        </td>
                    </tr>
                    <tr>
                        <th>Received On</th>
                        <td>".date('d-m-Y H:i:s')."</td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>".$row['email']."</td>
                    </tr>
                </table>
            </div>
        ";

        $email = \Config\Services::email();

        $email->setFrom("over1ninja@gmail.com", "Mail Server");
        $email->setTo('sales@overninja.com');
        $email->setSubject('New Subscriber Joined at overninja.com');
        $email->setMessage($msg);
        
        $email->send();

        return 1;
    }

}

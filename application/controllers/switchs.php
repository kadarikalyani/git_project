<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Switchs extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://localhost/git_project/index.php/kalyani
     * 	- or -
     * 		http://localhost/git_project/index.php/kalyani/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to http://localhost/git_project/index.php/kalyani/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function index() {

        // define variables and set to empty values
        $nameErr = $emailErr = $commentErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = $_POST["name"];
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = $_POST["email"];
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["website"])) {
                $websiteErr = "Website is required";
            } else {
                $website = $_POST["website"];
                //check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                    $websiteErr = "Invalid URL";
                }
            }

            if (empty($_POST["comment"])) {
                $commentErr = "Comment is required";
            } else {
                $comment = $_POST["comment"];
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = $_POST["gender"];
            }
        }

        $data['name'] = $name;
        $data['nameErr'] = $nameErr;

        $data['email'] = $email;
        $data['emailErr'] = $emailErr;

        $data['comment'] = $comment;
        $data['commentErr'] = $commentErr;

        $data['gender'] = $gender;
        $data['genderErr'] = $genderErr;

        $data['website'] = $website;
        $data['websiteErr'] = $websiteErr;

        $this->load->view('switchs_view', $data);
    }

    public function getSwitches() {

        //get marks from kalyani_model
        $this->load->model('swathi_model');
        $data['marks'] = $this->swathi_model->get_data();

        $this->load->view('kalyani_marks_view', $data);
    }

}

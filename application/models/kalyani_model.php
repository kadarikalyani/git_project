<?php

class Kalyani_model extends CI_Model {

    public function get_marks() {
        $marks = array(
            '10th' => '68',
            'Inter' => '53.3',
            'Grad' => '58.3',
        );
        return $marks;

        }

}

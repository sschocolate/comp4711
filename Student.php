<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author a00894773
 */
class Student {
    //Constructor for student
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    //Mutator method to add an email
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }
    //Mutator method to add a grade
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}

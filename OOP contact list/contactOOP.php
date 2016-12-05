<?php
class Contact {
    private $id, $first_name, $last_name, $email;

    /** Product constructor
     * @param string $first_name the contact first name
     * @param string $last_name the contact last name
     * @param string $email the contact email
     * 
     * @return Contact
     */
    public function __construct($first_name, $last_name, $email) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email= $email;
    
    }

    /** Get first name 
     * @return int The first name 
     */
    public function getFirstName() {
        return $this->first_name;
    }

    /** Set first name
     * @param int The first name 
     */
    public function setFirstName($value) {
        $this->first_name = $value;
    }

    /** Get contact ID
     * @return int The contact ID
     */
    public function getID() {
        return $this->id;
    }

    /** Set  ID
     * @param int The contact ID
     */
    public function setID($value) {
        $this->id = $value;
    }

    /** Get last name
     * @return string The last name
     */
    public function getLastName() {
        return $this->last_name;
    }

    /** Set last name
     * @param string last name
     */
    public function setLastName($value) {
        $this->last_name = $value;
    }

    /** Get email
     * @return string The email
     */
    public function getEmail() {
        return $this->email;
    }

    /** Set email
     * @param string The email
     */
    public function setEmail($value) {
        $this->email = $value;
    }

     
    public function toString(){
        echo"<ul>";
        
        echo"<li>". $this->first_name.', ' . $this->last_name .', ' . $this->email. ', ' ."</li>";
        
        echo "</ul>";
    }
    

}
?>
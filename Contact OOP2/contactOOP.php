<?php
class Contact {
    private $id, $first_name, $last_name, $email,$companyName,$title;

    /** Product constructor
     * @param string $first_name the contact first name
     * @param string $last_name the contact last name
     * @param string $email the contact email
     * 
     * @return Contact
     */
    public function __construct($first_name, $last_name, $email , $companyName,$title) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email= $email;
        $this->companyName=$companyName;
        $this->title=$title;
    
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
    
    /**Get company name
     *@return String comapany name
     */
    
    public function getCompanyName() {
        return $this->companyName;
    }

    /** Set company name
     * @param string The company name
     */
    public function setCompanyName($value) {
        $this->companyName = $value;
    }
    /**Get title
     *@return String title
     *
     */
    
    public function getTitle() {
        return $this->title;
    }

    /** Set title
     * @param string The title
     */
    public function setTitle($value) {
        $this->title= $value;
    }



     
    public function toString(){
        echo"<ul>";
        
        echo"<li>". $this->first_name.', ' . $this->last_name .', ' . $this->email. ', ' .$this->companyName.', '.$this->title . "</li>";
        
        echo "</ul>";
    }
    

}
?>
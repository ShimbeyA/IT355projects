<?php



class ContactDB {
    
    private $db;
    
    public function __construct($conn) {
    
        require 'dbOOP.php';
        $this->db = $conn;
    }
    
    /** Get all contacts
     * @return An array of contacts
     */
    public function getContacts() {

        $query = 'SELECT * FROM ContactList';
        $result = $this->db->prepare($query);
        $result->execute();
        $stmt = $result->fetchAll(PDO::FETCH_ASSOC);
        $contacts = array();
        foreach ($stmt as $row) {

            $contact = new Contact(
                                   $row['first_name'],
                                   $row['last_name'],
                                   $row['email'],
                                   $row['title'],
                                   $row['companyName']);
            //$contact->setID($row['id']);
            array_push($contacts, $contact);
        }
        return $contacts;
    }

    /** Get a single contact
     * @param The id of the contact to be returned
     * @return A contact object
     */
    public function getContact($id) {

        $query = "SELECT * FROM ContactList
                  WHERE id= $id";
        $stmt = $this->db->prepare($query);
        //$stmt->bindParam('8', $id, PDO::PARAM_INT);
        $stmt->execute();
        $rows = $stmt->fetch();
       // $contact =array();
       //foreach($rows as $row){
       $contact = new Contact(
                             //$row['id'],
                         $rows['first_name'],
                          $rows['last_name'],
                           $rows['email'],
                            $row['title'],
                            $row['companyName']);
    //$contact->setID($row['id']);
       //array_push($contacts,$contact);
       //}
        return $contact;
    }

    /** Delete a contact
     * @param The id for contact to be deleted
     */
    public function deleteContact($id) {

        $query = "DELETE FROM ContactList
                  WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    /** Add a contact
     * @param The contact to be added
     */
    public function addContact($contact) {

        $first_name = $contact->getFirstName();
        $last_name= $contact->getLastName();
        $email = $contact->getEmail();
        $companyName=$contact->getCompanyName();
        $title=$contact->getTitle();
 

        $query =
            "INSERT INTO ContactList
                 ( first_name, last_name, email,companyName,title)
             VALUES
                 (:first_name, :last_name, :email,:companyName,:title)";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':companyName', $companyName, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        
        $stmt->execute();

    }
}
?>
<?php

/**require other php files
 *that are going to be used
 *in this file
 *
 */
require 'contactOOP.php';
require 'contact_db.php';
require 'dbOOP.php';


//echo "View contacts";

$c1 = new Contact('Grace','Harper','graceharper@live.com', 'Amazon', 'Product Manager');
$c2 = new Contact('Malik','Johnson','malikjohnson22@mail.com','Microsoft','Senior Software Developer');
/*adding contacts to the list
 *
 */
//echo "<h3>Adding Contacts...</h3>";
$contactDB = new contactDB($conn);
$contactDB->addContact($c1);
$contactDB->addContact($c2);

/*Retrieving a single contact
 *
 */
echo "<h3>Retrieving Contact 300...</h3>";
$contact = $contactDB->getContact(300);
//echo $email;
echo $contact->toString();
///foreach($contact as $product){
 //echo $product->getFirstName;
//}

/*deleting a single contact
 *
 */

echo "<h3>Deleting Contact 294...</h3>";
$contactDB->deleteContact(294);

/*displaying all the contacts
 *in the table
 */
$ContactDB= new ContactDB($conn);
echo "<h2>ALL CONTACTS...<h2>";
$contacts = $ContactDB->getContacts();
foreach($contacts as $product){
    echo $product->toString() ;
    
}

?>
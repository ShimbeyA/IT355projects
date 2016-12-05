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

$c1 = new Contact('Jamie','Gonzales','jamiegonzales@live.com');
$c2 = new Contact('Oumar','Jones','oumarjones2@mail.com');
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
echo "<h3>Retrieving Contact 146...</h3>";
$contact = $contactDB->getContact(146);
//echo $email;
echo $contact->toString();
///foreach($contact as $product){
 //echo $product->getFirstName;
//}

/*deleting a single contact
 *
 */

echo "<h3>Deleting Contact 13...</h3>";
$contactDB->deleteContact(13);

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
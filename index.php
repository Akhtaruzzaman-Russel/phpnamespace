<?php
    require_once 'vendor/autoload.php';
    use App\classes\About;
    use App\classes\Contact;
    use App\classes\Home;


    $about = new About();
    echo $about->name;

    echo "<br><br><br><br>";

    $contact = new Contact();
    echo $contact->name;

    echo "<br><br><br><br>";

    $home = new Home();
    echo $home->name;

?>
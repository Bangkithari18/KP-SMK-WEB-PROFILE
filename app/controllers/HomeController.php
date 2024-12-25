<?php
require_once 'app/models/About.php';
require_once 'app/models/Service.php';
require_once 'app/models/Contact.php';

class HomeController
{
    private $aboutModel;
    private $serviceModel;
    private $contactModel;

    public function __construct($db)
    {
        $this->aboutModel = new About($db);
        $this->serviceModel = new Service($db);
        $this->contactModel = new Contact($db);
    }

    public function index()
    {
        // Fetch data from models
        $aboutStmt = $this->aboutModel->getAbout();
        $servicesStmt = $this->serviceModel->getServices();
        $contactStmt = $this->contactModel->getContact();

        // Periksa apakah query berhasil
        if ($aboutStmt === false || $servicesStmt === false || $contactStmt === false) {
            die("Error: Unable to fetch data from the database.");
        }

        // Ambil data hasil query
        $about = $aboutStmt->fetch(PDO::FETCH_ASSOC);
        $services = $servicesStmt->fetchAll(PDO::FETCH_ASSOC);
        $contact = $contactStmt->fetch(PDO::FETCH_ASSOC);

        // Cek apakah data kosong
        if (!$about || !$services || !$contact) {
            die("Error: No data found.");
        }

        // Load the view
        require_once 'app/views/home.php';
    }
}

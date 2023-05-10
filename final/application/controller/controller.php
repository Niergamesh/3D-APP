<?php
// include './debug/ChromePhp.php';
// ChromePhp::log('controller.php:Hello World');
// ChromePhp::log($_SERVER);

// Create the controller class for the MVC design pattern
class Controller {
    // Declare public variables for the controller class
    public $load;
    public $model;
    public $initModel;
    
    // Create functions for the controller class
    function __construct($pageURI = null)//contructor of the class
    {
        // Create new objects for Load and Model
        $this->load = new Load();
        $this->model = new Model();
        $this->initModel = new InitModel();
        // Determine what page you are on
        $this->$pageURI();
    }

    // home page function
    function home()
    {
        $this->load->view('viewIndex');
    }

    function initDB()
    {
        // echo "Create table function";
        $data = $this->initModel->initDB();
        $this->load->view('viewMessage', $data);
    }

    function apiGetDescData()
    {
        // echo "Data retrieval function";
        $data = $this->model->dbGetDescData();
        // $this->load->view('view3DAppData', $data);
        echo json_encode($data);
    }

    function apiGetModelData()
    {
        // echo "Data retrieval function";
        $data = $this->model->dbModelDescData();
        // $this->load->view('view3DAppData2', $data);
        echo json_encode($data);
    }

    // API call to select 3D images
    function apiLoadImage() {
        // Get the brand data from the (this)Model using the dbGetBrand()meyhod in this Model class
        // ChromePhp::warn('controller.php:[apiLoadImage]Get the Brand data');
        $data = $this->model->dbGetBrand();
        // Note,the viewDrinks.php view being loaded here calls a new model
        // called modelDrinkDetails.php,which is not part of the Model class
        // It is a separate model illustrating that you can have many models
        // ChromePhp::log($data);
        $this->load->view('viewDrinks',$data);
    }

}

?>
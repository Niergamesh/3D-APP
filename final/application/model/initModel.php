<?php
class InitModel {
    // Property declaration,in this case we are declaring a variable or handeler that points to the database connection, this will become a PDo object
    public $dbhandle;
    
    // Method to create database connection using PHP Data objects (PDO)as the interface to SQLite
    public function __construct()
    {
        // Set up the database source name (DSN)
        $dsn = 'sqlite:./db/3dapp.db';
    
        // Then create a connection to a database with the PDO()function
        try {
            // Change connection string for different databases,currently using SQLite
            $this->dbhandle = new PDO($dsn,'user','password',array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ));
            // $this->dbhandle->setAttribute(PDO:ATTR_ERRMODE,PDO:ERRMODE_EXCEPTION);
            // echo 'Database connection created</br></br>';
        }
        catch (PDOEXception $e) {
            echo "I'm sorry,Martin.I'm afraid I can't connect to the database!";
            // Generate an error message if the connection fails
            print new Exception($e->getMessage());
        }
    }

    public function initDB()
    {
        $this->dbCreateDescTable();
        $this->dbInsertDescData();

        $this->dbCreateModelTable();
        $this->dbInsertModelData();

        return "Model_Desc table is successfully created and init!";
    }

    public function dbCreateDescTable()
    {
        try {
            $this->dbhandle->exec("CREATE TABLE Model_Desc (Id INTEGER PRIMARY KEY, modelTitle TEXT, modelCover TEXT, modelDescription TEXT)");
            return "Model_Desc table is successfully created inside 3dapp.db file";
        }
        catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbCreateModelTable()
    {
        try {
            $this->dbhandle->exec("CREATE TABLE Model_X3d (Id INTEGER PRIMARY KEY, keyStr TEXT, tabName TEXT, modelTitle TEXT, modelDescription TEXT, modelX3d TEXT, expansionTitle TEXT, expansionSubTitle TEXT, expansionDescription TEXT, expansionLink TEXT)");
            return "Model_X3d table is successfully created inside 3dapp.db file";
        }
        catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbInsertDescData()
    {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Model_Desc (Id,modelTitle,modelCover,modelDescription) VALUES (1,'Coca Cola','coca_cola.jpg','It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!');"
            );
            $this->dbhandle->exec(
                "INSERT INTO Model_Desc (Id,modelTitle,modelCover,modelDescription) VALUES (2,'Sprite','sprite.jpg','First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.');"
            );
            $this->dbhandle->exec(
                "INSERT INTO Model_Desc (Id,modelTitle,modelCover,modelDescription) VALUES (3,'Dr Pepper','dr_pepper.jpg','Dr Pepper''s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it''s still the same, with that distinctive flavour you just can''t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885.');"
            );
            return "Model data inserted successfully inside 3dapp.db";
        }
        catch(PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbInsertModelData()
    {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Model_X3d (Id, keyStr, tabName, modelTitle, modelDescription, modelX3d, expansionTitle, expansionSubTitle, expansionDescription, expansionLink) VALUES (1,'coke','Coke','Coca Cola X3D Model', 'This X3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'coke.x3d', 'History of Coca Cola', 'Atlanta Beginnings', 'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs'' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs'' Pharmacy put it on sale for five cents (about 3p) a glass.', 'http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola');"
            );
            $this->dbhandle->exec(
                "INSERT INTO Model_X3d (Id, keyStr, tabName, modelTitle, modelDescription, modelX3d, expansionTitle, expansionSubTitle, expansionDescription, expansionLink) VALUES (2,'sprite','Sprite','Sprite X3D Model', 'This X3D model of the sprite bottle has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'sprite.x3d', 'Sprite — Fanta Klare Zitrone', 'First introduced in 1961', 'Crisp, refreshing, clean-tasting Sprite is now the world''s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Cola''s no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.', 'http://www.coca-cola.co.uk/drinks/sprite/sprite');"
            );
            $this->dbhandle->exec(
                "INSERT INTO Model_X3d (Id, keyStr, tabName, modelTitle, modelDescription, modelX3d, expansionTitle, expansionSubTitle, expansionDescription, expansionLink) VALUES (3,'pepper','Pepper','Dr Pepper X3D Model', 'This X3D model of the pepper cup has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'pepper_animation.x3d', 'Dr Pepper — Liquid Sunshine', '23 fruit flavours', 'Dr Pepper''s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it''s still the same, with that distinctive flavour you just can''t quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.', 'http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper');"
            );
            return "X3D model data inserted successfully inside 3dapp.db";
        }
        catch(PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

}
?>
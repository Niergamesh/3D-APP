<?php
class Model {
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
            // sthis->dbhandle->setAttribute(PDO:ATTR_ERRMODE,PDO:ERRMODE_EXCEPTION);
            // echo 'Database connection created</br></br>';
        }
        catch (PDOEXception $e) {
            echo "I'm sorry,Martin.I'm afraid I can't connect to the database!";
            // Generate an error message if the connection fails
            print new Exception($e->getMessage());
        }
    }

    public function dbGetDescData()
    {
        try {
            // Prepare a statement to get all records from the Model 3D table
            $sql = 'SELECT * FROM Model_Desc ORDER BY Id LIMIT 3';
            // Use PDO query()to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = null;
            // Set up a variable to index each row of the array
            $i=-0;
            // Use PDO fetch()to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows
            while ($data = $stmt->fetch()) {
                // Don't worry about this,it's just a simple test to check we can output a value from the database in a while loop
                // echo '</br>'.$data['x3dModelTitle'];
                // Write the database conetnts to the results array for sending back to the viev
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelCover'] = $data['modelCover'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                // increment the row index
                $i++;
            }
        }
        catch(PDOEXception $e) {
            print new Exception(se->getMessage());
        }
        // Close the database connection
        $this->dbhandle = NULL;
        // Send the response back to the view
        return $result;
    }

    public function dbModelDescData()
    {
        try {
            // Prepare a statement to get all records from the Model 3D table
            $sql = 'SELECT * FROM Model_X3d ORDER BY Id';
            // Use PDO query()to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = null;
            // Set up a variable to index each row of the array
            $i=-0;
            // Use PDO fetch()to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows
            while ($data = $stmt->fetch()) {
                // Don't worry about this,it's just a simple test to check we can output a value from the database in a while loop
                // echo '</br>'.$data['x3dModelTitle'];
                // Write the database conetnts to the results array for sending back to the viev
                // Id, keyStr, tabName, modelTitle, modelDescription, modelX3d, expansionTitle, expansionSubTitle, expansionDescription, expansionLink
                $result[$i]['keyStr'] = $data['keyStr'];
                $result[$i]['tabName'] = $data['tabName'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                $result[$i]['modelX3d'] = $data['modelX3d'];
                $result[$i]['expansionTitle'] = $data['expansionTitle'];
                $result[$i]['expansionSubTitle'] = $data['expansionSubTitle'];
                $result[$i]['expansionDescription'] = $data['expansionDescription'];
                $result[$i]['expansionLink'] = $data['expansionLink'];
                
                // increment the row index
                $i++;
            }
        }
        catch(PDOEXception $e) {
            print new Exception(se->getMessage());
        }
        // Close the database connection
        $this->dbhandle = NULL;
        // Send the response back to the view
        return $result;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05- Abstract</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <nav class="controls">
        <a href="/01-oop/index.html">

        </a>
    </nav>
    <main>
        <h1>05- Abstract</h1>
        <section>
            <?php
               abstract class DataBase {
                // Attributes
                protected $host;
                protected $user;
                protected $pass;
                protected $dbname;
                protected $conx;

                // Methods
                public function __construct($dbname,
                                            $host='localhost',
                                            $user='root',
                                            $pass='') {
                    $this->host = $host;
                    $this->user=  $user;
                    $this->pass = $pass;
                    $this->dbname = $dbname;
                }

                public function connect() {
                    try {
                        $this->conx = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
                        if($this->conx) {
                            echo "😜";
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                }
            }

            class Pokemon extends DataBase {

            }

            $db = new Pokemon('adso2613934','localhost','root','');
            $db->connect();


            ?>
        </section>
    </main>
    
</body>
</html>






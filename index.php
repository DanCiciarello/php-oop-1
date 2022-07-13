<?php

class Movie
{
    public $title;
    public $year;
    public $age;
    public $originalLanguage;

    public function setAge($_year)
    {
        $currentDate = date("Y");
        return $currentDate - $this->year;
    }

    function __construct($_title, $_year, $_originalLanguage)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->originalLanguage = $_originalLanguage;
        $this->age = $this->setAge($_year);
    }
};

$firstMovie = new Movie("Back to the future", 1985, "inglese");
$secondMovie = new Movie("The Empire Strikes Back", 1980, "inglese");

var_dump($firstMovie);
var_dump($secondMovie);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
</head>

<body>

    <div class="container text-center my-5">
        <p>
            <?php echo "Il film " . $firstMovie->title . " è stato girato " . $firstMovie->age . " anni fa, nel " . $firstMovie->year . ", e la lingua originale è " . $firstMovie->originalLanguage . "." ?>
        </p>
        <p>
            <?php echo "Il film " . $secondMovie->title . " è stato girato " . $secondMovie->age . " anni fa, nel " . $secondMovie->year . ", e la lingua originale è " . $secondMovie->originalLanguage . "." ?>
        </p>
    </div>

</body>

</html>
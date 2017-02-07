<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/parcels.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return  "<div class='container'>
                <form action='/parcels'>
                    <div class='form-group'>
                        <label for='weight'>Enter the weight of your package:</label>
                        <input id='weight' name='weight' class='form-control' type='number'>
                    </div>
                    <div class='form-group'>
                        <label for='dimensions'>Enter the dimensions of your package</label>
                        <input id='dimensions' name='dimensions' class='form-control' type='number'>
                    </div>
                    <button type='submit' class='btn-success'>Submit</button>
                </form>
            </div>";
    });

    return $app;
?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  table {
    border:solid 1px black;
    }
    td{
        border: solid 1px black;
        text-align:center;
    }
  </style>
</head>
<body>

    <form action="apistarwars.php" method="post">
        <br>
        <input type="hidden" name="type" value="selector">
        <select name="select">
            <option value="people">People</option>
            <option value="films">Films</option>
            <option value="starships">Starships</option>
            <option value="vehicles">Vehicles</option>
            <option value="species">Species</option>
            <option value="planets">Planets</option>
        </select>
        <br/>
        <br>
        <input type="submit" value="chose">
        <hr/>
    </form>
    <br>
    <?php
        session_start();
        
        if(isset($_POST["type"])&& $_POST["type"] === "selector" ){
            if(isset($_POST["select"])){
                if($_POST["select"]==="people"){
                    $ch = curl_init("https://swapi.co/api/people/");
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

                    $resultJson = curl_exec($ch);
                    $resultObject = json_decode($resultJson);
                    curl_close($ch);
                    
                        ?>
                        <table>
                            <th colspan='17'>
                                PEOPLE
                            </th>
                            <tr>
                                <td>name</td>
                                <td>height</td>
                                <td>mass</td>
                                <td>hair color</td>
                                <td>skin color</td>
                                <td>eye color</td>
                                <td>birth year</td>
                                <td>gender</td>
                                <td>homeworld</td>
                                <td>films</td>
                                <td>url</td>
                               
                            </tr>
                            <?php
                                foreach($resultObject->results as $result){
                                    ?>
                            <tr>
                                <td><?php echo $result->name ?></td>
                                <td><?php echo $result->height ?></td>
                                <td><?php echo $result->mass ?></td>
                                <td><?php echo $result->hair_color?></td>
                                <td><?php echo $result->skin_color?></td>
                                <td><?php echo $result->eye_color?></td>
                                <td><?php echo $result->birth_year?></td>
                                <td><?php echo $result->gender ?></td>
                                <td><?php echo $result->homeworld ?></td>
                                <td>
                                    <ul>
                                    <?php foreach($result->films as $film){?>
                                        <li><?php echo $film ?></li>
                                        
                                    <?php } ?>
                                    </ul>
                                </td>
                                <td><?php echo $result->url ?></td> 
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <?php
                    }
                }
                if($_POST["select"]==="films"){
                    $ch = curl_init("https://swapi.co/api/films/");
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

                    $resultJson = curl_exec($ch);
                    $resultObject = json_decode($resultJson);
                    curl_close($ch);
                    ?>
                        <table>
                            <th colspan='7'>
                                FILMS
                            </th>
                            <tr>
                                <td>title</td>
                                <td>episode id</td>
                                <td>opening crawl</td>
                                <td>director</td>
                                <td>producer</td>
                                <td>release date</td>
                                <td>url</td> 
                            </tr>
                            <?php
                                foreach($resultObject->results as $result){
                                ?>
                            <tr>
                                <td><?php echo $result->title ?></td>
                                <td><?php echo $result->episode_id ?></td>
                                <td><?php echo $result->opening_crawl ?></td>
                                <td><?php echo $result->director?></td>
                                <td><?php echo $result->producer?></td>
                                <td><?php echo $result->release_date?></td>
                                <td><?php echo $result->url?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <?php

                }
                if($_POST["select"]==="starships"){
                    $ch = curl_init("https://swapi.co/api/starships/");

                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
            
                    $resultJson = curl_exec($ch);
                    $resultObject = json_decode($resultJson);
                    curl_close($ch);
                    ?>
                        <table>
                            <th colspan='14'>
                                STARSHIPS
                            </th>
                            <tr>
                                <td>name</td>
                                <td>model</td>
                                <td>manufacturer</td>
                                <td>cost in credits</td>
                                <td>length</td>
                                <td>max atmosphering speed</td>
                                <td>crew</td>
                                <td>passengers</td>
                                <td>cargo capacity</td>
                                <td>consumables</td>
                                <td>hyperdrive rating</td>
                                <td>starship class</td>
                                <td>MGLT</td>
                                <td>url</td>
                               
                            </tr>
                            <?php
                                foreach($resultObject->results as $result){
                                ?>
                            <tr>
                                <td><?php echo $result->name ?></td>
                                <td><?php echo $result->model ?></td>
                                <td><?php echo $result->manufacturer ?></td>
                                <td><?php echo $result->cost_in_credits?></td>
                                <td><?php echo $result->length?></td>
                                <td><?php echo $result->max_atmosphering_speed?></td>
                                <td><?php echo $result->crew?></td>
                                <td><?php echo $result->passengers ?></td>
                                <td><?php echo $result->cargo_capacity ?></td>
                                <td><?php echo $result->consumables ?></td>
                                <td><?php echo $result->hyperdrive_rating ?></td>
                                <td><?php echo $result->starship_class ?></td>
                                <td><?php echo $result->MGLT ?></td>
                                <td><?php echo $result->url ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <?php
                }
                if($_POST["select"]==="vehicles"){
                    $ch = curl_init("https://swapi.co/api/vehicles/");

                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
            
                    $resultJson = curl_exec($ch);
                    $resultObject = json_decode($resultJson);
                    curl_close($ch);
                    ?>
                        <table>
                            <th colspan='12'>
                                STARSHIPS
                            </th>
                            <tr>
                                <td>name</td>
                                <td>model</td>
                                <td>manufacturer</td>
                                <td>cost in credits</td>
                                <td>length</td>
                                <td>max atmosphering speed</td>
                                <td>crew</td>
                                <td>passengers</td>
                                <td>cargo capacity</td>
                                <td>consumables</td>
                                <td>vehicle class</td>
                                <td>url</td>
                               
                            </tr>
                            <?php
                                foreach($resultObject->results as $result){
                                ?>
                            <tr>
                                <td><?php echo $result->name ?></td>
                                <td><?php echo $result->model ?></td>
                                <td><?php echo $result->manufacturer ?></td>
                                <td><?php echo $result->cost_in_credits?></td>
                                <td><?php echo $result->length?></td>
                                <td><?php echo $result->max_atmosphering_speed?></td>
                                <td><?php echo $result->crew?></td>
                                <td><?php echo $result->passengers ?></td>
                                <td><?php echo $result->cargo_capacity ?></td>
                                <td><?php echo $result->consumables ?></td>
                                <td><?php echo $result->vehicle_class ?></td>
                                <td><?php echo $result->url ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <?php
                }
                if($_POST["select"]==="species"){
                    $ch = curl_init("https://swapi.co/api/species/");

                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
            
                    $resultJson = curl_exec($ch);
                    $resultObject = json_decode($resultJson);
                    curl_close($ch);
                    ?>
                        <table>
                            <th colspan='11'>
                                SPECIES
                            </th>
                            <tr>
                                <td>name</td>
                                <td>classification</td>
                                <td>designation</td>
                                <td>average height</td>
                                <td>skin colors</td>
                                <td>hair colors</td>
                                <td>eye colors</td>
                                <td>average lifespan</td>
                                <td>homeworld</td>
                                <td>language</td>
                                <td>url</td>
                               
                            </tr>
                            <?php
                                foreach($resultObject->results as $result){
                                ?>
                            <tr>
                                <td><?php echo $result->name ?></td>
                                <td><?php echo $result->classification ?></td>
                                <td><?php echo $result->designation ?></td>
                                <td><?php echo $result->average_height?></td>
                                <td><?php echo $result->skin_colors?></td>
                                <td><?php echo $result->hair_colors?></td>
                                <td><?php echo $result->eye_colors?></td>
                                <td><?php echo $result->average_lifespan ?></td>
                                <td><?php echo $result->homeworld ?></td>
                                <td><?php echo $result->language ?></td>
                                <td><?php echo $result->url ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <?php
                }
                if($_POST["select"]==="planets"){
                    $ch = curl_init("https://swapi.co/api/planets/");

                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
            
                    $resultJson = curl_exec($ch);
                    $resultObject = json_decode($resultJson);
                    curl_close($ch);

                    ?>
                        <table>
                            <th colspan='10'>
                                PLANETS
                            </th>
                            <tr>
                                <td>name</td>
                                <td>rotation period</td>
                                <td>orbital period</td>
                                <td>diameter</td>
                                <td>climate</td>
                                <td>gravity</td>
                                <td>terrain</td>
                                <td>surface water</td>
                                <td>population</td>
                                <td>url</td>
                               
                            </tr>
                            <?php
                                foreach($resultObject->results as $result){
                                ?>
                            <tr>
                                <td><?php echo $result->name ?></td>
                                <td><?php echo $result->rotation_period ?></td>
                                <td><?php echo $result->orbital_period ?></td>
                                <td><?php echo $result->diameter?></td>
                                <td><?php echo $result->climate?></td>
                                <td><?php echo $result->gravity?></td>
                                <td><?php echo $result->terrain?></td>
                                <td><?php echo $result->surface_water ?></td>
                                <td><?php echo $result->population ?></td>
                                <td><?php echo $result->url ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <?php
                }
            }else{
                echo "Chose you opcion and search one name";
        }
    ?>
    
</body>
</html>
<?php

$ch = curl_init("https://swapi.co/api/vehicles/");

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

$resultJson = curl_exec($ch);
$resultObject = json_decode($resultJson);
curl_close($ch);

//echo $resultJson;
//echo $result->results[0]->name;
?>
<select>
    <option value="vehicles">vehicles</option>
</select>
<?php
    foreach($resultObject->results as $result){
        ?>

        <div style="display:block;">
            <h2><?php echo $result->name  ?></h2>
            <h3><?php echo $result->model  ?></h3>
            <h3><?php echo $result->manufacturer  ?></h3>
        </div>

        <?php
    }

?>
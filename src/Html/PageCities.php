<?php
namespace App\Html;

use App\Html\AbstractPage;

class PageCities extends AbstractPage
{
    static function table(array $cities)
    {
        echo '<h1>Városok</h1>';
        echo '<table id="cities-table">';
        self::tableHead();
        self::tableBody($cities);
        echo '</table>';
    }

    static function tableHead()
    {
        echo '
        <thead>
            <tr>
                <th class="id-col">ID</th>
                <th>Város neve</th>
            </tr>
        </thead>';
    }

    static function tableBody(array $cities)
    {
        echo '<tbody>';
        foreach ($cities as $city) {
            echo "
            <tr>
                <td>{$city['id']}</td>
                <td>{$city['city']}</td>
            </tr>";
        }
        echo '</tbody>';
    }

    static function dropdown(array $entities){
        echo '<h1>Városok</h1>';
        echo '<form method="post" action="">'; 
        echo '<select name="county_id" required>'; 
        foreach ($entities as $entity) {
            echo "<option value='{$entity['id']}'>{$entity['name']}</option>";
        }
        echo '</select>';
        echo '<button type="submit" name="btn-cities">Submit</button>'; 
        echo '</form>';
    }

    static function editor()
    {
       
    }
}




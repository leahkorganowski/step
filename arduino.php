<?php
    require_once ('.things.php');            
        $fp = fopen('arduino.csv', 'a+');
        $title = 'Our Solar Thermal Arduino Readings';
    echo ("<h1>$title</h1>");
?>
    <table>
        <tr>
            <th>Attribute</th>
            <th>Value</th>
        </tr>
        <?php
            $params = array ();
            foreach ((array) $_GET as $key => $val) {
                echo ("<tr>
                        <td>$key</td>
                        <td>$val</td>
                    </tr>");
                $params[] = $key;
                $params[] = $val;
            }
            fputcsv ($fp, $params);
            fclose($fp);
        ?>
    </table>
    <div id="graphdiv"></div>
    <p><a href="arduino.csv">Download saved data</a></p>
    <p>Contact <a href="mailto:brian@ohai.ca">Brian</a> to delete existing data.</p>
    <script type="text/javascript">
        g = new Dygraph(
            document.getElementById("graphdiv"), 
            "arduino.csv" // file to csv
        );
    </script>
<?php
    page_out (array (
        'title' => $title,
        'headers' => '<script type="text/javascript" src="http://dygraphs.com/dygraph-combined.js"></script>'
    ));
?>

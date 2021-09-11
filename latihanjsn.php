<?php
    $data = [
        ["dosen" => "Danny Indra Gunawan", "submenu" => [
            [ "nama" => "Altaf fadil",
            "namasiswa" => [
            ["namasiswa" => "Bhilie joe amstrong"],
            ["namasiswa" => "Tre cool"],
            ["namasiswa" => "raj punjanbi"],
            ["namasiswa" => "john kiffmeyer"],
            ["namasiswa" => "mike drynt"]],

            "datasiwa" => [
            ["datasiwa" => "
            1.NIM :777<br> 
            2.NAMA : Bhilie joe amstrong<br> 
            3.UMUR : 21<br> 
            4.EMAIL :Bhilieamstrong@gmail.com<br>  "],
            ["datasiwa" => "
            1.NIM :111<br> 
            2.NAMA : Tre cool<br> 
            3.UMUR : 22<br> 
            4.EMAIL :Trecool@gmail.com<br>  "],
            ["datasiwa" => "
            1.NIM :222<br> 
            2.NAMA : raj pujanbi<br> 
            3.UMUR : 25<br> 
            4.EMAIL :rajpujambi@gmail.com<br>"],
            ["datasiwa" => "
            1.NIM :666<br> 
            2.NAMA : john kiffmeyer<br> 
            3.UMUR : 26<br> 
            4.EMAIL :kiffmeyer@gmail.com<br>"],
            ["datasiwa" => "
            1.NIM :9090<br> 
            2.NAMA : mikedrynt<br> 
            3.UMUR : 30<br> 
            4.EMAIL :mikedryn@gmail.com<br>"]]],
            

           
        ]
        ],

        ["dosen" => "Muhammad Sabar", "submenu" => [
            [ "nama" => "M Alliyulalim",
            "namasiswa" => [
            ["namasiswa" => "Pierre Bouvier"],
            ["namasiswa" => "david desro siers"],
            ["namasiswa" => "chuck comeaou"],
            ["namasiswa" => "sebastian levebfre"],
            ["namasiswa" => "jeff stinco"]],

            "datasiwa" => [
                ["datasiwa" => "
                1.NIM :7474<br> 
                2.NAMA : Pierra Bouvier<br> 
                3.UMUR : 28<br> 
                4.EMAIL :Bouvier@gmail.com<br>  "],
                ["datasiwa" => "
                1.NIM :9090<br> 
                2.NAMA : david desro siers<br> 
                3.UMUR : 30<br> 
                4.EMAIL :Daviddessi@gmail.com<br>  "],
                ["datasiwa" => "
                1.NIM :8989<br> 
                2.NAMA : Chuck comeaous<br> 
                3.UMUR : 6666<br> 
                4.EMAIL :ChuckComeaous@gmail.com<br>"],
                ["datasiwa" => "
                1.NIM :2623<br> 
                2.NAMA : Sebasian levebfre<br> 
                3.UMUR : 23<br> 
                4.EMAIL :Sebastian@gmail.com<br>"],
                ["datasiwa" => "
                1.NIM :9090<br> 
                2.NAMA : mikedrynt<br> 
                3.UMUR : 30<br> 
                4.EMAIL :mikedryn@gmail.com<br>"]]],

           
        ]
        ],
        ["dosen" => "Tarsina Sumarni", "submenu" => [
            [ "nama" => "M Alliyulalim",
            "namasiswa" => [
            ["namasiswa" => "liam gallagher"],
            ["namasiswa" => "noel gallagher"],
            ["namasiswa" => "gem archer"],
            ["namasiswa" => "alan white"],
            ["namasiswa" => "scoutMcleod"]],

            "datasiwa" => [
            ["datasiwa" => "Futsal"],
            ["datasiwa" => "Bermain"]]],
        ]
        ],
        ["dosen" => "Saepudin", "submenu" => [
            [ "nama" => "M Alliyulalim",
            "namasiswa" => [
            ["namasiswa" => "John lennon"],
            ["namasiswa" => "Pete best"],
            ["namasiswa" => "Norman chapman"],
            ["namasiswa" => "KurtCobain1"],
            ["namasiswa" => "Taylor York"]],

            "datasiwa" => [
            ["datasiwa" => "Futsal"],
            ["datasiwa" => "Bermain"]]],
        ]
        ],
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    </head>
    <body>
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Dosen</th>
            <th>Nama Siswa</th>
            <th>Data Siswa</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['namasiswa'] as $sub) {
                ?>   <li><?php echo  $sub['namasiswa'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['datasiwa'] as $hobi) {
                    echo "<li>". $hobi['datasiwa']. "</li>";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>
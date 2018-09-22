<?php
    $bio = array(
        'name' => 'Oktaviano',
        'address' => 'Poris gaga baru RT:03 Rw:02',
        'hobbies' => ['bersepeda', 'menggambar', 'koding'],
        'is_maried' => false,
        'schools' => (object) array(
            'school' => 'SMK Bhakti Mulya',
            'University' => 'Not Yet'
        ),
        'skills' => array('C#', 'JAVA', 'ionic', 'php', 'html', 'css', 'javascript')
    );

    $stringjson = json_encode($bio);
    $printJson = json_decode($stringjson);

    echo json_encode($printJson, JSON_PRETTY_PRINT);
?>
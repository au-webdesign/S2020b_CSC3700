<?php
    $data = [];
    $data[] = [ 'Name' => 'Aragorn', 'Race' => 'Human', ];
    $data[] = [ 'Name' => 'Gimli', 'Race' => 'Dwarf', ];
    $data[] = [ 'Name' => 'Legolos', 'Race' => 'Elf', ];
    echo json_encode( $data );

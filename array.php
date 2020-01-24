<?php
        session_start();
        $_SESSION['barang'] = isset($_SESSION['barang']) ? $_SESSION['barang'] : [];
        
    $barang  = [

                1 => [ 
                        
                        'nama'  => 'Axcel RX 1',
                        'harga' => 7000000,
                        'img'   => 'VisorAxcelXPRecur.jpg',      
                ],

                2 => [  
                        
                        'nama'  => 'Fingertab Axcel Contour',
                        'harga' => 3000000,
                        'img'   => 'Fingertab1.jpg'  
                ],
                        
        
                3 => [  
                        
                        'nama'  => 'Stabilizer Shrewd',
                        'harga' => 9000000,  
                        'img'   => 'stabilizer1.jpg',
                        
                ],

                4 => [  
                        
                        'nama'  => 'Riser Hoyt Formula XI',
                        'harga' => 14000000,  
                        'img'   => 'BEE1.jpg',
                ],

                5 => [

                        'nama'  => 'Limbs Hoyt Veloz',
                        'harga' =>  12000000,  
                        'img'   => 'b.jpg',

                ],
                6 => [

                        'nama'  => 'Riser Xceed Hoyt',
                        'harga' => 12000000,  
                        'img'   => 'xceed.jpeg',


                ]







        ];

?>
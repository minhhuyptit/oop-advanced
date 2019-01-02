<?php

    // Lấy ra những số có phần tử > 5
    $input = array(1,2,3,4,5,6,7,8,9);
    // Cách 1
    // $output = array();
    // foreach($input as $value){
    //     if($value > 5){
    //         $output[] = $value;
    //     }
    // }


    // Cách 2  Cách làm này thì hàm này sẽ được định nghĩa trong khi chỉ sử dụng hàm này duy nhất 1 lần
    // function compare($value){
    //     return ($value > 5);
    // }
    // @$output = array_filter($input, compare);


    // Cách 3  Cách làm này thì hàm này sẽ chỉ sử dụng hàm này duy nhất 1 lần
    // $compare = function ($value){
    //                 return ($value > 5);
    //             };
    // $output = array_filter($input, $compare);


    //Cách 4 Thường sử dụng nhất vì ngắn gọn
    // $output = array_filter($input, function($value){
    //                                  return ($value > 5);                   
    //                             });


    //Cách 5 Thường sử dụng nhất vì ngắn gọn nhưng bây giờ muốn tùy biến giá trị
    $compare = function ($max){
                    return function($value) use ($max){
                        return ($value > $max);
                    };
                };
    $output = array_filter($input, $compare(3));                       
                                
    echo "<pre>";
    print_r($output);
    echo "</pre>";

?>
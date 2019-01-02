<?php
    $images = glob('data/125-*');     
    usort($images, function($a, $b){
        return filemtime($a) - filemtime($b);
    });

    $xhtml = '<h3>Không có dữ liệu</h3>';
    if(!empty($images)){
        $xhtml = '';
        foreach($images as $value){
            $xhtml .= '<div class="col-md-2">
                            <div class="thumbnail">
                                <img src="'.$value.'" />
                                <div class="caption">
                                    <a href="#" class="label label-success" data-toggle="modal" data-target="#myModal" onclick="javascript:showImage(\''.$value.'\')">View</a> 
                                    <a href="#" class="label label-success" role="button" onclick="javascript:deleteImage(\''.$value.'\')">Delete</a>
                                </div>
                            </div>
                        </div>';
        }
        echo $xhtml;
    }
?>
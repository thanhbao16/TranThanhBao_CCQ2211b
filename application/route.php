<?php
namespace Src;
class route 
{
    public static function route_size()
    {
        $pathview ="views/frontend/";
        if(isset($_REQUEST['option'])){
            $pathview.= $_REQUEST['option'];
            if(isset($_REQUEST['slug'])){
                $pathview.="-detail.php";
            }else{
                if(isset($_REQUEST['cat'])){
                    $pathview.="_category.php";
                }else{
                    $pathview.=  ".php";
                }
            }

        }else{
            $pathview.="home.php";
        }
        require_once $pathview;
    }
}
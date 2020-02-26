<?php

   if(!isset($_SESSION)){
    session_start();
    }


    
    // 変数を作る。条件式を使ってすでに値が存在する際はリセットされないようにする。
    if(isset($_SESSION["Taro"]) === FALSE){
        $_SESSION["Taro"] = 0;
    }

    if(isset($_SESSION["Jiro"]) === FALSE){
        $_SESSION["Jiro"] = 0;
    }

    if(isset($_POST["num"]) === TRUE){
        if($_POST["num"] === "1"){
            $numofTaro = rand(0,5);
            $_SESSION["Taro"] += $numofTaro;
            $_SESSION["num"] = $numofTaro;
        }else if($_POST["num"] === "2"){
            $numofJiro = rand(0,5);
            $_SESSION["Jiro"] += $numofJiro;
            $_SESSION["num"] = $numofJiro;
        }

    
        if(isset($_SESSION["Taro"])){
            $scoreofTaro = $_SESSION["Taro"];
            if($scoreofTaro >= 10){
                require_once("mvcrezult.php");
                return;
            }
        }

        if(isset($_SESSION["Jiro"])){
            $scoreofJiro = $_SESSION["Jiro"];
            if($scoreofJiro >= 10){
                require_once("mvcrezult.php");
                return;
            }
        }        
        
        // 最後に書くことによって、10点以上になった際もinput画面にページ遷移しないようにする。
        if(count($_SESSION) !== 0 ){
            require_once("mvcscore.php");
            return;
        }else{
            require_once("mvcinput.php");
            return;
        }
        
    }else{
        // 赤文字で注意喚起する
        echo '<FONT COLOR="RED"> サイコロを選択してください。 </FONT>';
        require_once("mvcinput.php");
    }



   
?>

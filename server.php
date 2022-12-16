<?php
    function shuffle_assoc($arr)
    {
        $keys = array_keys($arr);
        shuffle($keys);
        foreach($keys as $key) {
            $new[$key] = $arr[$key];
        }
        $arr = $new;
        return $arr;
    }
    function sortarray($car,$argum)
    {
        ($argum == "DES") ? rsort($fruit) : sort($fruit);
        echo "<pre>";
        print_r($fruit);

    }
    $argu = "DES";
    $fruit = array("Banana", "Apple", "Grapes","Melon", "Watermelon");
    sortarray($fruit,$argu);
    $first_radio = "First radio";
    $second_radio = "Second radio";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $radio = $_POST['radio'];
    if(isset($email) && isset($password) && isset($_POST['checkbox']))
    echo true."    Result is true  ";
    else
    echo false."   Result is False  ";
    if($radio==$first_radio)
    {
       
        $my_array = range(1,100);
        echo " Before Shuffle";
        echo "<pre>";
        shuffle($my_array);
        print_r($my_array);
        echo "After Shuffle";
        sort($my_array);
        echo "<pre>";
        print_r($my_array);
    }
    if($radio==$second_radio)
    {
        $arr = array();
        $val = 100;
        for ($index=0; $index<$val; $index++)
        {
            $arr[$index] = mt_rand();
        }
        echo "<pre>";
        print_r($arr);
        echo "Keys --> "; 
        foreach ($arr as $key => $array) 
        {
            echo $key." ";
        }
        print_r(shuffle_assoc($arr));
      
    }
    
?>
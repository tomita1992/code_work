<?php
    global $wpdb; 
    $i = 1;
    $id = 'test1';
    $payment = 0;
    $date = '2020年6月20日';
    
   /* $sql = $wpdb->prepare("INSERT INTO $wpdb->user_payment(user_id, user_payment, user_date) VALUES(%s, %d, %s)", $id, $payment, $date);
    $wpdb->query($sql); */
    
    $get_data = $wpdb->get_results("SELECT user_id, user_payment FROM $wpdb->user_payment");

    foreach($get_data as $data)
    {
        $id = $data->user_id;
        $payment = $data->user_payment;
        echo $id.'  '.$payment.'<br>';
    }

    /*
    $get_data = $wpdb->query("SELECT * FROM $wpdb->user_payment");
    while($value = $get_data->fetch())
    {
        echo $i."行目取り出した"."<br>";
        echo $value['user_id'].'  '.$value['user_payment']. '  '.$value['user_date'].'<br>';
        $i++;
    }*/

?>
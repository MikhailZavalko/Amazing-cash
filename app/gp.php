<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


$name = 'Alexandr';
$email = '@yandex.ru'; 

// $myCurl = curl_init();
// $isCurlSuccess = curl_setopt_array($myCurl, array(
//     CURLOPT_URL => 'https://app.getresponse.com/add_subscriber.html',
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_POST => true,
//     CURLOPT_POSTFIELDS => http_build_query(array(
//     	"email" => $email,
//     	"name" => $name,
//     	"start_day" => "0",
//     	"campaign_token" => "nAwze"
//     ))
// ));
// $response = curl_exec($myCurl);
// curl_close($myCurl);

echo '<pre>';
if (function_exists('curl_init')) {
echo 'Работает';
} else {
echo 'Не работает';
}

echo $email;
echo $name;
echo '</pre>';  
// echo "Ответ на Ваш запрос: ".$response;

//phpinfo();
?>

<form action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post"> 
<!— Поле Email (обязательно) —> 
email: <input type="text" name="email"/><br/> 
<!— Токен списка —> 
<!— Получить API ID на: https://app.getresponse.com/campaign_list.html —> 
<input type="hidden" name="campaign_token" value="nAwze" /> 
<!— Добавить подписчика в цикл на определенный день (по желанию) —> 
<input type="hidden" name="start_day" value="0" /> 
<!— Кнопка подписаться —> 
<input type="submit" value="Оставить заявку"/> 
</form>
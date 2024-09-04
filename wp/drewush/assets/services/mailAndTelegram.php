<?php
//
///* AJAX check  */
////if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
//
//$to = "tatiana@globalmedik.com";
//$from = 'no-reply@globalmedik.com';
//$subject = 'Форма с сайта';
//$message = '';
//$input = json_decode(file_get_contents("php://input"), true);
//
//$fields = [
//    'title' => '<b>Страница:</b>',
//    'name' => '<b>Имя:</b>',
//    'phone' => '<b>Телефон:</b>',
//    'email' => '<b>Email:</b>',
//    'services' => '<b>Услуга:</b>',
//    'comment' => '<b>Сообщение:</b>',
//    'link' => '<b>Ссылка на страницу:</b>',
//];
//
//
//foreach ($fields as $inputKey => $fieldLabel) {
//    if (isset($input[$inputKey]) && !empty($input[$inputKey])) {
////        $value = $input[$inputKey];
//        $value = strip_tags($input[$inputKey]);
//
//        $message .= "{$fieldLabel} {$value}" . " \n";
//    }
//}
//if ($input['quiz']) {
//    foreach ($input['quiz'] as $quiz) {
//        $message .= "_______________________________ \n\n";
//        $message .= "<b>Вопрос:</b> {$quiz['question']}" . " \n";
//        $message .= "<b>Ответ:</b> {$quiz['answer']}" . " \n";
//
//    }
////    $message .= "Вопрос: {$input['quiz']}" . " \n";
//}
//
//
//$headers = "From:" . $from;
//mail($to, $subject, $message, $headers);
////    var_dump();
//
//$token = '6918703619:AAEdXT8XkU9accNs6Bfx53q76PYnSIrURnc';
//$chat = '-1002026761272';
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot' . $token . '/sendMessage?chat_id=' . $chat . '&parse_mode=html&text=' . urlencode($message));
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$result = curl_exec($ch);
////}
//
////?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "info@mersinwellness.com"; // email
    $subject = "Новая заявка Mersin Healing";

    $message = "
Имя: {$_POST['name']}
Возраст: {$_POST['age']}
Проблемы: " . implode(", ", (array)$_POST['problems']) . "
Комментарий: {$_POST['problem_notes']}

Вес: {$_POST['weight']}
Рост: {$_POST['height']}
Талия: {$_POST['waist']}

Проживание: {$_POST['accommodation']}
Способ связи: {$_POST['contact_method']}
Контакты: {$_POST['contact_details']}

Время на восстановление: {$_POST['healing_time']}
Даты: {$_POST['arrival_date']} — {$_POST['departure_date']}
";

    $headers = "From: no-reply@mersinwellness.com\r\n";

    mail($to, $subject, $message, $headers);

    echo "OK";
}

?>

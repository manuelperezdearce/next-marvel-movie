<?php

$data = get_data(API_URL);
$message = get_until_message($data["days_until"]);

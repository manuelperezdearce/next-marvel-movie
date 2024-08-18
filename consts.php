<?php

$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]);

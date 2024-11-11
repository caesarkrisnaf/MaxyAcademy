<?php
function _retriever($url, $data = null, $headers = null, $method = "GET")
{
    $cookie_file_temp = dirname(__FILE__) . '/cookie/farmrpg.txt';
    $datas['http_code'] = 0;

    // Check if URL is empty
    if ($url == "") {
        return $datas;
    }

    // Prepare data for POST or GET
    $data_string = "";
    if ($data != null) {
        foreach ($data as $key => $value) {
            $data_string .= $key . '=' . urlencode($value) . '&';
        }
        $data_string = rtrim($data_string, '&');
    }

    // Initialize cURL
    $ch = curl_init();

    // Set request method
    if (strtoupper($method) == "POST") {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    } else if (strtoupper($method) == "GET" && $data != null) {
        $url = $url . '?' . $data_string;
    }

    // Set headers if provided
    if ($headers != null) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    // Set other cURL options
    curl_setopt($ch, CURLOPT_HEADER, false); // Exclude the header in the output
    curl_setopt($ch, CURLOPT_NOBODY, false); // Include the body in the output
    curl_setopt($ch, CURLOPT_URL, $url); // Set the URL to fetch
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // Ignore host SSL verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Ignore peer SSL verification
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return output as string
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow any "Location: " header
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_temp); // Save cookies
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_temp); // Send cookies

    if($data != null){
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POST, count($data));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    }

    // Execute cURL request
    $response = curl_exec($ch);
    $datas['http_code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Get HTTP response code
    $datas['content'] = $response; // Get response content

    // Check for cURL errors
    if (curl_errno($ch)) {
        $datas['error'] = curl_error($ch);
    }

    // Close cURL session
    curl_close($ch);

    return $datas;
}

function plantAll() {
  $header = [
      "origin: https://farmrpg.com",
      "priority: u=1, i",
      "referer: https://farmrpg.com/index.php"
  ];
  
  $html = _retriever("https://farmrpg.com/worker.php?go=plantall&id=713330", null, $header, "POST");
  return $html;
}

function harvestAll() {
  $header = [
      "origin: https://farmrpg.com",
      "priority: u=1, i",
      "referer: https://farmrpg.com/index.php"
  ];

  $html = _retriever("https://farmrpg.com/worker.php?id=713330&go=harvestall", null, $header, "POST");
  return $html;
}

function buySeed() {
  $header = [
      "origin: https://farmrpg.com",
      "priority: u=1, i",
      "referer: https://farmrpg.com/index.php"
  ];
  
  $html = _retriever("https://farmrpg.com/worker.php?go=buyitem&id=12&qty=8", null, $header, "POST");

  return $html;
}

function sellCrops() {
  $header = [
      "origin: https://farmrpg.com",
      "priority: u=1, i",
      "referer: https://farmrpg.com/index.php"
  ];
  
  $html = _retriever("https://farmrpg.com/worker.php?go=sellitem&id=11&qty=8", null, $header, "POST");
  return $html;
}

function auto() {
    $data = array();
    $data['harvest'] = harvestAll();
    $data['sell'] = sellCrops();
    $data['buy'] = buySeed();
    $data['plant'] = plantAll();

    return json_encode($data);
}

$result = auto();
print_r($result);
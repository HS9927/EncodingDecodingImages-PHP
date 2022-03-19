<?php

/// TODO: Encrypt File/Image
echo "<h3>Eecrypt</h3>";

/// TODO: Get Content of File
$img = file_get_contents("../assets/images/js.jpg");

/// TODO: Encrypt Image without Original Filename
///
/// TODO: Convert to Encode
$data_encode = base64_encode($img);


/// TODO: Encrypt File/Image with Original Filename
///
/// TODO: Get Original File Name
$filename = basename("../assets/images/js.jpg");

/// TODO: Convert to Encode with File Name
$data_encode_with_original_filename = $filename . "@@" . base64_encode($img);

/// TODO: Result

/// TODO: Show Image with base64_encode Data
echo "<h5>Show Image with base64_encode Data</h5>" . "<img src='data:image/png;base64, " . $data_encode . "' width='50px' >";

/// TODO: Show Encode without Original Filename
echo "<h5>Data Encode without Original Filename</h5>" . $data_encode . "<br>";

/// TODO: Show Encode with Original Filename
echo "<h5>Data Encode with Original Filename</h5>" . $data_encode_with_original_filename . "<br>";

echo "<hr><br>-------------<br><hr>";

/// TODO: Decrypt Images
echo "<h3>Decrypt</h3>";

/// TODO: Convert Encode to Decode
$data_decode = base64_decode($data_encode);

/// TODO: Generate New Name
/// TODO: Put Content to File
$img_decode = file_put_contents("../assets/images/temp/testing.png", $data_decode);

echo "<h5>Show Images with New Name</h5>";
echo "<img src='../assets/images/temp/testing.png' width='100px'/>";

/// TODO: Get Original File Name and Put Content to it
/// TODO: Get Origin File Name from Decoding
$split_data_encode = explode("@@", $data_encode_with_original_filename);

/// TODO: Get Original File Name and Data Encode
$filename = $split_data_encode[0];
$data_encode_with_original_filename = $split_data_encode[1];

/// TODO: Convert Encode to Decode with File Name
$data_decode_with_original_filename = base64_decode($data_encode_with_original_filename);

/// TODO: Put Content to File with Original File Name
$img_decode_with_original_filename = file_put_contents("../assets/images/img-encrypted/" . $filename, $data_decode_with_original_filename);


echo "<h5>Show Images with Original Name</h5>";
echo "<img src='../assets/images/img-encrypted/{$filename}' width='100px'/>";
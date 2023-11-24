
//to do 
 *serialize a large data structure
 *compress the data
 *save it to a file 
 *unserialize the data 
 *decompress the data from the file 
 * 
<?php

// Create a large data structure
$data = [
    "name" => "Patrick Ongeche",
    "age" => 27,
    "occupation" => "Software Engineer",
    "skills" => [
        "Coding",
        "inventing",
        "something else"
    ],
    "address" => [
        "street" => "Magadi road",
        "city" => "Nairobi",
        "zip" => "77777"
    ]
];

// this code is used to serialize the data structure
$serializedData = serialize($data);

// this line of code is used toCompress the serialized data
$compressedData = gzcompress($serializedData);

// this saves the compressed data to a file
file_put_contents('data.txt', $compressedData);

// this reads the compressed data from the file
$compressedData = file_get_contents('data.txt');

// this line of code decompresses the data
$decompressedData = gzuncompress($compressedData);

// this is for the code to unserialize the data
$unserializedData = unserialize($decompressedData);

// Print the original and unserialized data
print_r($data);
print_r($unserializedData);

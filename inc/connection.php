<?php
try {
    $db = new PDO ("mysql:host=localhost;dbname=mairak_class;port=3306","mairak_root", "!Deree2021#"  );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "Connection successful";
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

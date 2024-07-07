<?php

$config = require 'config.php';

// MySQL veritabanı bağlantı bilgileri
$mysqli = new mysqli(
    $config['mysql']['host'],
    $config['mysql']['user'],
    $config['mysql']['password'],
    $config['mysql']['database']
);

// MySQL bağlantı hatası kontrolü
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Redis bağlantısı
$redis = new Redis();
$redis->connect($config['redis']['host'], $config['redis']['port']);
$redis->auth($config['redis']['password']); // Redis parolası

// Belirli bir Redis veritabanını seç
$redis->select($config['redis']['database']); // Redis veritabanı numarası

// Loglama fonksiyonu
function log_message($message) {
    echo $message . "\n";
}

// Redis veritabanını temizle
$redis->flushDB(); // Bu tüm Redis veritabanını siler gerek duymazsanız silebilirsiniz
log_message("Redis veritabanı temizlendi.");

// MySQL veritabanındaki tüm tabloları çek
$tables = $mysqli->query("SHOW TABLES");
$tableCount = 0;

while ($table = $tables->fetch_array()) {
    
    $tableCount++;
    
    $tableName = $table[0];
    
    log_message("Tablo işleniyor: $tableName");

    // Tablo için birincil anahtar sütununu bul
    $primaryKeyResult = $mysqli->query("SHOW KEYS FROM $tableName WHERE Key_name = 'PRIMARY'");
    
    if ($primaryKeyResult->num_rows > 0) {
        
        $primaryKeyRow = $primaryKeyResult->fetch_assoc();
        $primaryKey = $primaryKeyRow['Column_name'];

        // Tüm satırları çek
        $result = $mysqli->query("SELECT * FROM $tableName");
        $rowCount = 0;
        
        // Her satırı Redis'e kaydet
        while ($row = $result->fetch_assoc()) {
            
            $rowCount++;
            
            // Anahtarın boş olup olmadığını kontrol et
            if (isset($row[$primaryKey]) && $row[$primaryKey] != '') {
                
                // Her satırı JSON olarak kaydet
                $redis->set("$tableName:" . $row[$primaryKey], json_encode($row));
                
            } else {
                
                log_message("Boş veya geçersiz birincil anahtar değeri: $tableName satır $rowCount");
                
            }
            
        }
        
        log_message("$tableName tablosundan $rowCount satır Redis'e yüklendi.");
        
    } else {
        
        log_message("Tablo $tableName için birincil anahtar bulunamadı.");
        
    }
    
}

log_message("Toplam işlenen tablo sayısı: $tableCount");
echo "Veriler Redis'e yüklendi!";

?>

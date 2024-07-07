# MySQL-To-Redis-PHP

Bu proje, MySQL veritabanındaki tablo ve verileri Redis veritabanına aktaran bir PHP scripti içerir. Bu script, MySQL'den veri çekip Redis'e yazmanızı sağlar.

<img src="https://github.com/enesbabekoglu/MySQL-To-Redis-PHP/assets/92182480/5e2271b4-c616-4873-8972-acf754fafe08" alt="Example Image" width="110"/> &nbsp; 
<img src="https://github.com/enesbabekoglu/MySQL-To-Redis-PHP/assets/92182480/11761557-19d3-4c46-bb27-436eadbd17ec" alt="Example Image" width="140"/> &nbsp; 
<img src="https://github.com/enesbabekoglu/MySQL-To-Redis-PHP/assets/92182480/64146c35-8582-4def-a0bb-8dc46ede32a8" alt="Example Image" width="110"/> &nbsp; 

## Gereksinimler

Aşağıdaki yazılımların sisteminizde kurulu olması gerekmektedir:

- PHP 7.x veya üstü
- MySQL 5.x veya üstü
- Redis 5.x veya üstü

## Kurulum

#### 1. Bu projeyi klonlayın:

   ```git clone https://github.com/enesbabekoglu/MySQL-To-Redis-PHP.git```
   
   ```cd MySQL-To-Redis-PHP```

#### 2. config.php Dosyasını açın ve veritabanı bilgilerini güncelleyin.

#### 3. Projeyi çalıştırın:

  ```php transfer.php```

## Öneriler

Eğer MySQL tablonuzda belirli aralıklarla güncellenen veriler bulunuyorsa ve belirli aralıklarla bu güncel verileri Redis veritabanınıza aktarmak istiyorsanız bir Cronjob olayı ile bu projeyi düzenli olarak çalıştırabilirsiniz. İşte adım adım yapacaklarınız:

#### 1. SSH Sunucusuna Bağlanın

#### 2. Cronjob dosyasını düzenlemek için aşağıdaki komutu çalıştırın:

  ```crontab -e```

#### 3. Cronjob dosyasına aşağıdaki satırı ekleyin:

  ```*/30 * * * * /usr/bin/php /path/to/your/script/transfer.php```

  **Yukarıdaki cronjob satırı, her 30 dakikada bir transfer.php dosyasını çalıştıracaktır.**

  ```*/30 * * * *``` : Bu kısım cronjob'un zamanlama kısmıdır. */30 ifadesi her 30 dakikada bir çalıştırılacağını belirtir.
  
  ```/usr/bin/php``` : PHP çalıştırıcısının tam yoludur. Eğer PHP'nin yeri farklıysa, doğru yolu kullanmalısınız.
  
  ```/path/to/your/script/transfer.php``` : transfer.php dosyasının tam yoludur. Bu yolu kendi dosya konumunuza göre ayarlamalısınız.

#### Örnek
Eğer transfer.php dosyanız ```/var/www/html``` dizininde ise ve PHP çalıştırıcınız ```/usr/bin/php``` konumunda ise, cronjob satırınız şu şekilde olacaktır:

```*/30 * * * * /usr/bin/php /var/www/html/transfer.php```

#### Son İşlemler

  Bu satırı crontab dosyasına ekledikten sonra, değişiklikleri kaydedin ve çıkın. Artık transfer.php dosyanız her 30 dakikada bir otomatik olarak çalıştırılacaktır.
  
  Cronjob'un doğru şekilde ayarlandığını kontrol etmek için aşağıdaki komutu kullanarak mevcut cronjob'ları listeleyebilirsiniz:
  
  ```crontab -l```

## Lisans
Bu proje MIT Lisansı ile lisanslanmıştır. Daha fazla bilgi için LICENSE dosyasına bakabilirsiniz.

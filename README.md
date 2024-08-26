# EN - MySQL-To-Redis-PHP

This project includes a PHP script that transfers tables and data from a MySQL database to a Redis database. This script allows you to fetch data from MySQL and write it to Redis. 🛠️

<img src="https://github.com/enesbabekoglu/MySQL-To-Redis-PHP/assets/92182480/5e2271b4-c616-4873-8972-acf754fafe08" alt="Example Image" width="110"/> &nbsp; 
<img src="https://github.com/enesbabekoglu/MySQL-To-Redis-PHP/assets/92182480/11761557-19d3-4c46-bb27-436eadbd17ec" alt="Example Image" width="140"/> &nbsp; 
<img src="https://github.com/enesbabekoglu/MySQL-To-Redis-PHP/assets/92182480/64146c35-8582-4def-a0bb-8dc46ede32a8" alt="Example Image" width="110"/> &nbsp; 

## Requirements 📋

Ensure that the following software is installed on your system:

- PHP 7.x or higher 🐘
- MySQL 5.x or higher 🗄️
- Redis 5.x or higher 🔄

## Installation 🚀

### 1. Clone the repository:

   ```bash
   git clone https://github.com/enesbabekoglu/MySQL-To-Redis-PHP.git
   cd MySQL-To-Redis-PHP
   ```

### 2. Open the `config.php` file and update the database information. 🔧

### 3. Run the project:

   ```bash
   php transfer.php
   ```

## Recommendations 💡

If your MySQL table contains data that is updated periodically and you want to transfer these updates to your Redis database at regular intervals, you can set up a **cron job** to automate this process. Here’s how to do it step by step:

### 1. Connect to your server via SSH 🌐

### 2. Edit the cron job configuration by running the following command:

   ```bash
   crontab -e
   ```

### 3. Add the following line to the cron job file:

   ```bash
   */30 * * * * /usr/bin/php /path/to/your/script/transfer.php
   ```

   **This cron job will run the `transfer.php` script every 30 minutes.**

   - `*/30 * * * *`: Specifies that it should run every 30 minutes. ⏰
   - `/usr/bin/php`: The full path to the PHP executable. Adjust this path if PHP is located elsewhere on your system. 📍
   - `/path/to/your/script/transfer.php`: The full path to your `transfer.php` script. Update this to match the actual location of your script. 📂

### Example 🌟

If your `transfer.php` file is located in the `/var/www/html` directory and your PHP executable is at `/usr/bin/php`, the cron job line would be:

```bash
*/30 * * * * /usr/bin/php /var/www/html/transfer.php
```

### Final Steps ✔️

After adding this line to your crontab file, save the changes and exit. The `transfer.php` script will now run automatically every 30 minutes.

To verify that the cron job has been set up correctly, you can list the current cron jobs with the following command:

```bash
crontab -l
```

## License 📄

This project is licensed under the MIT License. For more details, please refer to the LICENSE file.

# TR - MySQL-To-Redis-PHP

Bu proje, MySQL veritabanındaki tablo ve verileri Redis veritabanına aktaran bir PHP scripti içerir. Bu script, MySQL'den veri çekip Redis'e yazmanızı sağlar. 🛠️

<img src="https://github.com/enesbabekoglu/MySQL-To-Redis-PHP/assets/92182480/5e2271b4-c616-4873-8972-acf754fafe08" alt="Example Image" width="110"/> &nbsp; 
<img src="https://github.com/enesbabekoglu/MySQL-To-Redis-PHP/assets/92182480/11761557-19d3-4c46-bb27-436eadbd17ec" alt="Example Image" width="140"/> &nbsp; 
<img src="https://github.com/enesbabekoglu/MySQL-To-Redis-PHP/assets/92182480/64146c35-8582-4def-a0bb-8dc46ede32a8" alt="Example Image" width="110"/> &nbsp; 

## Gereksinimler 📋

Aşağıdaki yazılımların sisteminizde kurulu olması gerekmektedir:

- PHP 7.x veya üstü 🐘
- MySQL 5.x veya üstü 🗄️
- Redis 5.x veya üstü 🔄

## Kurulum 🚀

### 1. Bu projeyi klonlayın:

   ```bash
   git clone https://github.com/enesbabekoglu/MySQL-To-Redis-PHP.git
   cd MySQL-To-Redis-PHP
   ```

### 2. `config.php` Dosyasını açın ve veritabanı bilgilerini güncelleyin. 🔧

### 3. Projeyi çalıştırın:

   ```bash
   php transfer.php
   ```

## Öneriler 💡

Eğer MySQL tablonuzda belirli aralıklarla güncellenen veriler bulunuyorsa ve bu güncel verileri Redis veritabanınıza düzenli aralıklarla aktarmak istiyorsanız, bir **cronjob** ayarlayarak bu işlemi otomatikleştirebilirsiniz. İşte adım adım yapacaklarınız:

### 1. SSH Sunucusuna Bağlanın 🌐

### 2. Cronjob dosyasını düzenlemek için aşağıdaki komutu çalıştırın:

   ```bash
   crontab -e
   ```

### 3. Cronjob dosyasına aşağıdaki satırı ekleyin:

   ```bash
   */30 * * * * /usr/bin/php /path/to/your/script/transfer.php
   ```

   **Bu cronjob, `transfer.php` dosyasını her 30 dakikada bir çalıştıracaktır.**

   - `*/30 * * * *`: Her 30 dakikada bir çalıştırılacağını belirtir. ⏰
   - `/usr/bin/php`: PHP çalıştırıcısının tam yoludur. PHP'nin yeri farklıysa, doğru yolu kullanmalısınız. 📍
   - `/path/to/your/script/transfer.php`: `transfer.php` dosyasının tam yoludur. Bu yolu kendi dosya konumunuza göre ayarlamalısınız. 📂

### Örnek 🌟

Eğer `transfer.php` dosyanız `/var/www/html` dizininde bulunuyorsa ve PHP çalıştırıcınız `/usr/bin/php` konumundaysa, cronjob satırınız şu şekilde olacaktır:

```bash
*/30 * * * * /usr/bin/php /var/www/html/transfer.php
```

### Son İşlemler ✔️

Bu satırı crontab dosyasına ekledikten sonra, değişiklikleri kaydedin ve çıkın. Artık `transfer.php` dosyanız her 30 dakikada bir otomatik olarak çalıştırılacaktır.

Cronjob'un doğru şekilde ayarlandığını kontrol etmek için mevcut cronjob'ları listelemek adına şu komutu kullanabilirsiniz:

```bash
crontab -l
```

## Lisans 📄

Bu proje MIT Lisansı ile lisanslanmıştır. Daha fazla bilgi için LICENSE dosyasına bakabilirsiniz.

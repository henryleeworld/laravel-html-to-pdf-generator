# Laravel 7 HTML 轉 PDF 產生器

引入 barryvdh 的 laravel-snappy 套件來擴增實作藉由命令列工具 wkhtmltopdf （需要安裝在伺服器上）將 HTML 轉換為 PDF 檔案。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 安裝 wkhtmltopdf，採用 Webkit 核心，產生的 PDF 挺逼近實際網頁。
  - 從[這裡](http://wkhtmltopdf.org/downloads.html)下載 wkhtmltopdf。 
  - 或是安裝成外部工具庫，請參考[視為依賴關係](https://github.com/KnpLabs/snappy#wkhtmltopdf-binary-as-composer-dependencies)以取得更多資訊。
- 在 config/snappy.php 設定依賴軟體 wkhtmltopdf 的路徑。
```php
'binary' => base_path('vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64'),
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/generate-pdf` 來產生 PDF。

----

## 畫面截圖
![](https://i.imgur.com/kuocbXM.png)
> 下載 PDF 後使用 Adobe Acrobat Reader 確認中文是否亂碼 

# Render PHP Pack (Vercel-benzeri otomatik domain + SSL)

Bu paket, PHP projenizi **Render** üzerinde Docker ile tek seferde çalıştırmanız için
hazır dosyalar içerir. Deploy sonrası Render otomatik olarak size `*.onrender.com`
bir alan adı ve **ücretsiz SSL** verir.

## İçerik
- `Dockerfile` — php:8.3-apache tabanlı imaj, mod_rewrite ve mysqli/pdo_mysql etkin.
- `apache-vhost.conf` — `.htaccess` dosyalarının çalışması için AllowOverride All.
- `render.yaml` — PHP web servisi + (opsiyonel) MariaDB private service tanımı.
- `.renderignore` — Build’a dahil edilmeyecek dosyalar.
- `.env.example` — Yerel geliştirme için örnek env.

> Not: Render **MySQL'i managed hizmet olarak sağlamaz**. İki seçeneğiniz var:
> 1) Aynı proje içinde **MariaDB private service** (bu dosyada hazır).
> 2) Dış bir MySQL (PlanetScale, Aiven, UpCloud, vb.).

## Hızlı Başlangıç (Sıfırdan)
1. Bu dosyaları PHP projenizin kök dizinine ekleyin (app dosyalarınızla aynı seviye).
2. Gerekirse `Dockerfile` içindeki `COPY . /var/www/html` satırı uygun docroot’a göre düzenleyin
   (ör. `public/` klasörü kullanıyorsanız build içeriğini o klasöre taşıyın veya COPY hedefini değiştirin).
3. Veritabanı kullanıyorsanız birini seçin:
   - **Dahili MariaDB**: `render.yaml` içindeki `private_service` bloğunu açık bırakın.
     `MYSQL_PASSWORD` ve `MYSQL_ROOT_PASSWORD` değerlerini Render Dashboard’dan girin.
     PHP app tarafında `DB_HOST` otomatik iç servisten gelir.
   - **Harici MySQL**: `private_service` bloğunu tamamen yorum satırı yapın veya silin.
     `DB_HOST/DB_*` değerlerini Render Dashboard’a yazın.
4. Projeyi GitHub/GitLab’a push edin.
5. Render → New + → **Blueprint** → repo’nuzu seçin → `render.yaml`’ı tanıtarak deploy edin.
6. Deploy bittiğinde Render size otomatik `https://<servis-ismi>.onrender.com` alan adını verir.

## .htaccess
Apache `AllowOverride All` aktif olduğundan kökteki `.htaccess` kurallarınız (ör. `RewriteRule ^ cark.php`)
çalışacaktır.

## PHP Uzantıları
`mysqli`, `pdo`, `pdo_mysql` öntanımlı kuruldu. Gerekirse `Dockerfile`’a ekleyin:
```Dockerfile
RUN docker-php-ext-install intl gd bcmath
```

## İpuçları
- **Özel domain** ekleyebilirsiniz (Render Dashboard → Custom Domains). SSL otomatik yenilenir.
- Logları Render Dashboard’dan görebilirsiniz.
- Cron gerekiyorsa `services:` altına `type: cron` ekleyin.

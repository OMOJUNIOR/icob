# icob
ICOB

Önce projenin bir klonunu yapın veya bir zip dosyası olarak indirin.  Bu proje için Laravel 9.1 ve PHP 8.1 kullandım.

!!Kurulumla ilgili herhangi bir hatayla karşılaşırsanız lütfen whatsapp aracılığıyla bana bildirin.!!

Profil akışı apı'sı için İnstagram strapper apı Kitaplığını kullandım.
link->

https://packagist.org/packages/raiym/instagram-php-scraper

Scrapper apı'sini laravel 9.1'e yüklerken bazı hatalar vardı ve PHP'nin ve Laravel'in en son sürümünde çalışması için aşağıdaki komut satırını kullanmam gerekiyordu.

composer require raiym/instagram-php-scraper phpfastcache/phpfastcache:"*"

Twitter tweet konum apı'sı için geliştirici hesabım henüz onaylanmadı, hala onay bekliyorum.

Cookies :
Kullanıcı çerezlerini depolamak için laravel Illuminate\Support\Facades\Response kullandım.

Proxy için, değeri App\Http\Instagram\FeedController'da bulunan proxy yöntemine sabit kodlayarak İnstagram apı proxy'nizi kullanabilirsiniz.

İnstagram sunucusuna apı çağrısı sırasında verileri önbelleğe almak için Filesystem Cache Adapter kullandım.


4 Soru Cevabı

Özel ağı atlamanın bir yolu, en azından ISP düzeyinde, bir VPN kullanmaktır, Bunun gibi durumlarda çevremdeki kısıtlı ağ trafiğine erişmek için çoğunlukla Nord VPN kullandım.

PHP yazılım dilinde, ağla ilgili bazı sorunların çözülmesine yardımcı olmak için yerleşik ağ işlevleri sağlar. Sorulan soruya benzer sorunları çözmek için bazı kod satırlarını kullanmam gereken bir  durumda karşılaşmadığım için, sorunuzun ilgili olduğu kesin durum hakkında bilgim yok şuan, ancak öğrenmeye açığım.


![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/Icob%202022-10-07%2009-47-30.jpg)


![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/Icob%202022-10-07%2009-44-52.jpg)

![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/Monosnap%202022-10-07%2010-07-26.jpg)

![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/Monosnap%202022-10-07%2011-32-33.jpg)


![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/Monosnap%202022-10-07%2011-32-50.jpg)

** açık instagram hesabı api sonuç **

![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/127.0.0.1:8001:profil-aksini%202022-10-07%2011-29-00.jpg)

** gizli instagram hesabı api sonuç **

![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/127.0.0.1:8001:profil-aksini%202022-10-07%2011-27-46.jpg)

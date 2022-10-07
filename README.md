# icob
ICOB

Önce projenin bir klonunu yapın veya bir zip dosyası olarak indirin. Laravel 9.1 ile bu proje ve PHP 8.1 kullandım.

!!Kurulumla ilgili herhangi bir hatayla karşılaşırsanız lütfen whatsapp aracılığıyla bana bildirin.!!

Profil akışı apı'sı için İnstagram strapper apı Kitaplığını kullanıdım.
link->

https://packagist.org/packages/raiym/instagram-php-scraper

Apı sürümünde laravel 8 * ^ ve PHP 8.1 üzerinde çalışabilmesi için bazı hatalar var.
Bu komutla kurulum yolunu twerk etmek zorunda kaldım :

composer require raiym/instagram-php-scraper phpfastcache/phpfastcache:"*"

Twitter tweet konum apı'sı için geliştirici hesabım henüz onaylanmadılar, hala onaylarını bekliyorum.

Cookies :
Kullanıcı çerezlerini depolamak için laravel Illuminate\Support\Facades\Response kullanıdım.

Proxy için, değeri App\Http\Instagram\FeedController'da bulunan proxy yöntemine sabit kodlayarak İnstagram apı proxy'nizi kullanabilirsiniz.

İnstagram sunucusuna apı çağrısı sırasında verileri önbelleğe almak için Filesystem Cache Adapter kullanıdım.

türkçem için özür dilerim :)




![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/Icob%202022-10-07%2009-47-30.jpg)


![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/Icob%202022-10-07%2009-44-52.jpg)

![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/Monosnap%202022-10-07%2010-07-26.jpg)

![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/Monosnap%202022-10-07%2011-32-33.jpg)


![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/Monosnap%202022-10-07%2011-32-50.jpg)

** açik instagram hesabı api sonuç **

![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/127.0.0.1:8001:profil-aksini%202022-10-07%2011-29-00.jpg)

** gizli instagram hesabı api sonuç **

![App Screenshot](https://github.com/OMOJUNIOR/icob/blob/main/screenshots/127.0.0.1:8001:profil-aksini%202022-10-07%2011-27-46.jpg)

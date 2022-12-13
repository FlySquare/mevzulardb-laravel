<?php

namespace Database\Seeders;

use App\Models\questions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ümit Özdağ
        questions::create([
            'questioner' => 'Dursun',
            'speaker_id' => '1',
            'question' => '20 yıldır değişmeyen seçim sürecinin mufalefete ve hükümete etkisi nedir? Hükümeti Tembelleştirir mi? Muhalefetin umutlarını kırar mı? Yada daha fazla çabalamasına mı sebep olur? Bu sürecin değişmesinde neler yapabilirsiniz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '127',
        ]);
        questions::create([
            'questioner' => 'İsmail',
            'speaker_id' => '1',
            'question' => 'Sığınmacı politikacınızdan başka hangi politikanız var?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '447',
        ]);
        questions::create([
            'questioner' => 'Yaşar Ak',
            'speaker_id' => '1',
            'question' => 'İyi Parti\'nin HDP ile Anaysa mutabakat görüntülerini yayınlayacak mısınız?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '758',
        ]);
        questions::create([
            'questioner' => 'Eda',
            'speaker_id' => '1',
            'question' => '"Suriyelilere ait gazino" diye attığınız Tweet\'i neden sildiniz? İyi Parti İstanbul Kongresi\'nde Buğra Kavuncu değil Ersin Beyaz kazanmış olsaydı Buğra Kavuncu\'ya karşı aynı tutumları sergiler miydiniz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '884',
        ]);
        questions::create([
            'questioner' => 'Elif Eda Güneş',
            'speaker_id' => '1',
            'question' => 'Sağlık çalışanlarının özlük haklarıyla alakalı ne yapacaksınız?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '1067',
        ]);
        questions::create([
            'questioner' => 'Samet',
            'speaker_id' => '1',
            'question' => 'İktidar olduğunuzda orman yangınları için nasıl önlemler alacaksınız? Yurt dışına kaçırılan tarihi eserler ne olacak? Yangınlar sonrasında dikilen oteller ve beşli çeteye ne gibi yaptırımlar uygulayacaksınız?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '1334',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '1',
            'question' => 'Yargının bağımsızlığını nasıl sağlayacaksınız?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '1743',
        ]);
        questions::create([
            'questioner' => 'Zeynep Çakır',
            'speaker_id' => '1',
            'question' => 'İfade özgürlüğüne neyi almıyorsunuz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '1906',
        ]);
        questions::create([
            'questioner' => 'Zeynep Çakır',
            'speaker_id' => '1',
            'question' => 'Sedat Peker hakkındaki düşünceleriniz neler? Anlattıklarına inanıyor musunuz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '1958',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '1',
            'question' => 'Bosna Hersek\'teki Türklere yapılan katliamlar için neler yapacaksınız?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '2314',
        ]);
        questions::create([
            'questioner' => 'Gülsüm',
            'speaker_id' => '1',
            'question' => 'İktidara geldiğinizde Çevre ve Su üzerine nasıl bir somut politika izliceksiniz? F35 ve S400 Konularını nasıl çözmeyi düşünüyorsunuz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '2448',
        ]);
        questions::create([
            'questioner' => 'Özlem Gürses',
            'speaker_id' => '1',
            'question' => 'Sedat Pekerin anlattıklarını biliyorum dediniz, bu bildikleriniz için ne yaptınız? Zafer Partisi\'nin kadro yapılanması var mı? Partiyi hangi kaynakla kurdunuz ve siyasi faaliyetlerinizi hangi kaynakla yönetiyorsunuz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '2786',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '1',
            'question' => 'F35 ve S400 İHA/SİHA ile ilgili neler yapacaksınız? Bir değişiklik olacak mı?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '3101',
        ]);
        questions::create([
            'questioner' => 'Haluk Tatar',
            'speaker_id' => '1',
            'question' => 'Siz Cumhurbaşkanı Adayı mısınız?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '3291',
        ]);
        questions::create([
            'questioner' => 'Yunus Emre',
            'speaker_id' => '1',
            'question' => 'Üniversitelerin durumu hakkında bir çalışmanız varmı?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '3401',
        ]);
        questions::create([
            'questioner' => 'Sinan Bakioğlu',
            'speaker_id' => '1',
            'question' => 'Ordudaki farklı cemaat yapılarını nasıl temizliceksiniz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '3514',
        ]);
        questions::create([
            'questioner' => 'Sinan Bakioğlu',
            'speaker_id' => '1',
            'question' => 'Neden üslüp olarak nefret dilini tercih ettiniz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '3644',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '1',
            'question' => 'Suriye\li Türkmenler hakkında ne düşünüyorsunuz? Onlar kalabilirler mi?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '3829',
        ]);
        questions::create([
            'questioner' => 'Salih Gergerlioğlu',
            'speaker_id' => '1',
            'question' => 'Meclis performansınızda önerge ve soru önergesi verme oranınızı neden düşük?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '4440',
        ]);
        questions::create([
            'questioner' => 'Abdurrahman Uzun',
            'speaker_id' => '1',
            'question' => 'Mustafa Varank\'ın iki yiğeninin göreve sayın Varank aracılığı ile getirildiğini söylediniz. Belgeniz varsa neden yargıya aktarmıyorsunuz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '4586',
        ]);
        questions::create([
            'questioner' => 'Abdurrahman Uzun',
            'speaker_id' => '1',
            'question' => 'İyi Parti hakkında yaptığınız FETÖ iddası ve HDP ile yapılan Anayasa görüşmesine neden yeterli tepkiyi ve açıklamayı yapmadınız. Sürekli mülteci konusunu konuşmanızın sebebi sizi gündemde tuttuğu için mi?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '4764',
        ]);
        questions::create([
            'questioner' => 'Abdurrahman Uzun',
            'speaker_id' => '1',
            'question' => 'İyi Parti hakkında yaptığınız FETÖ iddası ve HDP ile yapılan Anayasa görüşmesine neden yeterli tepkiyi ve açıklamayı yapmadınız. Sürekli mülteci konusunu konuşmanızın sebebi sizi gündemde tuttuğu için mi?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '4764',
        ]);
        questions::create([
            'questioner' => 'Furkan Erdemsoy',
            'speaker_id' => '1',
            'question' => 'Erdoğan Ve Kılıçdaroğlu 2023 seçimlerin de 2. Tura kalırsa kimi desteklersiniz? Biz sizi neden destekleyip oy atalım?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '5180',
        ]);
        questions::create([
            'questioner' => 'Yusuf',
            'speaker_id' => '1',
            'question' => 'Serbest Piyasa Hakkında Çözüm Önerileriniz Nelerdir?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '5289',
        ]);
        questions::create([
            'questioner' => 'Kader',
            'speaker_id' => '1',
            'question' => 'Kadın ve hemşire olarak Milletvekili Olma şansımız olur olacak mı?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '5400',
        ]);
        questions::create([
            'questioner' => 'Tolubey Mızrakoğlu',
            'speaker_id' => '1',
            'question' => 'Diğer partileri eleştirmeden o partinin seçmenlerinden nasıl oy alacaksınız?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '5472',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '1',
            'question' => 'Türk vatandaşlığı alan mültecileri nasıl göndereceksiniz? Memleket Partisi ile ittifak söz konusu olur mu?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '5745',
        ]);
        questions::create([
            'questioner' => 'Sokak Kedisi Youtube',
            'speaker_id' => '1',
            'question' => '"Konyada üretilen otomatik silahları kimlerin kimlere verdigini açıklayın açıklamazsanız ben açıklayacağım" dediniz, hala açıklamasınız. Neden?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '5902',
        ]);
        questions::create([
            'questioner' => 'Çağdaş',
            'speaker_id' => '1',
            'question' => 'Mansur Yavaş\'ın adaylığını engellediğinizi düşünüyor musunuz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '6161',
        ]);
        questions::create([
            'questioner' => 'Gizem',
            'speaker_id' => '1',
            'question' => 'Darbe yargılamalarında askeri öğrencilere müebbet verildi. Ne düşünüyorsunuz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '6251',
        ]);
        questions::create([
            'questioner' => 'Göksü Atacan Öztürk',
            'speaker_id' => '1',
            'question' => 'Sağlıkta şiddeti önlemek için ne yapmayı planlıyorsunuz?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '6404',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '1',
            'question' => 'Cemevleri hakkında ne düşünüyorsunuz? İbadethane olacak mı?',
            'answer_video' => 'aXpC6Q-XiUk',
            'answer_second' => '6548',
        ]);
        //Ümit Özdağ

        //Muharrem İnce
        questions::create([
            'questioner' => 'Uzay',
            'speaker_id' => '3',
            'question' => 'Millet ittifakı için 3 aday önerecek olsanız kimleri önerirsiniz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '140',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => '2018 seçimlerinden sonra biz size neden güvenelim?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '475',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => '2010 ve 2017 seçimlerinde neden kaybettiğinizi düşünüyorsunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '912',
        ]);
        questions::create([
            'questioner' => 'Fatih Emre Tekanlı',
            'speaker_id' => '3',
            'question' => 'Sizi yüzüstü bırakmasına rağmen dene hala altılı masanın sizi aday göstermesi gerektiğini söylüyorsunuz? Derdinz "İktidar gitsin de ülke kimin elinde olursa olsun" düşüncesi mi? Altılı masa Kılıçtaroğlu\'nu aday olarak açıklarsa destekler misiniz? Ümit Özdağ ile neden hala bir ittifak sağlamıyor musunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '1086',
        ]);
        questions::create([
            'questioner' => 'Şahin',
            'speaker_id' => '3',
            'question' => 'Parti içinde ve dışında sizin yanınızda olan insanları düşünmeden neden kendiniz bir parti oluşturdunuz? Tekrar CHP\'ye dönme planınız var mı? CHP\'den kendi partinizde görmek istediğiniz kişiler var mı?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '1344',
        ]);

        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Ümit Özdağ ve Hüseyin Baş ile ittifak yapmayı düşünüyor musunuz? Olur da bu ittifak sizin dışınızda bir aday gösterirse tepkiniz ne olurdu?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '1562',
        ]);
        questions::create([
            'questioner' => 'Serdar',
            'speaker_id' => '3',
            'question' => 'Yeni partiniz ile sandık güvenliğini ve sistem güvenliğini nasıl sağlayacaksınız ve buna gereken maddi kaynağı nasıl bulacaksınız? Seçimlerde hazineden destek alırsanız kabul etmemeyi düşünüyor musunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '1666',
        ]);
        questions::create([
            'questioner' => 'Bilal Demir',
            'speaker_id' => '3',
            'question' => 'Kürt sorunu hakkında "Bu mesele çözülmeli. Bırakın herkes tartışsın, bırakın kırmızı çizgiler olmasın" demiştiniz. Hala bu düşüncenizi savunuyor musunuz? Bu kırmızı çizgiler nelerdir?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '1834',
        ]);
        questions::create([
            'questioner' => 'İlayda',
            'speaker_id' => '3',
            'question' => '2018 seçimlerinden önce "Selehattin Demirtaş serbest bırakılsın" demiştiniz. Bu düşünce Memleket Partisi\'ne yakışıyor mu?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '1951',
        ]);
        questions::create([
            'questioner' => 'İlayda',
            'speaker_id' => '3',
            'question' => 'Eğer kendi partinizi kurmayıp HDP size teklif sunsaydı vekillik yapar mıydınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '2014',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'CHP neden HDP ile ittifak kurdu?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '2039',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'CHP içindeki ilke bozulmalarını görmenize rağmen neden aday olmayı kabul ettiniz? Partide kalmaya neden devam ettiniz? Eğer 2018 seçimini kazansaydınız CHP için "ilkeleri yok" gibi cümleleri tekrardan kullanır mıydınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '2207',
        ]);
        questions::create([
            'questioner' => 'Aleyna',
            'speaker_id' => '3',
            'question' => 'Öğrencilerin burs ve KYK mağduriyetleri hakkında nasıl bir yol izlemeyi düşünüyorsunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '2438',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Havrita uygulaması hakkında neden açıklama yapmadınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '2548',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Selehattin Demirtaş\'ı hangi ilkeleriniz ile ziyaret ettiniz? İktidarınızı elde ettikten sonra M.A.M. gibi programlara katılmaya devam edecek misiniz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '2634',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Türkiye içerisinde yapılan seçimlerin demokratik olduğunu düşünüp, güveniyor musunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '2707',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Bazı televizyon kanalları hakkında "Aylık fon alıyorlar" diye iddada bulundunuz. Bir kanıtız var mı? Madem fonlanıyor neden görüntüleri lehinize kullanıyorsunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '2805',
        ]);
        questions::create([
            'questioner' => 'Serkan Tanyıldızı',
            'speaker_id' => '3',
            'question' => 'Siz 2002 den beri CHP içerisindesiniz. Bu zamandan bu yana idda ettiğiniz "Fon Alıyorlar", "Ruhsat CHP\'den, ÇET raporu AKP\'den" gibi cümleleriniz yaşanmıyor muydu? Eğer yaşanıyor ve bir şey söylemediyseniz şuan yaptığınız açıklamalarda ne kadar samimisiniz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '3441',
        ]);
        questions::create([
            'questioner' => 'Raşan',
            'speaker_id' => '3',
            'question' => 'CHP\' yi karşınıza almanızın sebebi RTE\'nin geçmişte yaptığı gibi bu yolla başarı elde etmek mi?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '3588',
        ]);
        questions::create([
            'questioner' => 'Raşan',
            'speaker_id' => '3',
            'question' => 'Millet İttifakı\'nı karşınıza almanız için birisi size finansal destek sağlıyor mu?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '3672',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => '2023 seçimlerinde aday olacak mısınız? 2. tura RTE ile altılı masanın adayı kalırsa kimi desteklersiniz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '3817',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => '2023 seçimlerini kazanırsanız başkanlık sistemini kaldıracak mısınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '3858',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Bir vatandaş olarak neden Muharrem İnce\'ye oy vermeliyiz? İç ve Dış Siyasetteki, Ekonomideki projeleriniz nelerdir?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '3898',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Özgürlükçü ve liberal ekonomiyi sağlıklı buluyor musunuz? "AKP tipi Çin modeli" veya "Türk Modeli" denen ekonomik yaklaşım hakkında ne düşünüyorsunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4043',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Stajyer avukatların staj ücretleri hakkında neler düşünüyorsunuz? Yaptırım olacak mı?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4102',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Hukukun üstünlüğünü nasıl sağlayacaksınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4132',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Hukukun üstünlüğünü nasıl sağlayacaksınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4132',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Sizi diğer 120 partiden ayıran özelliğiniz neler? Diğer partilerin içeriklerini biliyor musunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4399',
        ]);
        questions::create([
            'questioner' => 'Songül Beyaz',
            'speaker_id' => '3',
            'question' => 'Bazı gazetecilerin yaptığı AKP\'nin yaptığı yolsuzlukları ifşalamak yerine, sizin AKP\'ye sattığınız iddaları hakkında ne düşünüyorsunuz? Kardeşinizin ve sizin yolsuzluk iddaları varken biz size neden güvenelim?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4442',
        ]);
        questions::create([
            'questioner' => 'Atike Yıldırım',
            'speaker_id' => '3',
            'question' => 'İktidar olursanız seçim barajını düşürecek misiniz? Seçime giremeyen partilerin kendilerini tanıtmaları için ne gibi çalışmalarınız olacak?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4593',
        ]);
        questions::create([
            'questioner' => 'Atike Yıldırım',
            'speaker_id' => '3',
            'question' => 'Kadın-Erkek eşitliği konusunda partinizin ne gibi bir çalışması var?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4620',
        ]);
        questions::create([
            'questioner' => 'Kaan İncesulu',
            'speaker_id' => '3',
            'question' => 'Sedat Peker\'in iddaları hakkında neler düşünüyorsunuz? Bahsi geçen kişiler için neler yapacaksınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4639',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Cemal Enginyurt tarafından savcılığa Sedat Peker için şikayet dilekçesi verildi. Peki siz bir başkan yada vatandaş olarak daha önce veya şuan bunu yaptınız mı?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4719',
        ]);
        questions::create([
            'questioner' => 'Kürşat',
            'speaker_id' => '3',
            'question' => 'Atatürkçü olmanıza rağmen Deniz Gezmiş\'e rahmet diliyorsunuz. Gerçekten Atatürkçü müsünüz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '4785',
        ]);
        questions::create([
            'questioner' => 'Kübra',
            'speaker_id' => '3',
            'question' => 'İktidar olduğunuzda ve bir zorluk yaşadığınızda tekrardan partinizi veya halkınızı yanlız bırakacak mısınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '5092',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Eleştiriye açık mısınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '5143',
        ]);
        questions::create([
            'questioner' => 'Doğukan',
            'speaker_id' => '3',
            'question' => 'İktidar olduğunuzda dış politika anlamında Türkiye\'yi uçuruma sürüklemeyeceğinize nasıl inanacağız? Putin ve Biden\'ı ne kadar tanıyorsunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '5196',
        ]);
        questions::create([
            'questioner' => 'Muratoğlu',
            'speaker_id' => '3',
            'question' => 'Bazı partilerin mültecileri gönderme planları var. Eğer seçimi kazanırlarsa bu partiler mültecileri gönderebilir mi? Neden altılı masa dahil bütün siyasetçiler Erdoğan\'ı yıkmak istiyor? Sizce yıkabilir misiniz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '5498',
        ]);
        questions::create([
            'questioner' => 'Selin Çubukçu',
            'speaker_id' => '3',
            'question' => 'İklim krizi yüzünden yaşanacak göç dalgası için nasıl bir önlem alıyorsunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '5635',
        ]);
        questions::create([
            'questioner' => 'Aylin',
            'speaker_id' => '3',
            'question' => 'Kadın cinayetleri hakkında caydırıcı bir yargı sistemi düşünüyor musunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '5714',
        ]);
        questions::create([
            'questioner' => 'Doğukan',
            'speaker_id' => '3',
            'question' => 'İktidara geldiğinizde yerli otomobil projesini devam ettirecek misiniz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '5879',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'İktidara geldiğinizde yerli otomobil projesini devam ettirecek misiniz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '5879',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Saraha giden CHP\'li meselesi hakkında bir gelişme var mı?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '5927',
        ]);
        questions::create([
            'questioner' => 'Seva',
            'speaker_id' => '3',
            'question' => '"IBB\' de iş bulmak istiyorsanız önce HDP\' li olmalısınız" açıklamanızı iktidar yanlısı basın organlarının kullanması yada açıklamanız yüzünden yapılan bir kayyum ataması sizde vicdanen bir sorumluluk hisseder misiniz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '6008',
        ]);

        questions::create([
            'questioner' => 'Amir',
            'speaker_id' => '3',
            'question' => 'Rusya-Ukrayna savaşında hangi tarafta durursunuz? Cemevlerine ibadethane statüsü verecek misiniz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '6071',
        ]);
        questions::create([
            'questioner' => 'İsmail Işık',
            'speaker_id' => '3',
            'question' => 'İBB Başkanlığında aday gösterilmeyi bekliyor muydunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '6159',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Bireysel silahlanmaya karşısınız ve partiniz seçilirse ruhsatlı silah almayı zorlaştıracağını söylüyorsunuz. Buna karşı alacağınız önlemler nelerdir? Buna karşı çıkmak zararlı değil midir?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '6234',
        ]);

        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Partinizi kurduğunuzda çok iyi bir tüzük oluşturduğunuzu söylediniz ancak partinizde istifa depremi olduğunda kurultaya gittiniz ve blok liste kullandınız. Bu iki harektte kendinizle çeliştiğinizi düşünüyor musunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '6388',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Çin Komünist Partisinin önünde takım elbiseniz ile resim çekilip paylaştınız. 2021 yılında  Çin Dışişleri Bakanlı\'nın Ankara\'ya gelmesiyle "Uygur Türkleri\'ne yapılan zülmün sessiz kalındığına" işaret ederek iktidarı ve milliyetçileri suçlamıştınız. 2013 yılında Uygur Türkleri\'ne zulüm edilmiyor muydu?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '6444',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Kuleli Askeri Lisesi\'ni tekrardan açacak mısınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '6550',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'İktidar ve muhalefetin ortak olduğunu idda ettiğinizde muhalefetteki tüm siyasetçileri zan altında bıraktığınızı düşünüyor musunuz? Bu ortaklığı bugün dile getirebiliyorken daha öncesinde bu durumun bilincinde olarak mı CHP tarafında bulundunuz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '6607',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'RTE\'nin 3. kez aday olmasının Anayasa üzerinde bir karşılığı yok. Siz bunu nasıl karşılıyorsunuz? İnsanların birden fazla yerden maaş alması konusunda ne düşünüyorsunuz? Hangi yaptırımları yapacaksınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '6780',
        ]);
        questions::create([
            'questioner' => 'Esra Öztürk',
            'speaker_id' => '3',
            'question' => 'Doğru Parti\'nin "Biz Zafer ve Memleket Partileri ile bir ittifaka kalkışmak üzereyiz" açıklamaısnın aslı var mı? CHP\'li başkanların sık sık yabancı misyon şefleri ile görüşmesi konusunda ne düşünüyorsunuz? Daha önceki seçimlerde bu yönlendirmeler nasıl ilerliyordu? Cumhur başkanı olduğunuzda real-politika hakkında ne yapacaksınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '7062',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Partinizde neden bu kadar çok istifa oldu?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '7136',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Belediyelerde taşeron olarak çalışan çalışanlara 696 KYK adı altında kadroya alınacakları söylendi. Bu konuda hangi çalışmaları yapacaksınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '7175',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Siz CHP içerisindeyken AKP ile bir bilgi alışverişi oluyor muydu?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '7243',
        ]);
        questions::create([
            'questioner' => 'İsimsiz',
            'speaker_id' => '3',
            'question' => 'Eğitim hakkındaki düşünceleriniz ve planlarınız nelerdir? Öğretmenlerin kariyer basamak sınavı hakkında düşünceleriniz neler?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '7267',
        ]);
        questions::create([
            'questioner' => 'Aktaş',
            'speaker_id' => '3',
            'question' => '2023 seçimlerinde CHP\'den daha az oy alırsanız kendinizi başarısız görür müsünüz?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '7404',
        ]);
        questions::create([
            'questioner' => 'İhsan Demircan',
            'speaker_id' => '3',
            'question' => 'YÖK ve ÖSYM başkan olduğunuzda kapatılacak mı?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '7458',
        ]);
        questions::create([
            'questioner' => 'Özlem Kardelen',
            'speaker_id' => '3',
            'question' => 'Siyasi kimliğiniz ile bir paşa hakkında "Apoletlerini sökeceğim" gibi bir cümle kurmanız ne kadar doğru?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '7554',
        ]);
        questions::create([
            'questioner' => 'Özlem Kardelen',
            'speaker_id' => '3',
            'question' => 'Sosyal Medya yasası hakkında ne düşünüyorsunuz? Eğer başkan olursanız yasayı kaldıracak mısınız?',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '7655',
        ]);
        questions::create([
            'questioner' => 'Özlem Kardelen',
            'speaker_id' => '3',
            'question' => '',
            'answer_video' => 'nf4ZO7NO_q0',
            'answer_second' => '7655',
        ]);
        //Muharrem İnce
    }
}

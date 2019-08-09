<?php

use yii\db\Migration;

/**
 * Initial countries states and cities
 */
class m180101_153840_countries_states_cities extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insertCountry();
        $this->insertStates();
        $this->insertCities();

    }

    private function insertCities(){
        $sql = <<<SQL
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,'آذرشهر', 37.75888900, 45.97833300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' اسکو', 37.91583300, 46.12361100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' اهر', 38.48943050, 47.06835750);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' بستان آباد', 37.85000000, 46.83333300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' بناب', 37.34027800, 46.05611100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' تبریز', 38.06666700, 46.30000000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' جلفا', 38.94027800, 45.63083300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' چار اویماق', 37.12990520, 47.02456860);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' سراب', 37.94083300, 47.53666700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' شبستر', 38.18027800, 45.70277800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' عجبشیر', 37.47750000, 45.89416700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' کلیبر', 38.86944400, 47.03555600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' مراغه', 37.38916700, 46.23750000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' مرند', 38.42511700, 45.76963600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' ملکان', 37.14562500, 46.16852420);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' میانه', 37.42111100, 47.71500000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' ورزقان', 38.50972200, 46.65444400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,' هریس', 29.77518250, -95.31025050);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (1,'هشترود', 37.47777800, 47.05083300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' ارومیه', 37.55527800, 45.07250000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' اشنویه', 37.03972200, 45.09833300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' بوکان', 36.52111100, 46.20888900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' پیرانشهر', 36.69444400, 45.14166700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' تکاب', 36.40083300, 47.11333300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' چالدران', 39.06498370, 44.38446790);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' خوی', 38.55027800, 44.95222200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' سردشت', 36.15527800, 45.47888900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' سلماس', 38.19722200, 44.76527800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' شاهین دژ', 36.67916700, 46.56694400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' ماکو', 39.29527800, 44.51666700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' مهاباد', 36.76305600, 45.72222200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' میاندوآب', 36.96944400, 46.10277800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (2,' نقده', 36.95527800, 45.38805600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (3,' اردبیل', 38.48532760, 47.89112090);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (3,' بیله سوار', 39.35677750, 47.94907650);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (3,' پارس آباد', 39.64833300, 47.91750000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (3,' خلخال', 37.61888900, 48.52583300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (3,' کوثر', 31.86768660, 54.33798020);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (3,' گرمی', 39.03722670, 47.92770210);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (3,' مشگین', 38.39888900, 47.68194400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (3,' نمین', 38.42694400, 48.48388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (3,' نیر', 38.03472200, 47.99861100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' آران و بیدگل', 34.05777800, 51.48416700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' اردستان', 33.37611100, 52.36944400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' اصفهان', 32.65462750, 51.66798260);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' برخوار و میمه', 32.83333300, 51.77500000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' تیران و کرون', NULL, NULL);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' چادگان', 32.76833300, 50.62861100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' خمینی شهر', 32.70027800, 51.52111100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' خوانسار', 33.22055600, 50.31500000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' سمیرم', 31.39883460, 51.56759300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' شاهین شهر و میمه', 33.12718520, 51.51500770);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' شهر رضا', 36.29244520, 59.56771490);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,'دهاقان', 31.94000000, 51.64777800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' فریدن', 33.02148290, 50.30690880);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' فریدون شهر', 32.94111100, 50.12111100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' فلاورجان', 32.55527800, 51.50972200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' کاشان', 33.98503580, 51.40996250);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' گلپایگان', 33.45361100, 50.28833300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' لنجان', 32.47501680, 51.30508510);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' مبارکه', 32.34638900, 51.50444400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' نائین', 32.85994450, 53.08783210);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' نجف آباد', 32.63242310, 51.36799140);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (4,' نطنز', 33.51333300, 51.91638900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (5,' ساوجبلاق', 38.37879410, 47.49743590);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (5,' کرج', 35.84001880, 50.93909060);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (5,' نظرآباد', 35.95222200, 50.60750000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (5,'طالقان', 33.27291710, 52.19853140);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (6,' آبدانان', 32.99250000, 47.41972200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (6,' ایلام', 33.29576180, 46.67053400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (6,' ایوان', 33.82722200, 46.30972200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (6,' دره شهر', 33.13972200, 47.37611100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (6,' دهلران', 32.69416700, 47.26777800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (6,' شیران و چرداول', 33.69383480, 46.74784930);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (6,' مهران', 33.12222200, 46.16472200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (7,' بوشهر', 28.92338370, 50.82031400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (7,' تنگستان', 28.98375470, 50.83307080);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (7,' جم', 27.82777800, 52.32694400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (7,' دشتستان', 29.26666700, 51.21666700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (7,' دشتی', 35.78451450, 51.43479610);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (7,' دیر', 27.84000000, 51.93777800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (7,' دیلم', 30.11826320, 50.22612270);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (7,' کنگان', 27.83704370, 52.06454730);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (7,' گناوه', 29.57916700, 50.51694400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (8,' اسلام شهر', 35.54458050, 51.23024570);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (8,' پاکدشت', 35.46689130, 51.68606250);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (8,' تهران', 35.69611100, 51.42305600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (8,' دماوند', 35.94674940, 52.12754810);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (8,' رباط کریم', 35.48472200, 51.08277800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (8,' ری', 48.34446630, -103.16518450);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (8,' شمیرانات', 35.95480210, 51.59916430);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (8,' شهریار', 35.65972200, 51.05916700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (8,' فیروزکوه', 35.43867100, 60.80938700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (8,' ورامین', 35.32524070, 51.64719870);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (9,' اردل', 31.99972200, 50.66166700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (9,' بروجن', 31.96527800, 51.28722200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (9,' شهرکرد', 32.32555600, 50.86444400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (9,' فارسان', 32.25820660, 50.57050880);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (9,' کوهرنگ', 32.55583640, 51.67872520);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (9,' لردگان', 31.51027800, 50.82944400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (10,' بیرجند', 32.86490390, 59.22624720);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (10,' درمیان', 33.03394050, 60.11847970);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (10,' سرایان', 33.86027800, 58.52166700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (10,' سر بیشه', 32.57555600, 59.79833300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (10,' فردوس', 34.01861100, 58.17222200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (10,' قائن', 33.72666700, 59.18444400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (10,' نهبندان', 31.54194400, 60.03638900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' برد سکن', 35.26083300, 57.96972200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' بجستان', 34.51638900, 58.18444400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' تایباد', 34.74000000, 60.77555600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' تحت جلگه', NULL, NULL);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' تربت جام', 35.24388900, 60.62250000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' تربت حیدریه', 35.27388900, 59.21944400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' چناران', 36.64555600, 59.12111100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' جغتای', 36.57888530, 57.25121500);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' جوین', 36.63622380, 57.50799120);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' خلیل آباد', 35.25583300, 58.28638900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' خواف', 34.57638900, 60.14083300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' درگز', 37.44444400, 59.10805600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' رشتخوار', 34.97472200, 59.62361100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' زاوه', 35.27473220, 59.46777270);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' سبزوار', 36.21518230, 57.66782280);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' سرخس', 36.54500000, 61.15777800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' فریمان', 35.70694400, 59.85000000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' قوچان', 37.10611100, 58.50944400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,'طرقبه شاندیز', 36.35488410, 59.43839550);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' کاشمر', 35.23833300, 58.46555600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' کلات', 34.19833300, 58.54444400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' گناباد', 34.35277800, 58.68361100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' مشهد', 36.26046230, 59.61675490);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' مه ولات', 35.02108290, 58.78181160);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (11,' نیشابور', 36.21408650, 58.79609150);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (12,' اسفراین', 37.07638900, 57.51000000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (12,' بجنورد', 37.47500000, 57.33333300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (12,' جاجرم', 36.95000000, 56.38000000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (12,' شیروان', 37.40923570, 57.92761840);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (12,' فاروج', 37.23111100, 58.21888900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (12,' مانه و سملقان', 37.66206140, 56.74120700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' آبادان', 30.34729600, 48.29340040);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' امیدیه', 30.74583300, 49.70861100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' اندیمشک', 32.46000000, 48.35916700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' اهواز', 31.31832720, 48.67061870);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' ایذه', 31.83416700, 49.86722200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' باغ ملک', 32.39472060, 51.59653280);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' بندرماهشهر', 30.55888900, 49.19805600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' بهبهان', 30.59583300, 50.24166700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' خرمشهر', 30.42562190, 48.18911850);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' دزفول', 32.38307770, 48.42358410);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' دشت آزادگان', 31.55805600, 48.18083300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' رامشیر', 30.89565210, 49.40947010);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' رامهرمز', 31.28000000, 49.60361100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' شادگان', 30.64972200, 48.66472200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' شوش', 32.19416700, 48.24361100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' شوشتر', 32.04555600, 48.85666700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' گتوند', 32.25138900, 48.81611100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' لالی', 32.32888900, 49.09361100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' مسجد سلیمان', 31.93638900, 49.30388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (13,' هندیجان', 30.23638900, 49.71194400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (14,' ابهر', 36.14666700, 49.21805600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (14,' ایجرود', 36.41609280, 48.24692490);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (14,' خدابنده', 36.11472200, 48.59111100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (14,' خرمدره', 36.20305600, 49.18694400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (14,' زنجان', 36.50181850, 48.39881860);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (14,' طارم', 28.18042870, 55.74533670);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (14,' ماه نشان', 36.74444400, 47.67250000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (15,' دامغان', 36.16833300, 54.34805600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (15,' سمنان', 35.22555850, 54.43421380);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (15,' شاهرود', 36.41805600, 54.97638900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (15,' گرمسار', 35.21833300, 52.34083300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (15,' مهدی شهر', 35.70000000, 53.35000000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' ایرانشهر', 27.20250000, 60.68472200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' چابهار', 25.29194400, 60.64305600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' خاش', 28.21666700, 61.20000000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' دلگان', 27.60773570, 59.47209040);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' زابل', 31.02861100, 61.50111100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' زاهدان', 29.49638900, 60.86277800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' زهک', 30.89388900, 61.68027800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' سراوان', 27.37083300, 62.33416700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' سرباز', 26.63083300, 61.25638900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' کنارک', 25.36027800, 60.39944400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (16,' نیکشهر', 26.41847190, 60.21107520);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' آباده', 31.16083300, 52.65055600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' ارسنجان', 29.91250000, 53.30861100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' استهبان', 29.12666700, 54.04222200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' اقلید', 30.89888900, 52.68666700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' بوانات', 30.48559070, 53.59333040);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' پاسارگاد', 30.20330750, 53.17901000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' جهرم', 28.50000000, 53.56055600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' خرم بید', 32.67083450, 51.64702790);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' خنج', 27.89138900, 53.43444400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' داراب', 28.75194400, 54.54444400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' زرین دشت', 28.35450470, 54.41780060);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' سپیدان', 30.24252820, 51.99241850);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' شیراز', 29.59176770, 52.58369820);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' فراشبند', 28.87138900, 52.09166700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' فسا', 28.93833300, 53.64833300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' فیروزآباد', 28.84388900, 52.57083300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' قیر و کارزین', 28.42998000, 53.09516000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' کازرون', 29.61944400, 51.65416700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' لارستان', 27.68111100, 54.34027800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' لامرد', 27.34237710, 53.18035580);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' مرودشت', 29.87416700, 52.80250000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' ممسنی', 31.96003450, 50.51226520);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' مهر', 27.55599310, 52.88472050);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (17,' نی ریز', 29.19888900, 54.32777800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (18,' آبیک', 36.04000000, 50.53111100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (18,' البرز', 35.99604670, 50.92892460);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (18,' بوئین زهرا', 35.76694400, 50.05777800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (18,' تاکستان', 36.06972200, 49.69583300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (18,' قزوین', 36.08813170, 49.85472660);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (19,' قم', 34.63994430, 50.87594190);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (20,' بانه', 35.99859990, 45.88234280);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (20,' بیجار', 32.73527800, 59.46666700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (20,' دیواندره', 35.91388900, 47.02388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (20,' سروآباد', 35.31250000, 46.36694400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (20,' سقز', 36.24638900, 46.26638900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (20,' سنندج', 35.32187480, 46.98616470);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (20,' قروه', 35.16789340, 47.80382720);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (20,' کامیاران', 34.79555600, 46.93555600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (20,' مریوان', 35.52694400, 46.17638900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' بافت', 29.23305600, 56.60222200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' بردسیر', 29.92750000, 56.57222200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' بم', 29.10611100, 58.35694400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' جیرفت', 28.67511240, 57.73715690);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' راور', 31.26555600, 56.80555600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' رفسنجان', 30.40666700, 55.99388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' رودبار جنوب', 36.82412890, 49.42372740);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' زرند', 30.81277800, 56.56388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' سیرجان', 29.45866760, 55.67140510);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' شهر بابک', 30.11638900, 55.11861100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' عنبرآباد', 28.47833330, 57.84138890);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' قلعه گنج', 27.52361100, 57.88111100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' کرمان', 29.48500890, 57.64390480);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' کوهبنان', 31.41027800, 56.28250000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' کهنوج', 27.94676030, 57.70625720);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (21,' منوجان', 27.44756260, 57.50516160);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' اسلام آباد غرب', 33.72938820, 73.09314610);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' پاوه', 35.04333300, 46.35638900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' ثلاث باباجانی', 34.73583710, 46.14939690);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' جوانرود', 34.80666700, 46.48861100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' دالاهو', 34.28416700, 46.24222200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' روانسر', 34.71208920, 46.65129980);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' سرپل ذهاب', 34.46111100, 45.86277800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' سنقر', 34.78361100, 47.60027800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' صحنه', 34.48138900, 47.69083300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' قصر شیرین', 34.51590310, 45.57768590);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' کرمانشاه', 34.45762330, 46.67053400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' کنگاور', 34.50416700, 47.96527800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' گیلان غرب', 34.14222200, 45.92027800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (22,' هرسین', 34.27191490, 47.60461830);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (23,' بویر احمد', 30.72458600, 50.84563230);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (23,' بهمئی', NULL, NULL);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (23,' دنا', 30.95166660, 51.43750000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (23,' کهگیلویه', NULL, NULL);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (23,' گچساران', 30.35000000, 50.80000000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' آزادشهر', 37.08694400, 55.17388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' آق قلا', 37.01388900, 54.45500000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' بندر گز', 36.77496500, 53.94617490);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' بندر ترکمن', 36.90166700, 54.07083300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' رامیان', 37.01611100, 55.14111100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' علی آباد', 36.30822600, 74.61954740);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' کرد کوی', 36.79414260, 54.11027400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' کلاله', 37.38083300, 55.49166700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' گرگان', 36.84564270, 54.43933630);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' گنبد کاووس', 37.25000000, 55.16722200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (24,' مینو دشت', 37.22888900, 55.37472200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' آستارا', 38.42916700, 48.87194400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' آستانه اشرفیه', 37.25980220, 49.94366210);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' املش', 37.09163340, 50.18693770);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' بندر انزلی', 37.47244670, 49.45873120);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' رشت', 37.28083300, 49.58305600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' رضوانشهر', 37.55067500, 49.14098010);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' رودبار', 36.82412890, 49.42372740);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' رودسر', 37.13784150, 50.28361990);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' سیاهکل', 37.15277800, 49.87083300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' شفت', 39.63063100, -78.92954200);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' صومعه سرا', 37.31166700, 49.32194400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' طوالش', 37.00000000, 48.42222220);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' فومن', 37.22388900, 49.31250000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' لاهیجان', 37.20722200, 50.00388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' لنگرود', 37.19694400, 50.15361100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (25,' ماسال', 37.36211850, 49.13147690);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' ازنا', 33.45583300, 49.45555600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' الیگودرز', 33.40055600, 49.69500000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' بروجرد', 33.89419930, 48.76703300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' پلدختر', 33.15361100, 47.71361100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' خرم آباد', 33.48777800, 48.35583300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' دورود', 33.49550280, 49.06317430);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' دلفان', 33.50340140, 48.35758360);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' سلسله', 32.04577600, 34.75163900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' کوهدشت', 33.53500000, 47.60611100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' الشتر', 33.86398880, 48.26423870);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (26,' نورآباد', 30.11416700, 51.52166700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' آمل', 36.46972200, 52.35083300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' بابل', 32.46819100, 44.55019350);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' بابلسر', 36.70250000, 52.65750000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' بهشهر', 36.69222200, 53.55250000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' تنکابن', 36.81638900, 50.87388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' جویبار', 36.64111100, 52.91250000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' چالوس', 36.64591740, 51.40697900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' رامسر', 36.90305600, 50.65833300);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' ساری', 36.56333300, 53.06000000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' سوادکوه', 36.30402550, 52.88524030);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' قائم شهر', 36.46305600, 52.86000000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' گلوگاه', 36.72722200, 53.80888900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' محمود آباد', 36.63194400, 52.26277800);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' نکا', 36.65083300, 53.29916700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' نور', 50.38512460, 3.26424360);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' نوشهر', 36.64888900, 51.49611100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (27,' فریدونکنار', 36.68638900, 52.52250000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (28,' آشتیان', 34.52194400, 50.00611100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (28,' اراک', 34.09166700, 49.68916700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (28,' تفرش', 34.69194400, 50.01305600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (28,' خمین', 33.64061480, 50.07711250);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (28,' دلیجان', 33.99055600, 50.68388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (28,' زرندیه', 35.30699620, 50.49117920);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (28,' ساوه', 35.02138900, 50.35666700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (28,' شازند', 33.92750000, 49.41166700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (28,' کمیجان', 34.71916700, 49.32666700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (28,' محلات', 33.90857480, 50.45526160);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' بندرعباس', 27.18322160, 56.26664550);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' میناب', 27.14666700, 57.08000000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' بندر لنگه', 26.55805600, 54.88055600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' رودان-دهبارز', 27.44083300, 57.19250000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' جاسک', 25.64388900, 57.77444400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' قشم', 26.81186730, 55.89132070);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' حاجی آباد', 28.30916700, 55.90166700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' ابوموسی', 25.87971060, 55.03280170);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' بستک', 27.19916700, 54.36666700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' گاوبندی', 27.20833300, 53.03611100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (29,' خمیر', 26.95222200, 55.58500000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (30,' اسدآباد', 34.78250000, 48.11861100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (30,' بهار', 34.90832520, 48.43927290);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (30,' تویسرکان', 34.54805600, 48.44694400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (30,' رزن', 35.38666700, 49.03388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (30,' کبودر آهنگ', 35.20833300, 48.72388900);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (30,' ملایر', 34.29694400, 48.82361100);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (30,' نهاوند', 34.18861100, 48.37694400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (30,' همدان', 34.76079990, 48.39881860);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (31,' ابرکوه', 31.13040360, 53.25037360);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (31,' اردکان', 32.31000000, 54.01750000);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (31,' بافق', 31.61277800, 55.41055600);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (31,' تفت', 27.97890740, -97.39860410);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (31,' خاتم', 37.27091520, 49.59691460);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (31,' صدوق', 32.02421620, 53.47703590);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (31,' طبس', 33.59583300, 56.92444400);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (31,' مهریز', 31.59166700, 54.43166700);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (31,' میبد', 32.24872260, 54.00793410);
INSERT INTO {{%city}} (`stateId`, `name`, `latitude`, `longitude`) VALUES (31,' یزد', 32.10063870, 54.43421380);

SQL;

        $db = Yii::$app->getDb();

        $db->createCommand($sql)->execute();
    }

    private function insertCountry(){
        $sql = <<<SQL
INSERT INTO {{%country}} VALUES (1,'ایران', 32.56163037, 54.40429688);
SQL;

        $db = Yii::$app->getDb();

        $db->createCommand($sql)->execute();
    }

    private function insertStates(){
        $sql = <<<SQL
INSERT INTO {{%state}} VALUES (1, 1,'آذربایجان شرقی', 37.90357330, 46.26821090);
INSERT INTO {{%state}} VALUES (2, 1,'آذربایجان غربی', 37.45500620, 45.00000000);
INSERT INTO {{%state}} VALUES (3, 1,'اردبیل', 38.48532760, 47.89112090);
INSERT INTO {{%state}} VALUES (4, 1,'اصفهان', 32.65462750, 51.66798260);
INSERT INTO {{%state}} VALUES (5, 1,'البرز', 35.99604670, 50.92892460);
INSERT INTO {{%state}} VALUES (6, 1,'ایلام', 33.29576180, 46.67053400);
INSERT INTO {{%state}} VALUES (7, 1,'بوشهر', 28.92338370, 50.82031400);
INSERT INTO {{%state}} VALUES (8, 1,'تهران', 35.69611100, 51.42305600);
INSERT INTO {{%state}} VALUES (9, 1,'چهارمحال و بختیاری', 31.96143480, 50.84563230);
INSERT INTO {{%state}} VALUES (10, 1,'خراسان جنوبی', 32.51756430, 59.10417580);
INSERT INTO {{%state}} VALUES (11, 1,'خراسان رضوی', 35.10202530, 59.10417580);
INSERT INTO {{%state}} VALUES (12, 1,'خراسان شمالی', 37.47103530, 57.10131880);
INSERT INTO {{%state}} VALUES (13, 1,'خوزستان', 31.43601490, 49.04131200);
INSERT INTO {{%state}} VALUES (14, 1,'زنجان', 36.50181850, 48.39881860);
INSERT INTO {{%state}} VALUES (15, 1,'سمنان', 35.22555850, 54.43421380);
INSERT INTO {{%state}} VALUES (16, 1,'سیستان و بلوچستان', 27.52999060, 60.58206760);
INSERT INTO {{%state}} VALUES (17, 1,'فارس', 29.10438130, 53.04589300);
INSERT INTO {{%state}} VALUES (18, 1,'قزوین', 36.08813170, 49.85472660);
INSERT INTO {{%state}} VALUES (19, 1,'قم', 34.63994430, 50.87594190);
INSERT INTO {{%state}} VALUES (20, 1,'كردستان', 35.95535790, 47.13621250);
INSERT INTO {{%state}} VALUES (21, 1,'كرمان', 30.28393790, 57.08336280);
INSERT INTO {{%state}} VALUES (22, 1,'كرمانشاه', 34.31416700, 47.06500000);
INSERT INTO {{%state}} VALUES (23, 1,'کهگیلویه و بویراحمد', 30.65094790, 51.60525000);
INSERT INTO {{%state}} VALUES (24, 1,'گلستان', 37.28981230, 55.13758340);
INSERT INTO {{%state}} VALUES (25, 1,'گیلان', 37.11716170, 49.52799960);
INSERT INTO {{%state}} VALUES (26, 1,'لرستان', 33.58183940, 48.39881860);
INSERT INTO {{%state}} VALUES (27, 1,'مازندران', 36.22623930, 52.53186040);
INSERT INTO {{%state}} VALUES (28, 1,'مركزی', 33.50932940, -92.39611900);
INSERT INTO {{%state}} VALUES (29, 1,'هرمزگان', 27.13872300, 55.13758340);
INSERT INTO {{%state}} VALUES (30, 1,'همدان', 34.76079990, 48.39881860);
INSERT INTO {{%state}} VALUES (31, 1,'یزد', 32.10063870, 54.43421380);

SQL;

        $db = Yii::$app->getDb();

        $db->createCommand($sql)->execute();
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->truncateTable("{{%city}}");
        $this->truncateTable("{{%state}}");
        $this->truncateTable("{{%country}}");
    }

}

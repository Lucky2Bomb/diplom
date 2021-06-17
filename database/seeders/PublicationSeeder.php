<?php

namespace Database\Seeders;

use App\Models\Publications\Publication;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ru_RU');
        $data = [];

        Publication::create([
            'slug'          => 'est-in-qui-omnis',
            'preview_image' => null,
            'preview_text'  => 'Necessitatibus hic autem cum dolor adipisci accusamus quaerat. Corrupti quo pariatur consequatur laborum ducimus consequuntur dolores ullam. Nam est hic magnam aut harum officiis tempora. Ut inventore labore cupiditate laudantium dolorum. D',
            'title'         => 'Est in qui omnis.',
            'description'   => "<p>Rerum id consectetur rerum est sint ea. Et excepturi consequatur minus sunt reiciendis sunt omnis. Non quisquam officia iure sed omnis alias. Laborum non ut dolor. Impedit quasi molestiae est illo id necessitatibus. Qui omnis fugiat repellendus sed. Ut sunt quibusdam natus et. Aspernatur provident incidunt omnis commodi qui ut.<p><p>Quibusdam omnis et consequatur ea sunt. Vitae officiis voluptatem id odio dolorem. Voluptatem rem architecto repudiandae eos totam. Ea consectetur quas ad iure aliquid officiis.<p><p>Modi doloribus ut officia accusantium consequatur. A animi provident nam ducimus odio illum adipisci. Necessitatibus ut numquam excepturi cupiditate numquam commodi quia et. Ducimus dicta accusamus eos maxime assumenda. Ex cupiditate incidunt tenetur amet. Eum qui est inventore ut est iure. Ducimus sed libero aliquid corporis quaerat.<p><p>Sit provident impedit qui architecto. Voluptatem et voluptate at optio sit tempora. Rerum fuga occaecati laboriosam id ratione velit.<p><p>Ab ea eveniet perspiciatis ratione. Ut est ullam reiciendis eius sunt ratione ut. Rerum autem adipisci rerum odit occaecati odit consequatur. Beatae quia placeat sint inventore saepe modi sit. Provident perspiciatis ipsa eligendi quo quia. Enim nihil omnis dolorem illum officia. Iure maxime recusandae recusandae et sed possimus. Sint dolorum ea voluptatibus laborum neque et. Harum aut molestias vel mollitia cumque.<p><p>Eligendi est laboriosam et facere placeat. Iusto fugiat aliquam deserunt quia illo tenetur. Ipsa ex aliquid voluptate rerum incidunt minima. Ea voluptates qui et blanditiis non qui. Consequatur suscipit ut et dolorem harum ea et. Fugiat neque pariatur omnis repellat. Nesciunt asperiores ut consectetur. Aperiam porro totam omnis. Vitae sit quis tenetur neque voluptas voluptas.<p><p>Molestias impedit inventore eligendi ex sed blanditiis soluta. Voluptates qui id voluptates aut doloremque consequatur. Consequuntur optio maiores sapiente porro. Officia placeat consequuntur necessitatibus incidunt. Numquam qui debitis quod. Fuga odit recusandae vitae in dolorem est. Quis qui sapiente ad quos maiores quo. Culpa corporis qui porro unde ipsa asperiores. Sunt repellendus hic porro vitae. Unde quisquam aut illum illum sint corrupti sed.<p><p>Necessitatibus hic autem cum dolor adipisci accusamus quaerat. Corrupti quo pariatur consequatur laborum ducimus consequuntur dolores ullam. Nam est hic magnam aut harum officiis tempora. Ut inventore labore cupiditate laudantium dolorum. Delectus harum tenetur earum sit. Cum veniam aliquid voluptatibus atque autem explicabo veritatis.<p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-03-15',
            'created_at'    => '2021-03-15',
            'updated_at'    => '2021-03-15'
        ]);

        Publication::create([
            'slug'          => 'ekspress-kursy-po-podgotovke-k-dvi',
            'preview_image' => null,
            'preview_text'  => 'Филологический факультет приглашает абитуриентов 2021 года на экспресс-курсы по подготовке к дополнительному вступительному испытанию на филологический факультет',
            'title'         => 'Экспресс-курсы по подготовке к ДВИ',
            'description'   => "<div style='margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'>Филологический факультет приглашает абитуриентов 2021 года на экспресс-курсы по подготовке к дополнительному вступительному испытанию на филологический факультет (по предметам «Русская литература», «Иностранный (английский) язык», «Методика написания сочинения»).<br><div style='margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'><br></div><div style='margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'>Подробная информация об экспресс-курсах размещена на <a href='https://www.philol.msu.ru/~dovuz/news.html' target='_blank' style='color: rgb(65, 91, 151); text-decoration-line: underline; transition: color 0s ease 0s, background 0.1s ease 0s;'>сайте Отделения дополнительного образования филологического факультета</a>.</div></div>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-03-17',
            'created_at'    => '2021-03-17',
            'updated_at'    => '2021-03-17'
        ]);

        Publication::create([
            'slug'          => 'dialog-o-nastoyashhem-i-budushhem',
            'preview_image' => null,
            'preview_text'  => '17 июня 2021 года в 18:00 в рамках экспертной площадки МГУ «Диалог о настоящем и будущем» состоится дискуссия «Почему нужно вакцинироваться от коронавируса».',
            'title'         => 'Диалог о настоящем и будущем',
            'description'   => "<p><span style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'>17 июня 2021 года в 18:00 в рамках экспертной площадки МГУ «Диалог о настоящем и будущем» состоится дискуссия «Почему нужно вакцинироваться от коронавируса».</span><br style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'><br style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'><span style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'>Эксперты – профессора биологического факультета МГУ Николай Александрович Никитин и Петр Андреевич Каменский.</span><br style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'><br style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'><span style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'>Трансляция будет доступна на сайте </span><a href='https://expert.msu.ru/' target='_blank' style='color: rgb(65, 91, 151); text-decoration-line: underline; transition: color 0s ease 0s, background 0.1s ease 0s; font-family: Arial, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);'>https://expert.msu.ru/</a><span style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'>.</span><br style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'><br style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'><span style='color: rgb(64, 64, 64); font-family: Arial, sans-serif; font-size: 12px;'>Зрители смогут задать вопросы экспертам и получить ответы в прямом эфире.</span><br></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-04-02',
            'created_at'    => '2021-04-02',
            'updated_at'    => '2021-04-02'
        ]);

        Publication::create([
            'slug'          => 'yarmarka-vakansii-2021',
            'preview_image' => '4e32ea1b-a39b-4361-9d64-5d6370479dcb.jpg',
            'preview_text'  => '22 апреля в Бирском филиале Башкирского государственного университета прошло общевузовское мероприятие «Ярмарка вакансий»',
            'title'         => 'Ярмарка вакансий - 2021',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Весна – красивое время года, природа просыпается, а у студентов выпускных курсов  Бирского филиала БашГУ – это время активного поиска работы. В 2021 году из стен вуза выходят 189 бакалавров и 5 магистров из 29 районов РБ. Например, из Бирского района – 46 выпускников, Мишкинского – 14, Аскинского – 13, Дюртюлинского – 12 и так далее, так же выпускаются  студенты, проживающие в Пермском крае, ХМАО и Челябинской области.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>22 апреля в Бирском филиале Башкирского государственного университета прошло общевузовское мероприятие «Ярмарка вакансий» с приглашением заместителей глав по социальным вопросам муниципальных районов РБ, начальников отделов образований и руководителей центров занятости населения. Всего на Ярмарку приехали более 40 представителей работодателей из 18 районов Республики Башкортостан. Состоялся конструктивный диалог выпускников факультетов с потенциальными работодателями. Цель проведенного мероприятия—информирование старшекурсников о состоянии и тенденциях рынка труда. Руководство Бирского филиала БашГУ с большим вниманием относится к вопросам трудоустройства выпускников, несет огромную ответственность за своих подопечных и гарантирует им помощь при трудоустройстве.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Отличительная черта трудоустройства этого выпуска – это стремление работать по специальности. В процессе изучения, помимо основной, студенты-выпускники осваивали программы переподготовки, что позволяет им чувствовать себя увереннее на рынке труда. В этом году на образовательном рынке республики спросом пользуются  учителя  физики, математики, химии, биологии, английского языка, русского языка, начальных классов.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>По мнению большинства участников, ярмарка вакансий прошла весьма продуктивно. Преподаватели и студенты БФ БашГУ надеются, что она поможет как выпускникам, так и потенциальным работодателям.</p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-04-22',
            'created_at'    => '2021-04-22',
            'updated_at'    => '2021-04-22'
        ]);

        Publication::create([
            'slug'          => 'studenty-birskogo-filiala-basgu-prizery-otkrytoi-mezdunarodnoi-studenceskoi-internet-olimpiady',
            'preview_image' => '4bb18ab9-15aa-405d-a8d5-0d7952a02428.jpg',
            'preview_text'  => '9 апреля 2021 года на базе Уфимского государственного авиационного технического университета прошел заключительный тур Открытой международной студенческой Интернет-олимпиады.',
            'title'         => 'Студенты Бирского филиала БашГУ – призеры Открытой международной студенческой Интернет-олимпиады',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>9 апреля 2021 года на базе Уфимского государственного авиационного технического университета прошел заключительный тур   Открытой международной студенческой Интернет-олимпиады, профиль «Специализированный» (с углубленным изучением дисциплины), организованной ООО «Национальный фонд поддержки инноваций в сфере образования». Основной целью Олимпиады является оценка качества подготовки студентов по дисциплинам, повышение интереса молодежи к научным проблемам современности, в том числе к экологии.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>В Олимпиаде по экологии приняли участие 425 студентов из 88 вузов и филиалов вузов Российской Федерации,  Республики Казахстан, Кыргызской Республики, Республики Таджикистан, Туркменистана, Республики Узбекистан, Республики Беларусь, Словении.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Студенты факультета биологии и химии БФ БашГУ под руководством доцента кафедры биологии, экологии и химии Шахриновой Надежды Викторовны в очередной раз продемонстрировали высокий уровень знаний, приняв участие в заключительном туре этого мероприятия. На заключительный тур олимпиады по экологии были приглашены трое студентов, двое из которых стали  серебряными призерами. Называем их имена:</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Злыгостев Петр Сергеевич – студент 3 курса направления подготовки Биология,</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Илалов Радмир Магаруфович – студент 1 курса направления подготовки Экология и природопользование.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Преподаватели и студенты факультета биологии и химии поздравляют ребят и желают им дальнейших успехов!</p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-04-09',
            'created_at'    => '2021-04-09',
            'updated_at'    => '2021-04-09'
        ]);

        Publication::create([
            'slug'          => 'informaciya-dlya-studentov-vypusknikov-ocnoi-formy-obuceniya',
            'preview_image' => null,
            'preview_text'  => 'Вашему вниманию предоставляются списки вакантных мест трудоустройства по направлениям подготовки.',
            'title'         => 'Информация для студентов-выпускников очной формы обучения',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Вашему вниманию предоставляются списки вакантных мест трудоустройства по направлениям подготовки.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'><a href='https://drive.google.com/file/d/1OvSexNjAQwqGdKU7J6zIfdfvRlhFVun3/view?usp=sharing' style='cursor: pointer; color: rgb(51, 122, 183);'>Пройдя по ссылке</a>, вы можете выбрать вакансию и записать свои данные (ФИО) напротив понравившейся вакансии.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Отдельно представлены вакансии по северным регионам нашей страны (ЯМАО, ХМАО), <a href='https://drive.google.com/file/d/1fp3dipLDhYcoiMzRQPiN5iU4WyvmvEXG/view?usp=sharing' style='cursor: pointer; color: rgb(51, 122, 183);'>ссылка для ознакомления</a></p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Ваш своевременный выбор рабочего места- залог вашего успешного будущего!</p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-04-15',
            'created_at'    => '2021-04-15',
            'updated_at'    => '2021-04-15'
        ]);

        Publication::create([
            'slug'          => 'besplatnye-kursy-po-podgotovke-k-ege',
            'preview_image' => null,
            'preview_text'  => 'Бирский филиал Башкирского государственного университета проводит БЕСПЛАТНЫЕ курсы по подготовке к ЕГЭ для учащихся 11 классов в on-line формате по всем школьным предметам.',
            'title'         => 'Бесплатные курсы по подготовке к ЕГЭ для будущих абитуриентов!',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Бирский филиал Башкирского государственного университета проводит БЕСПЛАТНЫЕ курсы по подготовке к ЕГЭ для учащихся 11 классов в on-line формате по всем школьным предметам.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Режим доступа: подключиться к конференции Zoom.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Идентификатор конференции: 894 1745 5275<br>Код доступа: 938900</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Занятия будут вести квалифицированные специалисты: кандидаты и доктора наук.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>За справками обращаться в Отдел довузовской подготовки:</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>телефон: 8- (34784) - 4- 04-71.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'><a href='mailto:dovuz_otdel_bf@mail.ru' style='cursor: pointer; color: rgb(51, 122, 183);'>dovuz_otdel_bf@mail.ru</a></p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'><a href='https://www.birsk.ru/system/files/News/2021/Raspisanie_kursov.pdf' style='cursor: pointer; color: rgb(51, 122, 183);'>Расписание занятий прилагается.</a></p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-04-19',
            'created_at'    => '2021-04-19',
            'updated_at'    => '2021-04-19'
        ]);

        Publication::create([
            'slug'          => 'rezultaty-konkursa-metodiceskix-rabot-dlya-publikacii-v-sbornike-pedagogiceskii-debyut',
            'preview_image' => '2a93933a-75d9-4dcb-afb3-e1a13d84a9bb.jpg',
            'preview_text'  => 'Бесплатные курсы по подготовке к ЕГЭ отменены!.',
            'title'         => 'Курсы по подготовке к ЕГЭ',
            'description'   => "<p>Курсы по подготовке к ЕГЭ отменяются</p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-04-20',
            'created_at'    => '2021-04-20',
            'updated_at'    => '2021-04-20'
        ]);

        Publication::create([
            'slug'          => 'otkryt-nabor-na-obrazovatelnye-kursy-universiteta-innopolis',
            'preview_image' => '2b234bd2-ccd9-4bed-9192-90d5deb9d546.jpg',
            'preview_text'  => 'Выпускники БашГУ смогут поступить в магистратуру Университета Иннополис.',
            'title'         => 'Открыт набор на образовательные курсы Университета Иннополис',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Выпускники БашГУ смогут поступить в магистратуру Университета Иннополис. Набор ведется по четырем образовательным программам, обучение будет проходить на английском языке. Среди бакалавров 2 курса состоится конкурсный отбор на знание английского языка и владение IT-компетенциями. 10 студентов, которые успешно пройдут испытания, получат приглашение в летний лагерь в Иннополисе со 2 по 8 августа.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>В течение 3-4 курсов обучения на бакалавриате студенты будут дополнительно изучать 8 элективных дисциплин (по 2 дисциплины в каждом семестре, онлайн) на английском языке. Каждый курс включает в себя 60 часов обучения и дополнительные занятия по английскому языку, которые помогут студентам повысить свой уровень. Студентам будет предоставлен онлайн-доступ к записанным лекциям профессоров Университета Иннополис и лабораторным занятиям с ассистентами профессоров в Teams или на аналогичных платформах.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>После успешно сданных тестов студенты будут зачислены в особом порядке на одну из программ магистратуры Университета Иннополис (срок обучения – 2 года).</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Более подробная информация о курсах Иннополиса размещена в приложении ниже.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Приложение</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>1. MS Software Engineering</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>2. MS Security and Network Engineering</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>3. MS Data Analysis and Artificial Intelligence</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>4. MS Robotics and Computer Vision</p><p></p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-04-25',
            'created_at'    => '2021-04-25',
            'updated_at'    => '2021-04-25'
        ]);

        Publication::create([
            'slug'          => 'festival-reka-vremeni-polucil-ocenku-otlicno',
            'preview_image' => '420ae75e-c1e7-4a0c-ac5f-c891e7f0131d.jpg',
            'preview_text'  => 'Бирский филиал БашГУ проводит Образовательный  фестиваль исторической реконструкции «Река времени»!',
            'title'         => 'Фестиваль «Река времени» получил оценку «отлично»!',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>С 2016 года Бирский филиал Башгосуниверситета проводит Образовательный  фестиваль исторической реконструкции «Река времени», который известен далеко за пределами Республики Башкортостан. В 2020 году он стал Победителем Национальной премии в области событийного туризма в номинации «Лучшее туристическое событие, посвященное 75-летию Победы».<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Яркий праздник проходил 22-23 мая на территории Исторического парка «Бирская крепость». Инициативу студентов поддержал в свое время профессор С.М. Усманов. Эту славную традицию – дарить бирянам и гостям незабываемые эмоции и желание посетить этот замечательный фестиваль еще раз,  продолжил Бирский филиал БашГУ во главе с директором В.В. Ганеевым. </p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>В «Реке времени» приняли участие более 200 реконструкторов из Москвы, Московской области, Кирова, Чебоксар, Екатеринбурга, Челябинска, Перми, Уфы, Стерлитамака, Туймазов и Бирска! Были организованы интерактивные площадки, на которых ребята и их родители, туристы, любители истории могли познакомиться и прочувствовать быт и военный уклад славянской дружины XI века, стрельцов царя Алексея Михайловича, пушкарей Петра I,   Русской императорской армии 1916 года, героических защитников начала Великой Отечественной войны. Особый интерес вызвал интерьер башкирской юрты и костюмы ее хозяек.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Кульминацией первого дня фестиваля стала историческая реконструк-ция «Учения «потешных» полков Петра I», а второго дня – историческая реконструкция «Жаркое лето 41-го…», посвященная 80-летию начала Великой Отечественной войны.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Не меньший интерес вызвала объединенная площадка БФ БашГУ, на которой будущие абитуриенты могли познакомиться с самыми разнообразными направлениями деятельности факультетов филиала. Инженерно-технологический факультет показал ремесла – от гончарного дела до высокотехнологичных образцов своего производства; факультет педагогики проводил интерактивы с детьми; факультет физики и математики представил площадку робототехники; факультет биологии и химии знакомил с технологией приготовления экологических фиточаев; факультет филологии и межкультурных коммуникаций представили книжную выставку, посвященную Великой Отечественной войне. Особую роль при проведении фестиваля сыграли студенты-волонтеры социально-гуманитарного факультета.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Студенты – члены военно-исторического клуба «Бирские стрельцы» Бирского филиала БашГУ провели большой объем подготовительных работ, и приняли самое активное участие во всех реконструкциях.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Фестиваль за два дня посетило более четырех тысяч восторженных зрителей. Среди них была большая делегация почетных гостей: проректор по воспитательной работе БашГУ Р.Р. Сафин, и.о. директора Стерлитамакского филиала БашГУ И.А. Сыров. На фестиваль также приехали председатель Федерации профсоюзов РБ Г.Ф. Мирошниченко, заместитель председателя Башкирской республиканской организации профсоюза работников образования и науки РФ Н.Н. Нурмухаметов, депутаты Государственной Думы РФ И.З. Бикбаев, Р.М. Марданшин, глава администрации Бирского района А.В. Талалов.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Прекрасный, почти летний день, удивительной красоты башкирская природа, множество ярких, увлеченных своим делом людей – фестиваль «Река времени» прошел на «отлично»! Он вписал еще одну славную страницу в историю жизни нашего вуза и родного города.</p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-04-27',
            'created_at'    => '2021-04-27',
            'updated_at'    => '2021-04-27'
        ]);


        Publication::create([
            'slug'          => 'priglasaem-prinyat-ucastie-v-mezdunarodnom-festivale',
            'preview_image' => 'c4c114e5-800b-4f3c-9308-34567894a46c.jpg',
            'preview_text'  => '6 июня 2021 года факультет филологии и межкультурных коммуникаций Бирского филиала Башкирского государственного факультета при поддержке фонда «РУССКИЙ МИР», проводит Международный фестиваль',
            'title'         => 'Приглашаем принять участие в Международном фестивале',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>6 июня 2021 года факультет филологии и межкультурных коммуникаций Бирского филиала Башкирского государственного факультета при поддержке фонда «РУССКИЙ МИР», проводит Международный фестиваль, приуроченный ко Дню русского языка и 222-летию со дня рождения Основоположника современного русского литературного языка А.С. Пушкина.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Для участия в фестивале в дистанционном формате приглашаем вас подключиться к конференции Zoom <a href='https://us02web.zoom.us/j/87677899514?pwd=TXhtV0RCYXV' title='https://us02web.zoom.us/j/87677899514?pwd=TXhtV0RCYXV' style='cursor: pointer; color: rgb(51, 122, 183);'>https://us02web.zoom.us/j/87677899514?pwd=TXhtV0RCYXV</a>..<br>Идентификатор конференции: 876 7789 9514<br>Код доступа: 060621</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'><span style='font-weight: 700;'>В программе фестиваля:</span></p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>10.00-12.00 Встреча с представителями науки и культуры Республики Башкортостан в онлайн- формате на тему: «Актуальные вопросы изучения русского языка и русской литературы в полилингвальном языковом пространстве» (трансляция YouTube-канале: Бирского филиала башГУ  birskit <a href='https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ' title='https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ' style='cursor: pointer; color: rgb(51, 122, 183);'>https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ</a>, место проведения: факультет филологии и межкультурных коммункаций, «Пушкинская аудитория»).</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>13.00-14.30 Литературная гостиная: встреча с русскоязычными авторами г. Бирска, Бирского района (трансляция YouTube-канале: Бирского филиала БашГУ  birskit <a href='https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ' title='https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ' style='cursor: pointer; color: rgb(51, 122, 183);'>https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ</a>, место проведения: исторический музей г. Бирска)</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>15.00-16.00 Музыкально-театрализованное представление по произведениям русских классиков начала XIX века «…сквозь магический кристалл…» (трансляция YouTube-канале: Бирского филиала БашГУ  birskit <a href='https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ' title='https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ' style='cursor: pointer; color: rgb(51, 122, 183);'>https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ</a>, место проведения: факультет филологии и межкультурных коммуникаций БФ БашГУ, концертный зал, аудитория № 7).</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>16.00-16.30 Подведение итогов международного конкурса «Лучший урок» в номинациях «Лучший урок русского языка», «Лучший урок литературы», «Лучший урок русского языка в иноязычной школе». Вручение дипломов победителей, сертификатов участников, памятных призов (трансляция YouTube-канале: Бирского филиала БашГУ  birskit <a href='https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ' title='https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ' style='cursor: pointer; color: rgb(51, 122, 183);'>https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ</a>, место проведения: исторический музей г. Бирска).</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>17.00-18.30 Посещение реконструированного комплекса Свято-Троицкого кафедрального собора для гостей Фестиваля (трансляция YouTube-канале: Бирского филиала БашГУ  birskit <a href='https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ' title='https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ' style='cursor: pointer; color: rgb(51, 122, 183);'>https://www.youtube.com/channel/UCdyghG4t_62LA7Jpy-FwhWQ</a>).</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Полную онлайн-версию фестиваля можно посмотреть на канале ФиМК. Филологический кластер ФФиМК БФ БашГУ <a href='https://www.youtube.com/channel/UCzFwMYXv_xHmd0SnDdoGXMw' title='https://www.youtube.com/channel/UCzFwMYXv_xHmd0SnDdoGXMw' style='cursor: pointer; color: rgb(51, 122, 183);'>https://www.youtube.com/channel/UCzFwMYXv_xHmd0SnDdoGXMw</a></p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-04-28',
            'created_at'    => '2021-04-28',
            'updated_at'    => '2021-04-28'
        ]);

        Publication::create([
            'slug'          => 'priglasaem-prinyat-ucastie-v-marafone-novoe-znanie',
            'preview_image' => null,
            'preview_text'  => '21 мая в рамках Марафона на сайте российского общества «Знание» будет проведен «открытый урок» для студентов образовательных организаций высшего образования.',
            'title'         => "Приглашаем принять участие в марафоне 'Новое Знание'",
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>21 мая в рамках Марафона на сайте российского общества «Знание» (<a href='https://marathon.znanierussia.ru/' title='https://marathon.znanierussia.ru/' style='cursor: pointer; color: rgb(51, 122, 183);'>https://marathon.znanierussia.ru/</a>) будет проведен «открытый урок» для студентов образовательных организаций высшего образования.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'><span style='font-weight: 700;'>Спикерами мероприятия станут:</span></p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>9:45 - 10:00 по московскому времени - Фальков Валерий Николаевич, Министр науки и высшего образования Российской Федерации, приветственное слово;</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>10:00 - 11:00 по московскому времени - Ященко Иван Валериевич - известный российский математик, исполнительный директор Московского центра непрерывного математического образования, тема выступления: «Почему математика в современном мире нужна всем и каждому»;</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>11:45 - 12:45 по московскому времени Лавров Сергей Викторович - Министр иностранных дел Российской Федерации, тема выступления: «Актуальные уроки международных отношений»;</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>13:00 - 14:00 по московскому времени - Мединский Владимир Ростиславович - Помощник Президента Российской Федерации, тема выступления: «Мифы о русской истории».</p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-04-29',
            'created_at'    => '2021-04-29',
            'updated_at'    => '2021-04-29'
        ]);

        Publication::create([
            'slug'          => 'rezultaty-konkursa-metodiceskix-rabot-dlya-publikacii-v-sbornike-pedagogiceskii-debyut',
            'preview_image' => null,
            'preview_text'  => 'Подведены итоги конкурса методических работ для публикации в сборнике «Педагогический дебют» (июнь, 2021).',
            'title'         => 'Результаты конкурса методических работ для публикации в сборнике «Педагогический дебют»',
            'description'   => "<p><span style='color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Подведены итоги конкурса методических работ для публикации в сборнике «Педагогический дебют» (июнь, 2021).</span><br></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-05-05',
            'created_at'    => '2021-05-05',
            'updated_at'    => '2021-05-05'
        ]);

        Publication::create([
            'slug'          => 'v-mezregionalnyi-slyot-studenceskix-stroitelnyx-otryadov',
            'preview_image' => 'fa9a9cf6-3c20-4e75-9332-c1bc6024aa08.jpg',
            'preview_text'  => "С 11 по 12 мая на базе ДОЛ 'Зелёные дубки' в городе Күмертау состоялся V Межрегиональный слет студенческих строительных отрядов.",
            'title'         => 'V межрегиональный слёт студенческих строительных отрядов',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>С 11 по 12 мая на базе ДОЛ 'Зелёные дубки' в городе Күмертау состоялся V Межрегиональный слет студенческих строительных отрядов.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Более 100 студентов съехались с Республики Башкортостан и Оренбургской области на практическое обучение по рабочим профессиям, где приняли участие и студенты нашего Бирского филиала БашГУ, состоящие в студенческом строительныйом отряд «Мираж»</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Участники слёта прошли производственную практику и сдали квалифицированный экзамен, предварительно овладев теоретическими знаниями по своим направлениям. По итогам экзаменов студентам вручили свидетельства о получении рабочей профессии, что даёт возможность участвовать на Всероссийских и Международных стройках.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Кроме мероприятий непосредственно рабочего характера, участникам организовали и развлекательную программу. Студенты, объединившись в команды, подготовили концертные номера к торжественному открытию слёта.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Вечерняя программа юбилейного слета завершилась дискотекой «Open-air» и красочным фейерверком.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Кульминационным моментом для бойцов стала утренняя «Зарядка со звездой», в которой гостем программы выступил мастер спорта России, многократный чемпион Российской Федерации по лыжным гонкам, участник зимних Паралимпийских игр в Турине, тренер паралимпийской сборной Республики Башкортостан по лыжным гонкам и биатлону – Владимир Казаков.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Завершился V Межрегиональный слет студенческих строительных отрядов Республики Башкортостан и Оренбургской области вручением свидетельств о получении рабочей профессии, которые станут путевками на студенческие стройки необъятной страны.</p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-05-14',
            'created_at'    => '2021-05-14',
            'updated_at'    => '2021-05-14'
        ]);

        Publication::create([
            'slug'          => 'studenty-birskogo-filiala-basgu-stali-pobeditelyami-i-prizerami-vserossiiskogo-konkursa-naucnyx-statei-studentov',
            'preview_image' => null,
            'preview_text'  => 'Институт ФГБОУ ВО 28-30 апреля 2021 года организовал XXI Всероссийскую (с международным участием) научно-практическую конференцию.',
            'title'         => 'Студенты Бирского филиала БашГУ стали победителями и призерами Всероссийского конкурса научных статей студентов.',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Поздравляем студентов кафедры РГФиЛ факультета филологии и межкультурных коммуникаций Сайфутдинову Луизу, Иванову Анастасию, Глимнурову Эльвину, ставших победителем и призерами Всероссийского конкурса научных статей студентов!<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Институт филологического образования и межкультурных коммуникаций ФГБОУ ВО «Башкирский государственный педагогический университет им. М. Акмуллы» 28-30 апреля 2021 года организовал XXI Всероссийскую (с международным участием) научно-практическую конференцию «Система непрерывного филологического образования: школа – колледж – вуз. Современные подходы к преподаванию дисциплин филологического цикла в условиях полилингвального образования». В рамках конференции был организован Всероссийский конкурс научных статей студентов «Филология в научном и образовательном пространстве», на который могли быть представлены работы по следующим направлениям:</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>• проблемы обучения русскому языку в современной школе;<br>• проблемы обучения литературе в современной школе;<br>• проблемы изучения и преподавания русского языка как иностранного;<br>• актуальные аспекты изучения русской литературы;<br>• актуальные аспекты изучения зарубежной литературы;<br>• актуальные проблемы татарского и сопоставительного языкознания, обучения родному языку;<br>• актуальные вопросы иноязычного образования в школе и вузе;<br>• теория и практика переводческой деятельности;<br>• актуальные вопросы лексикологии современного английского языка;<br>• актуальные проблемы германской филологии;<br>• актуальные проблемы романской филологии.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Электронные версии заявок для участия в конференции и статьи для публикации принимались до 15 апреля 2021.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Зав. кафедрой РГФиЛ профессор Ю.В. Горшунов инициировал участие в конкурсе ряда студентов отделения иностранных языков. На приглашение организаторов конкурса и призыв заведующего откликнулись студенты-выпускники кафедры РГФиЛ Иванова Анастасия и Сайфутдинова Луиза, написавшие свои статьи по материалам ВКР, и студенты 4 курса Южанинова Сюзанна, Глимнурова Эльвина, Галимзянова Милена, представившие статьи по выбранным для исследования темам, разработанным на кафедре.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Статья Сайфутдиновой Луизы «Феномен «политкорректность» как важный компонент формирования социокультурной и социолингвистической компетенции» (научный руководитель д.ф.н., проф. Горшунов Ю.В.), ставшей победителем и занявшей первое место в номинации «Актуальные вопросы иноязычного образования в школе и вузе», будет опубликована в журнале «Вестник БГПУ», статьи призеров Ивановой Анастасии (научный руководитель к.ф.н Бодулева А.Р.) в номинации «Актуальные вопросы иноязычного образования в школе и вузе» и Глимнуровой Эльвины (научный руководитель д.ф.н., проф. Горшунов Ю.В.) в номинации «Актуальные вопросы лексикологии современного английского языка» будут опубликованы в тематическом разделе сборника трудов XXI Всероссийской (с международным участием) научно-практической конференции «Система непрерывного филологического образования: школа – колледж – вуз».</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Оргкомитет конкурса наградил Благодарственными письмами научных руководителей победителей и призеров – д.ф.н, проф. Горшунова Ю.В. и к.ф.н., доц. Бодулеву А.Р.</p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-05-15',
            'created_at'    => '2021-05-15',
            'updated_at'    => '2021-05-15'
        ]);

        Publication::create([
            'slug'          => 'boicy-staba-studenceskix-otryadov-prinyali-ucastie-v-otkrytii-tretego-trudovogo-semestra-studenceskix-otryadov-respubliki-baskortostan',
            'preview_image' => '71e40117-1613-44f3-b5e2-b71022c6444a.jpg',
            'preview_text'  => '27 мая в столице нашей Республики, в городском центре Арт - квадрат, состоялось торжественное открытие третьего трудового семестра студенческих отрядов Республики Башкортостан.',
            'title'         => 'Бойцы штаба студенческих отрядов приняли участие в открытии третьего трудового семестра студенческих отрядов Республики Башкортостан',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>27 мая в столице нашей Республики, в городском центре Арт - квадрат, состоялось торжественное открытие третьего трудового семестра студенческих отрядов Республики Башкортостан.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Участие в праздновании приняли более 500 студентов с разных уголков Башкирии.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Бойцы штаба студенческих отрядов Бирского филиала Башкирского Государственного университета присоединились к значимому событию</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Участниками делигации торжественного открытия третьего трудового семестра студенческих отрядов Башкортостанского Регионального Отделения МООО «РСО» от штаба БФ БашГУ стали бойцы и кандидаты студенческого отряда проводников «Меридиан», студенческого строительного отряда «Мираж», студенческого сервисного отряда «Медуза», студенческого педагогического отряда «Маяк» и студенческого сельскохозяйственного отряда «Мята» в количестве 25 человек.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Возможность стать ведущими мероприятия так же досталась студентам социально - гуманитарного факультета нашего ВУЗа - Кузнецовой Анне и Ишкуатову Андрею</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Открытие трудового семестра является традиционным мероприятием Российских студенческих отрядов перед началом трудового сезона, на котором каждый отряд получает путёвку – документ, свидетельствующий о направлении на работу на трудовой объект.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>В программу мероприятия вошли:</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Бульвар творчества (мастер классы от партнёров, аквагрим);</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Арт-пространство студенческих отрядов Башкортостана;</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Гайд-парк «Не словом, а делом про труд» организованный совместно с Лигой молодежной политики.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Зумба от Лицензированного инструктора Zumba® Fitness - Алсу Утягановой</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Торжественная линейка, посвященная Открытию трудового семестра Студенческих отрядов Республики Башкортостана</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Мы знаем точно, что Труд - Крут!</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Благодарим за яркие эмоции, возможность собраться всем вместе, пообщаться, поделиться идеями для предстоящей работы и отлично провести время!</p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-05-28',
            'created_at'    => '2021-05-28',
            'updated_at'    => '2021-05-28'
        ]);

        Publication::create([
            'slug'          => 'studentka-kolledza-bf-basgu-zanyala-ii-mesto-na-pervenstve-evropy-po-girevomu-sportu',
            'preview_image' => 'f7c43e54-1498-490d-892d-94b73e159753.jpg',
            'preview_text'  => 'С 27 по 30 мая 2021 года в г. Казань проводился чемпионат Европы по гиревому спорту. В соревнованиях приняли участие более 300 спортсменов из 11 стран.',
            'title'         => 'Студентка колледжа БФ БашГУ заняла II место на Первенстве Европы по гиревому спорту',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>С 27 по 30 мая 2021 года в г. Казань проводился чемпионат Европы по гиревому спорту. В соревнованиях приняли участие более 300 спортсменов из 11 стран.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>В весовой категории 68 кг в составе сборной команды Российской Федерации Кашапова Розана, студентка колледжа Бирского филиала БашГУ, заняла II место на Первенстве Европы среди юниоров и юниорок.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Розана – воспитанница талантливого тренера Радамира Минигалимовича Минибаева, который подготовил уже очень много чемпионов, мастеров и кандидатов спорта как для нашей республики, так и для России. Начала заниматься гиревым спортом в 15 лет, на тренировки к Радамиру Минигалимовичу пришла сразу после поступления в колледж в 2019 году.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>До Первенства Европы 2021 года студентка уже имела не мало спортивных достижений: чемпионка Башкирии, рекордсменка Башкирии, бронзовый призер России 2019 года, серебряный призер России 2021 года.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Поздравляем Розану со званием «серебренного призера Первенства Европы 2021», желаем крепкого здоровья и новых достижений!</p><div><br></div></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-05-31',
            'created_at'    => '2021-05-31',
            'updated_at'    => '2021-05-31'
        ]);

        Publication::create([
            'slug'          => 'den-otkrytyx-dverei-birskogo-filiala-bgu-v-ilisevskom-raione',
            'preview_image' => '12.jpg',
            'preview_text'  => 'Прошел День открытых дверей Бирского филиала БГУ в Илишевском районе РБ.',
            'title'         => 'День открытых дверей Бирского филиала БГУ в Илишевском районе',
            'description'   => "<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>28 апреля прошел День открытых дверей Бирского филиала БГУ в Караидельском районе РБ. При содействии отдела образования на базе МБОУ СОШ № 1 с. Караидель собрались учащиеся 11 классов. Встретил преподавателей директор школы Ильясов Рустам Марселевич.<p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>О Бирском филиале БашГУ, о правилах приёма рассказала начальник отдела довузовской подготовки  Сайсанова Галина Даниловна. Далее преподаватели провели открытые занятия и мастер-классы по системе подготовки к ЕГЭ по основным предметам. В состав профориентационной группы вошли следующие преподаватели Бирского филиала БашГУ: к.б.н., доцент кафедры биологии, экологии и химии Матвеева А.Ю.,  к.х.н., доцент кафедры биологии, экологии и химии Махмутов А.Р.; к.ф.-м.н., доцент кафедры высшей математики и физики Рахматуллин М.Т.; к.ист.н., доцент, заведующий кафедрой истории, философии и социально-гуманитарных наук Александров А.П.; ст. преподаватель кафедры высшей математики и физики Гилёва О.В.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Учащиеся слушали внимательно, с большим интересом, задавали вопросы. Встреча прошла в дружественной обстановке.</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Мы желаем выпускникам Караидельского района успехов и удачи при сдаче ЕГЭ!   Надеемся, многие из них  станут  студентами Бирского филиала Башкирского государственного университета!</p><p style='margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(51, 51, 51); font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 16px;'>Благодарим организаторов данного мероприятия! Будем рады дальнейшему сотрудничеству!</p></p>",
            'is_published'  => true,

            'user_id'       => 1,

            'published_at'  => '2021-06-01',
            'created_at'    => '2021-06-01',
            'updated_at'    => '2021-06-01'
        ]);
    }
}

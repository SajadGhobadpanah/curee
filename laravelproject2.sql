-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 06:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelproject2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align:right\"><span style=\"font-size:16px\">ما در اینجا بدنبال افزایش سطح سلامت افراد جامعه و ارائه خدمات آنلاین پزشکی و سلامتی هستیم. افزایش آگاهی افراد نسبت به موضوع&nbsp; &nbsp;بهداشت و سلامت،&zwnj;بهبود ارائه خدمات پزشکی،&zwnj; ایجاد جریان آزاد اطلاعات و شفافیت در این زمینه دغدغه ماست زیرا ما معتقدیم</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:22px\"><span style=\"color:#2ecc71\">!با ارزش ترین ثروت سلامتی است!</span></span></p>\r\n\r\n<p style=\"text-align:right\"><span style=\"font-size:16px\">&nbsp;من سعید حمزوی نیا کارشناس پرستاری به همراه تیمی مجرب از پرستاران کشور آماده ی ارایه ی&nbsp; خدمت به هم میهنان خود در استان اصفهان هستیم</span></p>\r\n\r\n<p style=\"text-align:right\"><u><strong><span style=\"font-size:۱۸px\">راه های ارتباطی ما</span></strong></u></p>\r\n\r\n<p style=\"text-align:right\"><span style=\"font-size:24px\">&nbsp; &nbsp;www.saedhamzavi@gmail.com</span></p>\r\n\r\n<p style=\"text-align:right\"><span style=\"font-size:24px\">&nbsp;۰۹۱۳۱۱۱۲۲۳۳</span></p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>', NULL, '2022-03-12 09:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `active_codes`
--

CREATE TABLE `active_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` int(11) NOT NULL,
  `expire_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `content`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'پیشگیری از سرما خوردگی', '/images/articles/0.jpg', '<p dir=\"rtl\"><span style=\"font-size:14px\">هنگامی که سرماخوردگی به سراغتان می&zwnj;آید، تمام کاری که می&zwnj;توانید انجام دهید این است که روی تخت دراز بکشید، انواع ویتامین&zwnj;ها را اطراف خود قرار دهید و منتظر بمانید تا ویروس&zwnj;ها تصمیم بگیرند از بدنتان خارج شوند. اما، بهترین کار این است که از همان آغاز نگذارید این ویروس به بدنتان راه یابد. می&zwnj;پرسید چگونه؟ خوشبختانه، کارهایی که باید برای&nbsp;<strong>پیشگیری از سرما خوردگی</strong>&nbsp;انجام دهید، خیلی دشوار نیست و در مقاله&zwnj;ی زیر آنها را معرفی کرده&zwnj;ایم. پس، با ما همراه شوید.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:20px\"><strong>سرماخوردگی چیست؟</strong></span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">سرماخوردگی نوعی عفونت ویروسی در نواحی گلو، بینی یا دستگاه تنفسی فوقانی شماست. انواع مختلفی از ویروس&zwnj;ها باعث سرماخوردگی می&zwnj;شوند، اما شایع&zwnj;ترین عامل سرماخوردگی در انسان&zwnj;ها و عامل اصلی بیماری سرماخوردگی &laquo;راینوویروس&raquo; است.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">هنگام سرماخوردگی،&nbsp;&nbsp;گلو درد، سرفه، گرفتگی بینی،&nbsp;کوفتگی بدن، سر درد، عطسه و تب شما را حسابی خسته می&zwnj;کند. این علائم خطرناک نیستند، اما به طور معمول دو هفته طول می&zwnj;کشد تا کمی بهبود یابید.</span></p>\r\n\r\n<p style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\">چگونه در ماه&zwnj;های سرد، خود را از افتادن به دام سرماخوردگی نجات دهید؟</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">پیش از هر چیز باید بکوشید بیماری را به بدنتان راه ندهید. راه&zwnj;های زیادی وجود دارد که از سرماخوردگی جلوگیری می&zwnj;کنند یا دست کم مدت زمان آن را کاهش می&zwnj;دهد. در ادامه شماری از راهکارهای کاربردی برای پیشگیری از سرما خوردگی در تمام فصول را می خوانید:</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:20px\"><strong>۱. از دستگاه مرطوب کننده&zwnj;ی هوا یا بخور استفاده کنید.</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">کمبود رطوبت مجاری تنفسی شما را خشک می&zwnj;کند. به دنبال آن میکروب&zwnj;های موجود در سینوس به راحتی به دام نمی&zwnj;افتند و از بین نمی&zwnj;روند. این امر در نهایت منجر به سرماخوردگی می&zwnj;شود. راه حل این است که به محض احساس خشکی هوا از یک دستگاه مرطوب کننده یا بخور استفاده کنید. دستگاه بخور غشای مخاطی را مرطوب نگه می&zwnj;دارد. خشکی غشای مخاطی بینی توانایی بدن برای به دام انداختن میکروب&zwnj;ها را کاهش می&zwnj;دهد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/2.jpg\" style=\"border-style:solid; border-width:5px; height:220px; margin:1px; width:330px\" /></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">دستگاه بخور را تمیز نگه دارید، زیرا محیط گرم و مرطوب زمینه&zwnj;ی پرورش قارچ&zwnj;ها را فراهم می&zwnj;کند. (اگر به این شرایط حساسیت (آلرژی) داشته باشید، خود این امر سبب بروز علائمی شبیه سرماخوردگی می&zwnj;شود.)</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:20px\">۲. ویتامین D مصرف کنید.</span></p>\r\n\r\n<p dir=\"rtl\"><img alt=\"\" src=\"/images/articles/3.jpg\" style=\"border-style:solid; border-width:5px; height:173px; margin:1px; width:330px\" /></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">بر اساس تحقیقات افرادی که ویتامین D کافی دریافت نمی&zwnj;کنند، بیشتر از آنهایی که این ویتامین را به میزان کافی مصرف می کنند، در معرض ابتلا به عفونت دستگاه تنفسی فوقانی (که با علائمی نظیر سرفه، گلو درد و گرفتگی بینی همراه است) قرار دارند. زیرا سلول های شما برای فعال کردن واکنش مقابله با عفونت به ویتامین D وابسته اند. برخی مطالعات نشان می دهد مصرف ۴۰۰ واحد بین المللی ویتامین D در روز از عفونت دستگاه تنفسی پیگشیری می&zwnj;کند.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\"><a href=\"https://ods.od.nih.gov/factsheets/VitaminD-Consumer/\" rel=\"nofollow external noopener noreferrer\"><em>طبق گزارش مؤسسه&zwnj;ی ملی سلامت امریکا</em></a>&nbsp;(NIH)، اغلب بزرگسالان باید برای سلامتی و پیشگیری از سرما خوردگی هر روز حداقل ۶۰۰ واحد بین المللی ویتامین D مصرف کنند، اما برخی سازمان&zwnj;های دیگر مصرف مقدار بیشتری را توصیه کرده&zwnj;اند. ویتامین D کافی فقط از طریق رژیم غذایی دریافت نمی&zwnj;شود.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:۱۴px\"><span style=\"font-size:14px\">مصرف ماهی سالمون، گوشت گاو، زرده&zwnj;ی تخم مرغ، شیر، آب پرتقال غنی شده، پنیر، و قارچ تا حدی&nbsp;<a href=\"https://lafarrerr.com/blog/benefits-vitamin-d/\" rel=\"noopener noreferrer\">ویتامین D</a>&nbsp;موردنیاز شما را تأمین می&zwnj;کند. همچنین، می&zwnj;توانید در صورت نیاز پس از مشورت با پزشک خود از مکمل&zwnj;های مناسب نیز استفاده کنی</span>د.</span></p>\r\n\r\n<p style=\"direction:rtl\"><span style=\"font-size:20px\">۳. دست&zwnj;هایتان را به طور مرتب بشویید و آنها را از چشم، بینی و دهان خود دور نگه دارید.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:۱۴px\">ممکن است متوجه نباشید، اما واقعیت این است که احتمالاً در طول روز بارها صورت خود را با دست لمس می کنید. تحقیقی که در سال ۲۰۰۸ انجام شد، نشان می&zwnj;دهد هر فرد به طور میانگین ۱۶ بار در ساعت صورت خود را لمس می کند.</span></p>\r\n\r\n<p dir=\"rtl\"><img alt=\"\" src=\"/images/articles/4.jpg\" style=\"border-style:solid; border-width:5px; height:189px; margin:1px; width:330px\" /></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">هنگامی که از طریق تماس با فردی دیگر یا لمس سطوح آلوده به میکروب در معرض یک ویروس قرار می&zwnj;گیرید، شستشوی ناکافی و نامناسب دست ها زمینه&zwnj;ی ورود آن به بدنتان را فراهم می&zwnj;کند. ویروس ها از طریق تماس&zwnj;هایی نظیر دست دادن نیز منتقل می&zwnj;شوند. از این رو، بهتر است تماس&zwnj;های فیزیکی خود را تا حد ممکن کاهش دهید، به این ترتیب از ورود میکروب&zwnj;ها به غشای مخاطی (بینی و دهان) و بیمار شدن خود جلوگیری خواهید کرد.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">برای پیشگیری از سرما خوردگی دست&zwnj;های خود را به خوبی بشویید و از&nbsp;<a href=\"https://lafarrerr.com/%D۹%۸۵%D۸%B۱%D۸%B۷%D۹%۸۸%D۸%A۸-%DA%A۹%D۹%۸۶%D۹%۸۶%D۸%AF%D۹%۸۷\" rel=\"noopener noreferrer\">مرطوب کننده مناسب</a>&nbsp;استفاده کنید. یعنی آنها را حداقل به مدت ۲۰ ثانیه با صابون یا اسکراب شستشو دهید و بین انگشتان و زیر ناخن&zwnj;های خود را فراموش نکنید. اگر به آب و صابون دسترسی ندارید، از ضد عفونی کننده&zwnj;ی دست استفاده کنید.</span></p>\r\n\r\n<p style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\">۴. تلفن همراه خود را ضدعفونی کنید.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">به سطوح مختلفی که هر روز تلفن همراه خود را روی آن قرار می&zwnj;دهید، فکر کنید: پیشخوان آشپزخانه، میز رستوران، میز جلسه. همه&zwnj;ی این محیط ها میکروب زیادی را در خود جای داده اند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><a href=\"https://cals.arizona.edu/news/why-your-cellphone-has-more-germs-toilet\" rel=\"nofollow external noopener noreferrer\"><em>محققان دانشگاه آریزونا</em>&nbsp;</a>در سال ۲۰۱۲ پژوهشی را انجام دادند و به این نتیجه رسیدند که تلفن همراه از نظر مقدار باکتری از صندلی توالت ۱۰ برابر آلوده&zwnj;تر است.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">می&zwnj;توانید تلفن همراه خود را با دستمال مرطوب ضد عفونی کننده، تمیز کنید. این کار را زمانی که تلفن همراه&zwnj;تان خاموش است انجام دهید، سپس، با دستمال یا پارچه&zwnj;ی نرم، آن را خشک کنید. به یاد داشته باشید که مواد ضدعفونی کننده برای از بین بردن ویروس&zwnj;ها و پیشگیری از سرما خوردگی گزینه&zwnj;های مناسبی هستند، اما مواد موجود در آنها ممکن است به تلفن همراه شما آسیب برساند.</span></p>\r\n\r\n<p style=\"direction:rtl\"><span style=\"font-size:20px\">۵. زمانی را به استراحت اختصاص دهید.</span></p>\r\n\r\n<p style=\"direction:rtl\"><img alt=\"\" src=\"/images/articles/5.jpg\" style=\"border-style:solid; border-width:5px; height:183px; margin:1px; width:330px\" /></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">بد نیست بدانید بر اثر اضطراب و استرس بدن شما هورمون کورتیزول را ترشح می&zwnj;کند. این هورمون توانایی سیستم ایمنی بدن برای مبارزه با عفونت را کاهش می&zwnj;دهد و راه سرماخوردگی را باز می&zwnj;کند.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">پس آرامش خود را در اولویت قرار دهید. می&zwnj;توانید برای کسب آرامش بیشتر یوگا یا مدیتیشن را امتحان کنید. همچنین، پس از کار، پیاده&zwnj;روی در طبیعت، وقت گذرانی با خانواده یا دوستان و به طو کلی هر فعالیت دیگری را که به آرامش شما کمک می&zwnj;کند، انجام دهید.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"rtl\">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 9, '2022-03-11 12:45:26', '2022-03-12 21:08:05'),
(3, 'پاراسومنیا یا خواب پریشی', '/images/articles/00.jpg', '<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h1 style=\"direction:rtl; text-align:justify\">همه چیز درباره پاراسومنیا یا خواب پریشی</h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">واژه&nbsp;<strong>پاراسومنیا&nbsp;</strong>(خواب پریشی) شاید بسیار ناآشنا باشد اما حتماً برای شما هم پیش آمده که نتوانید به سادگی به خواب بروید یا هنگام بیدار شدن از خواب، حس کنید اصلاً خواب شبانه مطلوبی نداشته&zwnj;اید. اختلالات خواب مشکلات شایعی هستند که درصد قابل توجهی از افراد جامعه را در سنین مختلف درگیر می&zwnj;کنند و توجه به آن&zwnj;ها اهمیت زیادی دارد. چرا که کیفیت زندگی روزمره ما، با کیفیت خوابمان ارتباط تنگاتنگی دارد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/6.jpg\" style=\"border-style:solid; border-width:3px; height:186px; width:330px\" /></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">پاراسومنیا اصطلاحی جامع برای تعریف رفتارهای غیرمعمول یا حوادث ناخواسته&zwnj;ای است که افراد قبل از به خواب رفتن، هنگام خواب یا در طول دوره انگیختگی (Arousal period) بین خواب و بیداری تجربه می&zwnj;کنند. این رفتارها از نظر خصوصیات، شدت و دفعات به میزان قابل توجهی باهم تفاوت دارند. خواب پریشی در کودکان بیشتر از بزرگسالان شایع است اما این رفتارها در گروه&zwnj;های سنی مختلف ثبت شده&zwnj;اند.</span></p>\r\n\r\n<p style=\"direction:rtl\"><span style=\"font-size:14px\">با ما همراه باشید تا اطلاعات مفیدی در مورد پاراسومنیا و رویکردهای درمانی آن کسب کنید.</span></p>\r\n\r\n<h2 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\">پاراسومنیا و مراحل خواب</span></h2>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">از آنجا که بسیاری افراد تا مدت&zwnj;ها نسبت به درگیری خود با پاراسومنیا آگاه نیستند، و این اختلالات می&zwnj;تواند باعث بروز انواع مشکلات مربوط به سلامتی شود، دانستن این&zwnj; که هر اختلال مربوط به کدام مرحله است، می&zwnj;تواند به شما در تشخیص دلیل بدخوابی یا خستگی&zwnj; مداوم&zwnj;تان کمک کند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">خواب انسان از دو مرحله REM و Non-REM تشکیل شده&zwnj; است که به دنبال هم به صورت یک چرخه در طول خواب تکرار می&zwnj;شوند. REM به معنای حرکات سریع چشم است که این ویژگی در مرحله Non-REM وجود ندارد. خواب انسان با مرحله Non-REM شروع می&zwnj;شود و به دنبال آن برای مدت کوتاهی وارد مرحله REM و خواب عمیق می&zwnj;شود و مجدداً این چرخه تکرار می&zwnj;شود.</span></p>\r\n\r\n<h2 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\">انواع پاراسومنیای مربوط به مرحله NREM</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">شایع&zwnj;ترین پاراسومنیای مربوط به مرحله NREM با عنوان اختلالات دوره انگیختگی (حالت گذار از وضعیت خواب به بیداری) شناخته می&zwnj;شود. در این نوع خواب پریشی افراد دچار دوره&zwnj;های مکرر بیداری ناکامل و هوشیاری محدود در طول حمله هستند؛ همچنین اگر کسی سعی کند در زمان بروز این اختلال، آن&zwnj;ها را بیدار کند یا به تصور اینکه بیدار هستند، با آن&zwnj;ها گفتگو کند، ممکن است پاسخ&zwnj;های کوتاه یا نامفهومی به او بدهند. اکثر افرادی که این نوع اختلالات انگیختگی را تجربه می&zwnj;کنند، از اتفاقاتی که در طول حملات بر آن&zwnj;ها گذشته هیچ&zwnj;چیز را به یاد نمی&zwnj;آورند.</span></p>\r\n\r\n<p style=\"direction:rtl\"><span style=\"font-size:14px\">این اختلالات را در ادامه با هم می&zwnj;خوانیم.</span></p>\r\n\r\n<h3 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\">1) انگیختگی همراه با گیجی (CONFUSIONAL AROUSALS)</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">این نوع بیداری زمانی اتفاق می&zwnj;افتد که به نظر می&zwnj;رسد فرد از خواب بیدار شده است اما رفتارهای او غیرمعمول یا عجیب&zwnj;اند. ممکن است فرد گیج باشد، واکنشی به محیط اطرافش نشان ندهد، آهسته حرف بزند یا افکاری پریشان و سردرگم داشته باشد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">این نوع انگیختگی&zwnj;های همراه با گیجی&zwnj; معمولاً در دو الی سه ساعت اول خواب -هنگام گذار از خواب عمیق به یک مرحله سبک&zwnj;تر- رخ می&zwnj;دهند. این دوره ممکن است تنها چند دقیقه طول بکشد یا برای مدت&zwnj;زمان طولانی&zwnj;تری ادامه داشته باشد. معمولاً افراد روز بعد از این نوع انگیختگی، یا &zwnj;چیزی از آن به خاطر نمی&zwnj;آورند یا اطلاعات کمی به یاد دارند. این نوع انگیختگی همراه با سردرگمی در هر سنی ممکن است رخ دهد، اما بیشتر در کودکان مشاهده می&zwnj;شود.</span></p>\r\n\r\n<p style=\"direction:rtl\"><span style=\"font-size:14px\">برخی از عوامل محرکی که ممکن است موجب این اختلال شوند عبارت&zwnj;اند از:</span></p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\">اختلالات خواب ناشی از مشکلات سلامتی (مانند تب)</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\">سفر</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\">بی&zwnj;خوابی ناگهانی</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\">میگرن</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\">برنامه&zwnj;های نامنظم خواب و بیداری</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\">برخی از مشکلات پزشکی مانند آسم شبانه</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:16px\">عوامل مختل&zwnj;کننده خواب مانند آپنه (وقفه تنفسی) یا سندرم پای بی&zwnj;قرار</span></li>\r\n</ul>\r\n\r\n<h3 style=\"direction:rtl\"><span style=\"font-size:20px\">2) راه رفتن در خواب، یک پاراسومنیای قابل درمان</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">راه&zwnj;رفتن در خواب یا خواب&zwnj;گردی هنگامی رخ می&zwnj;دهد که فرد در حالی که هنوز خواب است از رختخواب خارج می&zwnj;شود؛ اما هوشیاری یا واکنش&zwnj;پذیری محدودی نسبت به محیط اطراف خود دارد. در این حالت فرد ممکن است رفتارهای پیچیده دیگری از خود نشان دهد. برای مثال، لباس&zwnj;های خود را مرتب کند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">راه&zwnj;رفتن در خواب گاهی می&zwnj;تواند به افراد آسیب بزند چون ممکن است فرد با اشیاء سر راه خود برخورد کند یا تعادل خود را از دست بدهد.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">مشکلاتی مانند خستگی مفرط، استرس یا اضطراب، کمبود خواب، بیماری، محرک&zwnj;های فیزیولوژیک مانند مثانه پر یا مصرف الکل اغلب می&zwnj;تواند موجب این نوع خواب پریشی شود. در موارد خاص، خواب&zwnj;گردی پس از ارزیابی&zwnj;های مناسب با مصرف مقدار کمی از داروهای مشخص، قابل درمان است.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/7.jpg\" style=\"border-style:solid; border-width:4px; height:214px; width:330px\" /></span></p>\r\n\r\n<h3 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\">3) وحشت شبانه (وحشت خواب)</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">اختلال وحشت شبانه با وحشت و ترس شدید مشخص می&zwnj;شود، به صورتی که فرد به&zwnj;طور موقت نمی&zwnj;تواند به هوشیاری کامل دست پیدا کند. در این حالت فرد ناگهان رفتارهای ترس شدید، وحشت، گیجی یا تمایل به فرار از خود نشان می&zwnj;دهد.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">بیشتر حملات وحشت شبانه بین 30 ثانیه تا سه دقیقه طول می&zwnj;کشند. گفته می&zwnj;شود که استرس عاطفی در طول روز، خستگی یا ایجاد بی&zwnj;نظمی در روتین خواب و بیداری، باعث تشدید این حملات می&zwnj;شود. بنابراین، تلاش برای رفع هریک از این عوامل محرک، به کاهش حملات وحشت شبانه کمک می&zwnj;کند.</span></p>\r\n\r\n<p style=\"direction:rtl\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>', 3, '2022-03-12 18:21:27', '2022-03-13 20:37:33'),
(4, 'حفظ سلامت پا', '/images/articles/000.jpg', '<h1 style=\"direction:rtl; text-align:justify\">اهمیت حفظ سلامت پا در زندگی روزمره از جوانی تا کهن&zwnj;سالی</h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">گاهی اوقات بسیاری از افراد تا زمانی که درد پا و مشکلات دیگر را در این ناحیه تجربه نکنند، از سلامت پاهای خود غافل&zwnj;اند و برای بهداشت پای خود فکری نمی&zwnj;کنند. بیشتر خانم&zwnj;ها حداقل سالی یک &zwnj;بار دندان&zwnj;هایشان را جرم&zwnj;گیری و سفید می&zwnj;کنند، به سلامت سیستم قلب و گردش خون خود توجه ویژه&zwnj;ای دارند و حتی ممکن است سالانه به چشم&zwnj;پزشکی مراجعه کنند. اگرچه ممکن است خانم&zwnj;ها ناخن&zwnj;های پای خود را به&zwnj;&zwnj;طور منظم کوتاه کنند و لاک بزنند، اما آن&zwnj;ها غالباً به فکر سلامت پایشان نیستند.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">این عدم توجه ممکن است به بروز&nbsp;<a href=\"https://lafarrerr.com/blog/leg-pain/\" rel=\"noopener noreferrer\">درد پا</a>&nbsp;و مشکلات دیگر منجر شود. با وجود اینکه مشکلات مربوط به پا مسائل شایعی هستند، اما در این میان زندگی برخی از افراد به&zwnj; واسطه این عوارض تحت تأثیر قرار می&zwnj;گیرد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">برای حفظ<strong>&nbsp;سلامت پا</strong>&nbsp;نیاز است نکات و چگونگی مراقبت صحیح از آن&zwnj;ها را بدانید، با ما تا پایان این مطلب همراه باشید.</span></p>\r\n\r\n<h2 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\"><strong>چگونه ساختار پا در گذر زمان تغییر می&zwnj;کند؟</strong></span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">با گذر زمان، تغییرات طبیعی در پاها باعث ایجاد درد در آن&zwnj;ها می&zwnj;شود. در ادامه به برخی از تغییراتی اشاره&zwnj; شده که فرد ممکن است در طول دهه&zwnj;های مختلف زندگی در پای خود مشاهده کند.</span></p>\r\n\r\n<h3 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\"><strong>دهه چهارم زندگی (30 سالگی)</strong></span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">در این مرحله از زندگی، روند ضعف و کاهش انعطاف&zwnj;پذیری عضلات، تاندون&zwnj;ها و رباط&zwnj;های پا آغاز می&zwnj;شود. پس حتی اگر تا این سن ورزش و تغذیه مناسب را جدی نگرفته&zwnj;اید، اکنون ضرورت آن را حس می&zwnj;کنید. البته اگر اصلاً اهل ورزش نبوده&zwnj;اید، در صورتی که بدون ایجاد آمادگی شروع به ورزش یا دویدن کنید، احتمال ایجاد شکستگی تنشی را در استخوان&zwnj;های پای خود افزایش می&zwnj;دهید. پس بهتر است به آرامی شروع کنید و از انجام حرکات شدید بپرهیزید.</span></p>\r\n\r\n<h3 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\"><strong>دهه پنجم زندگی (40 سالگی)</strong></span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">ین دهه، زمانی است که بسیاری از افراد دچار درد پا و مشکلات ناشی از ضعیف شدن ساختارهای پا می&zwnj;شوند که از 30 سالگی شروع شده&zwnj; است. بسیاری از افراد در این رده سنی در انتهای یک روز طولانی، متوجه درد پاهای خود شده و اغلب دچار مشکلات پا می&zwnj;شوند.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">از بیماری&zwnj;های شایع در این سن می&zwnj;توان به انحراف شست پا (بونیون) اشاره کرد که به دلیل تراز نبودن استخوان پا ایجاد و باعث بروز برآمدگی استخوانی در پایه انگشت شست می&zwnj;شود. همچنین بیماری انگشتان چکشی (انگشتانی که به&zwnj; طور دائمی به سمت پایین خم &zwnj;شده&zwnj;اند) و قارچ ناخن پا نیز از بیماری&zwnj;های ناخوشایند شایع در این برهه از زندگی است.</span></p>\r\n\r\n<h3 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\"><strong>دهه&zwnj;های ششم، هفتم و پس از آن (50 سالگی به بعد)</strong></span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">با افزایش سن، بالشتک (پد) چربی پاشنه پا نازک می&zwnj;شود. با رسیدن افراد به 50 سالگی، به&zwnj; طور معمول نیمی از محتویات چربی موجود در کف پا از بین می&zwnj;رود. همچنین کاهش سطح استروژن در خانم&zwnj;ها پس از یائسگی ممکن است باعث کاهش تراکم استخوان و درنتیجه افزایش خطر شکستگی&zwnj;های تنشی در استخوان پا شود.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">شکستگی&zwnj; تنشی ترک خوردن استخوان در اثر فشارهای مکرر است. افراد در این گروه سنی بیشتر در معرض پینه و میخچه پا هستند. مشکلات مربوط به سلامت پا و بیماری&zwnj;های مزمن که در پاها بروز می&zwnj;کنند نیز در این گروه سنی بیشتر دیده می&zwnj;شود.</span></p>\r\n\r\n<h2 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\"><strong>مشکلات سلامت پا، مسئله&zwnj;ای شایع</strong></span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">در یک نظرسنجی در مورد سلامت پا، با شرکت 1300 نفر در سال 2018 که توسط<em>&nbsp;<a href=\"https://www.apma.org/\" rel=\"nofollow external noopener noreferrer\">انجمن پزشکی بیماری&zwnj;های پای آمریکا (APMA)</a>&nbsp;</em>انجام گرفت، مشخص شد که تقریباً 75 درصد از افرادی که در این نظرسنجی شرکت کرده بودند، در نواحی مختلف پا دچار آسیب&zwnj;های مسئله&zwnj;ساز (مانند تعریق زیاد، بوی بد یا مشکلات ناخن) تا عوارض دردناک (مانند انحراف شست پا یا شکستگی تنشی) شده بودند. نیمی از افراد دارای مشکلات در ناحیه پا در این نظرسنجی اعلام کردند که به&zwnj;واسطه عوارض به وجود آمده، در انجام فعالیت&zwnj;های روزمره خود دچار محدودیت شده&zwnj;اند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/8.jpg\" style=\"border-style:solid; border-width:3px; height:225px; width:330px\" /></span></p>\r\n\r\n<h2 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\"><strong>چرا تعداد افرادی که از نبود سلامت پا رنج می&zwnj;برند، در حال افزایش است؟</strong></span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><em>ماریان تی هانان</em>، استاد&nbsp;<em>دانشکده پزشکی دانشگاه هاروارد</em>&nbsp;می&zwnj;گوید: &laquo;به نظر من بزرگ&zwnj;ترین مشکل در رابطه با درد پا این است که هیچ&zwnj;&zwnj;کس نمی&zwnj;داند چه کاری انجام دهد یا با چه کسی در این زمینه صحبت کند.&raquo; او همچنین اضافه می&zwnj;کند که: &laquo;پزشکان معمولاً دوره&zwnj;های خاصی را در رابطه با مشکلات پا در دانشکده پزشکی نمی&zwnj;بینند و بیشتر مردم در مواجهه با این اختلال، به این فکر نمی&zwnj;کنند که به یک متخصص بیماری&zwnj;های پا مراجعه کنند؛ مگر اینکه به دیابت یا روماتیسم مفصلی (آرتریت روماتوئید) مبتلا باشند.&raquo;</span></p>', 3, '2022-03-12 18:34:40', '2022-03-13 20:39:54'),
(5, 'ریفلاکس معده', '/images/articles/0000.jpg', '<h1 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\">ریفلاکس معده به مری را چگونه برطرف کنیم؟</span></h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">بیماری&nbsp;<strong>ریفلاکس معده</strong>&nbsp;به مری بسیار شایع است و در بسیاری جوامع حدوداً از هر 5 نفر یک نفر به آن مبتلا است. درد و سوزشی که گه&zwnj;گاه از قفسه سینه&zwnj; به سمت گلو و دهان احساس شود همراه با سوزش سر دل، برگشت محتویات معده به گلو و دهان و مشکل در بلع، و گاهی سرفه، علائم بیماری ریفلاکس معده به مری (GERD) هستند.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">با وجود اثربخشی داروهایی که در حال حاضر برای کنترل ریفلاکس معده استفاده می&zwnj;شوند، نگرانی&zwnj;هایی در مورد استفاده طولانی مدت از برخی از این داروها وجود دارد. به همین دلیل، در دهه&zwnj;های اخیر توجه به نقش سبک زندگی افراد در مدیریت این بیماری افزایش یافته است و تلاش می&zwnj;شود علاوه بر تکیه بر درمان&zwnj;های پزشکی، افراد با اصلاح سبک زندگی و تغذیه&zwnj; به زندگی سالم&zwnj;تر نزدیک شوند.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/9.jpg\" style=\"border-style:solid; border-width:3px; height:201px; width:330px\" /></span></p>\r\n\r\n<h2 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\">ریفلاکس معده به مری (GERD) چیست؟</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">بیماری ریفلاکس معده به مری معمولاً با نام سوزش سر دل شناخته می&zwnj;شود. این اختلال گوارشی اغلب باعث احساس سوزش و گاهی فشار در قسمت میانی قفسه سینه می&zwnj;شود.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">گاهی با احساس گلودرد، سوزش گلو، گرفتگی صدا و&nbsp;<a href=\"https://lafarrerr.com/blog/cough_treatment/\" rel=\"noopener noreferrer\" target=\"_blank\">سرفه</a>&nbsp;ممکن است تصور کنید دچار سرماخوردگی یا آنفلوانزا شده&zwnj;اید؛ اما اگر مدت زمان زیادی این علائم را داشتید، این احتمال وجود دارد که علائم نه به دلیل ویروس، بلکه به دلیل اختلالی در عملکرد دریچه (اسفنکتر) تحتانی مری به وجود آمده باشند. این دریچه، ماهیچه&zwnj;ای است که تبادلات بین مری و معده را کنترل می&zwnj;کند و در صورتی که کاملاً بسته نشود، اسید معده و غذا دوباره به مری بازمی&zwnj;گردد. در اصطلاح پزشکی به این فرآیند ریفلاکس معده به مری می&zwnj;گویند. بازگشت اسید معده به مری شکل خفیف&zwnj;تر این بیماری است که به آن ریفلاکس اسید می&zwnj;گویند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/10.jpg\" style=\"border-style:solid; border-width:3px; height:230px; width:330px\" /></span></p>\r\n\r\n<h2 style=\"direction:rtl; text-align:justify\">علائم ریفلاکس معده به مری چیست؟</h2>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">ریفلاکس اسید می&zwnj;تواند باعث گلودرد و گرفتگی صدا شود و طعم بدی در دهان شما ایجاد کند. هنگامی که ریفلاکس اسید باعث ایجاد علائم مزمن شود، به&zwnj;عنوان اختلال ریفلاکس معده به مری یا GERD شناخته می&zwnj;شود. متداول&zwnj;ترین علامت ریفلاکس معده به مری، سوزش سر دل (درد در قسمت فوقانی شکم و قفسه سینه) است. گاهی اوقات با داشتن این علائم ممکن است احساس کنید دچار حمله قلبی شده&zwnj;اید.</span></p>\r\n\r\n<h2 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\">چه عواملی باعث ریفلاکس اسید معده می&zwnj;شوند؟</span></h2>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\"><em><a href=\"https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5373278/\" rel=\"noopener nofollow external noreferrer\" target=\"_blank\">دکتر ژاکلین ولف</a></em>، فوق تخصص گوارش و استادیار پزشکی در&nbsp;<em><a href=\"https://hms.harvard.edu/\" rel=\"noopener nofollow external noreferrer\" target=\"_blank\">دانشکده پزشکی دانشگاه هاروارد</a></em>&nbsp;می&zwnj;گوید سه اختلال در ریفلاکس اسید معده نقش دارند که عبارت&zwnj;اند از: اختلال در تخلیه غذا از مری به معده، وجود اسید زیاد در معده و تأخیر در تخلیه معده.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/11.jpg\" style=\"border-style:solid; border-width:3px; height:215px; width:330px\" /></span></p>\r\n\r\n<h2 style=\"direction:rtl; text-align:justify\"><span style=\"font-size:20px\">درمان دارویی ریفلاکس معده به مری</span></h2>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">درمان اصلی برای ریفلاکس معده به مری دسته&zwnj;ای از داروها به نام مهارکننده&zwnj;های پمپ پروتون (PPI) است. بسیاری از داروهای معمول تجویز شده برای این بیماری، از جمله امپرازول و اس&zwnj;امپرازول در این گروه قرار می&zwnj;گیرند. مهارکننده&zwnj;های پمپ پروتون با مسدود کردن پمپ&zwnj;های اسیدی که روی سلول&zwnj;های اصلی تولیدکننده اسید معده قرار دارند، کار می&zwnj;کنند. این دسته از داروها تولید اسید را به میزان قابل توجهی کاهش می&zwnj;دهند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">داروهای فاموتیدین یا سایمتیدین (آنتاگونیست&zwnj;های گیرنده H2) نیز معمولاً در درمان ریفلاکس معده به مری استفاده می&zwnj;شوند. این دسته از داروها، گیرنده&zwnj;های هیستامینی که روی سلول&zwnj;های تولیدکننده اسید معده قرار دارند را مسدود می&zwnj;کنند و به طور مشابه تولید اسید معده و اسیدیته محتوای معده را کاهش می&zwnj;دهند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">با وجود آنکه علائم ریفلاکس معده به مری اکثر افراد با استفاده از این داروها بهبود می&zwnj;یابد، اما تخمین زده می&zwnj;شود در 10 تا 40 درصد بیماران، با مصرف این داروها بهبودی حاصل نخواهد شد و رویکردهای دیگر مانند اصلاح سبک زندگی اهمیت بیشتری پیدا می&zwnj;کنند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>', 1, '2022-03-12 19:23:04', '2022-03-12 19:23:47'),
(6, 'سیاتیک', '/images/articles/00000.jpg', '<h1 style=\"text-align:center\"><span style=\"font-size:20px\">سیاتیک و راه&zwnj;های درمان آن</span></h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>سیاتیک</strong>&nbsp;(Sciatica) یکی از رایج&zwnj;ترین دردهایی است که متأسفانه سوءبرداشت&zwnj;های زیادی درباره آن می&zwnj;شود. نزدیک به 40 درصد افراد در طول زندگی خود این درد را تجربه می&zwnj;کنند و با بالا رفتن سن، شیوع این عارضه بیشتر می&zwnj;شود. درد سیاتیک بیشتر در افراد 30 تا 50 سال شایع است. برای اکثر مردم درد سیاتیک با گذر زمان بهبود می&zwnj;یابد اما برای برخی به تمهیدات بیشتری نیاز است. بسیاری از افراد&nbsp;<strong>درد سیاتیک</strong>&nbsp;را با کمردرد معمولی اشتباه می&zwnj;گیرند در حالی که کمردرد و درد سیاتیک کاملاً متفاوت از یکدیگر هستند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/12.jpg\" style=\"border-style:solid; border-width:3px; height:165px; width:330px\" /></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">درد سیاتیک که از اعصاب سیاتیک نشأت می&zwnj;گیرد، معمولاً پس از چند ساعت یا چند روز خودبه&zwnj;خود برطرف می&zwnj;شود. با این &zwnj;حال برخی از حملات آن می&zwnj;تواند برای هفته&zwnj;ها یا حتی ماه&zwnj;ها ادامه داشته باشد. خوشبختانه می&zwnj;توانید کارهای زیادی برای پیشگیری از درد سیاتیک و همچنین تسکین آن انجام دهید. با ما تا انتهای این مقاله همراه باشید.</span></p>\r\n\r\n<h2 style=\"direction:rtl; text-align:center\"><span style=\"font-size:20px\"><strong>سیاتیک چیست؟</strong></span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">سیاتیک به درد ناشی از عصب سیاتیک گفته می&zwnj;&zwnj;شود. عصب سیاتیک مسئول انتقال پیام&zwnj;ها از مغز به نخاع و سپس به پاها است. این درد معمولاً به صورت یک&zwnj;طرفه از ناحیه پایین کمر به پاها و اغلب تا زیر زانو منتشر می&zwnj;شود. شایع&zwnj;ترین علت آن بیرون&zwnj;زدگی یا فتق دیسک در قسمت تحتانی کمر است. دیسک&zwnj;ها ساختارهایی حلقوی یا تایرمانند هستند که بین مهره&zwnj;&zwnj;های ستون فقرات قرار گرفته&zwnj;اند. اگر لبه بیرونی دیسک به علت فشارهای واردشده به نواحی تحتانی کمر پاره شود، محتویات ژله&zwnj;&zwnj;&zwnj;مانند داخل آن بیرون ریخته و باعث التهاب عصب مجاور شده یا آن را تحت &zwnj;فشار قرار می&zwnj;دهد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/13.jpg\" style=\"border-style:solid; border-width:3px; height:198px; width:330px\" /></span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\"><strong>رگ سیاتیک چیست؟</strong></span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">احتمالاً تاکنون بارها عبارت رگ سیاتیک را شنیده&zwnj;اید. البته همین الان با خواندن تعریف سیاتیک متوجه شدید که این عبارت نادرست است. همان&zwnj;طور که گفته شد سیاتیک یک عصب است و نه یک رگ. بنابراین اصطلاح رگ سیاتیک صرفاً یک غلط رایج است. در مقابل، عصب سیاتیک یا درد سیاتیک عبارات صحیحی هستند که برای توصیف این مشکل قابل استفاده&zwnj;اند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\"><strong>از کجا بدانیم مشکل سیاتیک داریم؟</strong></span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">کلید تشخیص سیاتیک شرح حال کامل و ارزیابی دقیق بیمار است. البته بسیاری از بیماران انتظار تجویز تصویربرداری&zwnj; با اشعه ایکس (X-ray) یا MRI را از پزشک دارند. اما اغلب پزشکان به دلیل محدودیت&zwnj;های زمانی و با علم به این &zwnj;که آزمایش&zwnj;های تصویربرداری به درمان سیاتیک اولیه کمک بیشتری نمی&zwnj;کند، تصویربرداری را تجویز نمی&zwnj;&zwnj;&zwnj;کنند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">همان&zwnj;طور که گفته شد، درد سیاتیک در بیشتر موارد تنها در یک سمت حس می&zwnj;شود، یعنی درد، ناحیه پایینی کمر، باسن یا پای راست را درگیر می&zwnj;کند و یا در همین نواحی در سمت چپ حی می&zwnj;شود؛ زیرا بیرون&zwnj;زدگی دیسک تقریباً همیشه از یک سمت اتفاق می&zwnj;افتد. درگیری دوطرفه سیاتیک بسیار بسیار نادر است. پس علائم سیاتیک پای راست و چپ یا درمان سیاتیک پای چپ و راست عملاً تفاوتی ندارند و شامل یک سری علائم و استراتژی یکسان می&zwnj;شوند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">علائم سیاتیک اغلب با نشستن یا سرفه کردن بدتر می&zwnj;شود و ممکن است با بی&zwnj;حسی یا سوزن&zwnj;سوزن شدن پا همراه باشد. یک معاینه فیزیکی می&zwnj;تواند تأیید کند که درگیری عصب سیاتیک وجود دارد یا خیر؟ همچنین پزشکان معمولاً به دنبال تشخیص ضعف یا کاهش عکس&zwnj;العمل پاها نسبت به محرک&zwnj;ها هستند که می&zwnj;تواند نیاز ارجاع بیمار به متخصص را نشان دهد. پزشک به کمک این اطلاعات می&zwnj;تواند پس از تشخیص اولیه، درمان را شروع کند.</span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\"><strong>آنچه باید درباره&nbsp;</strong><strong>درمان درد سیاتیک</strong><strong>&nbsp;بدانیم</strong></span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">بسیاری از مردم فکر می&zwnj;&zwnj;کنند که هرچه درد شدیدتر باشد، به &zwnj;احتمال &zwnj;زیاد اتفاق وخیم&zwnj;تری در حال رخ دادن است. با این &zwnj;حال می&zwnj;توان گفت که این موضوع برای درد سیاتیک صادق نیست. بدن می&zwnj;تواند مواد ژل&zwnj;مانند دیسک را که باعث ایجاد این علائم و حتی درد شدید می&zwnj;شود، دوباره جذب کند. بنابراین برنامه درمان سیاتیک عمدتاً روی کنترل درد و فعال نگه &zwnj;داشتن فرد متمرکز است. اگر درد سیاتیک بسیار آزاردهنده باشد، دراز کشیدن&zwnj;های کوتاه&zwnj;مدت می&zwnj;تواند در کاهش درد مؤثر باشد اما استراحت طولانی&zwnj;مدت در تختخواب کمکی به بهبودی نمی&zwnj;کند و حتی ممکن است درد را تشدید کند. پس هنگامی که درد کاهش یافت، از جایتان بلند شوید و شروع به راه رفتن در مسافت&zwnj;های کوتاه کنید. از آنجا که نشستن، فشار بر روی دیسک&zwnj;های کمر را افزایش می&zwnj;دهد، توصیه می&zwnj;شود از نشستن یا رانندگی طولانی&zwnj;مدت اجتناب کنید.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/14.jpg\" style=\"border-style:solid; border-width:3px; height:220px; width:330px\" /></span></p>\r\n\r\n<h3 style=\"text-align:center\"><span style=\"font-size:20px\"><strong>آیا فیزیوتراپی مفید است؟</strong></span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">بسیاری از افراد برای بهبود شرایط خود، درمان&zwnj;هایی مانند فیزیوتراپی، ماساژ، طب سوزنی و مداخلات و دستکاری&zwnj;های ستون فقرات (کایروپرکتیک Chiropractic) را امتحان می&zwnj;کنند اما شواهد نشان می&zwnj;دهد که اگرچه این روش&zwnj;ها ممکن است برای&nbsp;<a href=\"https://lafarrerr.com/blog/back-pain-home-remedies/\" rel=\"noopener noreferrer\">کمر درد</a>&nbsp;معمولی نتیجه&zwnj;بخش باشد اما برای تسکین درد سیاتیک تأثیر چندانی ندارد. البته داروهای ضد درد بدون نسخه مانند ایبوپروفن و ناپروکسن می&zwnj;تواند به کاهش التهاب و بهبود درد سیاتیک شما کمک کند. در صورت اثربخش نبودن این داروها پزشک معالج ممکن است استفاده کوتاه&zwnj;مدت از داروهای ضد درد قوی&zwnj;تر را توصیه کند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>', 2, '2022-03-12 19:31:22', '2022-03-12 19:55:31'),
(7, 'گرفتگی گردن', '/images/articles/000000.jpg', '<h1 style=\"text-align:center\"><span style=\"font-size:20px\">گرفتگی گردن: علت درد گردن ، راه&zwnj;های درمان خانگی و پیشگیری از آن</span></h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">معمولاً تا زمانی که درد گردن سراغمان نیاید، متوجه نمی&zwnj;شویم که گردن چه فشاری را تحمل می&zwnj;کند. این است که با بروز درد در ناحیه گردن، تازه اهمیت این قسمت از بدن را درک کرده و با جدیت به دنبال دلیل درد و درمان آن می&zwnj;گردیم؛ مخصوصاً اگر درد شدید باشد یا محدودیت حرکتی زیادی ایجاد کند. برای بررسی علت&nbsp;<strong>گرفتگی گردن</strong>&nbsp;باید ابتدا به ساختار آن نگاه کنیم.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/15.jpg\" style=\"border-style:solid; border-width:3px; height:192px; width:330px\" /></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">گردن، مجموعه&zwnj;ای از تاندون&zwnj;ها، رباط&zwnj;&zwnj;ها و استخوان&zwnj;ها است. تمامی این قسمت&zwnj;ها با همکاری با یکدیگر از سر پشتیبانی می&zwnj;کنند و امکان چرخش آن را به وجود می&zwnj;آورند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">اگر هرکدام از این قسمت&zwnj;ها آسیب ببیند یا بیش از حد از آن&zwnj;ها کار بکشید، در ناحیه گردن احساس گرفتگی، انقباض و درد خواهید کرد.</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">از جمله دلایل رایج گرفتگی گردن، کشیدگی عضلات یا وارد شدن فشار روی یکی از عضلات است. علاوه بر این، آسیب دیدن یک یا چند مهره هم می&zwnj;تواند باعث گرفتگی گردن شود. علت هرچه که باشد، با بروز این مشکل نمی&zwnj;توانید سرتان را به راحتی حرکت دهید و درد آزاردهنده&zwnj;ای را احساس خواهید کرد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">از آنجایی که معمولاً این درد در اثر جراحت یا یک حادثه جزئی رخ می&zwnj;دهد، می&zwnj;توانید آن را در خانه درمان کنید؛ با این حال در مواردی نادر، درد &zwnj;گردن می&zwnj;تواند نشانه یک بیماری جدی باشد که نیاز به درمان پزشکی دارد. بنابراین بهتر است که عوامل ایجاد کننده این درد را به خوبی بشناسید و راه&zwnj;های جلوگیری از آن را بدانید. در این مقاله، به بررسی دقیق این مسائل پرداخته&zwnj;ایم.</span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\">دلایل بروز گرفتگی گردن</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">همان&zwnj;طور که در ابتدای مقاله توضیح دادیم،&nbsp;<a href=\"https://lafarrerr.com/blog/muscle-spasm-treatment/\" rel=\"noopener noreferrer\" target=\"_blank\">گرفتگی عضلات</a>&nbsp;گردن معمولاً بر اثر ایجاد تنش و فشار، استفاده بیش از حد از آن&zwnj;ها یا کشیدگی غیرعادی به وجود می&zwnj;آید.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">این شرایط می&zwnj;تواند باعث ایجاد دردهای خفیف تا شدید شده و در صورت ادامه داشتن باعث می&zwnj;شود نتوانید سرتان را حرکت دهید یا از عضلات گردنتان استفاده کنید. از شایع&zwnj;ترین دلایل گرفتگی گردن می&zwnj;توان به این موارد اشاره کرد:</span></p>\r\n\r\n<h3 style=\"text-align:center\"><span style=\"font-size:20px\">کشیدگی و رگ به رگ شدن جزئی</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">یکی از دلایل گرفتگی گردن، آسیب جزئی یا کشیدگی است، این آسیب ممکن است به دلایل زیر به وجود بیاید:</span></p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">خوابیدن در وضعیت نامناسب</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">نشستن یا قوز کردن برای مدت طولانی</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">نگاه کردن مرتب به اشیایی مانند تلفن همراه که نیاز به خم شدن گردن به سمت پایین دارند</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\"><a href=\"https://lafarrerr.com/blog/sport-injuries/\" rel=\"noopener noreferrer\" target=\"_blank\">آسیب های ورزشی</a></span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">سقوط از ارتفاع</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">داشتن تنش عضلانی به دلیل استرس</span></li>\r\n</ul>\r\n\r\n<h3 style=\"text-align:center\"><span style=\"font-size:20px\">جا&zwnj;به&zwnj;جایی مهره&zwnj;های گردن</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">از جمله&nbsp;<a href=\"https://www.ninds.nih.gov/Disorders/All-Disorders/Whiplash-Information-Page\" rel=\"noopener nofollow external noreferrer\" target=\"_blank\">علت&zwnj;</a>های جابه&zwnj;جایی مهره&zwnj;های گردن، وارد شدن ضربه&zwnj;های شدید به آن&zwnj;ها است. اغلب این جابه&zwnj;جایی&zwnj;ها، در زمان تصادفات شدید رانندگی اتفاق می&zwnj;افتد، چرا که در تصادف&zwnj;ها، سر ناگهان و با شدت به جلو و عقب حرکت می&zwnj;کند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">جا&zwnj;به&zwnj;جایی مهره&zwnj;های گردن موجب آسیب به عضلات&zwnj;، استخوان&zwnj;ها&zwnj;، رباط&zwnj;ها، اعصاب گردن یا تمامی این موارد با هم می&zwnj;شود. در نتیجه این آسیب نیز، گردن دچار گرفتگی و درد می&zwnj;گردد. جا&zwnj;به&zwnj;جایی مهره&zwnj;های گردن علائم دیگری نیز دارد:</span></p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">سردرد</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">بی&zwnj;حسی در بازوها یا دست&zwnj;ها</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">ایجاد اختلال در راه رفتن، حفظ تعادل یا هر دو</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">ضعف در بازوها یا پاها</span></li>\r\n</ul>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">پزشک می&zwnj;تواند بیماری اسپوندیلوز گردنی را به کمک آزمایش خون، تصویربرداری MRI یا اشعه ایکس تشخیص دهد.</span></p>\r\n\r\n<h3 style=\"text-align:center\"><span style=\"font-size:20px\">مننژیت</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">گاهی اوقات، گرفتگی گردن یکی از علائم&nbsp;<a href=\"https://www.mayoclinic.org/diseases-conditions/meningitis/symptoms-causes/syc-20350508\" rel=\"noopener nofollow external noreferrer\" target=\"_blank\">بیماری</a>&nbsp;مننژیت است که می&zwnj;تواند خطری جدی برای سلامتی باشد. مننژیت، بیماری التهاب مننژ (پرده پوشاننده مغز و نخاع) است که ممکن است توسط برخی ویروس&zwnj;ها، باکتری&zwnj;ها یا قارچ&zwnj;ها رخ دهد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">مننژیت ویروسی می&zwnj;تواند به خودی خود بهبود یابد&zwnj;؛ اما مننژیت باکتریایی و قارچی می&zwnj;توانند خطرناک باشند. مننژیت علاوه بر گرفتگی&zwnj;گردن، علائم دیگری نیز دارد:</span></p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">بروز تب ناگهانی، معمولاً همراه با سردرد، گرفتگی و سفتی گردن یا هر دو</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">حالت تهوع</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">استفراغ</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">حساسیت به نور</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">سردرگمی، تحریک&zwnj;پذیری یا هر دو</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">ناتوانی در بیدار شدن از خواب</span></li>\r\n</ul>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">حتماً به این موضوع دقت کنید که در صورت بروز این علائم، باید بلافاصله و بدون اتلاف وقت به پزشک مراجعه کنید.</span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\">چند شیوه مفید برای درمان گرفتگی گردن</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">برای انتخاب بهترین راه درمان، باید پیش از همه، علت آن را بیابید. اگر گرفتگی&zwnj;گردن شما جزئی باشد، می&zwnj;توانید از درمان خانگی گرفتگی گردن که در ادامه می&zwnj;خوانید کمک بگیرید.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ul dir=\"rtl\">\r\n</ul>\r\n\r\n<h3 style=\"text-align:center\"><span style=\"font-size:20px\">استفاده از یخ</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:20px\"><img alt=\"\" src=\"/images/articles/16.jpg\" style=\"border-style:solid; border-width:3px; height:214px; width:330px\" /></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">استفاده از کیسه یخ و کمپرس سرد می&zwnj;تواند التهاب و تورم گردن را که در اثر یک کشیدگی جزئی به وجود آمده است، کم کند. یخ ناحیه&zwnj;ای که روی آن قرار می&zwnj;گیرد را بی&zwnj;حس می&zwnj;کند و تقریباً هر نوع دردی را به&zwnj;طور موقت تسکین می&zwnj;دهد.</span></p>\r\n\r\n<h3 style=\"text-align:center\"><span style=\"font-size:20px\">استفاده از گرما</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">می&zwnj;توانید به طور متناوب از گرما و سرما برای درمان کشیدگی عضلات خود استفاده کنید. استفاده از کمپرس گرم یا حمام آب گرم می&zwnj;تواند باعث آرامش عضلات و&nbsp;<a href=\"https://lafarrerr.com/blog/pain-relief/\" rel=\"noopener noreferrer\" target=\"_blank\">تسکین درد</a>&nbsp;شود.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<ul>\r\n</ul>', 2, '2022-03-12 19:45:47', '2022-03-12 20:07:48');
INSERT INTO `articles` (`id`, `title`, `image`, `content`, `view_count`, `created_at`, `updated_at`) VALUES
(8, 'درمان سرفه', '/images/articles/0000000.jpg', '<h1 style=\"text-align:center\"><span style=\"font-size:20px\">درمان خانگی و سریع برای بهبود سرفه</span></h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">سرفه کردن اتفاقی طبیعی است که در پاکسازی بدن از مواد محرک و عفونت نقش دارد؛ اما تداوم سرفه نشانه چیست و چطور باید با آن مقابله کرد؟ پیدا کردن بهترین روش&nbsp;<strong>درمان سرفه</strong>&nbsp;به علت اصلی بروز آن بستگی دارد. دلیل احتمالی سرفه، می&zwnj;تواند آلرژی&zwnj;ها، عفونت&zwnj;ها و بازگشت اسید معده به مری (رِفلاکس) باشد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">اگر می&zwnj;خواهید از درمان&zwnj;های طبیعی برای بهبود سرفه&zwnj; استفاده کنید، باید درباره منابع و اسامی تجاری معتبر اطلاعات کافی کسب کنید؛ همچنین باید آگاه باشید که برخی از گیاهان و مکمل&zwnj;ها می&zwnj;توانند با سایر داروها تداخل داشته و عوارض جانبی ناخواسته ایجاد کنند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">در صورتی که سرفه شدید بوده یا بیش از چند هفته ادامه داشته باشد، باید به پزشک مراجعه کنید. طیف وسیعی از روش&zwnj;های درمانی طبیعی برای سرفه&zwnj;های مداوم استفاده می&zwnj;شود. در این مطلب، 14 مورد از این روش&zwnj;های درمانی را با جزئیات بیشتر بررسی می&zwnj;کنیم.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/17.jpg\" style=\"border-style:solid; border-width:3px; height:220px; width:330px\" /></span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\">&nbsp;چای عسل</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">بر اساس تحقیقات، عسل ممکن است سرفه را تسکین دهد. در&nbsp;<a href=\"https://jamanetwork.com/journals/jamapediatrics/fullarticle/571638\" rel=\"noopener nofollow external noreferrer\" target=\"_blank\">یک مطالعه</a>&nbsp;روی درمان کردن سرفه شبانه در کودکان، اثر عسل تیره و داروی ضدسرفه دکسترومتورفان با حضور یک گروه شاهد مقایسه شد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">نتایج حاکی از این بود که عسل بیشترین اثر را در تسکین و کاهش سرفه دارد. اثرگذاری عسل اندکی بیشتر از دکسترومتورفان بود. در نتیجه والدین استفاده از عسل را برای درمان&nbsp;<a href=\"https://lafarrerr.com/blog/common-cold-in-babies\" rel=\"noopener noreferrer\" target=\"_blank\">سرماخوردگی کودکان</a>&nbsp;ترجیح دادند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">برای درمان سرفه با عسل ، 2 قاشق چای&zwnj;خوری از آن را در یک فنجان آب یا چای بسیار کمرنگ و ولرم یا دمنوش آویشن حل کنید. این مخلوط را یک یا دو بار در روز بنوشید.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">نکاتی که پیش از مصرف این ترکیب باید در نظر داشته باشید:</span></p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">خوردن عسل برای کودکان زیر 1 سال ممنوع است. زیرا می&zwnj;تواند باعث واکنش&zwnj;های آلرژیک شدید، یا حساسیت&zwnj;های دائمی شود.</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">پیش از مصرف دمنوش آویشن، مطمئن شوید به آویشن آلرژی ندارید.علائم آلرژی به آویشن در ابتدا شبیه علائم مسمویت غذایی است.</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">بیش از 100 تا 120 میلی&zwnj;لیتر در روز دمنوش آویشن مصرف نکنید.</span></li>\r\n</ul>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\">زنجبیل</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">زنجبیل به دلیل داشتن خواص ضد التهابی، می&zwnj;تواند سرفه&zwnj;های خشک و سرفه&zwnj;های ناشی از آسم را تسکین دهد. برای تسکین حالت تهوع و درد هم می&zwnj;توان از زنجبیل استفاده کرد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">یک مطالعه نشان می&zwnj;دهد که برخی از ترکیبات ضد التهابی موجود در زنجبیل باعث شل شدن غشای مخاطی دستگاه تنفسی می&zwnj;شوند که این اتفاق، سرفه را کاهش می&zwnj;دهد. محققان در بیشتر موارد اثرات زنجبیل را روی سلول&zwnj;های انسانی و حیوانات بررسی کرده&zwnj;اند؛ بنابراین تحقیقات بیشتری برای تکمیل این اطلاعات لازم است.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\"><span style=\"font-size:20px\"><strong>روش تهیه:</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">با افزودن 20 تا 40 گرم زنجبیل تازه به یک فنجان آب داغ، دم&zwnj;نوشی تسکین&zwnj;دهنده و آرامش&zwnj;بخش درست کنید. قبل از نوشیدن، اجازه دهید زنجبیل چند دقیقه در آب داغ خیس بخورد و دم بکشد. می&zwnj;توانید برای بهبود طعم و اثر بخشی بیشتر در تسکین سرفه، پس از این&zwnj;که دم&zwnj;نوشتان کمی خنک شد و دیگر داغ نبود، به آن عسل اضافه کنید.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">توجه داشته باشید که در بعضی موارد، دم&zwnj;نوش زنجبیل می&zwnj;تواند باعث ناراحتی معده یا سوزش سر دل شود. عسل می&zwnj;تواند این عارضه جانبی را خفیف کند.</span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\">مایعات</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">هیدراته ماندن بدن و مصرف مایعات کافی، برای کسانی که سرفه می&zwnj;کنند یا سرما خورده&zwnj;اند بسیار مهم است. تحقیقات نشان می&zwnj;دهد که نوشیدن مایعات هم&zwnj;دمای اتاق، سرفه،&nbsp;<a href=\"https://lafarrerr.com/blog/home-remedies-for-a-runny-nose/\" rel=\"noopener noreferrer\" target=\"_blank\">آبریزش بینی</a>&nbsp;و عطسه را کاهش می&zwnj;دهد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">با این حال، اگر علائمتان چیزی بیشتر از یک سرماخوردگی یا آنفلوانزای ساده را نشان می&zwnj;دهد، بهتر است که از نوشیدنی&zwnj;های گرم استفاده کنید. طبق نتایج همین مطالعه، نوشیدنی&zwnj;های گرم علائم بیشتری از جمله گلو درد، لرز و خستگی بدنی را هم کاهش می&zwnj;دهند. تسکین علائم، بلافاصله پس از مصرف مایعات شروع شده و پس از اتمام نوشیدنی گرم نیز برای مدتی ادامه دارد.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ul dir=\"rtl\">\r\n</ul>', 1, '2022-03-12 19:54:26', '2022-03-12 19:55:07'),
(9, 'اگزما', '/images/articles/000000000.jpg', '<h1 style=\"text-align:center\"><span style=\"font-size:20px\">درمان اگزما</span></h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">درمان&zwnj;های خانگی و طبیعی می&zwnj;توانند خشکی و خارش پوست ناشی از اگزما را تسکین دهند. شما می&zwnj;توانید از کرم&zwnj;ها، محصولات طبیعی و تغییر رژیم غذایی و سبک زندگی، برای کمک به&nbsp;<strong>درمان اگزما</strong>&nbsp;یا جلوگیری از شعله ور شدن علائم آن استفاده کنید، به ویژه در زمستان که علائم در بدترین حالت خود قرار دارند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/18.jpg\" style=\"border-style:solid; border-width:3px; height:220px; width:330px\" /></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">مواد طبیعی مانند ژل آلوئه ورا و روغن نارگیل می&zwnj;توانند پوست خشک و ترک خورده را مرطوب کنند. این مواد همچنین می&zwnj;توانند برای کاهش تورم و پیشگیری از عفونت، با التهاب و باکتری&zwnj;های مضر مقابله کنند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">درمان&zwnj;های طبیعی نمی&zwnj;توانند اگزما را درمان کنند، اما می&zwnj;توانند به مدیریت علائم کمک کرده و از شعله ور شدن آن جلوگیری کنند. در ادامه بهترین روش&zwnj;های درمانی طبیعی برای اگزما را با هم بررسی می&zwnj;کنیم. با ما همراه باشید&hellip;</span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\">بلغور جو دوسر کلوئیدی</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">بلغور جو دوسر کلوئیدی از جو دوسر آسیاب شده تهیه می&zwnj;شود. این ماده از طریق آرام کردن و نرم شدن پوست ملتهب، به درمان اگزما کمک می&zwnj;کند. بلغور جو دوسر کلوئیدی به صورت کرم یا پودر در دسترس است.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"\" src=\"/images/articles/19.jpg\" style=\"border-style:solid; border-width:3px; height:220px; width:330px\" /></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">نحوه استفاده:</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">1. پودر را به آب ولرم وان حمام اضافه کرده و به مدت 10 تا 15 دقیقه در آن غوطه ور شوید تا به لطافت پوست و رفع خارش کمک کند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">2. بعد از حمام، پوست خود را به آرامی خشک کنید و از یک لایه ضخیم&nbsp;<a href=\"https://lafarrerr.com/%D9%85%D8%B1%D8%B7%D9%88%D8%A8-%DA%A9%D9%86%D9%86%D8%AF%D9%87\" rel=\"noopener noreferrer\">مرطوب کننده</a>&nbsp;غیرآلرژی&zwnj;زا با درصد چربی بالا استفاده کنید.</span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\">روغن گل مغربی</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">روغن گل مغربی از گیاه گل مغربی تهیه شده و به صورت موضعی برای تسکین پوست تحریک شده استفاده می&zwnj;شود.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">مصرف خوراکی این روغن، برای درمان بیماری&zwnj;های التهابی سیستمیک مانند اگزما کاربرد دارد. روغن گل مغربی حاوی اسیدهای چرب امگا 6 و اسید گاما-لینولنیک بوده و ممکن است در جلوگیری از التهاب بدن نقش داشته باشد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">نتایج مطالعه در مورد روغن گل مغربی برای اگزما مختلف است. حتی با این وجود، بسیاری از مردم ادعا می&zwnj;کنند که این ماده بدون عوارض جانبی منفی، به کاهش علائم اگزما کمک می&zwnj;کند.</span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\">روغن نارگیل</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">روغن نارگیل از گوشت نارگیل استخراج می&zwnj;شود و می&zwnj;تواند به عنوان یک مرطوب کننده طبیعی برای کمک به درمان اگزما استفاده شود.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">براساس نظر<em>&nbsp;انجمن ملی اگزما</em>، خاصیت ضد باکتری روغن نارگیل می&zwnj;تواند باعث کاهش باکتری&zwnj;های استافیلوکوک روی پوست شده و به جلوگیری از عفونت کمک کند. این کار برای افراد مبتلا به&nbsp;<a href=\"https://lafarrerr.com/blog/eczema/\" rel=\"noopener noreferrer\">بیماری اگزما پوستی</a>&nbsp;مهم است زیرا ممکن است لک&zwnj;های پوستی، ملتهب شده، ترک خورده و ضمن ترشح، باعث ورود باکتری شوند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">برای بهره بردن کامل از&nbsp;<a href=\"https://lafarrerr.com/blog/benefits-coconut-oil/\" rel=\"noopener noreferrer\">خواص روغن نارگیل</a>&nbsp;هنگام استفاده روی پوست، روغن بکر یا تهیه شده به روش پرس سرد را انتخاب کنید که بدون مواد شیمیایی فرآوری شده باشد.</span></p>\r\n\r\n<h2 style=\"text-align:center\"><span style=\"font-size:20px\">روغن آفتابگردان</span></h2>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:20px\"><img alt=\"\" src=\"/images/articles/20.jpg\" style=\"border-style:solid; border-width:3px; height:220px; width:330px\" /></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">روغن آفتابگردان از دانه&zwnj;های آفتابگردان استخراج می&zwnj;شود. تحقیقات نشان داده که این ماده از لایه خارجی پوست محافظت کرده و به حفظ رطوبت درون پوست و جلوگیری از ورود باکتری&zwnj;ها به آن کمک می&zwnj;کند. روغن آفتابگردان همچنین پوست را آبرسانی کرده و ممکن است خارش و التهاب را تسکین دهد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">روغن آفتابگردان را می&zwnj;توانید (ترجیحاً پس از استحمام در حالی که پوست هنوز مرطوب است) بدون رقیق کردن و مستقیماً روی پوست&zwnj;تان استفاده کنید.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>', 2, '2022-03-12 20:05:59', '2022-03-15 16:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'کشور سازنده', '2022-03-13 03:26:48', '2022-03-13 03:26:48'),
(2, 'برند', '2022-03-13 03:26:49', '2022-03-13 03:26:49'),
(3, 'کشور سازنده', '2022-03-13 16:52:04', '2022-03-13 16:52:04'),
(4, 'برند', '2022-03-13 16:52:04', '2022-03-13 16:52:04'),
(5, 'کشور سازنده', '2022-03-13 17:12:14', '2022-03-13 17:12:14'),
(6, 'حجم', '2022-03-13 17:12:14', '2022-03-13 17:12:14'),
(7, 'برند', '2022-03-13 17:12:14', '2022-03-13 17:12:14'),
(8, 'چرخش در دقیقه', '2022-03-13 17:19:34', '2022-03-13 17:19:34'),
(9, 'زمان شارژ کامل', '2022-03-13 17:19:34', '2022-03-13 17:19:34'),
(10, 'برند', '2022-03-13 17:19:34', '2022-03-13 17:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_product`
--

CREATE TABLE `attribute_product` (
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `value_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_product`
--

INSERT INTO `attribute_product` (`attribute_id`, `value_id`, `product_id`) VALUES
(2, 2, 1),
(3, 3, 2),
(4, 4, 2),
(5, 5, 3),
(6, 6, 3),
(7, 7, 3),
(8, 8, 4),
(9, 9, 4),
(10, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `attribute_id`, `value`, `created_at`, `updated_at`) VALUES
(2, 2, 'آریو', '2022-03-13 03:26:49', '2022-03-13 03:26:49'),
(3, 3, 'چین', '2022-03-13 16:52:04', '2022-03-13 16:52:04'),
(4, 4, 'Purvigor', '2022-03-13 16:52:04', '2022-03-13 16:52:04'),
(5, 5, 'ایران', '2022-03-13 17:12:14', '2022-03-13 17:12:14'),
(6, 6, '75m', '2022-03-13 17:12:14', '2022-03-13 17:12:14'),
(7, 7, 'بهبان شیمی', '2022-03-13 17:12:14', '2022-03-13 17:12:14'),
(8, 8, '7600', '2022-03-13 17:19:34', '2022-03-13 17:19:34'),
(9, 9, '8 ساعت', '2022-03-13 17:19:34', '2022-03-13 17:19:34'),
(10, 10, 'اورال-بی', '2022-03-13 17:19:34', '2022-03-13 17:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'پزشکی', 0, '2022-03-12 17:27:35', '2022-03-12 17:27:35'),
(2, 'بهداشتی', 0, '2022-03-12 17:27:48', '2022-03-12 17:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `category_discount`
--

CREATE TABLE `category_discount` (
  `discount_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`) VALUES
(1, 4),
(2, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `commentable_id`, `commentable_type`, `parent_id`, `approved`, `comment`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'App\\Models\\Product', 1, 0, 'fgffgfgf', '2022-03-13 03:55:36', '2022-03-13 03:55:36'),
(3, 4, 4, 'App\\Models\\Product', 0, 1, 'سلام.این محصول تا پایان سال موجود خواهد شد؟', '2022-03-15 16:43:13', '2022-03-15 16:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` int(11) NOT NULL,
  `expired_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discount_product`
--

CREATE TABLE `discount_product` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `discount_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discount_user`
--

CREATE TABLE `discount_user` (
  `discount_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_03_073842_create_add_field_to_users', 1),
(6, '2022_03_03_133241_create_active_codes_table', 1),
(7, '2022_03_04_085025_create_jobs_table', 1),
(8, '2022_03_05_121518_create_permissions_table', 1),
(9, '2022_03_06_160414_create_products_table', 1),
(10, '2022_03_06_162526_create_add_field_to_products_table', 1),
(11, '2022_03_07_054033_create_comments_table', 1),
(12, '2022_03_07_184153_create_categories_table', 1),
(13, '2022_03_08_081821_create_attributes_table', 1),
(14, '2022_03_09_093053_create_orders_table', 1),
(15, '2022_03_09_103300_create_payments_table', 1),
(16, '2022_03_09_202223_create_add_filed_image_to_products', 1),
(17, '2022_03_10_000020_create_product_galleries_table', 1),
(18, '2022_03_10_162817_create_discounts_table', 1),
(19, '2022_03_11_154450_create_articles_table', 1),
(20, '2022_03_11_182257_create_news_table', 2),
(21, '2022_03_11_204941_create_slides_table', 3),
(22, '2022_03_12_121523_create_abouts_table', 4),
(25, '2022_03_12_135624_create_add_field_image_to_users', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(4, 'کرونا و کودکان آمریکایی', '/images/news/1.jpg', '<h1 style=\"text-align:center\"><span style=\"font-size:18px\">سی درصد کودکان کشته شده بر اثر کرونا در آمریکا مبتلا به اومیکرون بوده&zwnj;اند</span></h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:18px\"><img alt=\"\" src=\"/images/news/1.jpg\" style=\"border-style:solid; border-width:3px; height:230px; width:330px\" /></span></p>\r\n\r\n<h3 dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">طبق داده&zwnj;های منتشر شده توسط مقامات آمریکایی، ۳۰ درصد از کودکان کشته شده بر اثر ابتلا به ویروس کرونا در کشور آمریکا, در طول همه&zwnj;گیری سویه اومیکرون ثبت شده است.</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">به گزارش خبرنگار اجتماعی&nbsp;<a href=\"https://www.tasnimnews.com/\" target=\"_blank\">خبرگزاری تسنیم</a>؛ طبق داده&zwnj;های منتشر شده توسط &quot;مرکز کنترل و پیشگری از بیماری آمریکا&quot; (CDC)، 30 درصد از کودکان کشته شده بر اثر ابتلا به ویروس کرونا در کشور آمریکا, در طول همه&zwnj;گیری سویه اومیکرون ثبت شده است.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">پایگاه خبری &quot;گاردین&quot; در این باره نوشت: طبق داده&zwnj;های منتشره به نظر می&zwnj;رسد کودکان با خطرات فزاینده از ویروس کرونا رو&zwnj;به&zwnj;رو هستند؛ با وجود قوانین سختگیرانه در طول همه&zwnj;گیری اومیکرون و تزریقات گسترده واکسن کرونا, کودکان بیشتر در معرض خطر قرار گرفتند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">&quot;جیسون کین&quot; متخصص اطفال&nbsp;در بیمارستان&nbsp;دانشگاه &quot;شیکاگو کامر&quot; آمریکا در این باره&nbsp;گفت: ما در طول شیوع موج سویه اومیکرون، شاهد&nbsp;افزایش شدید بستری کودکان خردسال&nbsp;در بیمارستان بودیم که در ماه&zwnj;های اولیه همه&zwnj;گیری کرونا مشاهده نکرده بودیم.</span></p>\r\n\r\n<p dir=\"rtl\">بر اساس داده&zwnj;های &quot;مرکز کنترل و پیشگیری از بیماری&zwnj;ها&quot;&nbsp;(CDC) از ابتدای سال 2022، 550 کودک بر اثر ابتلا به ویروس کرونا در آمریکا&nbsp;جان خود را از دست داده&zwnj;اند در حالی که این رقم در دو سال&nbsp;گذشته 1017 کودک بوده است؛ سویه اومیکرون نخستین&nbsp;&nbsp;بار در نوامبر شناسایی شد و در عرض چند هفته به سویه غالب کرونا غالب در ایالات متحده تبدیل شد.</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">تحقیقات اخیر CDC نشان می&zwnj;دهد اگرچه اومیکرون نسبت به دلتا شدت کمتری دارد اما سه تا پنج برابر به لحاظ شدت، بدتر از انواع قبلی است و بیشتر بر کودکان اثر گذاشته است.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">اومیکرون راه&zwnj;های هوایی فوقانی را در کودکان تحت تاثیر قرار داده&nbsp;و راحت&zwnj;تر باعث&nbsp;&nbsp;آلودگی&nbsp;آنها می&zwnj;شود.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">گروه سنی زیر پنج سال در چند ماه گذشته شاهد افزایش بستری شدن در بیمارستان&nbsp;بوده است؛ طبق تحقیقات اخیر CDC، نرخ بستری شدن در بیمارستان در طول همه&zwnj;گیری اومیکرون برای کودکان زیر پنج سال، پنج برابر بیشتر از زمان موج دلتا افزایش یافته است.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">پیشتر نیز محققان آمریکایی اعلام کرده بودند که واکسن&zwnj;های&nbsp;موجود کمترین&nbsp;میزان اثربخشی بر کودکان 5 تا 11 ساله را داشته است؛ طبق داده&zwnj;های منتشره میزان اثربخشی واکسن&zwnj;های فایزر بر کودکان آمریکایی تنها 30 درصد بوده است.</span></p>', '2022-03-12 20:14:21', '2022-03-12 20:14:21'),
(5, 'قرنطینه شهر \"چانگچون\"', '/images/news/2.jpg', '<h1 style=\"text-align:center\"><span style=\"font-size:20px\">قرنطینه کامل شهر &quot;چانگچون&quot; در چین بر اثر افزایش موارد ابتلا به اومیکرون</span></h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:20px\"><img alt=\"\" src=\"/images/news/2.jpg\" style=\"border-style:solid; border-width:3px; height:230px; width:330px\" /></span></p>\r\n\r\n<h3 dir=\"rtl\"><span style=\"font-size:14px\">طبق دستور جدید مقامات چینی, شهر چانگچون به دلیل افزایش موارد قطعی ابتلا به سویه اومیکرون و ابتلای بیش از ۷۸ نفر در هفته گذشته قرنطینه شد.</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">به گزارش خبرنگار اجتماعی&nbsp;<a href=\"https://www.tasnimnews.com/\" target=\"_blank\">خبرگزاری تسنیم</a>, کشور چین روز جمعه&nbsp;دستور قرنطینه 9 میلیون نفر از ساکنان شهر &quot;چانگچون&quot; در شمال شرقی این کشور را به دلیل افزایش جدید موارد ابتلا به ویروس اومیکرون&nbsp;صادر کرد.</span></p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:14px\">پایگاه خبری &quot;سی&zwnj;بی&zwnj;اس&quot; در این باره نوشت, طبق این دستور ساکنان موظفند در خانه مانده&nbsp;و یکی از اعضای خانواده مجاز است هر دو روز یکبار برای خرید غذا و سایر مایحتاج خارج شود. همه ساکنان باید تحت سه دور آزمایش انبوه قرار گیرند و&nbsp;مشاغل غیرضروری بسته شده و&nbsp;حمل و نقل به حالت تعلیق درآمده است.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">چین روز جمعه 397 مورد قطعی مبتلا به سویه اومیکرون&nbsp;را در سراسر کشور گزارش کرد که 98 مورد آن در در استان &quot;جیلین&quot;&nbsp;قرار داشتند.&nbsp;در استان &quot;جیلین&quot;&nbsp;که شهر &quot;چانگچون&quot; یکی از شهرهای آن است از زمانی که آخرین بار در اواخر هفته گذشته شیوع مجدد ویروس کرونا آغاز شد، موارد ابتلا به این بیماری از 1100 نفر فراتر رفته است.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">روز جمعه در خود شهر &quot;چانگچون&quot; 2 مورد قطعی ابتلا به اومیکرون ثبت شده است&nbsp;که مجموع مبتلایان این&nbsp;شهر را در روزهای اخیر به 78 رساند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">آخرین قرنطینه&zwnj; در کشور چین مربوط به شهر&nbsp;&quot;یوچنگ&quot; با 500000 نفر ساکن در استان شرقی &quot;شاندونگ&quot; است.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>', '2022-03-12 20:20:59', '2022-03-12 20:20:59'),
(6, 'کرونا در جهان', '/images/news/3.jpg', '<h1 style=\"text-align:center\"><span style=\"font-size:20px\">کرونا در جهان/ ابتلای بیش از ۱.۸ میلیون نفر در ۲۴ ساعت گذشته + جدول تغییرات</span></h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:20px\"><img alt=\"\" src=\"/images/news/3.jpg\" style=\"border-style:solid; border-width:3px; height:230px; width:330px\" /></span></p>\r\n\r\n<h3 dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">طبق آخرین آمار جهانی در شبانه&zwnj;روز گذشته بیش از یک میلیون و ۸۹۳ هزار نفر در سراسر جهان به ویروس کرونا مبتلا شده و ۶ هزار و ۴ نفر جان خود را از دست دادند.</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">به گزارش خبرنگار اجتماعی&nbsp;<a href=\"https://www.tasnimnews.com/\" target=\"_blank\">خبرگزاری تسنیم</a>؛ بر اساس آخرین آمار جهانی پایگاه اطلاعاتی &quot;worldometer&quot; تا صبح امروز 455 میلیون و 581 هزار و 186 نفر در جهان به ویروس کرونا (کووید19) مبتلا شده&zwnj;اند که از این تعداد، 6 میلیون و 58 هزار و 80 نفر جان خود را از دست داده&zwnj;اند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">از مجموع تعداد مبتلایان در جهان، تاکنون 389 میلیون و 254 هزار و 365 نفر&nbsp;بهبود یافته و توانسته&zwnj;اند این بیماری را شکست دهند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">کشور آمریکا با بیشترین تعداد مبتلایان در جهان با افزایش 39 هزار و 54 مبتلا در 24 ساعت گذشته، به مجموع 81 میلیون و 154 هزار و 960 مبتلا&nbsp;رسیده است؛ تاکنون 993 هزار و 44 آمریکایی مبتلا به کووید19 در این کشور جان خود را از دست داده&zwnj;&zwnj;اند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">کشور هند پس از آمریکا در رده دوم جهان قرار دارد که با افزایش 4 هزار و 194 مبتلا در 24 ساعت گذشته، به مجموع 42 میلیون و 987 هزار و 875 مبتلا رسیده است، در این کشور تاکنون 515 هزار و 833 نفر جان خود را بر اثر ابتلا به کرونا از دست داده&zwnj;اند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">کشور برزیل به&zwnj;عنوان سومین کشور جهان با افزایش 55 هزار و 211 مبتلا در 24 ساعت گذشته، به مجموع 29 میلیون و 305 هزار و 114 مبتلا&nbsp;رسیده است، در این کشور تاکنون 654 هزار و 612 نفر جان خود را بر اثر ابتلا به کرونا از دست داده&zwnj;&zwnj;اند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">کشورهای فرانسه، انگلیس، روسیه، آلمان و ترکیه&nbsp;نیز به&zwnj;ترتیب با 23 میلیون و 381 هزار و 279, 19 میلیون و 530 هزار و 485, 17 میلیون و 242 هزار و 43, 16 میلیون و 881 هزار و 948 و 14 میلیون و 513 هزار و 774 نفر&nbsp;مبتلا در رده&zwnj;های چهارم تا هشتم جهان قرار گرفته&zwnj;اند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">همچنین کشورهای ایتالیا با 13 میلیون و 268 هزار و 459 مبتلا و اسپانیا نیز با 11 میلیون و 223 هزار و 974 هزار&nbsp;نفر مبتلا در رده&zwnj;های نهم و دهم جهان قرار دارند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">از لحاظ تعداد بهبودیافتگان نیز کشورهای آمریکا، هند و برزیل به&zwnj;ترتیب با 55 میلیون و 757 هزار و 373, 42 میلیون و 431 هزار و 513 و 27 میلیون و 556 هزار و 598 نفر&nbsp;بهبودیافته در رده&zwnj;های اول تا سوم قرار دارند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>', '2022-03-12 20:26:26', '2022-03-12 20:26:26'),
(7, 'توصیه سازمان جهانی بهداشت به اوکراین', '/images/news/4.jpg', '<h1 style=\"text-align:center\"><span style=\"font-size:20px\">توصیه سازمان جهانی بهداشت به اوکراین؛ عوامل بیماری&zwnj;زای آزمایشگاهی را نابود کنید</span></h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:20px\"><img alt=\"\" src=\"/images/news/4.jpg\" style=\"border-style:solid; border-width:3px; height:230px; width:330px\" /></span></p>\r\n\r\n<h3 dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">سازمان بهداشت جهانی به اوکراین توصیه کرد تا عوامل بیماری&zwnj;زای خطرناک را که در آزمایشگاه&zwnj;های این کشور نگهداری می&zwnj;شوند، نابود کند.</span></h3>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:14px\">به گزارش خبرنگار اجتماعی&nbsp;<a href=\"https://www.tasnimnews.com/\" target=\"_blank\">خبرگزاری تسنیم</a>؛ سازمان بهداشت جهانی به اوکراین توصیه کرد عوامل بیماری&zwj;&zwnj;&zwnj;زای خطرناک را که در آزمایشگاه&zwnj;های بهداشت عمومی این کشور نگهداری می&zwnj;شوند، نابود کند تا از &quot;هرگونه نشت احتمالی&quot; که باعث گسترش بیماری بین مردم شود، جلوگیری کند.</span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:14px\">کارشناسان امنیت زیستی می&zwnj;گویند که درگیری میان روسیه و اوکراین و بمباران شهرها، در صورتی که منجر به آسیب به این تأسیسات شود؛ خطر نشت عوامل بیماری&zwnj;زا را افزایش می&zwnj;دهد.</span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:14px\">بر اساس گزارش رویترز، اوکراین دارای آزمایشگاه&zwnj;هایی است که در مورد چگونگی کاهش خطرات بیماری&zwnj;های خطرناکی که حیوانات و انسان&zwnj;ها را تحت تأثیر قرار می&zwnj;دهند، از جمله کرونا، تحقیق می&zwnj;کنند. این آزمایشگاه&zwnj;ها تحت حمایت ایالات متحده، اروپا و سازمان جهانی بهداشت است.</span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:14px\">سازمان جهانی بهداشت ضمن تأکید بر لزوم امحای عوامل بیماری&zwnj;زای خطرناک در اوکراین، جزئیاتی در مورد انواع عوامل بیماری&zwnj;زا یا سموم موجود در آزمایشگاه&zwnj;های اوکراین ارائه نکرده است.</span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\"><span style=\"font-size:14px\">روز چهارشنبه، سخنگوی وزارت خارجه روسیه، ادعا کرد که ایالات متحده یک آزمایشگاه جنگ زیستی در اوکراین راه&zwnj;اندازی کرده است اما این ادعا بارها توسط واشنگتن و کی&zwnj;یف رد شده است.</span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:justify\">&nbsp;</p>', '2022-03-12 20:32:26', '2022-03-12 20:32:26'),
(8, 'دریافت‌کننده قلب خوک', '/images/news/5.jpg', '<h1 style=\"text-align:center\"><span style=\"font-size:20px\">نخستین دریافت&zwnj;کننده قلب خوک پس از ۲ ماه درگذشت</span></h1>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:20px\"><img alt=\"\" src=\"/images/news/5.jpg\" style=\"border-style:solid; border-width:3px; height:230px; width:330px\" /></span></p>\r\n\r\n<h3 dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">مردی که برای نخستین بار در تاریخ، قلب یک خوک را با موفقیت و بدون پس زده شدن سریع، دریافت کرده بود؛ دو ماه بعد از عمل پیوند درگذشت.</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">به گزارش خبرنگار اجتماعی&nbsp;<a href=\"https://www.tasnimnews.com/\" target=\"_blank\">خبرگزاری تسنیم</a>، مردی که برای نخستین بار در تاریخ، قلب یک خوک را با موفقیت و بدون پس زده شدن سریع، دریافت کرده بود؛ روز سه&zwnj;شنبه 8 مارس، دو ماه بعد از عمل پیوند درگذشت.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">این فرد که &quot;دیوید بنت&quot; نام داشت؛ 57 ساله بود و از بیماری قلبی رنج می&zwnj;برد. او با آگاهی نسبت به این که ممکن است این عمل جراحی جواب ندهد داوطلب دریافت قلب خوک بود و پیش از عمل جراحی گفته بود: &laquo;می&zwnj;دانم که این تیری در تاریکی است، اما این تنها شانس من است&raquo;.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">تیم پزشکی دانشگاه مریلند آمریکا به علت دقیق مرگ آقای بنت اشاره&zwnj;ای نکرده&zwnj; اما&nbsp;گفته&zwnj; که وضعیت جسمی بیمار از چند روز پیش وخیم شده بوده است. پس زده شدن عضو پیوندی و عفونت به همراه دیگر دشواری و پیچیدگی&zwnj;ها، از خطرات عمل پیوند هستند.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">بر اساس گزارش یورونیوز، دیوید بنت حدود دو ماه با قلب خوک اصلاح ژنتیکی شده، زنده ماند که نقطه عطفی در عمل&zwnj;های پیوند مشابه به شمار می&zwnj;رود.&nbsp;</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>', '2022-03-12 20:35:52', '2022-03-12 20:35:52'),
(9, 'اومیکرون', '/images/news/6.jpg', '<h1 style=\"text-align:center\"><span style=\"font-size:20px\">اومیکرون احتمالاً آخرین موج کرونا است/ توصیه&zwnj;هایی برای سفرهای نوروزی</span></h1>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:20px\"><img alt=\"\" src=\"/images/news/6.jpg\" style=\"border-style:solid; border-width:3px; height:230px; width:330px\" /></span></p>\r\n\r\n<h3 dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">رئیس دانشگاه علوم پزشکی تهران ضمن بیان توصیه&zwnj;های پزشکی برای سفرهای نوروزی درباره تأثیر واکسیناسیون در ایران بر تعداد مرگ&zwnj;ومیر موج ششم کرونا توضیح داد.</span></h3>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">به گزارش گروه اجتماعی&nbsp;<a href=\"https://www.tasnimnews.com/\" target=\"_blank\">خبرگزاری تسنیم</a>، حسین قناعتی&nbsp;با اشاره به تأثیر واکسیناسیون بر سویه اومیکرون، گفت: در کسانی که واکسن نزدند حدوداً 9 برابر مرگ&zwnj;ومیر بیشتر از کسانی است که واکسن زده&zwnj;اند و کسانی که واکسن زده&zwnj;اند میزان مرگ&zwnj;ومیر به&zwnj;شدت پایینی دارند، این کاری بود که در دولت سیزدهم انجام شد و در یک ماه اولی که به دانشگاه آمدیم تقریباً تمام وقتمان را برای واکسن گذاشتیم. می&zwnj;توانیم بگوییم که 100 درصد مردم جنوب شهر تهران دوز اول و نزدیک به 80 درصد دوز دوم را تزریق کرده&zwnj;اند و همین مسئله باعث شد که موج امیکرون آن&zwnj;قدر سریع بالا برود و سریعاً پایین بیاید.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">وی با مقایسه فراگیری اومیکرون و مرگ&zwnj;و&zwnj;میر در موج ششم در ایران و آمریکا، ابراز داشت: معادل همین اومیکرون در آمریکا دیده می&zwnj;شود که 50 درصد از مردم واکسن زده&zwnj;اند چراکه در آنجا خرافات بسیار بیشتر از ایران است و بسیاری از افراد واکسن تزریق نکردند مخصوصاً در بخش مرکزی که خرافات بیشتر است، اومیکرون در این کشور زودتر از ایران شروع شد و آمار و ارقام مرگ&zwnj;ومیر همچنان بالاست. این توفیق که ما در مهار موج ششم کرونا داشتیم به مسئله واکسیناسیون برمی&zwnj;گردد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">رئیس دانشگاه علوم پزشکی تهران با اشاره به اهمیت تکرار دوزهای واکسن در مهار کرونا، مطرح کرد: در زمینه کرونا که یک پدیده عجیبی است مجبور شدیم برخی از قواعد پزشکی را تغییر دهیم؛ تولید یک واکسن و یک دارو حداقل 8 یا 9 سال زمان می&zwnj;برد اما در همه&zwnj;گیری کرونا، مجوز اضطراری داده شد و همین&zwnj;طور که به پیش می&zwnj;رویم تحقیقات نیز انجام می&zwnj;شود و شاید بتوان گفت تابه&zwnj;حال صدها هزار مقاله در رابطه با کرونا نوشته شده است. می&zwnj;توان گفت بر اساس تحقیقاتی که در داخل توسط دانشمندان بسیار ارزشمند در دانشکده بهداشت انجام شده است و شبانه&zwnj;روز کار و مسائل مربوط به کرونا را رصد می&zwnj;کنند، هرچه جلوتر می&zwnj;رویم این قضیه شفاف&zwnj;تر می&zwnj;شود که واکسن اثر مفیدی دارد و تکرار دوزهای متفاوت کمک می&zwnj;کند تا مشکل حل شود.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">قناعتی با اشاره به احتمال تبدیل اومیکرون به آخرین موج کرونا، عنوان کرد: امیدوار هستیم اگر تغییرات و جهش&zwnj;های دیگری رخ ندهد به این سمت برویم که از پاندمی کرونا عبور کنیم و به&zwnj;طرف اپیدمی و آندمی برویم که البته نیازمند همکاری مردم است؛ هرچه مردم دنیا و همچنین مردم ایران همکاری و رعایت کنند احتمال جهش کمتر خواهد شد، اگر ویروس در حجم زیادی از مردم تکثیر شود احتمال جهش&zwnj;های جدید وجود خواهد داشت اما اگر تعداد تکثیر ویروس کمتر شود امید است که این بیماری مهار شود. احتمال این زیاد است که اومیکرون آخرین جهش کرونا باشد؛ تعدادی مقاله پشتیبان این صحبت است که امید دارند اگر تغییر غیرمنتظره و جدیدی رخ ندهد این موج ششم آخرین موج باشد و از این به بعد پیک&zwnj;های خیلی کوتاه خواهیم داشت و به&zwnj;مرور محو خواهد شد.</span></p>', '2022-03-12 20:39:34', '2022-03-12 20:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) NOT NULL,
  `status` enum('unpaid','paid','preparation','posted','received','canceled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tracking_serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `price`, `status`, `tracking_serial`, `created_at`, `updated_at`) VALUES
(1, 1, 102820, 'unpaid', NULL, '2022-03-13 16:41:00', '2022-03-13 16:41:00'),
(2, 5, 35700, 'unpaid', NULL, '2022-03-13 20:38:13', '2022-03-13 20:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(1, 1, 2),
(2, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `res_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `res_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ljsDQxq1VK3gQWsF', 0, '2022-03-13 16:41:02', '2022-03-13 16:41:02'),
(2, 2, 'PxNi9gUtjnc5yIk7', 0, '2022-03-13 20:38:14', '2022-03-13 20:38:14'),
(3, 2, 'VDX03sH8uvQg7aa8', 0, '2022-03-13 20:39:02', '2022-03-13 20:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'manage-user', 'مدیریت کاربران', '2022-03-12 17:20:33', '2022-03-12 17:20:33'),
(2, 'manage-permessions', 'مدیریت دسترسی ها', '2022-03-12 17:20:58', '2022-03-12 17:20:58'),
(3, 'manage-roles', 'مدیریت گروه های دسترسی', '2022-03-12 17:21:24', '2022-03-12 17:21:24'),
(4, 'manage-products', 'مدیریت محصولات', '2022-03-12 17:21:57', '2022-03-12 17:21:57'),
(5, 'manage-comments', 'مدیریت نظرات', '2022-03-12 17:22:19', '2022-03-12 17:22:19'),
(6, 'manage-categories', 'مدیریت دسته بندی ها', '2022-03-12 17:22:48', '2022-03-12 17:22:48'),
(7, 'manage-orders', 'مدیریت سفارشات', '2022-03-12 17:23:39', '2022-03-12 17:23:39'),
(8, 'manage-dicounts', 'مدیریت تخفیف ها', '2022-03-12 17:24:13', '2022-03-12 17:24:13'),
(9, 'manage-articles', 'مدیریت مقالات', '2022-03-12 17:24:39', '2022-03-13 17:34:12'),
(10, 'manage-news', 'مدیریت اخبار', '2022-03-12 17:25:04', '2022-03-12 17:25:04'),
(11, 'manage-slides', 'مدیریت اسلاید ها', '2022-03-12 17:25:39', '2022-03-12 17:25:39'),
(12, 'manage-aboutus', 'مدیریت درباره ما', '2022-03-12 17:26:06', '2022-03-12 17:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`) VALUES
(4, 4),
(5, 4),
(9, 4),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `inventory` int(11) NOT NULL DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `title`, `content`, `price`, `inventory`, `view_count`, `created_at`, `updated_at`, `percent`, `image`) VALUES
(1, 1, 'ست شستشو', '<p dir=\"rtl\" style=\"text-align:center\"><span style=\"font-size:20px\">مشخصات و نحوه عملکرد:</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">&nbsp;ست شست و شوی بینی و سینوس آریو سبب می شود تا ترشحات و باکتری ها از ناحیه سینوس و بینی خارج و گرفتگی بینی رفع شود و تنفسی راحت تر و خوابی آرام تر را به ارمغان می آورد. هم چنین به درمان آلرژی و سینوزیت کمک می کند. شست و شوی مداوم بینی و سینوس باعث تقویت سیستم ایمنی بدن می شود.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\"><span style=\"font-size:20px\">ویژگی ها:&nbsp;</span></p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">کمک به درمان علایم سینوزیت و آلرژي</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">جایگزین سرم های شست و شو</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">حاوی 30 عدد پودر طبی آریو&nbsp;</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">رفع خشکی و گرفتگی بینی</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">برطرف کننده تحریکات بینی بر اثر آلودگی هوا، گرد و غبار و ...</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">برای افراد بالای 6 سال</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">ساخت کشور ایران</span></li>\r\n</ul>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\"><span style=\"font-size:20px\">روش مصرف:</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">با 170 میلی لیتر آب ولرم یا سرد بطری را پر کنید .&nbsp;به منظور تهیه محلول هایپرتونیک سه بسته و برای تهیه محلول ایزوتونیک یک بسته پودر مخصوص آریو را در بطری بریزید.&nbsp;نی را کاملا در قسمت زیرین در بطری قرار دهید.&nbsp;به منظور حل کردن پودر آریو در آب ، بطری را خوب تکان دهید. نازل در قوطی را با بالا آوردن باز کنید دهان خود را باز کرده و نازل را روی یکی از سوراخ های بینی خود قرار دهید ، بطری آریو را به آرامی فشار داده تا محتویات آن از دهان یا سوراخ دیگر بینی شما خارج شوند. این عمل را چندین بار تکرار کنید و سپس همان کار را در سوراخ دیگر بینی خود تکرار کنید.&nbsp;پس از آن به آرامی در بینی خود بدمید.</span></p>\r\n\r\n<ul dir=\"rtl\">\r\n</ul>', 53000, 14, 0, '2022-03-13 03:26:48', '2022-03-13 03:26:48', 3, '/images/products/1.jpg'),
(2, 1, 'ماسک 5لایه', '<p dir=\"rtl\" style=\"text-align:center\"><span style=\"font-size:20px\">مشخصات و نحوه عملکرد:</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">براساس اظهارات مرکز کنترل بیماری CDC آمریکا، N &nbsp;در ماسک N95 &nbsp;به معنای مقاوم است. 95 نیز به این معنا است که این ماسک ورود حداقل 95 درصد از ذرات بسیار کوچک(0.3 میکرون) را به بدن مسدود می&zwnj;کند. این نوع ماسک&zwnj;ها از راندمان فیلتراسیون بالایی برخوردار بوده و به همین دلیل در سراسر جهان به عنوان یکی از بهترین ماسک&zwnj;ها شناخته شده&zwnj;اند. به طور عمومی عمر مفید ماسک فیلتردار N95 می&zwnj;تواند تا 8 ساعت کاری باشد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\"><span style=\"font-size:20px\">&nbsp;ویژگی&zwnj;ها:</span></p>\r\n\r\n<ul dir=\"rtl\">\r\n	<li><span style=\"font-size:14px\">دارای 5 لایه</span></li>\r\n	<li><span style=\"font-size:14px\">راندمان فیلتراسیون بالا</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">عمر مفید تا 8 ساعت کاری</span></li>\r\n</ul>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ul dir=\"rtl\">\r\n</ul>', 11900, 120, 0, '2022-03-13 16:52:03', '2022-03-13 16:52:03', NULL, '/images/products/3.jpg'),
(3, 1, 'ژل ضدعفونی کننده', '<h1 style=\"text-align:center\"><span style=\"font-size:20px\">ژل ضدعفونی کننده سپتی ژل</span></h1>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\"><span style=\"font-size:18px\"><strong>توضیحات و عملکرد</strong>&nbsp;<strong>ژل ضدعفونی کننده سپتی ژل حجم 75 میلی لیتر</strong></span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">ژل ضدعفونی کننده سپتی ژل برای از بین بردن عفونت ها و آلودگی هایی که با آب و صابون برطرف نمی&zwnj;شوند استفاده می&zwnj;شود.ژل ضدعفونی کننده سپتی ژل از بین برنده طیف وسیعی از میکروب ها، باکتری های گرم مانند مایکوباکتریوم توبرکلوزیس، ویروس عامل هپاتیت (HBV)، ویروس عامل ایدز (HIV)، اشرشیاکولی، پسودوموناس آیژینوزا، سالمونلا، استاف اورئوس و دیگر عوامل میکروبی می باشد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">در ساختار ژل ضد عفونی سپتی ژل دارای ویتامین E بوده و باعث جلوگیری از ایجاد حساسیت و همچنین ایجاد شادابی بر روی پوست می شود.این محصول مناسب برای استفاده در سرویس های بهداشتی، آزمایشگاه ها، بیمارستان ها و ... می باشد.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\"><span style=\"font-size:20px\"><strong>ویژگی های محصول</strong></span></p>\r\n\r\n<ul dir=\"rtl\" style=\"list-style-type:disc\">\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">دارای ویتامین E&nbsp; برای جلوگیری از ایجاد حساسیت و ایجاد شادابی بر روی پوست</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">قابل استفاده برای&nbsp;ضدعفونی دست کارکنان آزمایشگاه&zwnj;ها و ...</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">دارای خاصیت پاک کنندگی و ضد عفونی کنندگی&nbsp;</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">مناسب برای استفاده در سرویس های بهداشتی</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">قابل استفاده برای ضدعفونی کردن دست</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">از بین برنده عفونت های بیمارستانی</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">قدرت اثر بالا در غلظت های پایین</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">از بین برنده&nbsp;عوامل بیماری زا</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">حجم محصول 75 میلی لیتر</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">از بین برنده پاتوژن&nbsp;</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">مقرون به صرفه&nbsp;</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">اثر سریع</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">ایمنی بالا</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">ساخت کشور ایران</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-size:14px\">شرکت بهبان شیمی</span></li>\r\n</ul>\r\n\r\n<ul dir=\"rtl\" style=\"list-style-type:disc\">\r\n</ul>', 14500, 50, 0, '2022-03-13 17:12:13', '2022-03-13 17:12:13', 5, '/images/products/6.jpg'),
(4, 1, 'مسواک برقی', '<h1 dir=\"rtl\" style=\"text-align:center\">مسواک برقی اورال بی ProfessionalCare</h1>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\"><span style=\"font-size:20px\">مشخصات و نحوه عملکرد&nbsp;مسواک برقی اورال بی ProfessionalCare:</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:justify\"><span style=\"font-size:14px\">مسواک برقی اورال بی از بهترین محصولات در ردیف تجهیزات مراقبت از دهان و دندان است. در این میان مدل ProfessionalCare اورال بی پیشرفته ترین مسواک برقی تخصصی به حساب می آید. برای افرادی که اهمیت ویژه ای برای سلامت دندانها و لثه ها قائل اند این دستگاه توسط متخصصین دندان پیشنهاد می شود. برای تمیز نمودن حرفه ای، سفید کنندگی و براق نمودن دندانها این محصول بسیار کارآمد و موثر است. همچنین استفاده از مسواک برقی تاثیر به سزایی در سلامت و شادابی &nbsp;لثه ها و بهبود گردش خون و احساس شادابی دارد. راندمان این مسواک با تعداد 40000 حرکت رفت و برگشت به داخل و خارج در هر دقیقه و 8800 دور چرخشی در هر دقیقه هر گونه جرم، پلاک دندانی، باکتری و باقیمانده مواد غذایی را در دندانها و فواصل کور بین آنها می زداید.</span></p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p dir=\"rtl\" style=\"text-align:center\"><span style=\"font-size:20px\">ویژگیها:</span></p>\r\n\r\n<p dir=\"rtl\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">راندمان حذف و زدودن هرگونه جرم و باکتری تا سطح 97%</span></li>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">عملکرد بالای سفید کنندگی پس از سه هفته مشهود می شود</span></li>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">حتی تاثیر رنگهای خفیف مانند چای و قهوه نیز با کمک این مسواک از بین می روند</span></li>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">به بهبود گردش خون و شادابی لثه بسیار کمک می کند (به ویژه مفید برای افرادی که با مسواک معمولی دچار خون ریزی لثه ها می شوند)</span></li>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">کمک به تکمیل فرآیند مسواک زدن کامل در تنها 2 دقیقه</span></li>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">امکان تنظیم سرعت گردش سری مسواک متناسب با سطح راحتی کاربر</span></li>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">دارای سری مسواک گرد به همراه 4 نوع سری های مختلف</span></li>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">برای تمیز نمودن عمیق، سری مخصوص سفید کنندگی، سری با حرکت دو طرفه و سری نرم برای دندانهای حساس</span></li>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">دارای تایمر دو دقیقه ای با فواصل 30 ثانیه ای برای کمک به کاربر جهت تکمیل فرآیند تمیز نمودن دندان به طور کامل</span></li>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">گارانتی: 1سال</span></li>\r\n	<li dir=\"rtl\" style=\"text-align: right;\"><span style=\"font-size:14px\">ساخت کشور آلمان</span></li>\r\n</ul>\r\n\r\n<ul>\r\n</ul>', 124000, 0, 0, '2022-03-13 17:19:34', '2022-03-13 17:19:34', NULL, '/images/products/9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `image`, `alt`, `created_at`, `updated_at`) VALUES
(1, 1, '/images/products/1.jpg', 'تصویر شماره 1', '2022-03-13 03:50:09', '2022-03-13 03:50:09'),
(2, 1, '/images/products/2.jpg', 'تصویر شماره 2', '2022-03-13 03:50:09', '2022-03-13 03:50:09'),
(3, 2, '/images/products/4.jpg', 'تصویر 1', '2022-03-13 17:03:51', '2022-03-13 17:03:51'),
(4, 2, '/images/products/5.jpg', 'تصویر2', '2022-03-13 17:03:51', '2022-03-13 17:03:51'),
(5, 3, '/images/products/7.jpg', '33333', '2022-03-13 17:13:53', '2022-03-13 17:13:53'),
(6, 3, '/images/products/8.jpg', '55555', '2022-03-13 17:13:53', '2022-03-13 17:13:53'),
(7, 4, '/images/products/10.jpg', '1111', '2022-03-13 17:20:14', '2022-03-13 17:20:14'),
(8, 4, '/images/products/11.jpg', '2222', '2022-03-13 17:20:15', '2022-03-13 17:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`, `alt`, `created_at`, `updated_at`) VALUES
(3, '/images/news/11.jpg', 'خدمات پرستاری در منزل \"ویژه استان اصفهان\"', '2022-03-12 21:10:14', '2022-03-12 21:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_supervisor` tinyint(1) NOT NULL DEFAULT 0,
  `is_staff` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('off','sms') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/images/user/user.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_supervisor`, `is_staff`, `password`, `type`, `phone`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(1, 'sajad', 'sagh@gmail.com', NULL, 1, 0, '$2y$10$XhB9SuY5LhEePDSKK5ZTROQeJwGjxtnkLi7TDUJKSJIdM26EokpUC', 'off', '24344454522', NULL, '2022-03-11 12:27:10', '2022-03-12 15:51:59', '/images/user/1647100319.PNG'),
(2, 'pp', 'pp@gmail.com', '2022-03-12 10:34:18', 0, 1, '$2y$10$9Qc0xTVJtCyNCXvGt8wb3OTxQaCmweB7S2saG7qOJLGhPV9Ljljhm', 'off', NULL, NULL, '2022-03-12 10:34:18', '2022-03-13 18:16:52', '/images/user/user.jpg'),
(3, 'wwwwwwwwwwwwww', 'www@sa.gmai.com', '2022-03-12 10:35:37', 0, 0, '$2y$10$RcBp9Kb4ekKDn9YKKePmW.nopp0CvjP9f24EDQP6TRac48uRNKHTa', 'off', NULL, NULL, '2022-03-12 10:35:37', '2022-03-12 10:37:51', '/images/user/user.jpg'),
(4, 'ali', 'ali@gmail.com', '2022-03-12 17:17:59', 0, 1, '$2y$10$4I77sGHjpv6UE9bpGDKRheKYVaKUppxLJd3qDAVn8s4zhZIwY4Yru', 'off', NULL, NULL, '2022-03-12 17:17:59', '2022-03-12 17:17:59', '/images/user/user.jpg'),
(5, 'رامین بی باک', 'rambod@gmail.com', NULL, 0, 0, '$2y$10$tm5Gz/ShDMJ48wtkjIGaO.oF.E0nkCyUhRQ2olYl.K4I0DTwdEvwS', 'off', '09162035914', NULL, '2022-03-13 20:29:14', '2022-03-13 20:36:47', '/images/user/1647203807.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `active_codes`
--
ALTER TABLE `active_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `active_codes_user_id_foreign` (`user_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD PRIMARY KEY (`attribute_id`,`value_id`,`product_id`),
  ADD KEY `attribute_product_value_id_foreign` (`value_id`),
  ADD KEY `attribute_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_discount`
--
ALTER TABLE `category_discount`
  ADD PRIMARY KEY (`discount_id`,`category_id`),
  ADD KEY `category_discount_category_id_foreign` (`category_id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`category_id`,`product_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_product`
--
ALTER TABLE `discount_product`
  ADD PRIMARY KEY (`discount_id`,`product_id`),
  ADD KEY `discount_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `discount_user`
--
ALTER TABLE `discount_user`
  ADD PRIMARY KEY (`discount_id`,`user_id`),
  ADD KEY `discount_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`product_id`,`order_id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_order_id_foreign` (`order_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`permission_id`,`user_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_galleries_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `active_codes`
--
ALTER TABLE `active_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `active_codes`
--
ALTER TABLE `active_codes`
  ADD CONSTRAINT `active_codes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD CONSTRAINT `attribute_product_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_product_value_id_foreign` FOREIGN KEY (`value_id`) REFERENCES `attribute_values` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_discount`
--
ALTER TABLE `category_discount`
  ADD CONSTRAINT `category_discount_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_discount_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `discount_product`
--
ALTER TABLE `discount_product`
  ADD CONSTRAINT `discount_product_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `discount_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `discount_user`
--
ALTER TABLE `discount_user`
  ADD CONSTRAINT `discount_user_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `discount_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

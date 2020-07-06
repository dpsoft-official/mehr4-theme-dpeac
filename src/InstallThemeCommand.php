<?php

namespace Dpsoft\Mehr4ThemeDpeac;

use Dpsoft\Mehr\Models\Setting;
use Illuminate\Console\Command;

class InstallThemeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mehr4-theme-dpeac:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install mehr4 theme';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Publishing assets...');
        $this->call('vendor:publish',['--provider'=>Mehr4ThemeDpeacServiceProvider::class,'--tag'=>'assets','--force' => true]);

        $this->info('copy theme directory...');
        $this->call('vendor:publish',['--provider'=>Mehr4ThemeDpeacServiceProvider::class,'--tag'=>'theme','--force' => true]);

//        $this->info('Publishing page404...');
//        $this->call('vendor:publish',['--provider'=>Mehr4ThemeAzarbsServiceProvider::class,'--tag'=>'page404','--force' => true]);
//
//        $this->info('Publishing auth pages view...');
//        $this->call('vendor:publish',['--tag'=>'mehr-theme-azarbs-auth-views']);

        $this->info('Creating new settings...');
        \Mehr::updateOrNewSetting('site_facebook','@siteAccount','Facebook account...');
        \Mehr::updateOrNewSetting('site.logo',\Storage::url('theme/logo.png'),'لوگوی سایت');
        \Mehr::updateOrNewSetting('slider.title1','کسب و کار خود را بسازید','شعار اول اسلایدر');
        \Mehr::updateOrNewSetting('slider.title2','آموزش حرفه ای=آینده کسب و کار روشن','شعار دوم اسلایدر');
        \Mehr::updateOrNewSetting('icon1.title','برنامه ریزی هوشمند','آیکن اول زیر اسلایدر');
        \Mehr::updateOrNewSetting('icon2.title','اساتید برتر ایران','آیکن دوم زیر اسلایدر');
        \Mehr::updateOrNewSetting('icon3.title','آموزش کاربردی','آیکن سوم زیر اسلایدر');
        \Mehr::updateOrNewSetting('icon4.title','ضمانت خرید','آیکن چهارم زیر اسلایدر');
        \Mehr::updateOrNewSetting('icon5.title','بازگشت وجه','آیکن پنجم زیر اسلایدر');
        \Mehr::updateOrNewSetting('icon6.title','برترین مشاوران ایران','آیکن ششم زیر اسلایدر');
        \Mehr::updateOrNewSetting('about-title1','ین مجموعه با برگزاری نشست ها، سمینارها، دوره های کوتاه مدت و بلند مدت و کارگاه های تخصصی از سال 1384 تاکنون و با اتکا به نیروهای خلاق و توانمند توانسته افرادی تعلیم دهد که پروژه های موفقی را در سراسر ایران اجرا کرده اند.','متن کوتاه معرفی صفحه درباره ما');
        \Mehr::updateOrNewSetting('number-counter-1','152','  شمارنده  1');
        \Mehr::updateOrNewSetting('number-counter-2','140',' شمارنده 2');
        \Mehr::updateOrNewSetting('icon1-about','اساتید به روز','متن آیکن اول درباره ما');
        \Mehr::updateOrNewSetting('icon2-about','پشتیبانی آموزشی','متن آیکن اول درباره ما');
        \Mehr::updateOrNewSetting('icon3-about','سرفصل های به روز','متن آیکن دوم درباره ما');
        \Mehr::updateOrNewSetting('icon4-about','اساتید به روز','متن آیکن سوم درباره ما');
        \Mehr::updateOrNewSetting('icon5-about','با هدف','متن آیکن چهارم درباره ما');
        \Mehr::updateOrNewSetting('icon6-about','تمرکز بر روی موفقیت','متن آیکن پنجم درباره ما');
        \Mehr::updateOrNewSetting('icon6-about','برنامه ریزی پیشرفته آموزشی','متن آیکن ششم درباره ما');
        \Mehr::updateOrNewSetting('team1','مارال رضایی','نام تیم ما1');
        \Mehr::updateOrNewSetting('team2','مهران احمدی','نام تیم ما2');
        \Mehr::updateOrNewSetting('team3','مارال رضایی','نام تیم ما3');
        \Mehr::updateOrNewSetting('team4','مارال احمدی','نام تیم ما4');
        \Mehr::updateOrNewSetting('team5','مینا احمدی','نام تیم ما5');
        \Mehr::updateOrNewSetting('team1-job','حسابدار','شغل تیم ما1');
        \Mehr::updateOrNewSetting('team2-job','طراح','شغل تیم ما2');
        \Mehr::updateOrNewSetting('team3-job','فنی','شغل تیم ما31');
        \Mehr::updateOrNewSetting('team4-job','طراح','شغل تیم ما4');
        \Mehr::updateOrNewSetting('team5-job','گرافیست','شغل تیم ما5');
        \Mehr::updateOrNewSetting('team-desc','تیم کاری ...در سال ۱۳۸۷ برای اولین بار در ایران با معرفی مفهومی جدید در فضای مجازی به نام “برند سازی اینترنتی” آغاز به کار کرده است. ما در این وب سایت تلاش می کنیم تا دانسته‌ها و تجربیات هر چند کوچک خود را با شما به اشتراک بگذاریم و مدیران ایرانی را با مقوله جدید بازاریابی و برند سازی اینترنتی آشنا نماییم. ما در این وب سایت تلاش می کنیم تا دانسته‌ها و تجربیات هر چند کوچک خود را با شما به اشتراک بگذاریم و مدیران ایرانی را با مقوله جدید بازاریابی و برند سازی اینترنتی آشنا نماییم.',' متن توضیح تیم ما');

    }

}

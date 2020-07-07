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
        \Mehr::updateOrNewSetting('teacher1.name','نیما کیمیایی','نام استاد اول');
        \Mehr::updateOrNewSetting('teacher2.name','احمد حلت','نام استاد دوم');
        \Mehr::updateOrNewSetting('teacher3.name','بابک بهبودی','نام استاد سوم');
        \Mehr::updateOrNewSetting('teacher4.name','کامران صحت','نام استاد چهارم');
        \Mehr::updateOrNewSetting('teacher5.name','پویا ودایع','نام استاد پنجم');
        \Mehr::updateOrNewSetting('teacher6.name','یحیی علوی','نام استاد ششم');
        \Mehr::updateOrNewSetting('teacher7.name','فرخ دیبا','نام استاد هفتم');
        \Mehr::updateOrNewSetting('teacher8.name','پرویز درگی','نام استاد هشتم');
        \Mehr::updateOrNewSetting('teacher9.name','اوژن استوار','نام استاد نهم');
        \Mehr::updateOrNewSetting('contact.payamak','3000601880','شماره پیامک');
        \Mehr::updateOrNewSetting('title1','دانش پذیران','عنوان اول قسمت دانش پژوهانی شوید');
        \Mehr::updateOrNewSetting('title2','ساعت تولید محتوا','عنوان دوم قسمت دانش پژوهانی شوید');
        \Mehr::updateOrNewSetting('title3','استادان','عنوان سوم قسمت دانش پژوهانی شوید');
        \Mehr::updateOrNewSetting('title4','دوره ها','عنوان چهارم قسمت دانش پژوهانی شوید');
        \Mehr::updateOrNewSetting('num1','400000',' تعداد عنوان اول قسمت دانش پژوهانی شوید ');
        \Mehr::updateOrNewSetting('num2','525',' تعداد عنوان دوم قسمت دانش پژوهانی شوید ');
        \Mehr::updateOrNewSetting('num3','70',' تعداد عنوان سوم قسمت دانش پژوهانی شوید ');
        \Mehr::updateOrNewSetting('num4','120',' تعداد عنوان چهارم قسمت دانش پژوهانی شوید ');


    }

}

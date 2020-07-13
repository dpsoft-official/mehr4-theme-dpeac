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
        \Mehr::updateOrNewSetting('site.logo',\Storage::url('theme/logo.png'),'لوگوی سایت');
        \Mehr::updateOrNewSetting('mob.logo',\Storage::url('theme/logomob.png'),'لوگوی  موبایل سایت');
        \Mehr::updateOrNewSetting('institute.token',"37f93923afd5f7a5a9faf7a9bffdd6443ce976b4",'توکن سازمان ');
       \Mehr::updateOrNewSetting('teacher1.name','نیما کیمیایی','نام استاد اول');
        \Mehr::updateOrNewSetting('exp1.teacher1.name','مشاور و مدرس بیش از 80 برند معتبر مانند: هیوندای ،سوبارو ،صنایع غذایی آوازه،ثبت ویونا،آقای فرش،سپاهان همراه ،فرش فرهی،مرسدس بنز، نایلون سپید','توضیح 1 استاد اول');
        \Mehr::updateOrNewSetting('exp2.teacher1.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 2 استاد اول');
        \Mehr::updateOrNewSetting('exp3.teacher1.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 3 استاد اول');
        \Mehr::updateOrNewSetting('exp4.teacher1.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 4 استاد اول');
        \Mehr::updateOrNewSetting('exp5.teacher1.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 5 استاد اول');
        \Mehr::updateOrNewSetting('exp6.teacher1.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 6 استاد اول');
        \Mehr::updateOrNewSetting('teacher2.name','احمد حلت','نام استاد دوم');
        \Mehr::updateOrNewSetting('exp1.teacher2.name','مشاور و مدرس بیش از 80 برند معتبر مانند: هیوندای ،سوبارو ،صنایع غذایی آوازه،ثبت ویونا،آقای فرش،سپاهان همراه ،فرش فرهی،مرسدس بنز، نایلون سپید','توضیح 1 استاد اول');
        \Mehr::updateOrNewSetting('exp2.teacher2.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 2 استاد دوم');
        \Mehr::updateOrNewSetting('exp3.teacher2.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 3 استاد دوم');
        \Mehr::updateOrNewSetting('exp4.teacher2.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 4 استاد دوم');
        \Mehr::updateOrNewSetting('exp5.teacher2.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 5 استاد دوم');
        \Mehr::updateOrNewSetting('exp6.teacher2.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 6 استاد دوم');
        \Mehr::updateOrNewSetting('teacher3.name','بابک بهبودی','نام استاد سوم');
        \Mehr::updateOrNewSetting('exp1.teacher3.name','مشاور و مدرس بیش از 80 برند معتبر مانند: هیوندای ،سوبارو ،صنایع غذایی آوازه،ثبت ویونا،آقای فرش،سپاهان همراه ،فرش فرهی،مرسدس بنز، نایلون سپید','توضیح 1 استاد اول');
        \Mehr::updateOrNewSetting('exp2.teacher3.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 2 استاد سوم');
        \Mehr::updateOrNewSetting('exp3.teacher3.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 3 استاد سوم');
        \Mehr::updateOrNewSetting('exp4.teacher3.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 4 استاد سوم');
        \Mehr::updateOrNewSetting('exp5.teacher3.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 5 استاد سئم');
        \Mehr::updateOrNewSetting('exp6.teacher3.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 6 استاد سوم');
        \Mehr::updateOrNewSetting('teacher4.name','کامران صحت','نام استاد چهارم');
        \Mehr::updateOrNewSetting('exp1.teacher4.name','مشاور و مدرس بیش از 80 برند معتبر مانند: هیوندای ،سوبارو ،صنایع غذایی آوازه،ثبت ویونا،آقای فرش،سپاهان همراه ،فرش فرهی،مرسدس بنز، نایلون سپید','توضیح 1 استاد چعارم');
        \Mehr::updateOrNewSetting('exp2.teacher4.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 2 استاد چعارم');
        \Mehr::updateOrNewSetting('exp3.teacher4.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 3 استاد چعارم');
        \Mehr::updateOrNewSetting('exp4.teacher4.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 4 استاد چعارم');
        \Mehr::updateOrNewSetting('exp5.teacher4.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 5 استاد چعارم');
        \Mehr::updateOrNewSetting('exp6.teacher4.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 6 استاد چعارم');
        \Mehr::updateOrNewSetting('teacher5.name','پویا ودایع','نام استاد پنجم');
        \Mehr::updateOrNewSetting('exp1.teacher5.name','مشاور و مدرس بیش از 80 برند معتبر مانند: هیوندای ،سوبارو ،صنایع غذایی آوازه،ثبت ویونا،آقای فرش،سپاهان همراه ،فرش فرهی،مرسدس بنز، نایلون سپید','توضیح 1 استاد پنجم');
        \Mehr::updateOrNewSetting('exp2.teacher5.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 2 استاد پنجم');
        \Mehr::updateOrNewSetting('exp3.teacher5.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 3 استاد پنجم');
        \Mehr::updateOrNewSetting('exp4.teacher5.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 4 استاد پنجم');
        \Mehr::updateOrNewSetting('exp5.teacher5.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 5 استاد پنجم');
        \Mehr::updateOrNewSetting('exp6.teacher5.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 6 استاد پنجم');
        \Mehr::updateOrNewSetting('teacher6.name','یحیی علوی','نام استاد ششم');
        \Mehr::updateOrNewSetting('exp1.teacher6.name','مشاور و مدرس بیش از 80 برند معتبر مانند: هیوندای ،سوبارو ،صنایع غذایی آوازه،ثبت ویونا،آقای فرش،سپاهان همراه ،فرش فرهی،مرسدس بنز، نایلون سپید','توضیح 1 استاد ششم');
        \Mehr::updateOrNewSetting('exp2.teacher6.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 2 استاد ششم');
        \Mehr::updateOrNewSetting('exp3.teacher6.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 3 استاد ششم');
        \Mehr::updateOrNewSetting('exp4.teacher6.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 4 استاد ششم');
        \Mehr::updateOrNewSetting('exp5.teacher6.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 5 استاد ششم');
        \Mehr::updateOrNewSetting('exp6.teacher6.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 6 استاد ششم');
        \Mehr::updateOrNewSetting('teacher7.name','فرخ دیبا','نام استاد هفتم');
        \Mehr::updateOrNewSetting('exp1.teacher7.name','مشاور و مدرس بیش از 80 برند معتبر مانند: هیوندای ،سوبارو ،صنایع غذایی آوازه،ثبت ویونا،آقای فرش،سپاهان همراه ،فرش فرهی،مرسدس بنز، نایلون سپید','توضیح 1 استاد هفتم');
        \Mehr::updateOrNewSetting('exp2.teacher7.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 2 استاد هفتم');
        \Mehr::updateOrNewSetting('exp3.teacher7.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 3 استاد هفتم');
        \Mehr::updateOrNewSetting('exp4.teacher7.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 4 استاد هفتم');
        \Mehr::updateOrNewSetting('exp5.teacher7.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 5 استاد هفتم');
        \Mehr::updateOrNewSetting('exp6.teacher7.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 6 استاد هفتم');
        \Mehr::updateOrNewSetting('teacher8.name','پرویز درگی','نام استاد هشتم');
        \Mehr::updateOrNewSetting('exp1.teacher8.name','مشاور و مدرس بیش از 80 برند معتبر مانند: هیوندای ،سوبارو ،صنایع غذایی آوازه،ثبت ویونا،آقای فرش،سپاهان همراه ،فرش فرهی،مرسدس بنز، نایلون سپید','توضیح 1 استاد هشتم');
        \Mehr::updateOrNewSetting('exp2.teacher8.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 2 استاد هشتم');
        \Mehr::updateOrNewSetting('exp3.teacher8.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 3 استاد هشتم');
        \Mehr::updateOrNewSetting('exp4.teacher8.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 4 استاد هشتم');
        \Mehr::updateOrNewSetting('exp5.teacher8.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 5 استاد هشتم');
        \Mehr::updateOrNewSetting('exp6.teacher8.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 6 استاد هشتم');
        \Mehr::updateOrNewSetting('teacher9.name','اوژن استوار','نام استاد نهم');
        \Mehr::updateOrNewSetting('exp1.teacher9.name','مشاور و مدرس بیش از 80 برند معتبر مانند: هیوندای ،سوبارو ،صنایع غذایی آوازه،ثبت ویونا،آقای فرش،سپاهان همراه ،فرش فرهی،مرسدس بنز، نایلون سپید','توضیح 1 استاد هشتم');
        \Mehr::updateOrNewSetting('exp2.teacher9.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 2 استاد نهم');
        \Mehr::updateOrNewSetting('exp3.teacher9.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 3 استاد نهم');
        \Mehr::updateOrNewSetting('exp4.teacher9.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 4 استاد نهم');
        \Mehr::updateOrNewSetting('exp5.teacher9.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 5 استاد نهم');
        \Mehr::updateOrNewSetting('exp6.teacher9.name','مشاور و مدرس برندهای آیسا مبل ،پاساژهای خلیج فارس،پاسارگاد،کاسپین،یک و یک ، بازار سنگ پایتخت ،دومینو، ایستکول و ...','توضیح 6 استاد نهم');
        \Mehr::updateOrNewSetting('contact.payamak','3000601880','شماره پیامک');
        \Mehr::updateOrNewSetting('title1','دانش پذیران','عنوان اول قسمت دانش پژوهانی شوید');
        \Mehr::updateOrNewSetting('title2','ساعت تولید محتوا','عنوان دوم قسمت دانش پژوهانی شوید');
        \Mehr::updateOrNewSetting('title3','استادان','عنوان سوم قسمت دانش پژوهانی شوید');
        \Mehr::updateOrNewSetting('title4','دوره ها','عنوان چهارم قسمت دانش پژوهانی شوید');
        \Mehr::updateOrNewSetting('num1','400000',' تعداد عنوان اول قسمت دانش پژوهانی شوید ');
        \Mehr::updateOrNewSetting('num2','525',' تعداد عنوان دوم قسمت دانش پژوهانی شوید ');
        \Mehr::updateOrNewSetting('num3','70',' تعداد عنوان سوم قسمت دانش پژوهانی شوید ');
        \Mehr::updateOrNewSetting('num4','120',' تعداد عنوان چهارم قسمت دانش پژوهانی شوید ');
        \Mehr::updateOrNewSetting('samandehi','','کد ای نماد ');
        \Mehr::updateOrNewSetting('enemad','','کد سامان دهی ');
        \Mehr::updateOrNewSetting('phone.buy1','03136688575 ','شماره تلفن پشتیبانی 1 ');
        \Mehr::updateOrNewSetting('phone.buy2','03136001070 ','شماره تلفن پشتیبانی 2 ');
        \Mehr::updateOrNewSetting('phone.buy3','03136001080 ','شماره تلفن پشتیبانی 3 ');
        \Mehr::updateOrNewSetting('phone.buy4','03136001090 ','شماره تلفن پشتیبانی 3 ');
        \Mehr::updateOrNewSetting('product_id',30,'کد محصول');
        \Mehr::updateOrNewSetting('source_id',121,'کد ورودی');
        \Mehr::updateOrNewSetting('post-content','ارسال توسط پست ویژه و دریافت طی 3 روز','متن ارسال پستی');
        \Mehr::updateOrNewSetting('title1cat','پکیج جامع','شعار 1 صفحه دسته بندی');
        \Mehr::updateOrNewSetting('title2cat','رفع اشکال با استاد','شعار 2 صفحه دسته بندی');
        \Mehr::updateOrNewSetting('title3cat','تحویل طی سه روز کاری','شعار 3 صفحه دسته بندی');
        \Mehr::updateOrNewSetting('title4cat','پشتیبانی یکساله پرسش و پاسخ از طریق سامانه','شعار 4 صفحه دسته بندی');
        \Mehr::updateOrNewSetting('title5cat','تأییدیه تخصصی اساتید دوره','شعار 5 صفحه دسته بندی');
        \Mehr::updateOrNewSetting('title6cat','LMS','شعار 6 صفحه دسته بندی');




    }

}

<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Media Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور media — همهٔ کلیدهای مستندشده در `docs/03-engines/media.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/media.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('MEDIA_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('MEDIA_PREFIX', 'media:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('MEDIA_LOG_CHANNEL', 'media'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Media',
        'accessor' => 'media',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];
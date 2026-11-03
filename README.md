# Tavaan Engine — Media

> **آپلود و پردازش رسانه** — موتور Media در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.media` |
| نام | `Media` |
| عنوان فارسی | آپلود و پردازش رسانه |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Media` |
| نوع | `engine` |
| Facade | `Media` (accessor: `media`) |

## خطاها (Exceptions)

- `Tavaan\Engine\Media\Exceptions\InvalidFileTypeException`
- `Tavaan\Engine\Media\Exceptions\MediaException`

## Facadeها

- `Tavaan\Engine\Media\Facades\Media`

## کلاس‌های اصلی

- `src/Image.php`
- `src/ImageManager.php`
- `src/ImageProcessor.php`
- `src/Media.php`
- `src/MediaManager.php`
- `src/MediaServiceProvider.php`
- `src/MimeDetector.php`
- `src/MimeValidator.php`
- `src/Uploader.php`

## Service Providerها

- `Tavaan\Engine\Media\MediaServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

## پیکربندی

- فایل پیکربندی: `config/media.php`
- کلید: `media`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Media.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Media`** (این مخزن) | موتور Media |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.

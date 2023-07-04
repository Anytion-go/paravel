# <p align="center">Paravel app</p>

เขียน PHP  พร้อม mVc อย่างเรียบง่าย

### menu

- [Get started](#get-started)
- [How it works](#how-it-works)
- [controllers and views](#controllers-and-views)
- [routes](#routes)
- [database](#database)
## Get started

1. สร้างโปรเจคเริ่มต้นด้วย [control](https://github.com/Arikato111/control)

   ```
   php control create paravel-app
   ```

2. เตรียมพร้อมการเชื่อมต่อฐานข้อมูลด้วยการสร้างไฟล์ชื่อ `.env` ให้เหมือนกับ `.env.example`

3. เริ่มต้นเขียนเว็บไซต์ด้วยการแก้ไข `./controllers/Controllers.php` และ `./views/index.php`

## How it works

#### controllers and views

```php
function index()
{
    $props = [
        'title' => 'welcome',
        'header' => 'Welcome to paravel app'
    ];
    return view('index.php', $props);
}
```

  - Controller คือฟังชั่นที่จะทำการประมวลผลก่อนที่จะส่งค่าไปแสดงในหน้าเว็บ โดยจะมีการทำงานร่วมกับ `view` เพื่อเชื่อมต่อหน้าเว็บและส่งค่า `$props`  ไปแสดงผล
  - view คือตัวที่จะทำการเชื่อมไฟล์ที่เป็นหน้าเว็บไซต์บนโฟลเดอร์ `./views` กับ `controller` โดยรับค่าสองค่าคือ 
    1. ชื่อของไฟล์ที่อยู่บน `./views` 
    2. props คือตัวแปรที่จะทำการส่งค่าไปแสดงผลต่อ 

#### routes 

```php
Route::get('/', 'index');
```

- Route จะเป็นตัวเชื่อม path เข้ากับ `controller`  โดยจะรับค่าสองค่าคือ
    1. path 
    2. ชื่อฟังค์ชั่นของ controller


#### database

```php
class Example extends DB_MODELS
{
    public function examp()
    {
        $query = "SELECT * FROM {$this->table} LIMIT 1";
        $result = $this->connect->query($query);
        return $result->fetch_assoc();
    }
}
```

- เมื่อเริ่มเขียนจะทำการสร้าง `class` และทำการ extends จาก `DB_MODELS`
- ตั้งชื่อ class เป็นชื่อ Table ของฐานข้อมูล
- `$this->table` เมื่อต้องการชื่อของ `Table`
- `$this->connect` เมื่อต้องการรันคำสั่ง SQL โดยตัว `$this->connect` ถูกสร้างจากการ `new mysqli()`
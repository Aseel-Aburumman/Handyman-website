<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // store 2/4/10/11/12/13/
        // 1
        Product::create([
            'store_id' => 2, // Assuming Store ID 1 exists
            'name' => 'Precision Screwdrivers Set',
            'name_ar' => ' طقم مفكات الكتروني',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Precision Screwdrivers, ScrewdriversBrand: Jetech Tool',
            'description_ar' => 'لتصنيفات: العدد اليدوية, العدد و الادوات, مفكات الكترونيات, المفكاتالعلامة التجارية: Jetech Tool',
            'price' => 4.35,
            'discounted_price' => 4,
            'availability' => true,
            'stock_quantity' => 50,
        ]);
        // 2

        Product::create([
            'store_id' => 2, // Assuming Store ID 1 exists
            'name' => 'Metal Tool Box 16 inch',
            'name_ar' => 'صندوق عدة حديد 16 انش',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Tool & Screw BoxesBrand: Finder',
            'description_ar' => 'التصنيفات: صناديق عدة وعلب براغي, العدد اليدوية, العدد و الادواتالعلامة التجارية: Finder',
            'price' => 14,
            'discounted_price' => 10,
            'availability' => true,
            'stock_quantity' => 50,
        ]);
        // 3
        Product::create([
            'store_id' => 2, // Assuming Store ID 1 exists
            'name' => 'Tape Measure 5mx25mm',
            'name_ar' => 'متر قياس 5 متر*25 ملم',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: King Tony',
            'description_ar' => 'التصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: King Tony',
            'price' => 7.5,
            'discounted_price' => 7,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 4
        Product::create([
            'store_id' => 2, // Assuming Store ID 1 exists
            'name' => 'Laser Distance Measure 50m',
            'name_ar' => 'متر قياس ليزر 50 متر',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: Ronix',
            'description_ar' => 'لتصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: Ronix',
            'price' => 35,
            'discounted_price' => 30,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 5
        Product::create([
            'store_id' => 2, // Assuming Store ID 1 exists
            'name' => 'Stoning Hammer 500 gram',
            'name_ar' => 'شاكوش خلع نجارين 500 غرام',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Hammers',
            'description_ar' => 'التصنيفات: العدد اليدوية, العدد و الادوات, الشواكيش',
            'price' => 3.75,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 6
        Product::create([
            'store_id' => 2, // Assuming Store ID 1 exists
            'name' => 'Sledge Hammer 3 Kilo',
            'name_ar' => 'مهدة 3 كيلو',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Hammers',
            'description_ar' => 'التصنيفات: العدد اليدوية, العدد و الادوات, الشواكيش',
            'price' => 17,
            'discounted_price' => 15,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 7
        Product::create([
            'store_id' => 2, // Assuming Store ID 1 exists
            'name' => 'Gasoline Generator 1 KVA',
            'name_ar' => 'مولد بنزين 1 كيلو فولت',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Electrical & Industrial Tools, Gasoline GeneratorBrand: Marquis',
            'description_ar' => 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, المولدات الكهربائيةالعلامة التجارية: Marquis',
            'price' => 210,
            'discounted_price' => 200,
            'availability' => true,
            'stock_quantity' => 50,
        ]);



        // 8
        Product::create([
            'store_id' => 2, // Assuming Store ID 1 exists
            'name' => 'Air Compressors 50Ltr',
            'name_ar' => 'كومبرسر هواء 50 لتر',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Electrical & Industrial Tools, Air CompressorsBrand: Dingqi',
            'description_ar' => 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, الكمبريسرالعلامة التجارية: Dingqi',
            'price' => 185,
            'discounted_price' => 183,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 9
        Product::create([
            'store_id' => 2, // Assuming Store ID 1 exists
            'name' => 'Air Compressors 100Ltr',
            'name_ar' => 'كومبرسر هواء 100 لتر',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Electrical & Industrial Tools, Air CompressorsBrand: Ingco',
            'description_ar' => 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, الكمبريسرالعلامة التجارية: Ingco',
            'price' => 470,
            'discounted_price' => 460,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 10
        Product::create([
            'store_id' => 2, // Assuming Store ID 1 exists
            'name' => 'Industrial Tile Cleaning Machine',
            'name_ar' => 'ماكنة جلي بلاط',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Electrical & Industrial Tools, Industrial Cleaning Equipments',
            'description_ar' => 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, لوازم تنظيف صناعية',
            'price' => 650,
            'discounted_price' => 640,
            'availability' => true,
            'stock_quantity' => 50,
        ]);
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        // 17,16,12,13,,5,,2,
        // 11
        Product::create([
            'store_id' => 5, // Assuming Store ID 1 exists
            'name' => 'Emulsion Eggshell',
            'name_ar' => 'املشن ربع لمعة',
            'rating' => 4.8,
            'description' => 'Categories: General Paints, Water Based Paints, Paints',
            'description_ar' => 'التصنيفات: الدهانات المائية, دهانات منوعة, الدهانات والعزل',
            'price' => 5,
            'discounted_price' => 4,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 12
        Product::create([
            'store_id' => 5, // Assuming Store ID 1 exists
            'name' => 'Top Bond',
            'name_ar' => 'بلابوند',
            'rating' => 4.8,
            'description' => 'Categories: General Paints, Water Based Paints, Paints',
            'description_ar' => 'التصنيفات: الدهانات المائية, دهانات منوعة, الدهانات والعزل',
            'price' => 3,
            'discounted_price' => 2,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 13
        Product::create([
            'store_id' => 5, // Assuming Store ID 1 exists
            'name' => 'Transparent Antique',
            'name_ar' => 'لكر مائي لميع',
            'rating' => 4.8,
            'description' => 'Categories: General Paints, Water Based Paints, Paints',
            'description_ar' => 'التصنيفات: الدهانات المائية, دهانات منوعة, الدهانات والعزل',
            'price' => 3.5,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 14
        Product::create([
            'store_id' => 5, // Assuming Store ID 1 exists
            'name' => 'Modern Trafic Paints (Gallon)',
            'name_ar' => 'دهان اطاريف (ارصفة) جالون',
            'rating' => 4.8,
            'description' => 'Categories: General Paints, Water Based Paints, Paints',
            'description_ar' => 'التصنيفات: الدهانات المائية, دهانات منوعة, الدهانات والعزل',
            'price' => 7.5,
            'discounted_price' => 7,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 15
        Product::create([
            'store_id' => 5, // Assuming Store ID 1 exists
            'name' => 'White Spirit 5 Liter',
            'name_ar' => 'نفط 5 لتر',
            'rating' => 4.8,
            'description' => 'Categories: General Paints, Solvent Paints, Paints',
            'description_ar' => 'التصنيفات: دهانات منوعة, مذيبات الدهانات, الدهانات والعزل',
            'price' => 6,
            'discounted_price' => 5,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 16
        Product::create([
            'store_id' => 5, // Assuming Store ID 1 exists
            'name' => 'Paint Remover 1 Liter',
            'name_ar' => 'مزيل دهان 1 لتر',
            'rating' => 4.8,
            'description' => 'Categories: General Paints, Solvent Paints, Paints',
            'description_ar' => 'التصنيفات: دهانات منوعة, مذيبات الدهانات, الدهانات والعزلالعلامة التجارية: National',
            'price' => 5,
            'discounted_price' => 4,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 17
        Product::create([
            'store_id' => 5, // Assuming Store ID 1 exists
            'name' => 'Hammar Modern Paints',
            'name_ar' => 'دهان زياتي مودرن',
            'rating' => 4.8,
            'description' => 'Categories: General Paints, Oil Based Paints, Paints',
            'description_ar' => 'التصنيفات: دهانات منوعة, الدهانات الزيتية, الدهانات والعزلالعلامة التجارية: National',
            'price' => 1.25,
            'discounted_price' => 1,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 18
        Product::create([
            'store_id' => 5, // Assuming Store ID 1 exists
            'name' => 'Epoxy Paint Gallon 3.6 Liter/Hardner',
            'name_ar' => 'دهان ايبوكسي جالون 3.6 لتر/منشف',
            'rating' => 4.8,
            'description' => 'Categories: General Paints, Oil Based Paints, Paints',
            'description_ar' => 'التصنيفات: دهانات منوعة, الدهانات الزيتية, الدهانات والعزلالعلامة التجارية: National',
            'price' => 29,
            'discounted_price' => 28,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        // store 2/4/10/11/12/13/

        // 19
        Product::create([
            'store_id' => 12, // Assuming Store ID 1 exists
            'name' => 'Safety Helmet',
            'name_ar' => 'طاقية سلامة عامة',
            'rating' => 4.8,
            'description' => 'Categories: Personal Safety Equipment, General Safety',
            'description_ar' => 'التصنيفات: السلامة الشخصية, السلامة العامة',
            'price' => 4.25,
            'discounted_price' => 4,
            'availability' => true,
            'stock_quantity' => 50,
        ]);



        //20
        Product::create([
            'store_id' => 12, // Assuming Store ID 1 exists
            'name' => 'Safety Reflective Vest',
            'name_ar' => 'فيزت سلامة عاكس',
            'rating' => 4.8,
            'description' => 'Categories: Personal Safety Equipment, General Safety',
            'description_ar' => 'التصنيفات: السلامة الشخصية, السلامة العامة',
            'price' => 2,
            'availability' => true,
            'stock_quantity' => 50,
        ]);



        // 21
        Product::create([
            'store_id' => 12, // Assuming Store ID 1 exists
            'name' => 'Safety Glasses',
            'name_ar' => 'نظارات سلامة',
            'rating' => 4.8,
            'description' => 'Categories: Personal Safety Equipment, General SafetyBrand: Dingqi',
            'description_ar' => 'التصنيفات: السلامة الشخصية, السلامة العامةالعلامة التجارية: Dingqi',
            'price' => 2,
            'availability' => true,
            'stock_quantity' => 50,
        ]);



        // 22
        Product::create([
            'store_id' => 12, // Assuming Store ID 1 exists
            'name' => 'Safety Goggles',
            'name_ar' => 'نظارات سلامة جلخ ربط',
            'rating' => 4.8,
            'description' => 'Categories: Personal Safety Equipment, General Safety',
            'description_ar' => 'التصنيفات: السلامة الشخصية, السلامة العامة',
            'price' => 6,
            'discounted_price' => 5,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 23
        Product::create([
            'store_id' => 12, // Assuming Store ID 1 exists
            'name' => 'Labor Gloves',
            'name_ar' => 'كفوف عمال كتان',
            'rating' => 4.8,
            'description' => 'Categories: Personal Safety Equipment, General Safety',
            'description_ar' => 'التصنيفات: السلامة الشخصية, السلامة العامة',
            'price' => 1.5,
            'discounted_price' => 1,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 24
        Product::create([
            'store_id' => 12, // Assuming Store ID 1 exists
            'name' => 'Anti-Cut Gloves',
            'name_ar' => 'كفوف ضد القطع',
            'rating' => 4.8,
            'description' => 'Categories: Personal Safety Equipment, General Safety',
            'description_ar' => 'التصنيفات: السلامة الشخصية, السلامة العامة',
            'price' => 2.5,
            'discounted_price' => 2,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        // 1.2.3.4.5.6.7.8.9
        // 25
        Product::create([
            'store_id' => 3, // Assuming Store ID 1 exists
            'name' => 'Aluminium Ladders 5 Steps',
            'name_ar' => 'سلم/سيبة المنيوم 5 درجات',
            'rating' => 4.8,
            'description' => 'Categories: Aluminum Ladders, Ladders',
            'description_ar' => 'التصنيفات: سلالم المنيوم, السلالم',
            'price' => 55,
            'discounted_price' => 50,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 26
        Product::create([
            'store_id' => 3, // Assuming Store ID 1 exists
            'name' => 'Steel Ladder 6 Step',
            'name_ar' => 'سلم حديد 6 درجات',
            'rating' => 4.8,
            'description' => 'Categories: Ladders, Steel Ladders',
            'description_ar' => 'لتصنيفات: سلالم حديد, السلالم',
            'price' => 58,
            'discounted_price' => 57,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 27
        Product::create([
            'store_id' => 3, // Assuming Store ID 1 exists
            'name' => 'Plastic Two Step (Stool) Ladder',
            'name_ar' => 'سلم بلاستيك درجتين',
            'rating' => 4.8,
            'description' => 'Categories: Other Ladders, Ladders',
            'description_ar' => 'التصنيفات: سلالم اخرى, السلالم',
            'price' => 27.75,
            'discounted_price' => 25,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // 14.17

        // 28
        Product::create([
            'store_id' => 14, // Assuming Store ID 1 exists
            'name' => 'Ceramic wall tiles',
            'name_ar' => 'بلاط سيرامك للجدران  ',
            'rating' => 4.8,
            'description' => 'Ceramic tiles for interior and exterior wall of villa and bathroom Polished glazed marble look porcelain tiles (120*60) cm for walls / 15 colors',
            'description_ar' => 'بلاط سيراميك للحائط الداخلي والخارجي للفيلا والحمام بلاط بورسلين بمظهر الرخام المزجج المصقول قياس ( 120*60 ) سم للجدران  / 15 لون ',
            'price' => 20,
            'discounted_price' => 15,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 29
        Product::create([
            'store_id' => 14, // Assuming Store ID 1 exists
            'name' => 'dark brown ceramic tiles',
            'name_ar' => 'بلاط سيراميك بني داكن',
            'rating' => 4.8,
            'description' => 'Dark Brown Ceramic Tiles 700*1500mm Glazed Polished Porcelain Floor Tiles for Kitchen',
            'description_ar' => 'بلاط سيراميك بني داكن مقاس 700*1500 مم  بلاط أرضيات مزجج مصقول من البورسلين للمطابخ',
            'price' => 30,
            'discounted_price' => 25,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 30
        Product::create([
            'store_id' => 14, // Assuming Store ID 1 exists
            'name' => 'Porcelain tiles for bathrooms',
            'name_ar' => 'بلاط بورسلان للحمامات ',
            'rating' => 4.8,
            'description' => 'Blue and white bathroom tiles, glazed polished porcelain tiles for floor and wall',
            'description_ar' => 'بلاط الحمام الأزرق والأبيض ، بلاط بورسلين مصقول مزجج للأرضية والجدران',
            'price' => 31,
            'discounted_price' => 30,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 31
        Product::create([
            'store_id' => 14, // Assuming Store ID 1 exists
            'name' => 'Ceramic Floor Tiles',
            'name_ar' => 'بلاط سيراميك',
            'rating' => 4.8,
            'description' => '600x1200mm Ceramic Floor Tiles Polished Glazed Marble Outdoor and Indoor Tiles',
            'description_ar' => 'بلاط أرضيات من السيراميك  مقاس 600×1200 ملم بلاط خارجي وداخلي من الرخام المزجج الملمع',
            'price' => 25,
            'discounted_price' => 23,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 32
        Product::create([
            'store_id' => 14, // Assuming Store ID 1 exists
            'name' => 'Wooden floor tiles',
            'name_ar' => 'بلاط خشبي للارضيات  ',
            'rating' => 4.8,
            'description' => 'Simple Wood Effect Ceramic Porcelain Floor Tiles with Wood Finish/15*90cm',
            'description_ar' => 'بلاط خشبي للأرضيات بتأثير بسيط من السيراميك والبورسلين بجزء نهائي خشبي /قياس 15*90سم',
            'price' => 15,
            'discounted_price' => 14,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 33
        Product::create([
            'store_id' => 14, // Assuming Store ID 1 exists
            'name' => 'Wooden floor tiles',
            'name_ar' => 'بلاط خشبي للارضيات  ',
            'rating' => 4.8,
            'description' => 'Foshan Ceramic Tiles Glazed Wood Grain Rustic Design Living Room Floor Tiles 200x1000mm',
            'description_ar' => 'بلاطة فوشان من السيراميك والأرضيات الخشبية المزججة ذات التصميم الريفي لغرفة المعيشة 200×1000 ملم',
            'price' => 12,
            'discounted_price' => 10,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 34
        Product::create([
            'store_id' => 14, // Assuming Store ID 1 exists
            'name' => 'outdoor tiles',
            'name_ar' => 'بلاط خارجي ',
            'rating' => 4.8,
            'description' => 'External floor ceramic / embossed stone 50*50 cm',
            'description_ar' => 'سيراميك أرضيات خارجي حجري بارز 50×50',
            'price' => 5,
            'discounted_price' => 4,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 35
        Product::create([
            'store_id' => 14, // Assuming Store ID 1 exists
            'name' => 'outdoor tiles',
            'name_ar' => 'بلاط خارجي ',
            'rating' => 4.8,
            'description' => 'Paving tiles / garden floor tiles',
            'description_ar' => 'بلاط رصف / بلاط أرضيات للحدائق',
            'price' => 30,
            'discounted_price' => 25,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 36
        Product::create([
            'store_id' => 14, // Assuming Store ID 1 exists
            'name' => ' terrazzo tile',
            'name_ar' => 'بلاط تيرازو',
            'rating' => 4.8,
            'description' => 'Large size terrazzo tile 600x1200, antique tile with large specifications',
            'description_ar' => ' بلاط تيرايزو كبير الحجم 600 × 1200 ، بلاط عتيق بمواصفات كبيرة',
            'price' => 20,
            'discounted_price' => 15,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        Product::create([
            'store_id' => 4, // Assuming Store ID 1 exists
            'name' => 'Precision Screwdrivers Set',
            'name_ar' => ' طقم مفكات الكتروني',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Precision Screwdrivers, ScrewdriversBrand: Jetech Tool',
            'description_ar' => 'لتصنيفات: العدد اليدوية, العدد و الادوات, مفكات الكترونيات, المفكاتالعلامة التجارية: Jetech Tool',
            'price' => 4.35,
            'discounted_price' => 4,
            'availability' => true,
            'stock_quantity' => 50,
        ]);
        // 2

        Product::create([
            'store_id' => 4, // Assuming Store ID 1 exists
            'name' => 'Metal Tool Box 16 inch',
            'name_ar' => 'صندوق عدة حديد 16 انش',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Tool & Screw BoxesBrand: Finder',
            'description_ar' => 'التصنيفات: صناديق عدة وعلب براغي, العدد اليدوية, العدد و الادواتالعلامة التجارية: Finder',
            'price' => 14,
            'discounted_price' => 10,
            'availability' => true,
            'stock_quantity' => 50,
        ]);
        // 3
        Product::create([
            'store_id' => 4, // Assuming Store ID 1 exists
            'name' => 'Tape Measure 5mx25mm',
            'name_ar' => 'متر قياس 5 متر*25 ملم',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: King Tony',
            'description_ar' => 'التصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: King Tony',
            'price' => 7.5,
            'discounted_price' => 7,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 4
        Product::create([
            'store_id' => 4, // Assuming Store ID 1 exists
            'name' => 'Laser Distance Measure 50m',
            'name_ar' => 'متر قياس ليزر 50 متر',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: Ronix',
            'description_ar' => 'لتصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: Ronix',
            'price' => 35,
            'discounted_price' => 30,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 5
        Product::create([
            'store_id' => 4, // Assuming Store ID 1 exists
            'name' => 'Stoning Hammer 500 gram',
            'name_ar' => 'شاكوش خلع نجارين 500 غرام',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Hammers',
            'description_ar' => 'التصنيفات: العدد اليدوية, العدد و الادوات, الشواكيش',
            'price' => 3.75,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        // 6
        Product::create([
            'store_id' => 10, // Assuming Store ID 1 exists
            'name' => 'Sledge Hammer 3 Kilo',
            'name_ar' => 'مهدة 3 كيلو',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Hammers',
            'description_ar' => 'التصنيفات: العدد اليدوية, العدد و الادوات, الشواكيش',
            'price' => 17,
            'discounted_price' => 15,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 7
        Product::create([
            'store_id' => 10, // Assuming Store ID 1 exists
            'name' => 'Gasoline Generator 1 KVA',
            'name_ar' => 'مولد بنزين 1 كيلو فولت',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Electrical & Industrial Tools, Gasoline GeneratorBrand: Marquis',
            'description_ar' => 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, المولدات الكهربائيةالعلامة التجارية: Marquis',
            'price' => 210,
            'discounted_price' => 200,
            'availability' => true,
            'stock_quantity' => 50,
        ]);



        // 8
        Product::create([
            'store_id' => 10, // Assuming Store ID 1 exists
            'name' => 'Air Compressors 50Ltr',
            'name_ar' => 'كومبرسر هواء 50 لتر',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Electrical & Industrial Tools, Air CompressorsBrand: Dingqi',
            'description_ar' => 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, الكمبريسرالعلامة التجارية: Dingqi',
            'price' => 185,
            'discounted_price' => 183,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 9
        Product::create([
            'store_id' => 10, // Assuming Store ID 1 exists
            'name' => 'Air Compressors 100Ltr',
            'name_ar' => 'كومبرسر هواء 100 لتر',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Electrical & Industrial Tools, Air CompressorsBrand: Ingco',
            'description_ar' => 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, الكمبريسرالعلامة التجارية: Ingco',
            'price' => 470,
            'discounted_price' => 460,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // 10
        Product::create([
            'store_id' => 10, // Assuming Store ID 1 exists
            'name' => 'Industrial Tile Cleaning Machine',
            'name_ar' => 'ماكنة جلي بلاط',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Electrical & Industrial Tools, Industrial Cleaning Equipments',
            'description_ar' => 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, لوازم تنظيف صناعية',
            'price' => 650,
            'discounted_price' => 640,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // 25
        Product::create([
            'store_id' => 1, // Assuming Store ID 1 exists
            'name' => 'Aluminium Ladders 5 Steps',
            'name_ar' => 'سلم/سيبة المنيوم 5 درجات',
            'rating' => 4.8,
            'description' => 'Categories: Aluminum Ladders, Ladders',
            'description_ar' => 'التصنيفات: سلالم المنيوم, السلالم',
            'price' => 55,
            'discounted_price' => 50,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 26
        Product::create([
            'store_id' => 1, // Assuming Store ID 1 exists
            'name' => 'Steel Ladder 6 Step',
            'name_ar' => 'سلم حديد 6 درجات',
            'rating' => 4.8,
            'description' => 'Categories: Ladders, Steel Ladders',
            'description_ar' => 'لتصنيفات: سلالم حديد, السلالم',
            'price' => 58,
            'discounted_price' => 57,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 27
        Product::create([
            'store_id' => 1, // Assuming Store ID 1 exists
            'name' => 'Plastic Two Step (Stool) Ladder',
            'name_ar' => 'سلم بلاستيك درجتين',
            'rating' => 4.8,
            'description' => 'Categories: Other Ladders, Ladders',
            'description_ar' => 'التصنيفات: سلالم اخرى, السلالم',
            'price' => 27.75,
            'discounted_price' => 25,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        Product::create([
            'store_id' => 8, // Assuming Store ID 1 exists
            'name' => 'Precision Screwdrivers Set',
            'name_ar' => ' طقم مفكات الكتروني',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Precision Screwdrivers, ScrewdriversBrand: Jetech Tool',
            'description_ar' => 'لتصنيفات: العدد اليدوية, العدد و الادوات, مفكات الكترونيات, المفكاتالعلامة التجارية: Jetech Tool',
            'price' => 4.35,
            'discounted_price' => 4,
            'availability' => true,
            'stock_quantity' => 50,
        ]);
        // 2

        Product::create([
            'store_id' => 8, // Assuming Store ID 1 exists
            'name' => 'Metal Tool Box 16 inch',
            'name_ar' => 'صندوق عدة حديد 16 انش',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Tool & Screw BoxesBrand: Finder',
            'description_ar' => 'التصنيفات: صناديق عدة وعلب براغي, العدد اليدوية, العدد و الادواتالعلامة التجارية: Finder',
            'price' => 14,
            'discounted_price' => 10,
            'availability' => true,
            'stock_quantity' => 50,
        ]);
        // 3
        Product::create([
            'store_id' => 8, // Assuming Store ID 1 exists
            'name' => 'Tape Measure 5mx25mm',
            'name_ar' => 'متر قياس 5 متر*25 ملم',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: King Tony',
            'description_ar' => 'التصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: King Tony',
            'price' => 7.5,
            'discounted_price' => 7,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 4
        Product::create([
            'store_id' => 8, // Assuming Store ID 1 exists
            'name' => 'Laser Distance Measure 50m',
            'name_ar' => 'متر قياس ليزر 50 متر',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: Ronix',
            'description_ar' => 'لتصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: Ronix',
            'price' => 35,
            'discounted_price' => 30,
            'availability' => true,
            'stock_quantity' => 50,
        ]);


        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        Product::create([
            'store_id' => 9, // Assuming Store ID 1 exists
            'name' => 'Precision Screwdrivers Set',
            'name_ar' => ' طقم مفكات الكتروني',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Precision Screwdrivers, ScrewdriversBrand: Jetech Tool',
            'description_ar' => 'لتصنيفات: العدد اليدوية, العدد و الادوات, مفكات الكترونيات, المفكاتالعلامة التجارية: Jetech Tool',
            'price' => 4.35,
            'discounted_price' => 4,
            'availability' => true,
            'stock_quantity' => 50,
        ]);
        // 2

        Product::create([
            'store_id' => 9, // Assuming Store ID 1 exists
            'name' => 'Metal Tool Box 16 inch',
            'name_ar' => 'صندوق عدة حديد 16 انش',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Tool & Screw BoxesBrand: Finder',
            'description_ar' => 'التصنيفات: صناديق عدة وعلب براغي, العدد اليدوية, العدد و الادواتالعلامة التجارية: Finder',
            'price' => 14,
            'discounted_price' => 10,
            'availability' => true,
            'stock_quantity' => 50,
        ]);
        // 3
        Product::create([
            'store_id' => 9, // Assuming Store ID 1 exists
            'name' => 'Tape Measure 5mx25mm',
            'name_ar' => 'متر قياس 5 متر*25 ملم',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: King Tony',
            'description_ar' => 'التصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: King Tony',
            'price' => 7.5,
            'discounted_price' => 7,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // 4
        Product::create([
            'store_id' => 9, // Assuming Store ID 1 exists
            'name' => 'Laser Distance Measure 50m',
            'name_ar' => 'متر قياس ليزر 50 متر',
            'rating' => 4.8,
            'description' => 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: Ronix',
            'description_ar' => 'لتصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: Ronix',
            'price' => 35,
            'discounted_price' => 30,
            'availability' => true,
            'stock_quantity' => 50,
        ]);

        // Add more products as needed
        Product::factory()->count(30)->create();
    }
}

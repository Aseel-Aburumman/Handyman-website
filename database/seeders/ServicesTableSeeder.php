<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        // Assembly Services
        Service::create([
            'category_id' => 1,
            'name' => 'General Furniture Assembling',
            'name_ar' => 'تجميع الأثاث بجميع الأنواع',
            'description' => 'We assemble various types of furniture including beds, wardrobes, tables, and more for safe usage at home or office.',
            'description_ar' => 'نقوم بتجميع جميع أنواع الأثاث مثل الأسرة والخزائن والطاولات وغيرها، لضمان الاستخدام الآمن في المنزل أو المكتب بأعلى كفاءة ممكنة.'
        ]);
        Service::create([
            'category_id' => 1,
            'name' => 'Professional IKEA Assembling',
            'name_ar' => 'تجميع اثاث ايكيا بطريقة محترفة',
            'description' => 'Expertly assembling IKEA furniture based on specific instructions, ensuring precision and adherence to every detailed specification.',
            'description_ar' => 'نقوم بتجميع أثاث ايكيا بناءً على التعليمات المحددة بدقة، لضمان الامتثال لكل التفاصيل المحددة والتأكد من الجودة العالية للخدمة.'
        ]);
        Service::create([
            'category_id' => 1,
            'name' => 'Assembling of Baby Cribs Safely',
            'name_ar' => 'تجميع أسرة الأطفال بكل أمان',
            'description' => 'Safe and professional assembly of baby cribs with proper attention to fitting, ensuring full adherence to safety regulations.',
            'description_ar' => 'تجميع آمن واحترافي لأسرة الأطفال مع الانتباه الكامل للتركيب، وضمان الامتثال التام لمعايير السلامة المطلوبة بكل دقة.'
        ]);
        Service::create([
            'category_id' => 1,
            'name' => 'PAX Wardrobes Assembling Service',
            'name_ar' => 'خدمة تجميع خزانات PAX بشكل جيد',
            'description' => 'We assemble PAX wardrobes, offering customization options to suit your space while ensuring a perfect and balanced fit.',
            'description_ar' => 'نقوم بتجميع خزانات PAX مع تقديم خيارات تخصيص لتناسب مساحتك، مع ضمان تركيب مثالي ومتوازن في جميع الأوقات.'
        ]);
        Service::create([
            'category_id' => 1,
            'name' => 'Custom Assembly of Bookshelves',
            'name_ar' => 'تجميع الرفوف المكتبية المتنوعة',
            'description' => 'Bookshelf assembly services designed to provide strong and secure fitting, ensuring long-lasting stability for your books.',
            'description_ar' => 'خدمات تجميع الرفوف المكتبية لضمان التركيب المتين والآمن، مما يوفر الثبات الدائم لمقتنياتك ومجموعتك من الكتب.'
        ]);
        Service::create([
            'category_id' => 1,
            'name' => 'Assembling Office Desks Precisely',
            'name_ar' => 'تجميع مكاتب العمل بشكل احترافي',
            'description' => 'Precise assembly of office desks for workspaces at home or in the office, ensuring stability for daily work and efficiency.',
            'description_ar' => 'تجميع مكاتب العمل بدقة للمساحات المكتبية أو المنزلية، لضمان الاستقرار والفعالية لاستخدامها في العمل اليومي بمرونة.'
        ]);

        // Mounting Services
        Service::create([
            'category_id' => 2,
            'name' => 'Mounting Art, Mirrors & Decor',
            'name_ar' => 'تركيب الفن والمرايا والزينة',
            'description' => 'Mounting services for art, mirrors, and decorative pieces, ensuring perfect alignment for aesthetic appeal in your spaces.',
            'description_ar' => 'خدمات تركيب الفن والمرايا والزينة بدقة، لضمان المحاذاة المثالية وإضافة جاذبية جمالية في مختلف أركان المكان.'
        ]);
        Service::create([
            'category_id' => 2,
            'name' => 'Blinds and Window Treatments',
            'name_ar' => 'تركيب الستائر ومعالجات النوافذ',
            'description' => 'Installation of blinds and window treatments with care to ensure smooth functionality and privacy in all rooms.',
            'description_ar' => 'تركيب الستائر ومعالجات النوافذ بعناية لضمان التشغيل السلس وتوفير الخصوصية في جميع الغرف في المنزل أو المكتب.'
        ]);
        Service::create([
            'category_id' => 2,
            'name' => 'Anchoring Furniture Securely',
            'name_ar' => 'تركيب وتأمين الأثاث بشكل آمن',
            'description' => 'We offer secure anchoring of furniture to prevent tipping, especially important for homes with children or pets.',
            'description_ar' => 'نقدم خدمات تثبيت الأثاث بشكل آمن لمنع الانقلاب، وهو أمر مهم للغاية في المنازل التي بها أطفال أو حيوانات أليفة.'
        ]);
        Service::create([
            'category_id' => 2,
            'name' => 'Installing Shelves & Rods Properly',
            'name_ar' => 'تركيب الرفوف والقضبان بمهارة',
            'description' => 'Professional installation of shelves, rods, and hooks, ensuring durability and proper alignment for weight balance.',
            'description_ar' => 'تركيب احترافي للرفوف والقضبان والحوامل لضمان المتانة والمحاذاة الصحيحة للحفاظ على توازن الأحمال.'
        ]);
        Service::create([
            'category_id' => 2,
            'name' => 'Television Wall Mounting Service',
            'name_ar' => 'خدمة تركيب التلفاز على الحائط',
            'description' => 'Mounting televisions on the wall securely, ensuring proper viewing angles and safety of the mounted hardware.',
            'description_ar' => 'تركيب أجهزة التلفاز على الجدران بشكل آمن، لضمان زوايا المشاهدة المناسبة والحفاظ على سلامة المعدات المثبتة.'
        ]);
        Service::create([
            'category_id' => 2,
            'name' => 'Other Specialized Mounting Jobs',
            'name_ar' => 'خدمات تركيب أخرى متخصصة',
            'description' => 'Handling any specialized mounting job you may have, tailored to your specific needs and space requirements.',
            'description_ar' => 'التعامل مع أي عملية تركيب متخصصة قد تحتاجها، مصممة خصيصًا لتلبية احتياجاتك ومتطلبات مساحتك.'
        ]);

        // Moving Services
        Service::create([
            'category_id' => 3,
            'name' => 'Help Moving Safely and Quickly',
            'name_ar' => 'المساعدة في النقل بأمان وسرعة',
            'description' => 'Reliable moving services to help you transport your belongings safely and efficiently to your new location.',
            'description_ar' => 'خدمات نقل موثوقة لمساعدتك في نقل ممتلكاتك بأمان وكفاءة إلى موقعك الجديد بأسرع وقت ممكن.'
        ]);
        Service::create([
            'category_id' => 3,
            'name' => 'Truck-Assisted Help Moving',
            'name_ar' => 'المساعدة في النقل باستخدام الشاحنة',
            'description' => 'Full-service moving with truck assistance, ensuring the safe and timely delivery of your belongings to your destination.',
            'description_ar' => 'خدمة نقل كاملة بمساعدة شاحنة لضمان تسليم ممتلكاتك بأمان وفي الوقت المحدد إلى وجهتك.'
        ]);
        Service::create([
            'category_id' => 3,
            'name' => 'Trash & Furniture Removal Jobs',
            'name_ar' => 'إزالة القمامة والأثاث القديم',
            'description' => 'Efficient removal of trash, old furniture, and unwanted items, ensuring a clean and clutter-free environment.',
            'description_ar' => 'إزالة فعالة للقمامة والأثاث القديم والأغراض غير المرغوب فيها لضمان بيئة نظيفة وخالية من الفوضى.'
        ]);
        Service::create([
            'category_id' => 3,
            'name' => 'Heavy Lifting and Loading Service',
            'name_ar' => 'خدمة رفع وتحميل الأوزان الثقيلة',
            'description' => 'Professional heavy lifting services to safely move large and bulky items, minimizing damage during transportation.',
            'description_ar' => 'خدمات رفع وتحميل احترافية لنقل الأشياء الكبيرة والضخمة بأمان وتقليل أي ضرر أثناء النقل.'
        ]);
        Service::create([
            'category_id' => 3,
            'name' => 'Rearranging Furniture In Homes',
            'name_ar' => 'إعادة ترتيب الأثاث في المنازل',
            'description' => 'We assist in rearranging your furniture to optimize space and improve the aesthetic appeal of your home.',
            'description_ar' => 'نساعدك في إعادة ترتيب أثاث منزلك لتحسين المساحة وتعزيز الجاذبية الجمالية لمساحتك الداخلية.'
        ]);
        Service::create([
            'category_id' => 3,
            'name' => 'Junk Haul Away Service Offered',
            'name_ar' => 'خدمة إزالة النفايات المعروضة',
            'description' => 'Haul away any unwanted junk from your home or office, providing a clean and spacious environment for your needs.',
            'description_ar' => 'إزالة أي نفايات غير مرغوب فيها من منزلك أو مكتبك لتوفير بيئة نظيفة وواسعة تناسب احتياجاتك اليومية.'
        ]);

        // Cleaning Services
        Service::create([
            'category_id' => 4,
            'name' => 'General Cleaning for All Areas',
            'name_ar' => 'تنظيف شامل لجميع المناطق',
            'description' => 'Comprehensive cleaning services for all rooms and spaces, ensuring a thorough clean and a hygienic environment.',
            'description_ar' => 'خدمات تنظيف شاملة لجميع الغرف والمساحات، مما يضمن التنظيف الكامل وبيئة صحية آمنة للاستخدام.'
        ]);
        Service::create([
            'category_id' => 4,
            'name' => 'Post-Party Cleanup Services',
            'name_ar' => 'تنظيف بعد الحفلات والفعاليات',
            'description' => 'Thorough cleaning services after parties and events, restoring your home to its original clean state efficiently.',
            'description_ar' => 'خدمات تنظيف شاملة بعد الحفلات والفعاليات، لإعادة منزلك إلى حالته الأصلية النظيفة بكفاءة وسرعة.'
        ]);
        Service::create([
            'category_id' => 4,
            'name' => 'Apartment Cleaning Services',
            'name_ar' => 'خدمات تنظيف الشقق السكنية',
            'description' => 'Apartment cleaning services tailored to your needs, ensuring your living space is spotless and comfortable.',
            'description_ar' => 'خدمات تنظيف الشقق السكنية المصممة لتلبية احتياجاتك، لضمان نظافة وراحة مساحتك السكنية بشكل دائم.'
        ]);
        Service::create([
            'category_id' => 4,
            'name' => 'Deep Cleaning for All Spaces',
            'name_ar' => 'تنظيف عميق لجميع الأماكن',
            'description' => 'In-depth cleaning services for your home, focusing on hard-to-reach areas, leaving your space thoroughly cleaned.',
            'description_ar' => 'خدمات تنظيف عميق لمنزلك، مع التركيز على المناطق التي يصعب الوصول إليها، مما يترك مساحتك نظيفة تماماً بكل الجوانب.'
        ]);
        Service::create([
            'category_id' => 4,
            'name' => 'Garage Cleaning Solutions',
            'name_ar' => 'حلول تنظيف المرائب المخصصة',
            'description' => 'We offer garage cleaning services, removing clutter and ensuring your garage space is clean and well-organized.',
            'description_ar' => 'نقدم خدمات تنظيف المرائب المخصصة، لإزالة الفوضى وضمان أن تكون مساحتك نظيفة ومنظمة بشكل جيد جداً.'
        ]);
        Service::create([
            'category_id' => 4,
            'name' => 'Move-Out Cleaning Services',
            'name_ar' => 'خدمات تنظيف عند الانتقال',
            'description' => 'Cleaning services to help you when moving out of your home, ensuring it is spotless for the next residents.',
            'description_ar' => 'خدمات تنظيف شاملة عند الانتقال من منزلك، لضمان أن تكون نظيفة تمامًا للسكان الجدد أو المؤجرين المستقبليين.'
        ]);

        // Outdoor Help Services
        Service::create([
            'category_id' => 5,
            'name' => 'Yard Work and Maintenance',
            'name_ar' => 'أعمال الحديقة والصيانة',
            'description' => 'Outdoor yard work services, including lawn care, weeding, and general maintenance to keep your yard in top shape.',
            'description_ar' => 'خدمات أعمال الحديقة الخارجية بما في ذلك رعاية الحديقة وإزالة الأعشاب الضارة والصيانة العامة للحفاظ على أفضل حالة.'
        ]);
        Service::create([
            'category_id' => 5,
            'name' => 'Lawn Care Services Offered',
            'name_ar' => 'خدمات رعاية العشب مقدمة',
            'description' => 'We provide lawn care services, including mowing, trimming, and fertilizing, ensuring your lawn stays green and healthy.',
            'description_ar' => 'نقدم خدمات رعاية العشب بما في ذلك القص والتشذيب والتسميد لضمان بقاء حديقتك خضراء وصحية دائماً.'
        ]);
        Service::create([
            'category_id' => 5,
            'name' => 'Snow Removal Services Available',
            'name_ar' => 'خدمات إزالة الثلوج المتاحة',
            'description' => 'Efficient snow removal services to keep your walkways, driveways, and outdoor spaces safe and clear during winter.',
            'description_ar' => 'خدمات إزالة الثلوج المتاحة بكفاءة للحفاظ على ممرات المشاة والممرات والمساحات الخارجية آمنة وواضحة خلال فصل الشتاء.'
        ]);
        Service::create([
            'category_id' => 5,
            'name' => 'Landscaping Assistance Provided',
            'name_ar' => 'مساعدة تنسيق الحدائق المقدمة',
            'description' => 'Our landscaping assistance services include planting, trimming, and designing outdoor spaces for beauty and function.',
            'description_ar' => 'تشمل خدمات مساعدة تنسيق الحدائق لدينا الزراعة والتشذيب وتصميم المساحات الخارجية لتكون جميلة وعملية.'
        ]);
        Service::create([
            'category_id' => 5,
            'name' => 'Branch & Hedge Trimming Jobs',
            'name_ar' => 'تشذيب الفروع والأشجار المتخصص',
            'description' => 'We offer specialized branch and hedge trimming services to maintain the health and appearance of your outdoor plants.',
            'description_ar' => 'نقدم خدمات تشذيب الفروع والأشجار المتخصصة للحفاظ على صحة وجمال نباتاتك الخارجية في جميع الأوقات.'
        ]);
        Service::create([
            'category_id' => 5,
            'name' => 'Gardening and Weeding Services',
            'name_ar' => 'خدمات البستنة وإزالة الأعشاب',
            'description' => 'Gardening and weeding services for your outdoor spaces, helping you maintain a beautiful, clean, and healthy garden.',
            'description_ar' => 'خدمات البستنة وإزالة الأعشاب للحفاظ على مساحاتك الخارجية، مما يساعد في الحفاظ على حديقة نظيفة وصحية بشكل دائم.'
        ]);

        // Home Repairs Services
        Service::create([
            'category_id' => 6,
            'name' => 'Repairing Doors & Furniture',
            'name_ar' => 'إصلاح الأبواب والأثاث المتضرر',
            'description' => 'We offer repair services for doors, cabinets, and other furniture to restore functionality and enhance durability.',
            'description_ar' => 'نقدم خدمات إصلاح للأبواب والخزائن والأثاث لإعادة استخدامها وزيادة المتانة على المدى الطويل.'
        ]);
        Service::create([
            'category_id' => 6,
            'name' => 'Wall Repair Services Offered',
            'name_ar' => 'خدمات إصلاح الجدران المقدمة',
            'description' => 'Comprehensive wall repair services to fix cracks, holes, and damages, restoring the integrity of your home’s walls.',
            'description_ar' => 'خدمات إصلاح شاملة للجدران لإصلاح التشققات والثقوب والأضرار، واستعادة سلامة جدران منزلك بشكل كامل.'
        ]);
        Service::create([
            'category_id' => 6,
            'name' => 'Sealing & Caulking Repairs',
            'name_ar' => 'خدمات الختم وسد الفجوات',
            'description' => 'Sealing and caulking services to prevent leaks and drafts, protecting your home’s energy efficiency and comfort.',
            'description_ar' => 'خدمات الختم وسد الفجوات لمنع التسربات والتيارات الهوائية، لحماية كفاءة الطاقة في منزلك وتحسين الراحة.'
        ]);
        Service::create([
            'category_id' => 6,
            'name' => 'Appliance Install & Repairing',
            'name_ar' => 'تركيب وإصلاح الأجهزة المنزلية',
            'description' => 'Installation and repair of household appliances, ensuring they are set up correctly and function efficiently.',
            'description_ar' => 'خدمات تركيب وإصلاح الأجهزة المنزلية لضمان تركيبها الصحيح وعملها بكفاءة في المنزل.'
        ]);
        Service::create([
            'category_id' => 6,
            'name' => 'Window & Blinds Repairs Done',
            'name_ar' => 'إصلاح النوافذ والستائر المتاحة',
            'description' => 'Repair services for windows and blinds, fixing any operational or cosmetic issues to keep them working properly.',
            'description_ar' => 'خدمات إصلاح النوافذ والستائر لإصلاح أي مشكلات تشغيلية أو تجميلية، وضمان عملها بشكل صحيح.'
        ]);
        Service::create([
            'category_id' => 6,
            'name' => 'Flooring & Tiling Assistance',
            'name_ar' => 'مساعدة في الأرضيات والبلاط',
            'description' => 'We provide assistance with flooring and tiling projects, ensuring precise installation for durability and beauty.',
            'description_ar' => 'نقدم المساعدة في مشاريع الأرضيات والبلاط لضمان التركيب الدقيق والمتانة والجمال.'
        ]);
        Service::create([
            'category_id' => 6,
            'name' => 'Electrical Help Services Given',
            'name_ar' => 'خدمات المساعدة الكهربائية متاحة',
            'description' => 'We offer electrical repair services to address common electrical issues, ensuring safety and functionality in your home.',
            'description_ar' => 'نقدم خدمات المساعدة في الإصلاحات الكهربائية لمعالجة المشكلات الكهربائية الشائعة وضمان سلامة ووظائف النظام الكهربائي.'
        ]);
        Service::create([
            'category_id' => 6,
            'name' => 'Plumbing Assistance Provided',
            'name_ar' => 'تقديم المساعدة في السباكة',
            'description' => 'Plumbing services including leak repairs, drain cleaning, and pipe replacement to maintain your home’s water system.',
            'description_ar' => 'خدمات السباكة بما في ذلك إصلاح التسربات وتنظيف المصارف واستبدال الأنابيب للحفاظ على نظام المياه في منزلك.'
        ]);
        Service::create([
            'category_id' => 6,
            'name' => 'Light Carpentry Services',
            'name_ar' => 'أعمال النجارة الخفيفة متاحة',
            'description' => 'Light carpentry services for repairs and installations of cabinets, doors, and custom woodwork in your home.',
            'description_ar' => 'خدمات النجارة الخفيفة لإصلاح وتركيب الخزائن والأبواب والأعمال الخشبية المخصصة في منزلك.'
        ]);

        // Painting Services
        Service::create([
            'category_id' => 7,
            'name' => 'Indoor Painting for Interiors',
            'name_ar' => 'طلاء داخلي للمساحات الداخلية',
            'description' => 'Indoor painting services to refresh the look of your home’s walls with vibrant, durable, and smooth finishes.',
            'description_ar' => 'خدمات الطلاء الداخلي لتجديد مظهر جدران منزلك بطلاء حيوي ومتين وذو لمسات ناعمة وراقية.'
        ]);
        Service::create([
            'category_id' => 7,
            'name' => 'Wallpapering and Decoration',
            'name_ar' => 'تغليف الجدران وتزيين المساحات',
            'description' => 'We offer wallpapering services to give your home’s walls a personalized and stylish finish, suited to your taste.',
            'description_ar' => 'نقدم خدمات تغليف الجدران لتضفي على جدران منزلك لمسة شخصية أنيقة تناسب ذوقك الفردي بشكل كامل.'
        ]);
        Service::create([
            'category_id' => 7,
            'name' => 'Outdoor Painting for Exteriors',
            'name_ar' => 'طلاء خارجي للمساحات الخارجية',
            'description' => 'Outdoor painting services to enhance the appearance of your home’s exterior, ensuring durability and protection.',
            'description_ar' => 'خدمات الطلاء الخارجي لتعزيز مظهر منزلك من الخارج، مع ضمان المتانة والحماية ضد عوامل الطقس الخارجية.'
        ]);
        Service::create([
            'category_id' => 7,
            'name' => 'Concrete & Brick Painting',
            'name_ar' => 'طلاء الأسطح الخرسانية والطوبية',
            'description' => 'We offer painting services for concrete and brick surfaces, ensuring a clean and modern look with long-lasting effects.',
            'description_ar' => 'نقدم خدمات طلاء الأسطح الخرسانية والطوبية لضمان مظهر نظيف وحديث مع تأثير طويل الأمد على مظهرك الخارجي.'
        ]);
        Service::create([
            'category_id' => 7,
            'name' => 'Accent Wall Painting Services',
            'name_ar' => 'خدمات طلاء الجدران المميزة',
            'description' => 'Accent wall painting services to create a focal point in your home’s interior, adding style and color to your space.',
            'description_ar' => 'خدمات طلاء الجدران المميزة لإنشاء نقطة محورية في داخل منزلك، وإضافة الأناقة والألوان للمساحات المختلفة.'
        ]);
        Service::create([
            'category_id' => 7,
            'name' => 'Wallpaper Removal Services',
            'name_ar' => 'خدمات إزالة ورق الجدران',
            'description' => 'Efficient wallpaper removal services to restore your walls to a smooth, clean surface, ready for new decoration.',
            'description_ar' => 'خدمات إزالة ورق الجدران بشكل فعال لاستعادة جدرانك إلى سطح ناعم ونظيف، جاهز لأي زخرفة جديدة تريد إضافتها.'
        ]);

        
    }
}

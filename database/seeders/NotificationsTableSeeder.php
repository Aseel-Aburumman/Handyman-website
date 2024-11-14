<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationsTableSeeder extends Seeder
{
    public function run()
    {
        Notification::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'message' => 'Your order has been shipped!',
            'message_ar' => ' طلبك اتوصل',

            'category' => 'primary',
            'is_read' => false,
        ]);
        // warning,primary, success, danger

        Notification::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'message' => 'Your gig  has been recived a prposal!',
            'message_ar' => ' طلبك اتوصل',

            'category' => 'warning',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'message' => 'Your handyman , ready for his visit!',
            'message_ar' => 'الحرفي وافق على مهمتك وجاهز للزيارة ',
            'category' => 'success',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 2, // Assuming User ID 2 exists
            'message' => 'Your order has been cancelled!',
            'message_ar' => ' طلبك الغى',

            'category' => 'danger',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 3, // Assuming User ID 2 exists
            'message' => 'You win the gig!',
            'message_ar' => ' لقد  اختارك العهيل لتنفيذ المهمة , ابدا الان! ',

            'category' => 'primary',
            'is_read' => false,
        ]);
        Notification::create([
            'user_id' => 3, // Assuming User ID 2 exists
            'message' => 'Your proposal has been rejected!',
            'message_ar' => ' عرضك تم رفضه! ',

            'category' => 'danger',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 3, // Assuming User ID 2 exists
            'message' => 'You win the gig!',
            'message_ar' => ' طلبك اتوصل',

            'category' => 'warning',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 1, // Assuming User ID 2 exists
            'message' => 'New user \'Sarah123\' registered. Approve',
            'message_ar' => '   المستخدم الجديد \'Sarah123\' سجل. الموافقة؟',

            'category' => 'primary',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 1, // Assuming User ID 2 exists
            'message' => 'Spike in website traffic detected. Monitor performance!',
            'message_ar' => '   ارتفاع حاد في زيارات الموقع. يُرجى مراقبة الأداء.',

            'category' => 'success',
            'is_read' => false,
        ]);
        Notification::create([
            'user_id' => 1, // Assuming User ID 2 exists
            'message' => 'A new system update is available. Please schedule a maintenance window to apply the update!',
            'message_ar' => '  تحديث جديد للنظام متاح. يرجى تحديد موعد لصيانة النظام لتطبيق التحديثات.',

            'category' => 'danger',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 1, // Assuming User ID 2 exists
            'message' => 'There have been 5 failed login attempts on your admin account. Please review your security setting',
            'message_ar' => ' تمت 5 محاولات تسجيل دخول فاشلة إلى حساب الإدارة الخاص بك. يرجى مراجعة إعدادات الأمان ',

            'category' => 'warning',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 4, // Assuming User ID 2 exists
            'message' => 'You have received a new order: Order #1234',
            'message_ar' => '  تم استلام طلب جديد: الطلب رقم #1234  ',

            'category' => 'primary',
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 4, // Assuming User ID 2 exists
            'message' => 'Low stock warning: Product \'Red screw\' is below 5 items',
            'message_ar' => ' تنبيه بانخفاض المخزون: المنتج \'مفك أحمر\'أقل من 5 قطع  ',

            'category' => 'danger',
            'is_read' => false,
        ]);
        Notification::create([
            'user_id' => 4, // Assuming User ID 2 exists
            'message' => 'Payment of JD200 received for Order #5678!',
            'message_ar' => '   تم استلام دفعة بقيمة 200 دأ للطلب رقم #5678.',

            'category' => 'success',
            'is_read' => false,
        ]);
        Notification::create([
            'user_id' => 4, // Assuming User ID 2 exists
            'message' => 'Order #7890 has been canceled by the customer',
            'message_ar' => ' تم إلغاء الطلب رقم #7890 من قبل العميل.  ',

            'category' => 'warning',
            'is_read' => false,
        ]);
        // Add more notifications as needed
    }
}

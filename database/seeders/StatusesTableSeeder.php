<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    public function run()
    {
        Status::create([
            'status_category' => 'skill',
            'name' => 'Approved',
            'name_ar' => 'مقبول',
            'description' => 'Skill is Approved',
            'description_ar' => 'المهارة مقبولة'
        ]);

        Status::create([
            'status_category' => 'skill',
            'name' => 'Disapproved',
            'name_ar' => 'مرفوض',
            'description' => 'Skill is Disapproved',
            'description_ar' => 'المهارة مرفوضة'
        ]);

        Status::create([
            'status_category' => 'skill',
            'name' => 'Pending',
            'name_ar' => 'قيد الانتظار',
            'description' => 'Skill is Pending',
            'description_ar' => 'المهارة قيد الانتظار'
        ]);

        Status::create([
            'status_category' => 'store',
            'name' => 'Open',
            'name_ar' => 'مفتوح',
            'description' => 'Store is Open',
            'description_ar' => 'المتجر مفتوح'
        ]);

        Status::create([
            'status_category' => 'store',
            'name' => 'Pending',
            'name_ar' => 'قيد الانتظار',
            'description' => 'Store is Pending',
            'description_ar' => 'المتجر قيد الانتظار'
        ]);

        Status::create([
            'status_category' => 'store',
            'name' => 'Closed',
            'name_ar' => 'مغلق',
            'description' => 'Store is Closed',
            'description_ar' => 'المتجر مغلق'
        ]);

        Status::create([
            'status_category' => 'gig',
            'name' => 'Open',
            'name_ar' => 'مفتوح',
            'description' => 'Gig is Open',
            'description_ar' => 'المهمة مفتوحة'
        ]);

        Status::create([
            'status_category' => 'gig',
            'name' => 'In Progress',
            'name_ar' => 'جاري العمل',
            'description' => 'Gig is in progress',
            'description_ar' => 'المهمة قيد التنفيذ'
        ]);

        Status::create([
            'status_category' => 'gig',
            'name' => 'Completed',
            'name_ar' => 'مكتملة',
            'description' => 'Gig is Completed',
            'description_ar' => 'المهمة مكتملة'
        ]);

        Status::create([
            'status_category' => 'gig',
            'name' => 'Canceled',
            'name_ar' => 'ملغية',
            'description' => 'Gig is Canceled',
            'description_ar' => 'المهمة ملغية'
        ]);

        Status::create([
            'status_category' => 'gig',
            'name' => 'Reported',
            'name_ar' => 'تم الإبلاغ',
            'description' => 'Gig is Reported',
            'description_ar' => 'تم الإبلاغ عن المهمة'
        ]);

        Status::create([
            'status_category' => 'ticket',
            'name' => 'Open',
            'name_ar' => 'مفتوح',
            'description' => 'Ticket is Open',
            'description_ar' => 'التذكرة مفتوحة'
        ]);

        Status::create([
            'status_category' => 'ticket',
            'name' => 'Pending',
            'name_ar' => 'قيد الانتظار',
            'description' => 'Ticket is Pending',
            'description_ar' => 'التذكرة قيد الانتظار'
        ]);

        Status::create([
            'status_category' => 'ticket',
            'name' => 'Closed',
            'name_ar' => 'مغلقة',
            'description' => 'Ticket is Closed',
            'description_ar' => 'التذكرة مغلقة'
        ]);

        Status::create([
            'status_category' => 'ticket',
            'name' => 'Resolved',
            'name_ar' => 'تم الحل',
            'description' => 'Ticket is Resolved',
            'description_ar' => 'تم حل التذكرة'
        ]);

        Status::create([
            'status_category' => 'sale',
            'name' => 'Pending',
            'name_ar' => 'قيد الانتظار',
            'description' => 'Sale is Pending',
            'description_ar' => 'البيع قيد الانتظار'
        ]);

        Status::create([
            'status_category' => 'sale',
            'name' => 'Confirmed',
            'name_ar' => 'مؤكد',
            'description' => 'Sale is Confirmed',
            'description_ar' => 'البيع مؤكد'
        ]);

        Status::create([
            'status_category' => 'sale',
            'name' => 'Delivered',
            'name_ar' => 'تم التوصيل',
            'description' => 'Sale is Delivered',
            'description_ar' => 'تم التوصيل'
        ]);

        Status::create([
            'status_category' => 'sale',
            'name' => 'Canceled',
            'name_ar' => 'ملغية',
            'description' => 'Sale is Canceled',
            'description_ar' => 'تم إلغاء البيع'
        ]);

        Status::create([
            'status_category' => 'store',
            'name' => 'Suspended',
            'name_ar' => 'معلق',
            'description' => 'Store is Suspended',
            'description_ar' => 'المتجر معلق'
        ]);

        Status::create([
            'status_category' => 'proposal',
            'name' => 'Rejected',
            'name_ar' => 'مرفوض',
            'description' => 'Proposal is Rejected',
            'description_ar' => 'تقديم مرفوض'
        ]);

        Status::create([
            'status_category' => 'proposal',
            'name' => 'Winner',
            'name_ar' => 'فائز',
            'description' => 'Proposal is a Winner',
            'description_ar' => 'المتقدم الفائز'
        ]);

        Status::create([
            'status_category' => 'proposal',
            'name' => 'Pending',
            'name_ar' => 'قيد الانتظار',
            'description' => 'Proposal is a Pending',
            'description_ar' => 'المتقدم قيد الانتظار'
        ]);

        Status::create([
            'status_category' => 'gig',
            'name' => 'work done',
            'name_ar' => 'انتهى العمل',
            'description' => 'Gig is Done',
            'description_ar' => 'المهمة انتهت'
        ]);

        Status::create([
            'status_category' => 'payment',
            'name' => 'Pending',
            'name_ar' => 'قيد الانتظار',
            'description' => 'payment is a Pending',
            'description_ar' => 'الدفعة قيد الانتظار'
        ]);

        Status::create([
            'status_category' => 'payment',
            'name' => 'Canceled',
            'name_ar' => 'ملغية',
            'description' => 'payment is Canceled',
            'description_ar' => 'تم إلغاء الدفعة'
        ]);

        Status::create([
            'status_category' => 'payment',
            'name' => 'completed',
            'name_ar' => 'اكتمل',
            'description' => 'payment is completed',
            'description_ar' => 'الدفعة مكتملة'
        ]);

        Status::create([
            'status_category' => 'gig',
            'name' => 'pending',
            'name_ar' => 'قيد الانتظار ',
            'description' => 'gig is pending',
            'description_ar' => 'قيد الانتظار'
        ]);
    }
}

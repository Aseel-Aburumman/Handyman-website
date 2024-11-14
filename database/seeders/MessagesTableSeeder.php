<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        Message::create(['sender_id' => 2, 'receiver_id' => 1, 'message_content' => 'Hello, I need help with a my gig creation.', 'is_read' => true,]);
        Message::create(['sender_id' => 1, 'receiver_id' => 2, 'message_content' => 'sure , happy to help , how can i help you?', 'is_read' => true,]);
        Message::create(['sender_id' => 2, 'receiver_id' => 1, 'message_content' => 'so when i create a task how can message my hanyman?', 'is_read' => false,]);

        Message::create(['sender_id' => 2, 'receiver_id' => 5, 'message_content' => 'مرحبا , عندي تقريبا 5 خزانات مطبخ محتاجة تصليح ويمكن اعادة دهان ', 'is_read' => true,]);
        Message::create(['sender_id' => 5, 'receiver_id' => 2, 'message_content' => 'مكننا البدء في العمل خلال الأسبوع القادم. سنرسل لك تقدير تكلفة مبدئي بعد مراجعة  بشكل كامل', 'is_read' => true,]);
        Message::create(['sender_id' => 2, 'receiver_id' => 5, 'message_content' => 'شكراً لكم. هل يمكنكم إعطائي فكرة تقريبية عن المدة التي سيستغرقها التصليح', 'is_read' => true,]);
        Message::create(['sender_id' => 5, 'receiver_id' => 2, 'message_content' => 'من المتوقع أن يستغرق العمل حوالي 3-4 ساعات', 'is_read' => true,]);
        Message::create(['sender_id' => 2, 'receiver_id' => 5, 'message_content' => 'ممتاز، يمكنكم تحديد موعد للمعاينة النهائية هذا الأسبوع؟', 'is_read' => true,]);
        Message::create(['sender_id' => 5, 'receiver_id' => 2, 'message_content' => 'عم بالطبع، يمكننا ترتيب الزيارة يوم الخميس مساءً. سنؤكد معك الموعد قبل يوم من الزيارة. شكراً لتعاونك', 'is_read' => true,]);


        Message::create(['sender_id' => 2, 'receiver_id' => 3, 'message_content' => 'اهلا , شكرا لقبول الوظيفة, صنبور المياه يكاد يفرغ الخزان!', 'is_read' => true,]);
        Message::create(['sender_id' => 3, 'receiver_id' => 2, 'message_content' => 'يبدو أن المشكلة بسيطة ويمكن إصلاحها بسرعة.  متاح غداً صباحاً، هل يناسبك هذا الموعد؟', 'is_read' => true,]);
        Message::create(['sender_id' => 2, 'receiver_id' => 3, 'message_content' => 'شكراً، غداً صباحاً يناسبني تماماً. كم من الوقت تتوقعون أن يستغرق الإصلاح؟', 'is_read' => true,]);
        Message::create(['sender_id' => 3, 'receiver_id' => 2, 'message_content' => 'عادةً، إصلاح هذا النوع من التسريبات يستغرق حوالي 30 دقيقة إلى ساعة. ساكون مجهز بالأدوات اللازمة لضمان الإصلاح بسرعة وكفاءة.', 'is_read' => true,]);
        Message::create(['sender_id' => 2, 'receiver_id' => 3, 'message_content' => 'شكراً جزيلاً، سأكون بانتظاركم غداً صباحاً. ', 'is_read' => false,]);



        // Add more messages as needed
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agreement;

class AgreementSeeder extends Seeder
{
    public function run()
    {
        // Handyman Agreement
        Agreement::create([
            'agreement_type' => 'handyman',
            'content' => '
                <h5><strong>1. Eligibility Requirements:</strong></h5>
                <ul>
                    <li>You confirm that you are at least 18 years of age.</li>
                    <li>You acknowledge that you have the necessary skills and experience to perform the services you are offering (e.g., electrical, plumbing, etc.).</li>
                    <li>You agree to provide any certifications or licenses required for the type of work you are offering.</li>
                    <li>You agree to undergo and pass a background check before being accepted as a tasker on the platform.</li>
                </ul>

                <h5><strong>2. Application Process:</strong></h5>
                <ul>
                    <li>You agree to complete a detailed profile, including personal information, skills, certifications, and relevant experience.</li>
                    <li>You may be required to undergo an interview or skills test to validate your abilities.</li>
                    <li>You agree to adhere to the Kaf Mueen\'s <strong>Terms of Service</strong>, <strong>Service Level Agreement (SLA)</strong>, and <strong>Code of Conduct</strong>.</li>
                </ul>

                <h5><strong>3. Conduct and Performance:</strong></h5>
                <ul>
                    <li>You agree to maintain professionalism in all interactions and to complete tasks to the client\'s satisfaction.</li>
                    <li>Client reviews will determine your rating, and a minimum rating of [Insert Rating] is required to continue offering services.</li>
                    <li>You confirm that you will provide your own tools and equipment necessary for the tasks.</li>
                </ul>

                <h5><strong>4. Accountability:</strong></h5>
                <ul>
                    <li>In the event of disputes, you agree to cooperate with the platform to resolve them.</li>
                    <li>The platform reserves the right to terminate your account for repeated complaints, no-shows, or poor ratings.</li>
                </ul>
            ',
            'content_ar' => '
                <h5><strong>متطلبات الأهلية:</strong></h5>
                <ul>
                    <li>تؤكد أنك تبلغ من العمر 18 عامًا على الأقل.</li>
                    <li>تقر بأن لديك المهارات والخبرة اللازمة لأداء الخدمات التي تقدمها.</li>
                    <li>توافق على تقديم أي شهادات أو تراخيص مطلوبة لنوع العمل الذي تقدمه (مثل: الكهرباء، السباكة، إلخ).</li>
                    <li>توافق على الخضوع لاختبار الخلفية واجتيازه قبل قبولك كعامل على المنصة.</li>
                </ul>

                <h5><strong>عملية التقديم:</strong></h5>
                <ul>
                    <li>توافق على إكمال ملف تعريف مفصل، يتضمن المعلومات الشخصية، المهارات، الشهادات، والخبرة ذات الصلة.</li>
                    <li>قد يُطلب منك الخضوع لمقابلة أو اختبار مهارات للتحقق من قدراتك.</li>
                    <li>توافق على الالتزام بـ شروط الخدمة، اتفاقية مستوى الخدمة (SLA)، و مدونة السلوك الخاصة بالمنصة.</li>
                </ul>

                <h5><strong>السلوك والأداء:</strong></h5>
                <ul>
                    <li>توافق على الحفاظ على الاحترافية في جميع التفاعلات وإتمام المهام بما يرضي العميل.</li>
                    <li>ستحدد مراجعات العملاء تقييمك، ويتطلب الحد الأدنى للتقييم [أدخل التقييم] لمواصلة تقديم الخدمات.</li>
                    <li>تؤكد أنك ستوفر أدواتك ومعداتك الخاصة اللازمة لإنجاز المهام.</li>
                </ul>

                <h5><strong>المساءلة:</strong></h5>
                <ul>
                    <li>في حالة وجود نزاعات، توافق على التعاون مع المنصة لحلها.</li>
                    <li>تحتفظ المنصة بالحق في إنهاء حسابك بسبب الشكاوى المتكررة، أو التغيب، أو التقييمات الضعيفة.</li>
                </ul>
            '
        ]);

        // Store Owner Agreement
        Agreement::create([
            'agreement_type' => 'store_owner',
            'content' => '
                <h5><strong>1. Eligibility Requirements:</strong></h5>
                <ul>
                    <li>You confirm that your business is legally registered and will provide valid business registration documents upon request.</li>
                    <li>You agree to sell only high-quality, legal, and safe products on the platform.</li>
                    <li>You agree to maintain accurate inventory and product listings at all times.</li>
                </ul>

                <h5><strong>2. Application Process:</strong></h5>
                <ul>
                    <li>You agree to complete your store profile, providing business details, product categories, and high-quality images of your products.</li>
                    <li>You agree to adhere to the Kaf Mueen\'s <strong>Terms of Service</strong> and <strong>Seller Agreement</strong>.</li>
                </ul>

                <h5><strong>3. Store Owner Responsibilities:</strong></h5>
                <ul>
                    <li>You agree to fulfill orders promptly and accurately.</li>
                    <li>You are responsible for providing responsive customer service, including handling returns and complaints.</li>
                    <li>You agree to comply with all applicable laws regarding the sale of your products.</li>
                </ul>

                <h5><strong>4. Accountability:</strong></h5>
                <ul>
                    <li>Any false or misleading information in product listings may result in penalties or removal from the platform.</li>
                    <li>Your store\'s performance will be rated by customers, and maintaining a high rating is required to continue selling on the platform.</li>
                    <li>In case of disputes, you agree to work with the platform to resolve them in good faith.</li>
                </ul>
            ',
            'content_ar' => '
                <h5><strong>متطلبات الأهلية:</strong></h5>
                <ul>
                    <li>تؤكد أن عملك مسجل قانونيًا وستقدم وثائق تسجيل العمل الصالحة عند الطلب.</li>
                    <li>توافق على بيع منتجات عالية الجودة وقانونية وآمنة على المنصة.</li>
                    <li>توافق على الحفاظ على جرد دقيق وقوائم منتجات محدثة في جميع الأوقات.</li>
                </ul>

                <h5><strong>عملية التقديم:</strong></h5>
                <ul>
                    <li>توافق على إكمال ملف تعريف متجرك، بما في ذلك تقديم تفاصيل العمل، فئات المنتجات، وصور عالية الجودة لمنتجاتك.</li>
                    <li>توافق على الالتزام بـ شروط الخدمة و اتفاقية البائع الخاصة بكاف معين.</li>
                </ul>

                <h5><strong>مسؤوليات مالك المتجر:</strong></h5>
                <ul>
                    <li>توافق على تنفيذ الطلبات بسرعة ودقة.</li>
                    <li>أنت مسؤول عن تقديم خدمة عملاء فعالة، بما في ذلك معالجة المرتجعات والشكاوى.</li>
                    <li>توافق على الامتثال لجميع القوانين المعمول بها فيما يتعلق ببيع منتجاتك.</li>
                </ul>

                <h5><strong>المساءلة:</strong></h5>
                <ul>
                    <li>قد تؤدي أي معلومات خاطئة أو مضللة في قوائم المنتجات إلى فرض عقوبات أو إزالتك من المنصة.</li>
                    <li>سيتم تقييم أداء متجرك من قبل العملاء، ويتطلب الحفاظ على تقييم عالٍ للاستمرار في البيع على المنصة.</li>
                    <li>في حالة وجود نزاعات، توافق على العمل مع المنصة لحلها بحسن نية.</li>
                </ul>
            '
        ]);
    }
}

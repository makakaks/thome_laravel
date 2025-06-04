<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Faq;
use App\Models\FaqTag;
use App\Models\FaqTranslation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    public $mockup  = [
        ['id' => 1, 'question' => 'เราแตกต่างจากที่อื่นอย่างไร', 'tags' => ['tag1', 'tag3'], 'answer' => 'เราเป็นผู้นำด้านการตรวจบ้านอันดับต้นๆ ของประเทศ และเป็นบริษัทตรวจบ้านเจ้าแรกและเจ้าเดียวที่ออกแบบและพัฒนาระบบ Web-Application ในการตรวจบ้านเป็นของตัวเอง จดทะเบียนเป็นบริษัทและได้รับอนุญาตประกอบวิชาชีพวิศวกรรมควบคุมในรูปแบบนิติบุคคล มีมาตรฐานสากล ISO29110-4-3 Service Delivery รองรับ'],
        ['id' => 2, 'question' => 'มีรับประกันตรวจสอบไหม', 'tags' => ['tag1', 'tag2'], 'answer' => 'การตรวจบ้านไม่สามารถรับประกันการตรวจสอบ การันตี หรือการประกันภัยใดๆ ที่เกี่ยวกับงานโครงสร้างและระบบของตัวบ้านได้ การตรวจสอบนี้ไม่ใช่การประกอบวิชาชีพทางวิศวกรรมหรือสถาปัตยกรรม ไม่สามารถพยากรณ์หรือคาดคะเนได้ถึงสภาพของบ้านในอนาคตภายหน้าในทุกสภาวะ เนื่องด้วยอาจมีปัจจัยแวดล้อมอื่นๆ ที่ไม่สามารถควบคุมได้'],
        ['id' => 3, 'question' => 'What payment methods are accepted?', 'tags' => ['tag1', 'tag4'], 'answer' => 'We accept credit cards, PayPal, and bank transfers.'],
        ['id' => 4, 'question' => 'How do I contact customer service?', 'tags' => ['tag1', 'tag2'], 'answer' => 'You can contact us via email or phone.'],
        ['id' => 5, 'question' => 'What is the return policy?', 'tags' => ['tag1', 'tag2'], 'answer' => 'You can return items within 30 days of purchase.'],
        ['id' => 6, 'question' => 'Do you offer international shipping?', 'tags' => ['tag1', 'tag2'], 'answer' => 'Yes, we ship to many countries worldwide.'],
        ['id' => 7, 'question' => 'How can I track my order?', 'tags' => ['tag1', 'tag2'], 'answer' => 'You will receive a tracking number via email once your order has shipped.'],
        ['id' => 8, 'question' => 'What should I do if I receive a damaged item?', 'tags' => ['tag1', 'tag2'], 'answer' => 'Please contact customer service for assistance.'],
        ['id' => 9, 'question' => 'Can I change or cancel my order?', 'tags' => ['tag1', 'tag2'], 'answer' => 'You can change or cancel your order within 24 hours of placing it.'],
        ['id' => 10, 'question' => 'Do you offer gift cards?', 'tags' => ['tag1', 'tag2'], 'answer' => 'Yes, we offer gift cards in various denominations.'],
        ['id' => 11, 'question' => 'How do I create an account?', 'tags' => ['tag1', 'tag2'], 'answer' => 'You can create an account by clicking on the "Sign Up" button on our website.'],
        ['id' => 12, 'question' => 'What if I forget my password?', 'tags' => ['tag1', 'tag2'], 'answer' => 'You can reset your password by clicking on the "Forgot Password" link on the login page.'],
    ];

    function get_all() {}

    function manage(Request $request)
    {
        return view('admin.faq.manage_faq', ['faqs' => $this->mockup]);
    }

    function create_store(Request $request)
    {
        try {
            $faq = Faq::create([]);

            foreach ($request['locale'] as $lang){
                $faq->translations()->create([
                    'locale' => $lang['language'],
                    'question' => $lang['question'],
                    'answer' => $lang['answer'],
                ]);
            }

            $faq->faqTags()->attach($request['tags']);
            return response()->json(['message' => 'FAQ created successfully.']);
        }
        catch (Exception $e) {
            return response()->json(['message' => 'Error creating FAQ: ' . $e->getMessage()], 500);
        }
        return redirect()->route('admin.faq.manage')->with('success', 'FAQ created successfully.');
    }

    function edit_store($id, Request $request)
    {
        return redirect()->route('admin.faq.manage')->with('success', 'FAQ updated successfully.');
    }

    function delete($id)
    {
        return redirect()->route('admin.faq.manage')->with('success', 'FAQ deleted successfully.');
    }

    function create_tag(Request $request)
    {
        try {
            $tag = FaqTag::create();

            foreach ($request->all() as $lang) {
                $tag->translations()->create([
                    'locale' => $lang['locale'],
                    'name' => $lang['name'],
                ]);
            }

            return response()->json(['message' => 'Tag created successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error creating tag: ' . $e->getMessage()], 500);
        }
    }
}

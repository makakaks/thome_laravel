<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleTranslation;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //

    function index()
    {
        $article = Article::where('id', 1)->first();
        $translation = $article->translation('en'); // ได้ title/content ตามภาษา
        return view('admin.index', ['translation' => $translation]);
    }

    function about(){
        $name = "Jojo";
        $age = 25;
        return view('admin.about', compact('name', 'age'));
    }

    function upload_image(Request $request){
        return Storage::putFile('public', $request->file('image'));
    }

    function article_manage() {
        $articles = [
            ['id' => 1, 'title' => 'สรุป!! จักรวาลการออกแบบสาย LAN ตามบ้าน', 'tags' => ['Roof']],
            ['id' => 2, 'title' => 'สิ่งที่ต้องรู้เกี่ยวกับ EV Charger', 'tags' => ['Electrical System']],
            ['id' => 3, 'title' => 'สิ่งที่ต้องรู้เกี่ยวกับ EV Charger 3', 'tags' => ['Electrical System']],
        ];

        return view('admin.article.manage_articles', ['articles' => $articles]);
    }

    function article_create() {
        return view('admin.article.create_article');
    }

    function article_create_store(Request $request) {

        return ;
    }

    function article_edit($id) {
        $article = [
            'id' => 1, 
            'title' => 'สรุป!! จักรวาลการออกแบบสาย LAN ตามบ้าน', 
            'title-en' => 'Summary!! The Universe of LAN Cable Design in the House',
            'tags' => ['Roof'],
            'content' => 'บลาบลา',
            'content-en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image' => 'https://via.placeholder.com/150',
            'image-en' => 'https://via.placeholder.com/150',
        ];
        
        return view('admin.article.create_article', ['id' => $id]);
    }




    
    function home_manage() {
        $houses = [
            ['id' => 1, 'name' => 'House 1', 'tag' => 'tag1'],
            ['id' => 2, 'name' => 'House 2', 'tag' => 'tag2'],
            ['id' => 3, 'name' => 'House 3', 'tag' => 'tag3'],
            ['id' => 4, 'name' => 'House 4', 'tag' => 'tag3'],
            ['id' => 5, 'name' => 'House 5', 'tag' => 'tag3'],
            ['id' => 6, 'name' => 'House 6', 'tag' => 'tag3'],
            ['id' => 7, 'name' => 'House 7', 'tag' => 'tag3'],
            ['id' => 8, 'name' => 'House 8', 'tag' => 'tag3'],
            ['id' => 9, 'name' => 'House 9', 'tag' => 'tag3'],
            ['id' => 10, 'name' => 'House 10', 'tag' => 'tag3'],
            ['id' => 11, 'name' => 'House 11', 'tag' => 'tag3'],
        ];
        return view('admin.review_home.manage_review_home', ['houses' => $houses]);
    }

    function home_create() {
        return view('admin.review_home.create_review_home');
    }

    function home_edit() {
        return view('admin.review_home.create_review_home');
    }

    
    function faq_manage() {
        $faqs = [
            ['id' => 1, 'question' => 'เราแตกต่างจากที่อื่นอย่างไร', 'tags' => ['tag1', 'tag3'],'answer' => 'เราเป็นผู้นำด้านการตรวจบ้านอันดับต้นๆ ของประเทศ และเป็นบริษัทตรวจบ้านเจ้าแรกและเจ้าเดียวที่ออกแบบและพัฒนาระบบ Web-Application ในการตรวจบ้านเป็นของตัวเอง จดทะเบียนเป็นบริษัทและได้รับอนุญาตประกอบวิชาชีพวิศวกรรมควบคุมในรูปแบบนิติบุคคล มีมาตรฐานสากล ISO29110-4-3 Service Delivery รองรับ'],
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
        return view('admin.faq.manage_faq', ['faqs' => $faqs]);
    }

    function change_password() {
        return view('admin.change_password');
    }
    
}

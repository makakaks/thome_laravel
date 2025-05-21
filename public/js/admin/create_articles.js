import ConfirmDialog from "/js/component/confirm_dialog.js"
import { createTagSelector } from '/js/component/tag_selector.js';

const confirmDialog = new ConfirmDialog();

const btnNext = document.getElementById('btn-next');
const btnPrev = document.getElementById('btn-prev');
const btnSubmit = document.getElementById('submit');


btnNext.addEventListener('click', function(){
    // console.log('click btn-next');
    // note-editable
    btnPrev.style.visibility = 'visible';
    btnSubmit.style.display = 'inline-block';
    this.style.display = 'none';

    document.querySelector('.eng .note-editable').innerHTML = $('#summernote1').summernote('code')
    
    // $('#summernote2').summernote('code') = $('#summernote1').summernote('code')
})

btnPrev.addEventListener('click', function(){

    confirmDialog.confirmAction('กลับไปใช่ไหม', 'ข้อมูลภาษาอังกฤษที่คุณเขียนจะหายไป', 'ไม่', 'กลับไป',
        '<button class="confirm-btn active confirm-yes" id="confirmYes" data-target="#carousel-example-generic" data-slide-to="0" > Yes </button>'
        , async () => {
            btnNext.style.display = 'inline-block';
            btnSubmit.style.display = 'none';
            this.style.visibility = 'hidden';
        });
})

btnSubmit.addEventListener('click', function(){
    confirmDialog.confirmAction('ยืนยันการส่งข้อมูล', 'คุณต้องการส่งข้อมูลหรือไม่', 'ไม่', 'ส่งข้อมูล',
        ''
    , async () => {
        btnNext.style.display = 'inline-block';
        btnSubmit.style.display = 'none';
        this.style.display = 'none';

        var markup = $('#summernote2').summernote('code');
        console.log(markup);
    });
})

function tag_selector() {
    const tagss = ["Art", "Science", "Design"];
    const tagSelector = createTagSelector('tag-selector-container', tagss);

    // Example: get selected tags after 5 seconds
    setTimeout(() => {
        console.log("Selected Tags:", tagSelector.getSelectedTags());
    }, 5000);
}

document.addEventListener('DOMContentLoaded', function() {
    tag_selector();
})


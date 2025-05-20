import ConfirmDialog from "/js/component/confirm_dialog.js"

const confirmDialog = new ConfirmDialog();

$('#preview').click(function () {
    var title, content, file;
    var previewContent = document.querySelector('.preview-modal-content')

    if (document.querySelector('.item.active').classList.contains('thai')) {
        title = document.querySelector('.articleName.thai').value;
        content = $('#summernote1').summernote('code');
        file = $('.articleCoverImage.thai')[0].files[0];
    }
    else {
        title = document.querySelector('.articleName.eng').value;
        content = $('#summernote2').summernote('code');
        file = $('.articleCoverImage.eng')[0].files[0];
    }

    previewContent.querySelector('.preview-title').innerText = title;

    if (file) {
        var reader = new FileReader();
        reader.onload = function (e) {
            var base64Image = e.target.result;
            previewContent.querySelector('.preview-cover-img').src = base64Image;
        };
        reader.readAsDataURL(file);
    }
    
    previewContent.querySelector('.preview-body').innerHTML = content;
    $('#previewModal').show();
});


// ฟังก์ชันสำหรับปิด Modal
document.querySelectorAll('.closePreview').forEach( btn => {
    btn.addEventListener('click', function () {
        $('#previewModal').hide();
    })
})

// function closePreview(){
//     $('#previewModal').hide();
// }


document.getElementById('btn-next').addEventListener('click', function(){
    // console.log('click btn-next');
    // note-editable
    document.getElementById('btn-prev').style.display = 'inline-block';
    document.getElementById('submit').style.display = 'inline-block';
    this.style.display = 'none';

    document.querySelector('.eng .note-editable').innerHTML = $('#summernote1').summernote('code')
    
    // $('#summernote2').summernote('code') = $('#summernote1').summernote('code')
})

document.getElementById('btn-prev').addEventListener('click', function(){

    confirmDialog.confirmAction('กลับไปใช่ไหม', 'ข้อมูลภาษาอังกฤษที่คุณเขียนจะหายไป', 'ไม่', 'กลับไป',
        '<button class="confirm-btn active confirm-yes" id="confirmYes" data-target="#carousel-example-generic" data-slide-to="0" > Yes </button>'
        , async () => {
            document.getElementById('btn-next').style.display = 'inline-block';
            document.getElementById('submit').style.display = 'none';
            this.style.display = 'none';
        });
})


document.getElementById('submit').addEventListener('click', function(){
    confirmDialog.confirmAction('ยืนยันการส่งข้อมูล', 'คุณต้องการส่งข้อมูลหรือไม่', 'ไม่', 'ส่งข้อมูล',
        ''
    , async () => {
        document.getElementById('btn-next').style.display = 'inline-block';
        document.getElementById('submit').style.display = 'none';
        this.style.display = 'none';

        var markup = $('#summernote2').summernote('code');
        console.log(markup);
    });
})


document.addEventListener('DOMContentLoaded', function() {
    // Available options
    let options = [
        'JavaScript', 'HTML', 'CSS', 'React', 'Vue', 'Angular',
        'Node.js', 'Python', 'Ruby', 'PHP', 'Java', 'C#',
        'TypeScript', 'Swift', 'Kotlin', 'Go'
    ];
    
    // DOM elements
    const tagContainer = document.getElementById('tagContainer');
    const tagInput = document.getElementById('tagInput');
    const optionsContainer = document.getElementById('optionsContainer');
    
    // Selected tags and custom tags tracking
    let selectedTags = [];
    let customTags = new Set();
    
    // Initialize options
    function initOptions() {
        optionsContainer.innerHTML = '';
        options.forEach(option => {
            const optionElement = document.createElement('div');
            optionElement.className = 'option';
            if (selectedTags.includes(option)) {
                optionElement.classList.add('selected');
            }
            optionElement.textContent = option;
            optionElement.addEventListener('click', () => selectOption(option));
            optionsContainer.appendChild(optionElement);
        });
    }
    
    // Filter options based on input
    function filterOptions(query) {
        optionsContainer.innerHTML = '';
        
        // If there's a query, show the "Create new tag" option first
        if (query && query.trim() !== '') {
            const exactMatch = options.find(option => 
                option.toLowerCase() === query.toLowerCase()
            );
            
            // Only show create option if it doesn't exactly match an existing option
            if (!exactMatch) {
                const createOption = document.createElement('div');
                createOption.className = 'create-new-option';
                createOption.innerHTML = `<span class="plus-icon">+</span> Create "${query}"`;
                createOption.addEventListener('click', () => createNewTag(query));
                optionsContainer.appendChild(createOption);
            }
        }
        
        const filteredOptions = options.filter(option => 
            option.toLowerCase().includes(query.toLowerCase())
        );
        
        if (filteredOptions.length === 0 && !query) {
            const noResult = document.createElement('div');
            noResult.className = 'option';
            noResult.textContent = 'No matching tags found';
            noResult.style.fontStyle = 'italic';
            noResult.style.color = '#9ca3af';
            optionsContainer.appendChild(noResult);
            return;
        }
        
        filteredOptions.forEach(option => {
            const optionElement = document.createElement('div');
            optionElement.className = 'option';
            if (selectedTags.includes(option)) {
                optionElement.classList.add('selected');
            }
            
            // If there's a query, highlight the matching part
            if (query) {
                const index = option.toLowerCase().indexOf(query.toLowerCase());
                if (index >= 0) {
                    const before = option.substring(0, index);
                    const match = option.substring(index, index + query.length);
                    const after = option.substring(index + query.length);
                    optionElement.innerHTML = `${before}<strong style="color: var(--primary-color)">${match}</strong>${after}`;
                } else {
                    optionElement.textContent = option;
                }
            } else {
                optionElement.textContent = option;
            }
            
            optionElement.addEventListener('click', () => selectOption(option));
            optionsContainer.appendChild(optionElement);
        });
    }
    
    // Create a new tag
    function createNewTag(tagName) {
        if (!tagName || tagName.trim() === '') return;
        
        tagName = tagName.trim();
        
        // Check if tag already exists in options
        const tagExists = options.some(option => 
            option.toLowerCase() === tagName.toLowerCase()
        );
        
        if (!tagExists) {
            // Add to options array
            options.push(tagName);
            // Mark as custom tag
            customTags.add(tagName);
        }
        
        // Select the tag
        selectOption(tagName);
    }
    
    // Select an option
    function selectOption(option) {
        if (!selectedTags.includes(option)) {
            selectedTags.push(option);
            renderTags();
            tagInput.value = '';
            filterOptions('');
            tagInput.focus();
        }
    }
    
    // Remove a tag
    function removeTag(tag) {
        selectedTags = selectedTags.filter(t => t !== tag);
        renderTags();
    }
    
    // Render selected tags
    function renderTags() {
        // Remove existing tags
        const existingTags = tagContainer.querySelectorAll('.tag');
        existingTags.forEach(tag => tag.remove());
        
        // Add tags before the input
        selectedTags.forEach(tag => {
            const tagElement = document.createElement('div');
            tagElement.className = 'tag';
            
            // Add special class for custom tags
            if (customTags.has(tag)) {
                tagElement.classList.add('new-tag');
            }
            
            tagElement.innerHTML = `
                ${tag}
                <span class="tag-remove">×</span>
            `;
            
            const removeBtn = tagElement.querySelector('.tag-remove');
            removeBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                removeTag(tag);
            });
            
            tagContainer.insertBefore(tagElement, tagInput);
        });
        
        // Update options to show selected state
        const optionElements = optionsContainer.querySelectorAll('.option');
        optionElements.forEach(optionEl => {
            const optionText = optionEl.textContent || optionEl.innerText;
            if (selectedTags.includes(optionText)) {
                optionEl.classList.add('selected');
            } else {
                optionEl.classList.remove('selected');
            }
        });
    }
    
    // Event listeners
    tagInput.addEventListener('focus', () => {
        optionsContainer.classList.add('show');
        filterOptions(tagInput.value);
    });
    
    tagInput.addEventListener('input', () => {
        filterOptions(tagInput.value);
        optionsContainer.classList.add('show');
    });
    
    // Handle keyboard navigation and tag creation
    tagInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            
            const inputValue = tagInput.value.trim();
            if (inputValue === '') return;
            
            // Check if there's a matching option
            const exactMatch = options.find(option => 
                option.toLowerCase() === inputValue.toLowerCase()
            );
            
            if (exactMatch) {
                // Select existing option
                selectOption(exactMatch);
            } else {
                // Create new tag
                createNewTag(inputValue);
            }
        } else if (e.key === 'Backspace' && tagInput.value === '' && selectedTags.length > 0) {
            removeTag(selectedTags[selectedTags.length - 1]);
        }
    });
    
    // Close options when clicking outside
    document.addEventListener('click', (e) => {
        if (!tagContainer.contains(e.target)) {
            optionsContainer.classList.remove('show');
        }
    });
    
    // Initialize
    initOptions();
});
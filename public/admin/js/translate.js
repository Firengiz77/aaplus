'use strict';

let langs = document.querySelectorAll('.lang a');
let translates = document.querySelectorAll('.translate .form-control');

translates.forEach(translate=>{
    translate.addEventListener('input',function(){
        let langVal = JSON.parse(translate.previousElementSibling.value);
        let currentLang = document.querySelector('.lang a.active').getAttribute('href');
        langVal[currentLang] = translate.value;
        translate.previousElementSibling.value = JSON.stringify(langVal);
    });
});

langs.forEach(lang=>{
    lang.addEventListener('click',function(e){
        e.preventDefault();
        let lan = lang.getAttribute('href');
        // let editor = JSON.parse(document.getElementById('editor').previousElementSibling.value);
        // CKEDITOR.instances.editor.setData(editor[lan]);
        clearInputs(lan);
        removeActives();
        lang.classList.add('active');
    });
});

const removeActives = ()=>{
    langs.forEach(lang=>{
        lang.classList.remove('active');
    })
}

const clearInputs = (lang) =>{
    translates.forEach(translate=>{
        translate.value = JSON.parse(translate.previousElementSibling.value)[lang];
    })
}
'use strict';

CKEDITOR.replace('editor');
CKEDITOR.instances.editor.on('change', function () {
    let value = this.getData();
    let langVal = JSON.parse(document.getElementById(this.name).previousElementSibling.value);
    let currentLang = document.querySelector('.lang a.active').getAttribute('href');
    langVal[currentLang] = value;
    document.getElementById(this.name).previousElementSibling.value = JSON.stringify(langVal); 

});
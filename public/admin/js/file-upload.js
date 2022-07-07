(function ($) {
  'use strict';
  $(function () {
    $('.file-upload-browse').on('click', function () {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function () {
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
  });

  let files = Array.from(document.querySelectorAll('.file-upload-default'));

  files.forEach(file => {
    file.addEventListener('change', function (e) {
      let images = e.target.files;
      let boxContainer = this.nextElementSibling.nextElementSibling;
      if (file.getAttribute('multiple') == null) {
        boxContainer.innerHTML = "";
      }
      for (let image of images) {
        let reader = new FileReader();
        reader.addEventListener('loadend', function (e) {
          let src = e.target.result;
          let box = document.createElement('div');
          let input = document.createElement('input');
          input.setAttribute('hidden', '');
          input.setAttribute('multiple', '');
          input.setAttribute('name', 'images[]');
          input.setAttribute('value', image.name);
          box.classList.add('image-box');
          let img = document.createElement('img');
          img.setAttribute('src', src);
          img.setAttribute('width', 150);
          box.append(img, input);
          boxContainer.append(box);
        })
        reader.readAsDataURL(image);
      }
    })
  })


})(jQuery);
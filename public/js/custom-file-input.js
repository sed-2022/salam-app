'use strict';

$(document).ready(function(e) {




    (function(document, window, index) {
        var inputs = document.querySelectorAll('.inputfile');
        Array.prototype.forEach.call(inputs, function(input) {
            var label = input.nextElementSibling,
                labelVal = label.innerHTML;

            input.addEventListener('change', function(e) {
                var fileName = '';
                if (this.files && this.files.length > 1)
                    fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
                else
                    fileName = e.target.value.split('\\').pop();

                if (fileName)
                    label.querySelector('span').innerHTML = fileName;
                else
                    label.innerHTML = labelVal;
            });

            // Firefox bug fix
            input.addEventListener('focus', function() { input.classList.add('has-focus'); });
            input.addEventListener('blur', function() { input.classList.remove('has-focus'); });
        });
    }(document, window, 0));


    $('input[type="file"]:not(#file-3D)').change(function(event) {
        var fileSize = this.files[0].size;
        fileSize = fileSize / 1024;
        console.log(fileSize);
        var maxAllowedSize = 3048;
        // check the file size if its greater than your requirement
        if (fileSize > maxAllowedSize) {
            alert('الرجاء تحميل صورة بحجم أصغر');
            //$(this).val("");
            $(this).next().find("span").text(" ");
            //console.log($(this).val);
        }


    });


    var count_cert = 0;
    var isFirstTime = true;
});
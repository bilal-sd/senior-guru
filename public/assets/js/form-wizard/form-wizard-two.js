(function($) {
    "use strict";
    function tapping() {  
        let allWells = $('.setup-content');
        allWells.hide();
        let target = window.location.href.split("#")[1];
        if(target=="" || target==null || target==undefined){
            target = "step-1";
        }
        $(document).find("#"+target).show();
    }
    var fomr_wizard_two = {
        init: function() {
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');
            allWells.hide();
            navListItems.click(function (e) {
                tapping();
                // var $target = $($(this).attr('href')),
                //     $item = $(this);
                // if (!$item.hasClass('disabled')) {
                //     navListItems.removeClass('btn btn-light').addClass('btn btn-primary');
                //     $item.addClass('btn btn-light');
                //     allWells.hide();
                //     $target.show();
                //     $target.find('input:eq(0)').focus();
                // }
            }), allNextBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;
                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            }), $('div.setup-panel div a.btn-primary').trigger('click');
        }
    };
    (function($) {
        "use strict";
        fomr_wizard_two.init();
    })(jQuery);
})(jQuery);
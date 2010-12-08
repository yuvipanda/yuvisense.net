
$(document).ready(function(){
        var translated = $("#translated");
        $("#go").click(function(){
            translated.fadeOut(400, function() {
            translated.html("<em>GibberWockifying...</em>");
            translated.fadeIn(400);});
                google.language.translate($("#text").val(), "en", "es", function(result) {
                    google.language.translate(result.translation, "es", "nl", function(result) {
                        google.language.translate(result.translation, "nl", "el", function(result) {
                            google.language.translate(result.translation, "el", "de", function(result) {
                                google.language.translate(result.translation, "de", "no", function(result) {
                                    google.language.translate(result.translation, "no", "ru", function(result) {
                                        google.language.translate(result.translation, "ru", "en", function(result) {
                                            translated.fadeOut(400, function() {
                                            translated.html(result.translation);
                                            translated.fadeIn(400); });
                                });
                                });
                                });
                                });
                            });
                    });
                });
        });
    });

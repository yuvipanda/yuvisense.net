
$(document).ready(function(){
        $("#go").click(function(){
                google.language.translate($("#text").val(), "en", "es", function(result) {
                    google.language.translate(result.translation, "es", "nl", function(result) {
                        google.language.translate(result.translation, "nl", "el", function(result) {
                            google.language.translate(result.translation, "el", "de", function(result) {
                                google.language.translate(result.translation, "de", "no", function(result) {
                                    google.language.translate(result.translation, "no", "en", function(result) {
                                $("#translated").text(result.translation);
                                });
                                });
                                });
                            });
                    });
                });
        });
    });


$(document).ready(function(){
        $("#go").click(function(){
                google.language.translate($("#text").val(), "en", "es", function(result) {
                    google.language.translate(result.translation, "es", "nl", function(result) {
                        google.language.translate(result.translation, "nl", "en", function(result) {
                            $("#translated").text(result.translation);
                            });
                    });
                });
        });
    });

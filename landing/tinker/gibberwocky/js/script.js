
$(document).ready(function(){
        $("#go").click(function(){
                google.language.translate($("#text").val(), "en", "es", function(result) {
                    google.language.translate(result.translation, "es", "fi", function(result) {
                        google.language.translate(result.translation, "fi", "en", function(result) {
                            $("#translated").text(result.translation);
                            });
                    });
                });
        });
    });
